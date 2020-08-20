const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/script.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/style.scss', 'public/css')
    .copy('node_modules/jquery-confirm/css/jquery-confirm.css', 'public/css')
    .copy('node_modules/jquery-confirm/js/jquery-confirm.js', 'public/js')
    .copy('node_modules/slick-carousel/slick/slick.min.js', 'public/js')
    .copy('node_modules/slick-carousel/slick/slick.css', 'public/css')
    .copy('node_modules/slick-carousel/slick/slick-theme.css', 'public/css')
    .copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts');
