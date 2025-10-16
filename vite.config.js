import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/scss/icons.scss",
                "resources/scss/app.scss",
                "resources/js/app.js",
                "resources/js/config.js",
                "resources/js/layout.js",
            ],
            refresh: true,
        }),
    ],
});
