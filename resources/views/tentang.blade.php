<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Tentang Kami</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="w-full fixed flex justify-between z-50 gap-6 md:gap-24 items-center py-8 px-4 md:px-14 bg-black bg-opacity-50 backdrop-blur-sm shadow-sm">
        <h1 class="text-white font-bold text-lg md:text-2xl">TASTY FOOD</h1>
        
        <!-- Menu for larger screens -->
        <ul class="hidden md:flex gap-6 md:gap-12 text-white font-normal text-base cursor-pointer">
            <li><a href="{{ url('/home') }}">HOME</a></li>
            <li><a href="{{ url('/tentang') }}">TENTANG</a></li>
            <li><a href="{{ url('/berita') }}">BERITA</a></li>
            <li><a href="{{ url('/galeri') }}">GALERI</a></li>
            <li><a href="{{ url('/kontak') }}">KONTAK</a></li>
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
    <section class="bg-cover flex flex-col gap-6 px-4 md:px-14 pb-16 md:pb-[99px] pt-32 md:pt-48" style="background-image: url('{{ asset('img/bg/bg1.png') }}')">
        <div class="flex flex-col md:my-36">
            <h1 class="font-bold text-4xl md:text-6xl text-white">TENTANG KAMI</h1>
        </div>
    </section>

    {{-- Description --}}
    <section class="flex flex-col md:flex-row bg-[#f4f4f4] items-center gap-8 px-4 md:px-14 py-16">
        <div class="flex flex-col gap-4 w-full md:w-1/2">
            <h2 class="text-black font-bold text-4xl">TASTY FOOD</h2>
            <p class="text-black font-medium text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem corporis minima voluptate suscipit sed fugiat, atque ipsam vel esse inventore autem ipsa perferendis officiis saepe praesentium ducimus aperiam officia repellendus.</p>
            <p class="text-gray-600 font-medium text-base">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint ea ducimus illum sed ipsa eaque esse, quisquam, ratione vero soluta cum animi sit illo et est placeat atque, fuga inventore?</p>
        </div>
        <div class="flex flex-col lg:flex-row gap-4 w-full md:w-1/2">
            <div class="bg-cover w-full h-64 lg:h-96 rounded-lg" style="background-image: url('{{ asset('img/tentang-kami/1.jpg') }}')"></div>
            <div class="bg-cover w-full h-64 lg:h-96 rounded-lg" style="background-image: url('{{ asset('img/tentang-kami/bpk2.jpg') }}')"></div>
        </div>
    </section>
    
    {{-- Visi --}}
    <section class="flex flex-col md:flex-row bg-white items-center gap-8 px-4 md:px-14 py-20">
        <div class="flex flex-col lg:flex-row gap-4 w-full md:w-1/2">
            <div class="bg-cover w-full h-48 lg:h-64 rounded-lg" style="background-image: url('{{ asset('img/tentang-kami/visi-misi/1.jpg') }}')"></div>
            <div class="bg-cover w-full h-48 lg:h-64 rounded-lg" style="background-image: url('{{ asset('img/tentang-kami/visi-misi/2.jpg') }}')"></div>
        </div>
        <div class="flex flex-col gap-4 w-full md:w-1/2">
            <h2 class="text-2xl text-black font-bold">VISI</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure inventore quidem tempora deserunt quae esse qui voluptate. Accusamus earum quam sit ad fugiat consequuntur odit dicta quibusdam dolorum at, dolorem excepturi explicabo provident. Nisi recusandae eius vero aspernatur in eum.</p>
        </div>
    </section>
    
    {{-- Misi --}}
    <section class="flex flex-col md:flex-row bg-white items-center gap-8 px-4 md:px-14 py-20">
        <div class="flex flex-col gap-4 w-full md:w-1/2">
            <h2 class="text-2xl text-black font-bold">MISI</h2>
            <p class="text-base text-black font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure inventore quidem tempora deserunt quae esse qui voluptate. Accusamus earum quam sit ad fugiat consequuntur odit dicta quibusdam dolorum at, dolorem excepturi explicabo provident. Nisi recusandae eius vero aspernatur in eum.</p>
        </div>
        <div class="flex gap-4 w-full md:w-1/2">
            <div class="bg-cover w-full h-48 lg:h-72 rounded-lg" style="background-image: url('{{ asset('img/tentang-kami/visi-misi/3.jpg') }}')"></div>
        </div>
    </section>    
    

    {{-- Footer --}}
    <section class="w-full flex flex-col md:flex-row justify-center items-center md:gap-24 py-16 md:py-20 px-4 md:px-14 bg-[#232323]">
        <div class="text-white flex flex-col gap-4 w-full md:w-1/2 lg:w-1/4">
            <h2 class="font-bold text-2xl md:text-3xl">Tasty Food</h2>
            <p class="font-light text-sm md:text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum eaque eveniet saepe! Accusantium sint laudantium, autem similique doloremque reiciendis. Provident ut maiores nulla et vero minus esse dignissimos facere obcaecati, dolores suscipit dolorum tempore voluptatibus saepe. Architecto, soluta aliquam modi officiis dolorum deserunt dolores delectus mollitia, eaque, adipisci omnis! Et?</p>
            <div class="flex gap-4">
                <a href="https://facebook.com"><img src="{{ asset('img/icons/facebook-icon.png') }}" alt="facebook-icon" class="w-6 h-6 md:w-8 md:h-8"></a>
                <a href="https://x.com"><img src="{{ asset('img/icons/twitter-icon.png') }}" alt="twitter-icon" class="w-6 h-6 md:w-8 md:h-8"></a>
            </div>
        </div>
        <div class="text-white flex flex-col gap-4 w-full md:w-1/2 lg:w-1/4">
            <h3 class="font-bold text-2xl">Useful Links</h3>
            <ul class="flex flex-col gap-2 text-base font-normal">
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/hewan') }}">Hewan</a></li>
                <li><a href="{{ url('/galeri') }}">Galeri</a></li>
                <li><a href="{{ url('/testimonial') }}">Testimonial</a></li>
            </ul>
        </div>
        <div class="text-white flex flex-col gap-4 w-full md:w-1/2 lg:w-1/4">
            <h3 class="font-bold text-2xl">Privacy</h3>
            <ul class="flex flex-col gap-2 text-base font-normal">
                <li><a href="{{ url('/karir') }}">Karir</a></li>
                <li><a href="{{ url('/tentang-kami') }}">Tentang Kami</a></li>
                <li><a href="{{ url('/kontak-kami') }}">Kontak Kami</a></li>
                <li><a href="{{ url('/servis') }}">Servis</a></li>
            </ul>
        </div>
        <div class="text-white flex flex-col gap-4 w-full md:w-1/2 lg:w-1/4">
            <h3 class="font-bold text-2xl">Contact Info</h3>
            <ul class="flex flex-col gap-2 text-base font-normal">
                <li class="flex items-center gap-2">
                    <img src="{{ asset('img/icons/email-icon.png') }}" alt="email-icon">
                    <a href="mailto:tastyfood@gmail.com">tastyfood@gmail.com</a>
                </li>
                <li class="flex items-center gap-2">
                    <img src="{{ asset('img/icons/phone-icon.png') }}" alt="phone-icon">
                    <a href="tel:+6283124568970">+62 831 2456 8970</a>
                </li>
                <li class="flex items-center gap-2">
                    <img src="{{ asset('img/icons/address-icon.png') }}" alt="location-icon">
                    <a href="https://goo.gl/maps/examplelocation">Majalengka, Jawa Barat, Indonesia</a>
                </li>
            </ul>
        </div>
    </section>
    
    <footer class="flex justify-center items-center gap-2 py-4 bg-[#181818]">
        <p class="text-gray-600 font-normal text-base">Copyright ©2023 All rights reserved</p>
    </footer>
</body>
</html>
