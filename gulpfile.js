var gulp = require('gulp'),
    jscs = require('gulp-jscs'),
    concat = require('gulp-concat'),
    plumber = require('gulp-plumber');

gulp.task('scripts', function () {
    return gulp.src(['src/**/*.js'])
        .pipe(plumber())
        .pipe(jscs())
        .pipe(concat('dest.js'))
        .pipe(gulp.dest('build'))
});

gulp.task('watch', function () {
   gulp.watch('src/**', ['scripts'])
});

gulp.task('default', ['watch']);