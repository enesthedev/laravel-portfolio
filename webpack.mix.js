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

mix.disableSuccessNotifications()
    .options({
        processCssUrls: false
    })
    .js('resources/js/script.js', 'public/scripts')
    .postCss('resources/css/tailwind.css', 'public/styles/tailwind.css', [
        require('tailwindcss')
    ])
    .css('resources/css/swal2.css', 'public/styles/swal2.css')
    .copyDirectory('resources/assets', 'public/assets');

if (mix.inProduction()) {
    mix.version();
}
