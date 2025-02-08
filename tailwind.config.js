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
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
        },
        colors:{
            white: {
                50: '#F9FAFB',  // Lebih terang
                100: '#F1F5F9', // Warna utama
                200: '#E2E8F0', // Lebih gelap
                300: '#CBD5E1', // Semakin gelap
            },
            blue: '#1D3557',
        }
    },    

    plugins: [
        forms,
        require('flowbite/plugin')
    ],
};
