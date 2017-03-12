/**
 * Created by granevich on 06.05.2016.
 */
var gulp = require('gulp'),
    browserSync = require('browser-sync'),
    sass = require('gulp-sass'),

    autoprefixer = require('gulp-autoprefixer'),
    csscomb = require('gulp-csscomb');
    //     sass        = require('gulp-sass'),//переводит sass в css
    // browserSync = require('browser-sync'),//обновление браузера
    // concat  = require('gulp-concat'),//сборщик всех файлов
    // uglify  = require('gulp-uglifyjs'),//минифицирует скрипты
    // cssnano = require('gulp-cssnano'),//минифицирует css
    // rename = require('gulp-rename'),//переиминовывает файлы
    // del = require('del'),//удаляет файлы и директории
    // imagemin = require('gulp-imagemin'),//минифицирует картинки
    // pngquant = require('imagemin-pngquant'),//минифицирует png
    // cache = require('gulp-cache'),//кеширует файлы
    // autoprefixer = require('gulp-autoprefixer'),//вставляет префиксы
    // uncss = require('gulp-uncss'),//убирает неиспользующие стили
    // csscomb = require('gulp-csscomb');//комбинирует красиво стили






gulp.task('sass', function () {
    return gulp.src('sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('css'));
});

gulp.task('sass:watch', function () {
    gulp.watch('sass/*.scss', ['sass']);
});
