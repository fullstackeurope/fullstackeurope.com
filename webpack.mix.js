const mix = require('laravel-mix');

// 2020
mix.js('resources/js/2020/app.js', 'public/js/2020')
    .postCss('resources/css/2020/app.css', 'public/css/2020', [
        require('tailwindcss'),
    ]);

mix.version();
