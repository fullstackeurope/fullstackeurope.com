module.exports = {
    purge: ['./views/**/*.php', './js/**/*.js'],
    theme: {
        extend: {
            colors: {
                primary: '#6859ea',
                secondary: '#6acbe0',
                light: '#e5e3fe',
                background: '#20195B',
                'background-secondary': '#2D256F',

                'theme-grey-light': '#E9EDF6',
            },
            fontFamily: {
                noway: ['noway', 'Helvetica', 'Arial', 'sans-serif'],
                'noway-medium': ['nowaymedium', 'Helvetica', 'Arial', 'sans-serif'],
            },
            boxShadow: {
                'lg-blue': '0 5px 15px 0 rgba(104, 89, 234, .1)',
            },
            spacing: {
                72: '18rem',
                80: '20rem',
                96: '24rem',
                128: '32rem',
            },
        },
        linearGradientColors: {
            primary: ['#6acbe0 0%', '#6859ea 50%', '#6acbe0 100%'],
            secondary: ['#6acbe0 0%', '#6859ea 100%'],
        },
    },
    variants: {},
    plugins: [require('tailwindcss-gradients')],
};
