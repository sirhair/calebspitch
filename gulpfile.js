//based on https://travismaynard.com/writing/getting-started-with-gulp
// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var jshint = require('gulp-jshint');
// var compass = require('gulp-compass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// Lint Task
gulp.task('lint', function() {
    return gulp.src('components/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Compile Our Sass using Compass
// gulp.task('compass', function() {
//   gulp.src('./components/sass/*.scss')
//     .pipe(compass({
//       config_file: './config.rb',
//       css: 'stylesheets',
//       sass: 'sass'
//     }))
//     .pipe(gulp.dest('./'));
// });

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('components/js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('dist'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('components/js/*.js', ['lint', 'scripts']);
    // gulp.watch('components/sass/*.scss', ['compass']);
});

// Default Task
gulp.task('default', ['lint', 'scripts', 'watch']); // 'compass',
