import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig(({ mode }) => ({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: mode === 'development', // dev only
    }),
  ],
  build: {
    manifest: true,
    outDir: path.resolve(__dirname, 'public/build'),
    emptyOutDir: true,      // clears old builds
    assetsDir: '',          // ensures manifest.json is at root of build folder
    rollupOptions: {
      output: {
        manualChunks: undefined,
      },
    },
  },
  server: {
    hmr: {
      host: 'localhost',
    },
  },
}));