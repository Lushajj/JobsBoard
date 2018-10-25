let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
mix.copy('resources/assets/css/animate.css', 'public/css/style.css');
mix.copy('resources/assets/css/bootstrap.css', 'public/css/style.css');
mix.copy('resources/assets/css/font-awesome.css', 'public/css/style.css');
mix.copy('resources/assets/css/fonts.css', 'public/css/style.css');
mix.copy('resources/assets/css/owl.carousel.css', 'public/css/style.css');
