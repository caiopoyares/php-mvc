const gulp = require("gulp");
const sass = require("gulp-sass");

gulp.task("sass", compileSass);

gulp.task("watch", function() {
  gulp.watch("src/sass/*.scss", compileSass);
});

function compileSass() {
  return gulp
    .src("src/sass/*.scss")
    .pipe(sass({ outputStyle: "compressed" }))
    .pipe(gulp.dest("assets/css"));
}
