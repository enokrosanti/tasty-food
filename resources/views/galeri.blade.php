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
    <nav class="w-full fixed flex justify-between z-50 gap-6 md:gap-24 items-center py-8 px-4 md:px-14 bg-black bg-opacity-50 backdrop-blur-sm shadow-sm">
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
                <!-- Icon (you can replace this with an actual icon from font-awesome or similar) -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </nav>

    {{-- Header --}}
    <section class="bg-cover flex flex-col gap-6 px-4 md:px-14 pb-16 md:pb-[99px] pt-32 md:pt-48" style="background-image: url('/img/bg/bg1.png')">
        <div class="flex flex-col md:my-36">
            <h1 class="font-bold text-4xl md:text-6xl text-white">GALERI KAMI</h1>
        </div>
    </section>

    {{-- Slide Section --}}

    {{-- Grid section --}}
    <section class="w-full flex flex-col bg-white items-center gap-8 px-4 md:px-14 py-20">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="bg-cover w-[22rem] h-[22rem] md:w-[14rem] md:h-[14rem] lg:w-[18rem] lg:h-[18rem] rounded-lg" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
            <div class="bg-cover w-[22rem] h-[22rem] md:w-[14rem] md:h-[14rem] lg:w-[18rem] lg:h-[18rem] rounded-lg" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
            <div class="bg-cover w-[22rem] h-[22rem] md:w-[14rem] md:h-[14rem] lg:w-[18rem] lg:h-[18rem] rounded-lg" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
            <div class="bg-cover w-[22rem] h-[22rem] md:w-[14rem] md:h-[14rem] lg:w-[18rem] lg:h-[18rem] rounded-lg" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
            <div class="bg-cover w-[22rem] h-[22rem] md:w-[14rem] md:h-[14rem] lg:w-[18rem] lg:h-[18rem] rounded-lg" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
            <div class="bg-cover w-[22rem] h-[22rem] md:w-[14rem] md:h-[14rem] lg:w-[18rem] lg:h-[18rem] rounded-lg" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
            <div class="bg-cover w-[22rem] h-[22rem] md:w-[14rem] md:h-[14rem] lg:w-[18rem] lg:h-[18rem] rounded-lg" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
            <div class="bg-cover w-[22rem] h-[22rem] md:w-[14rem] md:h-[14rem] lg:w-[18rem] lg:h-[18rem] rounded-lg" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
            <div class="bg-cover w-[22rem] h-[22rem] md:w-[14rem] md:h-[14rem] lg:w-[18rem] lg:h-[18rem] rounded-lg" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
            <div class="bg-cover w-[22rem] h-[22rem] md:w-[14rem] md:h-[14rem] lg:w-[18rem] lg:h-[18rem] rounded-lg" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
            <div class="bg-cover w-[22rem] h-[22rem] md:w-[14rem] md:h-[14rem] lg:w-[18rem] lg:h-[18rem] rounded-lg" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
            <div class="bg-cover w-[22rem] h-[22rem] md:w-[14rem] md:h-[14rem] lg:w-[18rem] lg:h-[18rem] rounded-lg" style="background-image: url('/img/tentang-kami/visi-misi/3.jpg')"></div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="w-full bg-[#232323] text-white py-8 px-4 md:py-16 md:px-14">
        <section class="flex flex-col md:flex-row justify-center items-start gap-4 md:gap-12">
            {{-- Tasty Food --}}
            <div class="flex flex-col gap-4 w-full md:w-1/3">
                <h2 class="font-bold text-2xl md:text-3xl">Tasty Food</h2>
                <p class="font-light text-sm md:text-base">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum eaque eveniet saepe! Accusantium sint laudantium, autem similique doloremque reiciendis.
                </p>
                <div class="flex gap-4">
                    <a href="https://facebook.com">
                        <img src="{{ asset('img/icons/facebook-icon.png') }}" alt="facebook-icon" class="w-6 h-6 md:w-8 md:h-8">
                    </a>
                    <a href="https://x.com">
                        <img src="{{ asset('img/icons/twitter-icon.png') }}" alt="twitter-icon" class="w-6 h-6 md:w-8 md:h-8">
                    </a>
                </div>
            </div>
            
            {{-- Useful Links --}}
            <div class="flex flex-col gap-4 w-full md:w-1/3">
                <h3 class="font-bold text-2xl">Useful Links</h3>
                <ul class="flex flex-col gap-2 text-base font-normal">
                    <li><a href="{{ url('/blog') }}" class="hover:underline">Blog</a></li>
                    <li><a href="{{ url('/hewan') }}" class="hover:underline">Hewan</a></li>
                    <li><a href="{{ url('/galeri') }}" class="hover:underline">Galeri</a></li>
                    <li><a href="{{ url('/testimonial') }}" class="hover:underline">Testimonial</a></li>
                </ul>
            </div>
            
            {{-- Privacy --}}
            <div class="flex flex-col gap-4 w-full md:w-1/3">
                <h3 class="font-bold text-2xl">Privacy</h3>
                <ul class="flex flex-col gap-2 text-base font-normal">
                    <li><a href="{{ url('/karir') }}" class="hover:underline">Karir</a></li>
                    <li><a href="{{ url('/tentang') }}" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="{{ url('/kontak') }}" class="hover:underline">Kontak Kami</a></li>
                    <li><a href="{{ url('/servis') }}" class="hover:underline">Servis</a></li>
                </ul>
            </div>
            
            {{-- Contact Info --}}
            <div class="flex flex-col gap-4 w-full md:w-1/3">
                <h3 class="font-bold text-2xl">Contact Info</h3>
                <ul class="flex flex-col gap-2 text-base font-normal">
                    <li class="flex items-center gap-2">
                        <img src="{{ asset('img/icons/email-icon.png') }}" alt="email-icon" class="w-4 h-4">
                        <a href="mailto:tastyfood@gmail.com" class="hover:underline">tastyfood@gmail.com</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <img src="{{ asset('img/icons/phone-icon.png') }}" alt="phone-icon" class="w-4 h-4">
                        <a href="tel:+6283124568970" class="hover:underline">+62 831 2456 8970</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <img src="{{ asset('img/icons/address-icon.png') }}" alt="location-icon" class="w-4 h-4">
                        <a href="https://goo.gl/maps/examplelocation" class="hover:underline">Majalengka, Jawa Barat, Indonesia</a>
                    </li>
                </ul>
            </div>
        </section>
    </footer>
    
    <footer class="flex justify-center items-center gap-2 py-4 bg-[#181818]">
        <p class="text-gray-600 font-normal text-base">Copyright ©2023 All rights reserved</p>
    </footer>
    </body>
</html>