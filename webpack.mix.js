const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .sass("resources/sass/homePage.scss", "public/css")
    .sass("resources/sass/footer.scss", "public/css")
    .sass("resources/sass/aboutUs.scss", "public/css")
    .sass("resources/sass/contact.scss", "public/css")
    .sass("resources/sass/validation.scss", "public/css")
    .sass("resources/sass/blog.scss", "public/css")
    .sass("resources/sass/article.scss", "public/css")
    .sass("resources/sass/404.scss", "public/css")
    .sass("resources/sass/admin.scss", "public/css")
