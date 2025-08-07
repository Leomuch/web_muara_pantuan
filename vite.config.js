import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import tailwindcss from '@tailwindcss/vite'
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'
export default defineConfig({
<<<<<<< HEAD
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
      vue(),
      tailwindcss(),
    ],
});
=======
   plugins: [
       laravel({
           input: ['resources/css/app.css', 'resources/js/app.js'],
           refresh: true,
       }),
        tailwindcss(),
   ],
   build: {
       outDir: 'public/build',
       manifest: true,
       emptyOutDir: true,
   }
});
>>>>>>> 8d4f7b3ef0378cefa33bdc40c6dd4c9486e180f9
