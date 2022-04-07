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

mix
.styles(
    [
      'resources/views/site/css/app.css',
    ] ,'public/site/css/app.css'
)
.styles(
    [
      'resources/views/curriculum/css/curriculum.css',
    ] ,'public/site/css/quemsomos.css'
)
.styles(
    [
      'resources/views/juridico/css/menus.css',
    ] ,'public/site/css/menu.css'
)
.styles(
    [
      'resources/views/site/css/bootstrap.min.css',
      'resources/views/site/css/jquery.dataTables.min.css',
    ] ,'public/site/css/tabela.css'
)
.scripts([
      'resources/views/site/js/jquery-3.3.1.slim.min.js',
      'resources/views/site/js/jquery.js',
      'resources/views/site/js/bootstrap.js',
      'resources/views/site/js/jquery.dataTables.min.js',
    ],'public/site/js/script.js'
)
.version();
