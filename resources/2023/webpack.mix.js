const mix = require('laravel-mix');

mix.setPublicPath('../../public/assets/2023')
    .js('js/app.js', 'app.js')
    .postCss('css/app.css', 'app.css', [require('tailwindcss')])
    .version();
