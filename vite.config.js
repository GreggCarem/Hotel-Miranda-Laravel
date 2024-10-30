import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Archivos JS
                'resources/js/app.js',
                // Archivos CSS
                'resources/css/app.css',
                'resources/css/index/index.css',
                'resources/css/aboutPage/about.scss',
                'resources/css/aboutUs/about.scss',
                'resources/css/aboutUs/imgAboutUs.scss',
                'resources/css/contact/contact.scss',
                'resources/css/estadisticas/estadisticas.scss',
                'resources/css/facilities/facilities.scss',
                'resources/css/footer/footer.scss',
                'resources/css/form/availability.scss',
                'resources/css/header/headerHome.scss',
                'resources/css/introvideo/video.scss',
                'resources/css/menu/menu.scss',
                'resources/css/nav/nav.scss',
                'resources/css/offers/offers.scss',
                'resources/css/room/room.scss',
                'resources/css/roomdetails/roomdetails.scss',
                'resources/css/sliderRooms/slider.scss',
                'resources/css/sliderStandar/sliderStandarNavigation.scss',
            ],
            refresh: true, // Para habilitar la recarga automática en desarrollo
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/imgs',
                    dest: 'images'
                },
                {
                    src: 'resources/video',
                    dest: 'video'
                },
                {
                    src: 'resources/fonts',
                    dest: 'fonts'
                }
            ]
        })
    ],
});
