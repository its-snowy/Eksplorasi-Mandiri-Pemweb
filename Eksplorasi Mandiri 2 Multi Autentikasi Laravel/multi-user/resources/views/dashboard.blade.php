<x-app-layout>


    <!DOCTYPE html>
    <html>

    <head>
        <style>
            .news-container {
                display: flex;
                justify-content: space-between;
                margin: 0 auto;
                width: 200%;
                margin-top: -10px;

            }

            .news-item {
                width: 45%;
                border: 1px solid whitesmoke;
                padding: 20px;
                box-sizing: border-box;
                border-radius: 10px;
                /* membuat border menjadi rounded */
                box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.1);
                /* menambahkan shadow */
            }
        </style>
    </head>

    <body>
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-semibold text-gray-900 text-center">NEWS PORTAL</h1>
    <div class="mt-6 grid gap-16 border-t-2 border-gray-100 pt-3 grid-cols-1 lg:grid-cols-2">
        <div class="news-container">
            <div class="news-item">
                <img src="https://th.bing.com/th/id/R.1ae823e85399db640e8ba887dab4d04a?rik=Bcxa2oHpx4X6dA&riu=http%3a%2f%2fwww.ilounge.com%2fwp-content%2fuploads%2f2019%2f03%2fMacbook-Air-2018.jpeg&ehk=9Eyu2JqD%2bnEQjeJEr2oBpVGoz8tssNrpaECZqVx9d%2bA%3d&risl=&pid=ImgRaw&r=0"
                    alt="">
                    <br>
                <p class="text-sm font-medium text-indigo-600">Gadget & Technology</p>
                <p class="text-xl font-semibold text-gray-900">MacBook</p>
                <p class="mt-3 text-base text-gray-500 text-justify">
                    Apple recently launched new MacBook Pro and MacBook Air models featuring the M3 chip. 
                    The new MacBook Pro is equipped with the M3 chip lineup, including M3, M3 Pro, and M3 Max. 
                    Meanwhile, the new MacBook Air comes in two sizes, 13 and 15 inches, and is powered by the M3 chip, 
                    which offers up to a 60% performance increase compared to the previous model using the M2 chip. 
                    The new MacBook Air also has a battery life of up to 18 hours. These new products demonstrate Apple's 
                    commitment to continually improving the performance and efficiency of their products.
                </p>
                {{-- <p>
                    <time datetime="tanggal_publikasi_berita_anda">15 May 2024</time>
                </p> --}}
                
                
            </div>
            <div class="news-item">
                <img class="object-cover w-full h-auto" src="{{ asset('aset/hp ip 15.jpg') }}" alt="">
                <br>
                <div class="flex-1">
                    <p class="text-sm font-medium text-indigo-600">Gadget & Technology</p>
                    <p class="text-xl font-semibold text-gray-900">iPhone 15</p>
                    <p class="mt-3 text-base text-gray-500 text-justify">
                        The iPhone 15 and iPhone 15 Plus were officially released by Apple on September 13, 2023, during the Apple Event 2023. 
                        This launch also marked the debut of the iPhone 15 Pro and iPhone 15 Pro Max. Thus, Apple has introduced four new models 
                        in the iPhone 15 series. This entire lineup demonstrates Apple's commitment to continually innovating in smartphone technology.
                    </p>
                </div>
                {{-- <div class="mt-6 flex items-center">
                    <div class="text-sm text-gray-500">
                        <p>
                            <time datetime="tanggal_publikasi_berita_anda">15 May 2024</time>
                        </p> --}}
            </div>
        </div>
    </body>

    </html>







</x-app-layout>

{{-- 
<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-semibold text-gray-900 text-center">NEWS PORTAL</h1>
    <div class="mt-6 grid gap-16 border-t-2 border-gray-100 pt-3 grid-cols-1 lg:grid-cols-2">
        <!-- Berita Pertama -->
        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
            <div class="flex-shrink-0">
                <img class="h-48 w-full object-cover"
                    src="https://th.bing.com/th/id/R.1ae823e85399db640e8ba887dab4d04a?rik=Bcxa2oHpx4X6dA&riu=http%3a%2f%2fwww.ilounge.com%2fwp-content%2fuploads%2f2019%2f03%2fMacbook-Air-2018.jpeg&ehk=9Eyu2JqD%2bnEQjeJEr2oBpVGoz8tssNrpaECZqVx9d%2bA%3d&risl=&pid=ImgRaw&r=0"
                    alt="">
            </div>
            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                <div class="flex-1">
                    <p class="text-sm font-medium text-indigo-600">Gadget & Teknologi</p>
                    <p class="text-xl font-semibold text-gray-900">MacBook</p>
                    <p class="mt-3 text-base text-gray-500 text-justify">
                        Apple baru-baru ini meluncurkan MacBook Pro dan MacBook Air baru dengan chip M3. MacBook Pro
                        baru dilengkapi dengan jajaran chip M3, termasuk M3, M3 Pro, dan M3 Max. Sementara itu,
                        MacBook Air baru hadir dalam dua ukuran, 13 dan 15 inci, dan ditenagai oleh chip M3 yang
                        memberikan peningkatan performa hingga 60% dibandingkan dengan model sebelumnya yang
                        menggunakan chip M12. MacBook Air baru ini juga memiliki daya tahan baterai hingga 18 jam.
                        Produk-produk baru ini menunjukkan komitmen Apple untuk terus meningkatkan performa dan
                        efisiensi produk mereka.
                    </p>
                </div>
                <div class="mt-6 flex items-center">
                    <div class="text-sm text-gray-500">
                        <p>
                            <time datetime="tanggal_publikasi_berita_anda">15 Mei 2024</time>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Berita Kedua -->
        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden lg:mt-0"> <!-- Add mt-8 class here -->
            <div class="flex-shrink-0">
                <img class="object-cover w-full h-auto" src="{{ asset('aset/hp ip 15.jpg') }}" alt="">
            </div>
            <div class="flex-1 bg-white p-6 flex flex-col justify-between ">
                <div class="flex-1">
                    <p class="text-sm font-medium text-indigo-600">Gadget & Teknologi</p>
                    <p class="text-xl font-semibold text-gray-900">iPhone 15</p>
                    <p class="mt-3 text-base text-gray-500 text-justify">
                        iPhone 15 dan iPhone 15 Plus telah resmi dirilis oleh Apple pada tanggal 13 September 2023
                        dalam acara Apple Event 2023. Peluncuran ini juga menandai debut dari iPhone 15 Pro dan
                        iPhone 15 Pro Max. Dengan demikian, Apple telah memperkenalkan empat model baru dalam seri
                        iPhone 15 ini. Seluruh rangkaian produk ini menunjukkan komitmen Apple untuk terus
                        berinovasi dalam teknologi smartphone.
                    </p>
                </div>
                <div class="mt-6 flex items-center">
                    <div class="text-sm text-gray-500">
                        <p>
                            <time datetime="tanggal_publikasi_berita_anda">16 Mei 2024</time>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
