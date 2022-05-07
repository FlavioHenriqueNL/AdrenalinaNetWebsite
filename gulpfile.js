const
   gulp = require('gulp'),
   gulp_sass = require('gulp-sass'),
   autoprefixer = require('gulp-autoprefixer'),
   browser_sync = require('browser-sync').create();

function compilarSass() {
   return gulp.src('assets/css/sass/**/*.scss')
      .pipe(gulp_sass({
         outputStyle: 'compressed'
      })) //Nome da constante dada ao requerir o gulp-sass
      .pipe(autoprefixer({
         browsers: ['last 2 versions'],
         cascade: false
      })) //Nome da constante dada ao requerir o gulp-autoprefixer
      .pipe(gulp.dest('assets/css/'))
      .pipe(browser_sync.stream())
      ;
}

function watch() {
   gulp.watch('assets/css/sass/**/*.scss', compilarSass);
   gulp.watch(['*.html', '*.php']).on('change', browser_sync.reload);
}

function browser() {
   browser_sync.init({
      // server: {
      //    baseDir: "./"
      // }
      proxy: 'http://adrenalinanet.local'
   });
}
gulp.task('sass', compilarSass);
gulp.task('assistir', watch);
gulp.task('tela', browser);
gulp.task('default', gulp.parallel('sass', 'assistir', 'tela'));

