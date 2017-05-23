const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js');
mix.styles([
    'resources/assets/css/show/bootstrap.min.css',
    'resources/assets/css/show/animate.css',
    'resources/assets/css/show/font-awesome.min.css',
    'resources/assets/css/show/owl.carousel.css',
    'resources/assets/css/show/slick.css',
    'resources/assets/css/show/style.css',
    'resources/assets/css/show/theme.css',
], 'public/css/all-albanian-show.css');
mix.styles([
    'resources/assets/css/show/bootstrap.min.css',
    'resources/assets/css/show/animate.css',
    'resources/assets/css/show/font-awesome.min.css',
    'resources/assets/css/show/owl.carousel.css',
    'resources/assets/css/show/slick.css',
    'resources/assets/css/show/style.css',
    'resources/assets/css/show/theme-sport.css',
], 'public/css/all-albanian-sport.css');
