import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/assets/styles/index.scss', 'resources/assets/scripts/index.js'],
            refresh: true,
        }),
    ],
});