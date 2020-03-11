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
    .sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/homePage.scss', 'public/css');
mix.sass('resources/sass/footer.scss', 'public/css');
mix.sass('resources/sass/aboutUs.scss', 'public/css');
mix.sass('resources/sass/contact.scss', 'public/css');
mix.sass('resources/sass/validation.scss', 'public/css');
mix.sass('resources/sass/blog.scss', 'public/css');
mix.sass('resources/sass/article.scss', 'public/css');
