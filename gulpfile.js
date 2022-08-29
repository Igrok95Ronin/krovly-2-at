const gulp = require('gulp');/* галп npm i -D gulp */
const sass = require('gulp-sass')(require('sass'));/*припроцессор sass/scss  npm install sass gulp-sass --save-dev */
const autoprefixer = require('gulp-autoprefixer');/* web префиксы для старых браузеров npm i gulp-autoprefixer -D */
const browserSync = require('browser-sync').create();/* обновляет браузер npm i browser-sync -D */
const sourcemaps = require('gulp-sourcemaps'); /* карта npm i gulp-sourcemaps -D */
const cleanCss = require('gulp-clean-css'); /* минификация css npm i gulp-clean-css -D */
const concat = require('gulp-concat'); /* объединяет несколько файлов в один и меняет название npm i gulp-concat -D */
const imagemin = require('gulp-imagemin'); /* минификация изображений npm i gulp-imagemin@7.1.0 -D */
const newer = require('gulp-newer'); /* позволяет отслеживать новые файлы npm i gulp-newer -D */
const uglify = require('gulp-uglify'); /* минификация js npm i gulp-uglify -D */
const babel = require('gulp-babel') /* Переобразует js в старый стандарт npm i gulp-babel -D */


function styles() {/* работа со стилями */
    return gulp.src('app/scss/style.scss')/* откуда */
    .pipe(sourcemaps.init())/* начала карты */
    .pipe(sass().on('error', sass.logError))/* scss в css */
    .pipe(autoprefixer({
        overrideBrowserslist: ['last 10 version'],/* префиксы для старых версий последние 10 версий браузеров */
        grid: true
    }))
    .pipe(cleanCss({compatibility: 'ie8'}))/* минификация css */
    .pipe(concat('style.min.css'))/* меняем название на указанное */
    .pipe(sourcemaps.write())/* конец карты */
    .pipe(browserSync.stream())/* обновление бравзера */
    .pipe(gulp.dest('assets/css/'))/* куда */
}

function scripts() {
    return gulp.src('app/js/*.js')
    .pipe(sourcemaps.init())/* начала карты */
    .pipe(babel({
        presets: ['@babel/env']/* для поддержки старых версий js этот пресет необходимо отдельно
        установить npm i -D @babel/preset-env */
    }))
    .pipe(concat('main.min.js'))
    .pipe(uglify())/* минификация js */
    .pipe(sourcemaps.write())/* конец карты */
    .pipe(browserSync.stream())/* обновление бравзера */
    .pipe(gulp.dest('assets/js/'))
}

function img() {
    return gulp.src('app/img/*')
    .pipe(newer('assets/img'))/* путь назначения  отслеживание новых изображений*/
    .pipe(imagemin(/* минификация */
    [
        imagemin.gifsicle({interlaced: true}),
        imagemin.mozjpeg({quality: 75, progressive: true}),
        imagemin.optipng({optimizationLevel: 5}),
        imagemin.svgo({
            plugins: [
                {removeViewBox: true},
                {cleanupIDs: false}
            ]
        })
    ]
))
    .pipe(browserSync.stream())/* обновление бразуреа */
    .pipe(gulp.dest('assets/img'))/* куда */
}

function watch() {/* отслеживает изминения */
    browserSync.init({/* инициализация browserSync */
    server: {
        baseDir: "./"/* дириктория где находиться проект */
    }
    })

    gulp.watch(['index.html']).on('change', browserSync.reload);/* обновляет браузер при изминении index.html */
    gulp.watch('app/scss/', styles);/* если есть ихминения в каталоге то выполняется функция styles */
    gulp.watch('app/js/', scripts);/* если есть ихминения в каталоге то выполняется функция scripts */
    gulp.watch('app/img/', img);/* если есть ихминения в каталоге то выполняется функция img */
}


const build = gulp.parallel(styles, scripts, img, watch);/* выполняет несколько функций одновременно */

exports.watch = watch;/* вызов функции */
exports.styles = styles;
exports.scripts = scripts;
exports.img = img;
exports.default = build;/* будет запускаться по команде gulp */