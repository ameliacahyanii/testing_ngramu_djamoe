import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*/*.[png,svg]'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                linux: ['Linux'],
            },

            backgroundImage: theme => ({
                'logo': "url('./assets/img/logo.png')",
            }),

            colors: {
                'primary': '#9E896A',
                'secondary': '#FFF3DE',
                'secondary-text': '#AFA08B',
                'text-option': '#A88632',
                'slider-btn': '#D1BB84',
            }
        },
    },

    plugins: [forms],
};
