import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss'
                ,'resources/js/app.js'
                ,'resources/js/login.js'
                ,'resources/css/styles.css'
                ,'resources/css/login.css'
                ,'resources/css/signIn.css'
            ],
            refresh: true,
        }),
    ],
});
