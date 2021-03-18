const mix = require('laravel-mix');

// Add near top of file
const ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;
const CopyWebpackPlugin = require( 'copy-webpack-plugin' );

mix.webpackConfig( {
    plugins: [
        new CopyWebpackPlugin([{
              from: 'resources/images/',
              to: 'images/min'
        }]),
        new ImageminPlugin( {
//            disable: process.env.NODE_ENV !== 'production', // Disable during development
            pngquant: {
                quality: '15-20',
            },
            test: /\.(jpe?g|png|gif|svg)$/i,
        } ),
    ],
} );

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
    .sass('resources/sass/app.scss', 'public/css')
    // .copy('resources/fonts', 'public/fonts', false)
    .sourceMaps()
    .version();
