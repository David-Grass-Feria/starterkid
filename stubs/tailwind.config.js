require('dotenv').config();
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './packages/grass-feria/starterkid/**/*.blade.php',
        './packages/grass-feria/starterkid-frontend/**/*.blade.php',
        './packages/grass-feria/starterkid-service/**/*.blade.php',
        './plugins/grass-feria/starterkid-tester/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: (process.env.DEFAULT_FONT_FAMILY || 'Nunito, sans-serif').split(',').map(font => font.trim()),
              },
              
            colors: {
                body: process.env.BODY_COLOR || '#f3f4f6',
                primary: process.env.PRIMARY_COLOR || '#F9322C',
                secondary: process.env.SECONDARY_COLOR || '#ffffff',
                font_primary: process.env.FONT_PRIMARY_COLOR || '#2e2e2e',
                font_secondary: process.env.FONT_SECONDARY_COLOR || '#ffffff',
              },
        },
    },

    plugins: [forms, typography],
};
