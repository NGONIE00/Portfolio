import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig(({ mode }) => ({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: mode === 'development',
    }),
  ],
  build: {
    manifest: true,
    outDir: 'public/build',
    emptyOutDir: true,
  },
}));