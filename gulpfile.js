// Initialize modules
const { src, dest, watch, series, parallel } = require("gulp");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const concat = require("gulp-concat");
const postcss = require("gulp-postcss");
const replace = require("gulp-replace");
const sass = require("gulp-sass");
const sourcemaps = require("gulp-sourcemaps");
const uglify = require("gulp-uglify");

// File path variable
const files = {
  sassPath: "src/sass/**/*.scss",
  jsPath: "src/js/**/*.js"
};
// Sass task
function stylesTask() {
  return src(files.sassPath)
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(sourcemaps.write("."))
    .pipe(dest("dist"));
}
// JS task
function jsTask() {
  return src(files.jsPath)
    .pipe(concat("all.js"))
    .pipe(uglify())
    .pipe(dest("dist"));
}
// Watch task
function watchTask() {
  watch([files.sassPath, files.jsPath], parallel(stylesTask, jsTask));
}
// Default task
exports.default = series(parallel(stylesTask, jsTask), watchTask);
