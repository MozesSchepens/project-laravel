// vite.config.js
import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            'fsevents': 'fsevents/optional',
        },
    },
    "scripts": {
        "dev": "vite",
        "build": "vite build"
    }
});
