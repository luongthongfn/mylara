var gulp = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    sass = require('gulp-ruby-sass'),
    sass1 = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    browserSync = require('browser-sync').create();

var DEST = 'build/',
    mapsFolder = '../maps',
    path = {
        scss: {
            src: 'src/scss/custom.scss',
            dest: ''
        }
    };

gulp.task('scripts', function() {
    return gulp.src([
        'src/js/helpers/*.js',
        'src/js/*.js',
      ])
      .pipe(sourcemaps.init())
      .pipe(concat('custom.js'))
      .pipe(gulp.dest(DEST+'/js'))
      .pipe(rename({suffix: '.min'}))
      .pipe(uglify())
      .pipe(sourcemaps.write(mapsFolder))
      .pipe(gulp.dest(DEST+'/js'))
      .pipe(browserSync.stream());
});

// TODO: Maybe we can simplify how sass compile the minify and unminify version
var compileSASS = function (filename, options) {
  return sass('src/scss/*.scss', options)
        // .pipe(sourcemaps.init())
        .pipe(autoprefixer('last 2 versions', '> 5%'))
        .pipe(concat(filename))
        // .pipe(sourcemaps.write(mapsFolder))
        .pipe(gulp.dest(DEST+'/css'))
        .pipe(browserSync.stream());
};

gulp.task('scss', function () {
    return gulp.src(path.scss.src)
        // .pipe(bulkSass())
        .pipe(sourcemaps.init())
        .pipe(sass1({
            outputStyle: 'compressed'
        }).on('error', sass1.logError))
        .pipe(autoprefixer({
            browsers: ['last 5 version', '> 5%']
        }))
        .pipe(sourcemaps.write(mapsFolder))
        // .pipe(dest(path.scss.dest))
        .pipe(gulp.dest(DEST+'/css'))
        .pipe(browserSync.reload({
            stream: true
        }));
})

gulp.task('sass', function() {
    return compileSASS('custom.css', {});
});

gulp.task('sass-minify', function() {
    return compileSASS('custom.min.css', {style: 'compressed'});
});

gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: './'
        },
        startPath: './production/index.html'
    });
});

gulp.task('watch', function() {
  // Watch .html files
  gulp.watch('production/*.html', browserSync.reload);
  // Watch .js files
  gulp.watch('src/js/*.js', ['scripts']);
  // Watch .scss files
  gulp.watch('src/scss/*.scss', ['sass', 'sass-minify']);
});
gulp.task('build', ['scss', 'scripts']);

// Default Task
gulp.task('default', ['browser-sync', 'watch']);
