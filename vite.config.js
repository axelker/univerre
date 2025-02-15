import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/css/contact.css','resources/css/letter.css', 'resources/js/letter.js','resources/css/letter.css', 'resources/js/app.js','resources/js/contact.js'],
            refresh: true,
        }),
    ],
});
