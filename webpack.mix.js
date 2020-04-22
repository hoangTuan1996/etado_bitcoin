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

//mix css
mix.styles([
    'public/assets/plugins/bootstrap/css/bootstrap.min.css',
    'public/assets/css/style.css',
    'public/assets/css-dark/dark-style.css',
    'public/assets/plugins/sidemenu/sidemenu.css',
    'public/assets/plugins/charts-c3/c3-chart.css',
    'public/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css',
    'public/assets/plugins/sidebar/sidebar.css',
    'public/assets/colors/color1.css',
    'public//assets/plugins/sweet-alert/sweetalert.css',
    'public/assets/css/skin-modes.css',
    'public/assets/plugins/fileuploads/css/fileupload.css',
    'public/assets/plugins/bootstrap-daterangepicker/daterangepicker.css',
    'public/assets/plugins/time-picker/jquery.timepicker.css',
    'public/assets/plugins/date-picker/spectrum.css',
    'public/assets/plugins/multipleselect/multiple-select.css',
    'public/assets/plugins/switchery/dist/switchery.min.css',
], 'public/css/all.css');

//mix js
mix.js([
    'public/assets/plugins/bootstrap/js/popper.min.js',
    'public/assets/js/jquery.sparkline.min.js',
    'public/assets/js/circle-progress.min.js',
    'public/assets/plugins/sweet-alert/sweetalert.min.js',
    'public/assets/js/sweet-alert.js',
    'public/assets/plugins/notify/js/sample.js',
    'public/assets/plugins/select2/select2.full.min.js',
    'public/assets/plugins/time-picker/jquery.timepicker.js',
    "public/assets/plugins/date-picker/spectrum.js",
    "public/assets/plugins/date-picker/jquery-ui.js",
    "public/assets/plugins/input-mask/jquery.maskedinput.js",
    "public/assets/plugins/multipleselect/multiple-select.js",
    "public/assets/plugins/multipleselect/multi-select.js",
    "public/assets/plugins/time-picker/toggles.min.js"
], 'public/js/all.js');
