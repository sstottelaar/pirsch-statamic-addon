import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue2";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/cp.js", "resources/css/cp.css"],
            publicDirectory: "resources/dist",
        }),
        vue(),
        tailwindcss(),
    ],
});
