import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.scss",
                "resources/js/app.js",
                "resources/css/styles.css",
                "resources/css/login.css",
                "resources/js/login.js",
            ],
            refresh: true,
        }),
    ],
});
