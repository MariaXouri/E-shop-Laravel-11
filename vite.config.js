import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue2';
//import vue from '@vitejs/plugin-vue';

export default defineConfig({

    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    // resolve: {
    //     alias: {
    //         "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
    //         "~bootstrap-vue": path.resolve(
    //             __dirname,
    //             "node_modules/bootstrap-vue"
    //         ),
    //     },
    // },
    define: {
        "process.env": process.env,
    },
    // resolve: {
    //     alias: {
    //         vue: 'vue/dist/vue.esm-bundler.js',
    //     },
    // },
    optimizeDeps: {
        exclude: ['js-big-decimal']
      },

});
