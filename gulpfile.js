// Initialize modules
// Importing specific gulp API functions lets us write them below as series() instead of gulp.series()
const { src, dest, watch, series, parallel } = require("gulp");

// Importing all the Gulp-related packages we want to use

const sourcemaps = require("gulp-sourcemaps");
const sass = require("gulp-sass");
const rename = require("gulp-rename");
const browserify = require("browserify");
const babelify = require("babelify");
const source = require("vinyl-source-stream");
const buffer = require("vinyl-buffer");

const uglify = require("gulp-uglify");
const autoprefixer = require("gulp-autoprefixer");


const browserSync = require("browser-sync").create();
const { stream, reload } = browserSync;

// files

const files = {
    // dist
    dist: "./",

    // scss css
    styleFile: "./assets/scss/style.scss",
    styleAllFiles: "./**/*.scss",
    cssDistPath: "./_dist/css/",

    // js
    js__FILES: ["app.js", "vendors/jQuery/jquery-3.4.1.min.js"],
    jsSrcPath: "./assets/js/",
    jsAllFiles: "./assets/js/**/*.js",
    jsDistPath: "./_dist/js/",

    // php
    phpAllFiles: "./**/*.php",

};

// Browser sync task
const browserSyncTask = () =>
    browserSync.init({
        proxy: "http://localhost:8888/groen",//enter proxy adress
        notify: true
    });
// Sass task

const scssTask = () => {
    return src(files.styleFile)
        .pipe(sourcemaps.init())
        .pipe(
            sass({
                errLogToConsole: true,
                outputStyle: "compressed"
            })
        )
        .on("error", console.error.bind(console))
        .pipe(
            autoprefixer({
                cascade: false
            })
        )
        .pipe(rename({ suffix: ".min" }))
        .pipe(sourcemaps.write("."))
        .pipe(dest(files.cssDistPath))
        .pipe(stream());
};

// JS task

const jsTask = d => {
    files.js__FILES.map(entry =>
        browserify({ entries: [files.jsSrcPath + entry] })
            .transform(babelify, {
                presets: ["@babel/preset-env"]
            })
            .bundle()
            .pipe(source(entry))
            .pipe(rename({ suffix: ".min" }))
            .pipe(buffer())
            .pipe(sourcemaps.init({ loadMaps: true }))
            .pipe(uglify())
            .pipe(sourcemaps.write("."))
            .pipe(dest(files.jsDistPath))
    );
    d();
};


// Watch task

const watchTask = () => {
    watch(files.styleAllFiles, scssTask);
    watch(files.jsAllFiles, jsTask).on("change", reload);
    watch(files.phpAllFiles).on("change", reload);

};

// Default task

exports.default = series(

    parallel(scssTask, jsTask),

    parallel(watchTask, browserSyncTask)
);
