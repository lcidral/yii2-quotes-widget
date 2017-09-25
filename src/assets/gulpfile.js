var gulp = require('gulp');

gulp.task('styles', function () {
    var concat = require('gulp-concat');
    var autoprefix = require('gulp-autoprefixer');
    var minifyCSS = require('gulp-minify-css');

    var files = [
        'css/src/quotes.css',
    ];

    gulp.src(files)
        .pipe(concat('quotes.min.css'))
        .pipe(autoprefix('last 2 versions'))
        .pipe(minifyCSS())
        .pipe(gulp.dest('css/dist'));

});
