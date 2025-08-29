import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
              ...defaultTheme.colors,
              primary: '#242943', // Főszín 1 sötétkék
              secondary: '#50ADC9', // Főszín 2 világoskék
              accent: '#D9D9D9', // Kiegészítő szín szürke


            },
            fontFamily: {
              sans: ['Montserrat', 'sans-serif'], // Hivatalos betűtípus
            },
          },
    },
    plugins: [],
};
