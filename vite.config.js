import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                // Choices
                'resources/assets/plugins/choices/css/choices.scss',
                'resources/assets/plugins/choices/js/choices.js',
            ],
            refresh: true,
            valetTls: 'livewire-v3.test',
        }),
    ],
});
