var gulp = require('gulp'),
    less = require('gulp-less'),
    sourcemaps = require('gulp-sourcemaps'),
    cleanCSS = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    plumber = require('gulp-plumber'),
    gutil = require('gulp-util'),
    del = require('del'),
    gulpMultiProcess = require('gulp-multi-process'),
    site = 'btsbr',
    codigoCss = 'less/',
    codigoScript = 'js/',
    paths = {
        less: [
            codigoCss + '*.less'
        ],
        js: [
            codigoScript + '*.js'
        ]
    };


function styles() {
    return gulp.src(codigoCss + site + '.less')
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(less())
        .pipe(cleanCSS())
        // .on('error', function (err) {
        //     gutil.log(err);
        //     this.emit('end');
        // })
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('css'));
}

function clean() {
    // You can use multiple globbing patterns as you would with `gulp.src`,
    // for example if you are using del 2.0 or above, return its promise
    return del([ 'css/btsbr.css' ]);
}

function scripts() {
    return gulp.src(paths.js)
        .pipe(plumber())
        .pipe(concat(site + '.js'))
        //.pipe(uglify())
        .pipe(rename(site + '.min.js'))
        .pipe(gulp.dest(codigoScript));
}

function watch() {
    //gulp.watch(paths.js, scripts);
    gulp.watch(paths.less, styles);
    gulp.watch(codigoCss+'config/*.less', styles);
    gulp.watch(codigoCss+'mobile/portrait/*.less', styles);
    gulp.watch(codigoCss+'mobile/landscape/*.less', styles);
    gulp.watch(codigoCss+'tablet/portrait/*.less', styles);
    gulp.watch(codigoCss+'tablet/landscape/*.less', styles);
    gulp.watch(codigoCss+'desktop/*.less', styles);
}

/*
 * You can use CommonJS `exports` module notation to declare tasks
 */
exports.clean = clean;
exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;

/*
 * Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
 */
var build = gulp.series(clean, gulp.parallel(styles, scripts, watch));

/*
 * You can still use `gulp.task` to expose tasks
 */
gulp.task('build', build);

/*
 * Define default task that can be called by just running `gulp` from cli
 */
gulp.task('default', build);