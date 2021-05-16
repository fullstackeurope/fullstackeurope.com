const mix = require('laravel-mix');

mix
    .setPublicPath('../../public/2022')
    .js('js/app.js', 'app.js')
    .postCss('css/app.css', 'app.css', [
        require('tailwindcss'),
    ]);
