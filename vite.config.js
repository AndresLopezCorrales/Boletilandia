import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/home-style.css',
                'resources/css/galeria-style.css',
                'resources/js/app.js',
                'resources/js/get-attributes.js',
                'resources/js/comprar-boleto.js',
                'resources/css/app.css'
            ],
            refresh: true,
        }),
    ],
});
