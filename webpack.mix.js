let mix = require('laravel-mix');
let build = require('./tasks/build.js');
let tailwindcss = require('tailwindcss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/*.php', 'source/**/*.php', 'source/*.blade.php', 'source/**/*.blade.php', 'source/**/*.scss', '!source/**/_tmp/*', './config*.php', './tailwind.js']),
    ]
});

mix.js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .copyDirectory('node_modules/chocolat/dist/images', 'source/assets/build/images')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.js') ],
    })
    .version();
