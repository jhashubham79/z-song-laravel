const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const uglify = require('gulp-uglify');


const buildStyles = () => gulp.src('./scss/**/*.scss').pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError)).pipe(gulp.dest('./css'));


const compress = () => gulp.src('./js-raw/**/*.js').pipe(uglify()).pipe(gulp.dest('./js'));


const watch = () => {
    gulp.watch('./scss/**/*.scss', buildStyles);
    gulp.watch('./js-raw/**/*.js', compress);
  }

//exports.buildStyles = buildStyles;
exports.watch = watch;