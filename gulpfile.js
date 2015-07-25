//based on https://travismaynard.com/writing/getting-started-with-gulp
// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var jshint = require('gulp-jshint');
var compass = require('gulp-compass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();
var phpLoad;
var autoprefixer = require('gulp-autoprefixer');

// Lint Task
gulp.task('lint', function() {
    return gulp.src('components/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Compile Our Sass using Compass
gulp.task('compass', function() {
  gulp.src('components/sass/*.scss')
  .pipe(compass({
    config_file: 'config.rb',
    style: 'expanded',
     // One of: nested, expanded, compact, or compressed.
    css: './',
    sass: 'components/sass',
  }))
  .pipe(autoprefixer({
    browsers: ['last 2 versions'],
    cascade: false
  }))
  .pipe(gulp.dest('./'))
  .pipe(browserSync.stream());

});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('components/js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('dist'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream());
});

//start browsersync
// gulp.task('browser-sync', function() {

// });


gulp.task('phpLoad', function(){
  return gulp.src('**/*.php')
        .pipe(browserSync.stream());
});



// Watch Files For Changes
gulp.task('watch', function() {
     browserSync.init({
        proxy: "localhost:8888"
        //if you are having problems with gulp and running Mamp instead of Xamp on Mac localhost:8888 instead of localhost/capstone might work
    });
    gulp.watch('components/js/*.js', ['lint', 'scripts']);
    gulp.watch('components/sass/*.scss', ['compass']);
    gulp.watch('**/*.php', ['phpLoad']);

});

// Default Task
gulp.task('default', ['lint', 'compass', 'scripts', 'watch']); //
