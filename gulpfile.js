var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    // mix.sass('app.scss');

    mix.styles([
        'user/avatar.css',
        'user/common.css',
        'user/dialog.css',
        'user/dashboard.css',
        'user/document.css'
    ], 'public/css/user/all.css');

    mix.styles([
        'user/login.css'
    ], 'public/css/user/login.css');

    mix.scripts('user/**.js', 'public/js/user');

    mix.browserSync({
        proxy: 'localhost:8020/user'
    });
});

// var paths = {
//     js: ['public/js/**/!(*.min).js'],
//     css: ['public/css/**/!(*.min).css']
// };

// var gulp = require('gulp');
// var minifycss = require('gulp-minify-css');
// var rename = require('gulp-rename');
// var uglify = require('gulp-uglify');
//
// gulp.task('minifyjs', function () {
//     gulp.src(paths.js)
//         .pipe(uglify())
//         .pipe(rename({suffix: '.min'}))
//         .pipe(gulp.dest('public/js'));
// });
//
// gulp.task('minifycss', function () {
//     gulp.src(paths.css)
//         .pipe(minifycss({
//             advanced: false,
//             compatibility: 'ie8',
//             keepBreaks: true
//         }))
//         .pipe(rename({suffix: '.min'}))
//         .pipe(gulp.dest('public/css'));
// });
//
// gulp.task('watch', function () {
//     gulp.watch(paths.js, ['minifyjs']);
//     gulp.watch(paths.css, ['minifycss']);
// });
//
// gulp.task('default', ['minifycss', 'minifyjs', 'watch']);
