import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

// https://vite.dev/config/
export default defineConfig({
  plugins: [react()],
  server: {
    proxy: {
      '/api': {
        target: 'http://localhost:3001',
        changeOrigin: true,
        secure: false,
      },
    },
  },
  build: {
    // Increase the limit for inlining assets as base64 URLs to reduce HTTP requests
    // Assets smaller than 10KB will be inlined.
    assetsInlineLimit: 10240,
    rollupOptions: {
      output: {
        // Group vendor files to allow better caching and fewer requests over time
        manualChunks(id) {
          if (id.includes('node_modules')) {
            return 'vendor';
          }
        }
      }
    }
  }
})
