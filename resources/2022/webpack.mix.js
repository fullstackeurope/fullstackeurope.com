const mix = require('laravel-mix');

mix.setPublicPath('../../public/assets/2022')
    .js('js/app.js', 'app.js')
    .postCss('css/app.css', 'app.css', [require('tailwindcss')])
    .version();
