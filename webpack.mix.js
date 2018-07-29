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

mix.webpackConfig({
    devServer: {
        headers: {
            "Access-Control-Allow-Origin": "*",
        }
    }
});

mix.sass('resources/assets/sass/app.scss', 'public/build/css');
mix.js('resources/assets/js/app.js', 'public/build/js');
mix.js('resources/assets/js/about.js', 'public/build/js');

if (mix.config.inProduction) {
    mix.version();
}
