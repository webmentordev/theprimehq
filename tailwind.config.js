import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                '1000px': {
                    'max': '1000px'
                },
                '830px': {
                    'max': '830px'
                },
                '700px': {
                    'max': '700px'
                },
                '530px': {
                    'max': '530px'
                }
            },
            colors: {
                "primary": "#75BC43",
                "dark": "#171717",
                "light": "#1D1D1D"
            }
        },
    },

    plugins: [forms],
};
