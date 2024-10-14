<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Berita Kami</title>
</head>
<body>
    <nav class="w-full fixed flex justify-between z-50 items-center py-4 px-4 md:px-14 bg-black bg-opacity-50 backdrop-blur-sm shadow-sm">
        <h1 class="text-white font-bold text-lg md:text-2xl">TASTY FOOD</h1>
        
        <!-- Menu for larger screens -->
        <ul class="hidden md:flex gap-6 md:gap-12 text-white font-normal text-base cursor-pointer">
            <li><a href="/home">HOME</a></li>
            <li><a href="/tentang">TENTANG</a></li>
            <li><a href="/berita">BERITA</a></li>
            <li><a href="/galeri">GALERI</a></li>
            <li><a href="/kontak">KONTAK</a></li>
        </ul>
    
        <!-- Menu icon for mobile screens -->
        <div class="md:hidden flex items-center">
            <button class="text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Header -->
    <section class="bg-cover flex flex-col items-center gap-6 px-4 md:px-14 pb-16 md:pb-24 pt-32 md:pt-48" style="background-image: url('/img/bg/bg1.png')">
        <h1 class="font-bold text-4xl md:text-6xl md:my-36 text-white text-left self-start">BERITA KAMI</h1>
    </section>

    <!-- Content -->
    <section class="flex flex-col md:flex-row bg-[#f4f4f4] items-center gap-8 px-4 md:px-14 py-20">
        <div class="flex flex-col gap-4 w-full md:w-1/2">
            <h2 class="text-3xl text-black font-bold">APA SAJA MAKANAN KHAS NUSANTARA?</h2>
            <p class="text-base text-gray-600 font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure inventore quidem tempora deserunt quae esse qui voluptate. Accusamus earum quam sit ad fugiat consequuntur odit dicta quibusdam dolorum at, dolorem excepturi explicabo provident.</p>
            <p class="text-base text-gray-600 font-normal">Nisi recusandae eius vero aspernatur in eum.</p>
        </div>
        <div class="flex w-full md:w-1/2">
            <div class="bg-cover w-full h-72 rounded-2xl" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
        </div>
    </section>

    <section class="flex flex-col bg-white items-center gap-8 px-4 md:px-14 py-20">
        <h2 class="text-xl text-black font-bold w-full text-start">BERITA LAINNYA</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 w-full">
            <div class="flex flex-col gap-4 bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-cover h-40" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
                <div class="flex flex-col gap-2 p-4">
                    <h4 class="text-black font-bold text-xl">LOREM IPSUM</h4>
                    <p class="text-black font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit voluptatum incidunt ea commodi in dignissimos.</p>
                </div>
                <div class="flex justify-between p-4">
                    <a href="/" class="text-yellow-600 text-base font-normal">Baca Selengkapnya</a>
                    <span class="text-gray-600 font-bold text-lg cursor-pointer">...</span>
                </div>
            </div>
            <div class="flex flex-col gap-4 bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-cover h-40" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
                <div class="flex flex-col gap-2 p-4">
                    <h4 class="text-black font-bold text-xl">LOREM IPSUM</h4>
                    <p class="text-black font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit voluptatum incidunt ea commodi in dignissimos.</p>
                </div>
                <div class="flex justify-between p-4">
                    <a href="/" class="text-yellow-600 text-base font-normal">Baca Selengkapnya</a>
                    <span class="text-gray-600 font-bold text-lg cursor-pointer">...</span>
                </div>
            </div>
            <div class="flex flex-col gap-4 bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-cover h-40" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
                <div class="flex flex-col gap-2 p-4">
                    <h4 class="text-black font-bold text-xl">LOREM IPSUM</h4>
                    <p class="text-black font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit voluptatum incidunt ea commodi in dignissimos.</p>
                </div>
                <div class="flex justify-between p-4">
                    <a href="/" class="text-yellow-600 text-base font-normal">Baca Selengkapnya</a>
                    <span class="text-gray-600 font-bold text-lg cursor-pointer">...</span>
                </div>
            </div>
            <div class="flex flex-col gap-4 bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-cover h-40" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
                <div class="flex flex-col gap-2 p-4">
                    <h4 class="text-black font-bold text-xl">LOREM IPSUM</h4>
                    <p class="text-black font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit voluptatum incidunt ea commodi in dignissimos.</p>
                </div>
                <div class="flex justify-between p-4">
                    <a href="/" class="text-yellow-600 text-base font-normal">Baca Selengkapnya</a>
                    <span class="text-gray-600 font-bold text-lg cursor-pointer">...</span>
                </div>
            </div>
            <div class="flex flex-col gap-4 bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-cover h-40" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
                <div class="flex flex-col gap-2 p-4">
                    <h4 class="text-black font-bold text-xl">LOREM IPSUM</h4>
                    <p class="text-black font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit voluptatum incidunt ea commodi in dignissimos.</p>
                </div>
                <div class="flex justify-between p-4">
                    <a href="/" class="text-yellow-600 text-base font-normal">Baca Selengkapnya</a>
                    <span class="text-gray-600 font-bold text-lg cursor-pointer">...</span>
                </div>
            </div>
            <div class="flex flex-col gap-4 bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-cover h-40" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
                <div class="flex flex-col gap-2 p-4">
                    <h4 class="text-black font-bold text-xl">LOREM IPSUM</h4>
                    <p class="text-black font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit voluptatum incidunt ea commodi in dignissimos.</p>
                </div>
                <div class="flex justify-between p-4">
                    <a href="/" class="text-yellow-600 text-base font-normal">Baca Selengkapnya</a>
                    <span class="text-gray-600 font-bold text-lg cursor-pointer">...</span>
                </div>
            </div>
            <div class="flex flex-col gap-4 bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-cover h-40" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
                <div class="flex flex-col gap-2 p-4">
                    <h4 class="text-black font-bold text-xl">LOREM IPSUM</h4>
                    <p class="text-black font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit voluptatum incidunt ea commodi in dignissimos.</p>
                </div>
                <div class="flex justify-between p-4">
                    <a href="/" class="text-yellow-600 text-base font-normal">Baca Selengkapnya</a>
                    <span class="text-gray-600 font-bold text-lg cursor-pointer">...</span>
                </div>
            </div>
            <div class="flex flex-col gap-4 bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-cover h-40" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
                <div class="flex flex-col gap-2 p-4">
                    <h4 class="text-black font-bold text-xl">LOREM IPSUM</h4>
                    <p class="text-black font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit voluptatum incidunt ea commodi in dignissimos.</p>
                </div>
                <div class="flex justify-between p-4">
                    <a href="/" class="text-yellow-600 text-base font-normal">Baca Selengkapnya</a>
                    <span class="text-gray-600 font-bold text-lg cursor-pointer">...</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
