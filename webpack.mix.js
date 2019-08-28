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

mix.autoload({
    // jquery: ['$', 'window.jQuery', 'jQuery'],
    vue: ['Vue', 'window.Vue']
});

mix.js('resources/assets/js/app.js', 'public/assets/js')
   .sass('resources/assets/sass/app.scss', 'public/assets/css')
   .options({
       processCssUrls: false
   })
   // .extract(['vue', 'lodash', 'bootstrap']);

if (mix.inProduction()) {
    mix.version()
       .options({
        uglify: {
            uglifyOptions: {
                compress: {
                    drop_console: true,
                },
            },
        },
    });
}
