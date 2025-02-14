<?php

namespace Database\Seeders;

use App\Models\FrontPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrontPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FrontPage::create([
            'name' => 'home',
            'slug' => 'home',
            'type' => 'page',
            'content' =>
                [
                    'hero' => [
                        'title' => 'Selamat Datang di Warung Nasi & Mie',
                        'text' => 'Tempat terbaik untuk menikmati aneka hidangan nasi dan mie yang lezat, hangat, dan menggugah selera. Kami menyajikan menu khas dengan cita rasa autentik.',
                        'cta-text' => 'Eksplor Menu Kami',
                        'cta-link' => 'http://127.0.0.1:8000/menu',
                        'image' => 'front-images/home-hero.jpg'
                    ],
                    'about' => [
                        'small-title' => 'Tentang Kami',
                        'title' => 'Warung Nasi & Mie',
                        'text' => 'Warung Nasi & Mie adalah tempat makan yang menghadirkan berbagai sajian lezat berbasis nasi dan mie dengan cita rasa autentik. Kami mengutamakan kualitas bahan, kebersihan, serta pelayanan terbaik untuk memberikan pengalaman kuliner yang memuaskan bagi setiap pelanggan. Dengan suasana yang nyaman dan harga yang terjangkau, kami menjadi pilihan favorit bagi pecinta kuliner sederhana namun menggugah selera.',
                        'cta-text' => 'Learn More About Us',
                        'cta-link' => 'http://127.0.0.1:8000/about'
                    ],
                    'product' => [
                        'small-title' => 'Populer Menu Kami',
                        'title' => 'Segar, Penuh Rasa, Diciptakan dengan Passion, Dan Terjangkau',
                        'cta-text' => 'Lihat Selengkapnya',
                        'cta-link' => 'http://127.0.0.1:8000/menu'
                    ],
                    'contact' => [
                        'small-title' => 'Kontak Kami',
                        'title' => 'Hubungi Kami',
                        'text' => 'Anda memiliki pertanyaan, atau sekadar menyapa, jangan ragu untuk menghubungi kami. Kami selalu siap membantu!'
                    ]
                ],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        FrontPage::create([
            'name' => 'about',
            'slug' => 'about',
            'type' => 'page',
            'content' => [
                'hero' => [
                    'title' => 'Tentang Kami',
                    'text' => 'Warung Nasi & Mie adalah tempat makan yang menghadirkan berbagai sajian lezat berbasis nasi dan mie dengan cita rasa autentik. Kami mengutamakan kualitas bahan, kebersihan, serta pelayanan terbaik untuk memberikan pengalaman kuliner yang memuaskan bagi setiap pelanggan. Dengan suasana yang nyaman dan harga yang terjangkau, kami menjadi pilihan favorit bagi pecinta kuliner sederhana namun menggugah selera.',
                    'image' => 'front-images/about-hero.jpg'
                ],
                'mission' => [
                    'small-title' => 'Misi Kami',
                    'title' => 'Warung Nasi & Mie',
                    'text' => 'Di Warung Nasi & Mie, kami berkomitmen menyajikan hidangan lezat, higienis, dan berkualitas dengan harga terjangkau. Kami menciptakan suasana makan yang nyaman serta terus berinovasi dalam menu agar pelanggan selalu memiliki pilihan terbaik. Dengan pelayanan ramah dan bahan-bahan segar, kami berharap menjadi tempat makan favorit bagi semua orang.',
                ],
                'vision' => [
                    'small-title' => 'Visi Kami',
                    'title' => 'Warung Nasi & Mie',
                    'text' => 'Menjadi warung makan favorit yang menyajikan hidangan nasi dan mie berkualitas dengan cita rasa autentik, harga terjangkau, serta pelayanan terbaik bagi semua pelanggan.',
                ],
                'teams' => [
                    'small-title' => 'Koki Kami',
                    'title' => 'Bersemangat. Terampil. Berdedikasi.',
                ],
                'contact' => [
                    'small-title' => 'Kontak Kami',
                    'title' => 'Hubungi Kami',
                    'text' => 'Anda memiliki pertanyaan, atau sekadar menyapa, jangan ragu untuk menghubungi kami. Kami selalu siap membantu!'
                ]
            ],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        FrontPage::create([
            'name' => 'menus',
            'slug' => 'menus',
            'type' => 'page',
            'content' => [
                'hero' => [
                    'title' => 'Menu Kami',
                    'text' => 'Dari hidangan klasik yang menghangatkan hingga kreasi baru yang berani, menu kami dirancang untuk memenuhi selera semua orang. Jelajahi berbagai pilihan hidangan yang disiapkan dengan bahan-bahan segar berkualitas.',
                    'image' => 'front-images/menus-hero.jpg'
                ],
            ],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        FrontPage::create([
            'name' => 'contact',
            'slug' => 'contact',
            'type' => 'page',
            'content' => [
                'hero' => [
                    'title' => 'Hubungi Kami',
                    'text' => 'Hubungi kami untuk pertanyaan. Kami hanya sejauh satu klik!',
                    'image' => 'front-images/contact-hero.jpg'
                ],
                'location' => [
                    'small-title' => 'Lokasi Kami',
                    'title' => 'Kunjungi Kami',
                    'text' => '4J77+GX2, Jl. Dipati Ukur, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132',
                    'cta-text' => 'Lihat Peta',
                    'cta-link' => 'https://www.google.com/maps/place/Warung+Gemboel+Roti+Panggang,+Pisang+Panggang/@-6.8863095,107.6148442,3a,75y,36.61h,88.62t/data=!3m7!1e1!3m5!1sHccuwth-Bb2NKunOOk78eg!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fcb_client%3Dmaps_sv.tactile%26w%3D900%26h%3D600%26pitch%3D1.3838653263542682%26panoid%3DHccuwth-Bb2NKunOOk78eg%26yaw%3D36.605862539432025!7i16384!8i8192!4m9!1m2!2m1!1sWNM+unikom!3m5!1s0x2e68e6f8affa4d43:0xe784c0de6fa75ecb!8m2!3d-6.8862283!4d107.614905!16s%2Fg%2F11krkf55ts?entry=ttu&g_ep=EgoyMDI1MDIxMC4wIKXMDSoASAFQAw%3D%3D',
                    'latitude' => '-6.133860813147106',
                    'longitude' => '106.81449528194443',
                ],
                'contact' => [
                    'small-title' => 'Kontak Kami',
                    'title' => 'Hubungi Kami',
                    'text' => 'Anda memiliki pertanyaan, atau sekadar menyapa, jangan ragu untuk menghubungi kami. Kami selalu siap membantu!'
                ]
            ],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        FrontPage::create([
            'name' => 'logo',
            'slug' => 'logo',
            'type' => 'logo',
            'content' => [
                'company' => [
                    'logo' => 'company-images/logo.png',
                    'name' => 'Warung Nasi & Mie',
                ]
            ],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
