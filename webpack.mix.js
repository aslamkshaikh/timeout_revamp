const mix = require('laravel-mix');

mix
//.copy('node_modules/slick-carousel', './libs/slick-carousel/')
//.copy('node_modules/select2', './libs/select2/')
    .webpackConfig({
        devtool: 'inline-source-map'
    })
    .sass('./libs/style.scss', 'css/')
    .js('./scripts/site.js', 'js/')
    .scripts([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'node_modules/slick-carousel/slick/slick.min.js'
    ], 'js/bundle.js')
    .sourceMaps()
    .options({
        processCssUrls: false,
        autoprefixer: false
    });