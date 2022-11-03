import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";
import basicSsl from "@vitejs/plugin-basic-ssl";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/sass/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
        basicSsl(),
    ],
    resole: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_module/bootstrap"),
        },
    },
});