<section class="w-full flex flex-col md:flex-row justify-between items-start gap-8 py-16 px-4 md:px-14 md:py-20 bg-[#232323]">
    <!-- Tasty Food Section -->
    <div class="text-white flex flex-col gap-4 w-full md:w-1/2 lg:w-1/3">
        <h2 class="font-bold text-2xl md:text-3xl">Tasty Food</h2>
        <p class="font-light text-sm md:text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum eaque eveniet saepe! Accusantium sint laudantium, autem similique doloremque reiciendis. Provident ut maiores nulla et vero minus esse dignissimos facere obcaecati, dolores suscipit dolorum tempore voluptatibus saepe. Architecto, soluta aliquam modi officiis dolorum deserunt dolores delectus mollitia, eaque, adipisci omnis! Et?</p>
        <div class="flex gap-4">
            <a href="#" class="text-white hover:underline">
                <img src="/img/icons/facebook-icon.png" alt="facebook-icon" class="w-6 h-6 md:w-8 md:h-8">
            </a>
            <a href="#" class="text-white hover:underline">
                <img src="/img/icons/twitter-icon.png" alt="twitter-icon" class="w-6 h-6 md:w-8 md:h-8">
            </a>
        </div>
    </div>

    <!-- Useful Links Section -->
    <div class="text-white flex flex-col gap-4 w-full md:w-1/2 lg:w-1/3">
        <h2 class="font-bold text-2xl md:text-3xl">Useful Links</h2>
        <ul class="flex flex-col gap-2">
            <li><a href="#" class="text-white hover:underline">Blog</a></li>
            <li><a href="#" class="text-white hover:underline">Hewan</a></li>
            <li><a href="#" class="text-white hover:underline">Galeri</a></li>
            <li><a href="#" class="text-white hover:underline">Testimonial</a></li>
        </ul>
    </div>

    <!-- Privacy Section -->
    <div class="text-white flex flex-col gap-4 w-full md:w-1/2 lg:w-1/3">
        <h2 class="font-bold text-2xl md:text-3xl">Privacy</h2>
        <ul class="flex flex-col gap-2">
            <li><a href="#" class="text-white hover:underline">Karir</a></li>
            <li><a href="#" class="text-white hover:underline">Tentang Kami</a></li>
            <li><a href="#" class="text-white hover:underline">Kontak Kami</a></li>
            <li><a href="#" class="text-white hover:underline">Servis</a></li>
        </ul>
    </div>

    <!-- Contact Info Section -->
    <div class="text-white flex flex-col gap-4 w-full md:w-1/2 lg:w-1/3">
        <h3 class="font-bold text-2xl md:text-3xl">Contact Info</h3>
        <ul class="flex flex-col gap-2 text-base font-normal">
            <li class="flex items-center gap-2">
                <img src="/img/icons/email-icon.png" alt="email-icon" class="w-5 h-5">
                <a href="mailto:tastyfood@gmail.com" class="hover:underline">tastyfood@gmail.com</a>
            </li>
            <li class="flex items-center gap-2">
                <img src="/img/icons/phone-icon.png" alt="phone-icon" class="w-5 h-5">
                +62 812 3456 7890
            </li>
            <li class="flex items-center gap-2">
                <img src="/img/icons/address-icon.png" alt="address-icon" class="w-5 h-5">
                Kota Bandung, Jawa Barat
            </li>
        </ul>
    </div>
</section>

</body>
</html>
