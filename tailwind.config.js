import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            fontFamily: {
                nunito: ['Nunito', 'sans-serif'],
              },
              colors: {
                primary: '#425c77',
                dark: '#0f172a',
                secondary: '#4a6f8f',
              },
              fontWeight: {
                black: '900',
              },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
    ],
};
