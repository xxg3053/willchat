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

    mix.scripts([
        'user/base.js'
    ], 'public/js/user/all.js');

    mix.scripts('user/login.js', 'public/js/user/login.js');

    mix.browserSync({
        proxy: 'localhost:8020/user'
    });
});

