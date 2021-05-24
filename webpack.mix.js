const mix = require('laravel-mix');

mix
    .sass('./resources/views/panel/assets/scss/bootstrap.scss', './public/panel/assets/css/bootstrap.css')
    .sass('./resources/views/panel/assets/scss/app.scss', './public/panel/assets/css/app.css')
    .sass('./resources/views/panel/assets/scss/login.scss', './public/panel/assets/css/login.css')
    .sass('./resources/views/panel/assets/scss/dashboard.scss', './public/panel/assets/css/dashboard.css')

    .copyDirectory('resources/views/panel/assets/image', 'public/panel/assets/images')
    .copyDirectory('node_modules/bootstrap-icons', 'public/panel/assets/bootstrap-icons')

    .scripts('./node_modules/jquery/dist/jquery.js', './public/panel/assets/js/jquery.js')
    .scripts('./node_modules/bootstrap/dist/js/bootstrap.js', './public/panel/assets/js/bootstrap.js')
    .scripts('./resources/views/panel/assets/js/login.js', './public/panel/assets/js/login.js')
    .scripts('./resources/views/panel/assets/js/panel.js', './public/panel/assets/js/panel.js')

    .options({
        processCssUrls: false
    })

    .version();
