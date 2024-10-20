import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/home-style.css',
                'resources/js/app.js',
                'resources/js/get-attributes.js'
            ],
            refresh: true,
        }),
    ],
});
