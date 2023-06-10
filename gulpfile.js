var gulp = require('gulp'),
  connect = require('gulp-connect-php'),
  sass = require('gulp-sass')(require('sass')),
  autoprefixer = require('gulp-autoprefixer'),
  cleanCSS = require('gulp-clean-css'),
  rename = require('gulp-rename'),
  browserSync = require('browser-sync'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify-es').default;

gulp.task('connect-sync', function () {
  connect.server({
    base: 'app'
  }, function () {
    browserSync({
      proxy: '127.0.0.1:8000',
      // server: {
      //   baseDir: 'app'
      // },
    });
  });

  gulp.watch('**/*.php').on('change', function () {
    browserSync.reload();
  });
});


gulp.task('styles', function () {
  return gulp.src('app/sass/styles.sass')
    .pipe(sass({}, {allowEmpty: true}).on('error', sass.logError))
    .pipe(rename({suffix: '.min', prefix: ''}))
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 10 versions']
    }))
    .pipe(cleanCSS())
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.stream());
});


gulp.task('scripts', function () {
  return gulp.src('app/libs/**/*.js', {allowEmpty: true})
    .pipe(concat('libs.js'))
    .pipe(uglify())
    .pipe(gulp.dest('app/js/'))
    .pipe(browserSync.reload({stream: true}));
});

gulp.task('code', function () {
  return gulp.src('app/**/*.html')
    .pipe(browserSync.reload({stream: true}))
});

gulp.task('watch', function () {
  gulp.watch('app/sass/**/*.sass', gulp.parallel('styles'));
  gulp.watch(['app/js/common.js', 'app/libs/**/*.js'], gulp.parallel('scripts'));
  gulp.watch('app/**/*.html', gulp.parallel('code'));
});

gulp.task('default', gulp.parallel('styles', 'scripts', 'connect-sync', 'watch'));
