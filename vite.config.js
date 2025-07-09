import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import { globSync } from "glob";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/ts/config.ts", //archivos css y ts(js en compilación) globales
                ...globSync("resources/ts/pages/*.ts"), // archivos ts(js en compilación) de páginas (se añade automáticamente al ponerlos en la carpeta pages)
            ],
            refresh: true, 
        }),
        tailwindcss(),
    ],
});
