const gulp = require ('gulp');
const cleanCSS = require ('gulp-clean-css');
const cleanJS = require ('gulp-jsmin');
const htmlmin = require ('gulp-htmlmin')
const tinify = require('gulp-tinify');

/*Сожми и перениси CSS файлы*/
gulp.task('minify-css', () => {
  return gulp.src('src/css/*.css')
  .pipe(cleanCSS())
  .pipe(gulp.dest('build/css/'))
});
/*Перенеси сжатые JS файлы*/
gulp.task('move-js', () => {
  return gulp.src('src/js/*.min.js')
  .pipe(gulp.dest('build/js'))
});
/*Сожми JS файлы и перенеси в папку build*/
gulp.task('minify-js', () => {
  return gulp.src(['src/js/*.js','!src/js/*.min.js'])
  .pipe(cleanJS())
  .pipe(gulp.dest('build/js'))
});

/*Сожми HTML файлы и перенеси в папку build*/
gulp.task('htmlmin', () => {
  return gulp.src('src/*.html')
  .pipe(htmlmin({ collapseWhitespace: true }))
  .pipe(gulp.dest('build/'))
});

/*Сожми изображения и перемеси в их в build*/
gulp.task('imagemin', () => {
  return gulp.src('src/img/**/*.*')
  .pipe(tinify('bD0xpD9dJbxNhwcj95lCdrM0zfbWQXqL'))
  .pipe(gulp.dest('build/img'))
});


gulp.task('build', gulp.series('minify-css', 'move-js', 'minify-js', 'htmlmin'));


