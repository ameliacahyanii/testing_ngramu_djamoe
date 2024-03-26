import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*/*.[png,svg]',
        '*.{html,js}',

        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        container: {
            padding: {
                default: '15px',
            }
        },
        screens: {
            sm: '640px',
            md: '768px',
            lg: '960px',
            xl: '1200px',
        },
        fontFamily: {
            sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            playfair: ['Playfair'],
            // linux: ['Linux'],
        },

        backgroundImage: {
            'logo': 'url(./assets/img/logo.png)',
            'hero': 'url(./assets/img/product-1.png)',

        },
        extend: {
            colors: {
                primary: {
                    default: '#9E896A',
                    hover: '#BEB4A4',
                },
                secondary: '#FFF3DE',
                accent: {
                    default: '#D1BB84',
                    secondary: '#A88632',
                    hover: '#C3B288'
                },
                dark: '#35281E',
            },
        },
    },

    plugins: [
        require('flowbite/plugin')
    ],
};
