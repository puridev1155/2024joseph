import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //css
                'resources/css/style.css',
                'resources/css/icons.css',
            'resources/css/app.css', 
            'resources/js/app.js',

        //js
        'resources/js/theme.js',
        'resources/js/head.js',
        'resources/js/admin.js',
        'resources/js/auth.js',
        'resources/js/swiper.js',
        'resources/js/gallery.js',
        'resources/js/glightbox.js'],
            refresh: [
                ...refreshPaths,
                'app/Filament/**',
                'app/Forms/Components/**',
                'app/Livewire/**',
                'app/Infolists/Components/**',
                'app/Providers/Filament/**',
                'app/Tables/Columns/**',
            ],
        }),
    ],
})
