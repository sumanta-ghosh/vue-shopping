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

mix
        .copy('./resources/assets/obaju/css/fonts', './public/css/fonts')
        .copy('./resources/assets/obaju/img', './public/img')
        .copy('./resources/assets/obaju/js/respond.min.js', './public/js/respond.min.js')
        .styles([
            'resources/assets/obaju/css/font-awesome.css',
            'resources/assets/obaju/css/bootstrap.css',
            'resources/assets/obaju/css/animate.min.css',
            'resources/assets/obaju/css/owl.carousel.css',
            'resources/assets/obaju/css/owl.theme.css',
            'resources/assets/obaju/css/style.default.css',
            'resources/assets/obaju/css/custom.css',
            'resources/assets/obaju/css/respond.min.js',
            'resources/assets/obaju/css/respond.min.js'
        ], 'public/css/theme.css', './')
        .scripts([
            'resources/assets/obaju/js/jquery-1.11.0.min.js',
            'resources/assets/obaju/js/bootstrap.min.js',
            'resources/assets/obaju/js/jquery.cookie.js',
            'resources/assets/obaju/js/waypoints.min.js',
            'resources/assets/obaju/js/modernizr.js',
            'resources/assets/obaju/js/bootstrap-hover-dropdown.js',
            'resources/assets/obaju/js/owl.carousel.min.js',
            'resources/assets/obaju/js/front.js'
        ], 'public/js/theme.js', './').version();
mix.js('resources/assets/js/app.js', 'public/js').version()
        .sass('resources/assets/sass/app.scss', 'public/css');
