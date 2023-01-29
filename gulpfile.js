var gulp = require("gulp");
var browserSync = require("browser-sync").create();
var reload = browserSync.reload;
var connect = require("gulp-connect-php");
var sass = require("gulp-sass");

gulp.task("watch", function () {
  gulp.watch("./**/*.html.twig").on("change", browserSync.reload);
  connect.server({}, function () {
    browserSync.init({
      proxy: "http://localhost",
    });
  });
});
