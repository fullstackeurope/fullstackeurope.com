const mix = require('laravel-mix');

// 2019
mix.js('resources/js/2019/app.js', 'public/js/2019')
    .postCss('resources/css/2019/app.css', 'public/css/2019', [
        require('tailwindcss'),
    ]);

// 2020
mix.js('resources/js/2020/app.js', 'public/js/2020')
    .postCss('resources/css/2020/app.css', 'public/css/2020', [
        require('tailwindcss'),
    ]);

// 2021
mix.js('resources/js/2021/app.js', 'public/js/2021')
    .postCss('resources/css/2021/app.css', 'public/css/2021', [
        require('tailwindcss'),
    ]);

mix.version();
