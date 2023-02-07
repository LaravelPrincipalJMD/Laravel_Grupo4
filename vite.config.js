import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.scss', 'resources/js/app.js', 'resources/css/styles.css', 'resources/css/custom.css'],
=======
            input: ['resources/css/app.scss', 'resources/js/app.js', 'resources/css/styles.css'],
>>>>>>> 3d595da17309b4556c12c496d1a756dd35e49b70
            refresh: true,
        }),
    ],
});
