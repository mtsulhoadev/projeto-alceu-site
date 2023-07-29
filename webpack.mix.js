const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.copy('resources/js', 'public/js');
 mix.copy('resources/css', 'public/css');
 mix.copy('resources/lib', 'public/lib');
 mix.copy('resources/img', 'public/img');
 mix.copy('resources/scss', 'public/scss');
