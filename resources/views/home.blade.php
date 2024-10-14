<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<body>
    <nav class="w-full fixed flex z-40 gap-6 items-center py-6 px-4 md:px-10 bg-[#f4f4f4] bg-opacity-50 backdrop-blur-sm shadow-sm">
        <h1 class="text-black font-bold text-lg md:text-2xl">TASTY FOOD</h1>
        
        <!-- Menu for larger screens -->
        <ul class="hidden md:flex gap-6 md:gap-4 lg:gap-8 text-black font-normal text-base cursor-pointer">
            <li><a href="/home">HOME</a></li>
            <li><a href="/tentang">TENTANG</a></li>
            <li><a href="/berita">BERITA</a></li>
            <li><a href="/galeri">GALERI</a></li>
            <li><a href="/kontak">KONTAK</a></li>
        </ul>
        
        <!-- Menu icon for mobile screens -->
        <div class="md:hidden flex items-center">
            <button class="text-black">
                <!-- Icon (you can replace this with an actual icon from font-awesome or similar) -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </nav>
    
    <!-- Header Section -->
    <section class="relative bg-[#f4f4f4] flex flex-col gap-6 px-4 md:px-10 pb-16 pt-32 md:pt-48">
        <img src="/img/bg/bg2.png" alt="bg2" class="absolute top-0 left-0 h-80 w-80 sm:h-96 sm:w-96 md:h-[28rem] md:w-[28rem] lg:h-[46rem] lg:w-[46rem] z-50 translate-x-44 sm:translate-x-[28rem] md:translate-x-[34rem] lg:translate-x-[50rem] -translate-y-20 md:-translate-y-26">
        <span class="block bg-black w-20 md:w-28 h-1 rounded-full"></span>
        <div class="flex flex-col font-light text-3xl md:text-5xl text-black">
            HEALTHY<span class="font-extrabold">TASTY FOOD</span>
        </div>
        <p class="w-full md:w-3/5 text-black font-normal text-sm md:text-base">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit accusantium quo numquam aut impedit distinctio, repellendus, odit voluptas quos corrupti quas quibusdam soluta itaque necessitatibus perspiciatis est, consequuntur esse alias fugit nostrum cumque architecto exercitationem eius!
        </p>
        <button class="bg-black font-semibold w-full md:w-1/3 py-4 text-white">TENTANG KAMI</button>
    </section>
        

    {{-- Tentang kami --}}
    <section class="w-full flex flex-col justify-center items-center gap-8 py-14 md:py-20 bg-white">
        <h2 class="text-black font-bold text-2xl md:text-3xl">TENTANG KAMI</h2>
        <p class="w-11/12 md:w-2/3 text-black text-sm md:text-base font-normal text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In nemo voluptates soluta mollitia explicabo, incidunt enim unde temporibus ex dolorum laboriosam dolore beatae esse asperiores cupiditate ea quod similique. Incidunt voluptate corrupti consequatur accusamus a vel?</p>
        <span class="block bg-black w-20 md:w-28 h-1 rounded-full"></span>
    </section>

    {{-- Cards Section --}}
    <section class="w-full bg-cover flex justify-center items-center pt-20 md:pt-36 pb-10 px-4 md:px-10" style="background-image: url('/img/bg/bg1.png')">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="relative flex flex-col items-center w-full h-auto py-10">
                <img src="/img/tentang-kami/1.png" alt="img-1" class="absolute top-0 translate-y-[-30%] w-32 md:w-40">
                <div class="flex flex-col items-center justify-center gap-4 pt-16 md:pt-24 pb-8 md:pb-14 w-full bg-white rounded-2xl shadow-lg">
                    <h4 class="text-black font-bold text-lg md:text-xl">LOREM IPSUM</h4>
                    <p class="text-black font-normal text-sm text-center px-6 md:px-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur similique soluta nam vel.</p>
                </div>
            </div>
            <div class="relative flex flex-col items-center w-full h-auto py-10">
                <img src="/img/tentang-kami/1.png" alt="img-1" class="absolute top-0 translate-y-[-30%] w-32 md:w-40">
                <div class="flex flex-col items-center justify-center gap-4 pt-16 md:pt-24 pb-8 md:pb-14 w-full bg-white rounded-2xl shadow-lg">
                    <h4 class="text-black font-bold text-lg md:text-xl">LOREM IPSUM</h4>
                    <p class="text-black font-normal text-sm text-center px-6 md:px-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur similique soluta nam vel.</p>
                </div>
            </div>
            <div class="relative flex flex-col items-center w-full h-auto py-10">
                <img src="/img/tentang-kami/1.png" alt="img-1" class="absolute top-0 translate-y-[-30%] w-32 md:w-40">
                <div class="flex flex-col items-center justify-center gap-4 pt-16 md:pt-24 pb-8 md:pb-14 w-full bg-white rounded-2xl shadow-lg">
                    <h4 class="text-black font-bold text-lg md:text-xl">LOREM IPSUM</h4>
                    <p class="text-black font-normal text-sm text-center px-6 md:px-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur similique soluta nam vel.</p>
                </div>
            </div>
            <div class="relative flex flex-col items-center w-full h-auto py-10">
                <img src="/img/tentang-kami/1.png" alt="img-1" class="absolute top-0 translate-y-[-30%] w-32 md:w-40">
                <div class="flex flex-col items-center justify-center gap-4 pt-16 md:pt-24 pb-8 md:pb-14 w-full bg-white rounded-2xl shadow-lg">
                    <h4 class="text-black font-bold text-lg md:text-xl">LOREM IPSUM</h4>
                    <p class="text-black font-normal text-sm text-center px-6 md:px-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur similique soluta nam vel.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Galeri Kami --}}
    <section class="w-full flex flex-col justify-center items-center gap-8 py-14 px-4 md:py-20 bg-white">
        <h2 class="text-black font-bold text-2xl md:text-3xl">GALERI KAMI</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="w-[22rem] h-[22rem] md:h-72 md:w-72 lg:w-96 lg:h-96 rounded-lg">
                <img src="/img/galeri-kami/1.jpg" alt="img-1" class="object-cover w-full h-full rounded-lg">
            </div>
            <div class="w-[22rem] h-[22rem] md:h-72 md:w-72 lg:w-96 lg:h-96 rounded-lg">
                <img src="/img/galeri-kami/1.jpg" alt="img-1" class="object-cover w-full h-full rounded-lg">
            </div>
            <div class="w-[22rem] h-[22rem] md:h-72 md:w-72 lg:w-96 lg:h-96 rounded-lg">
                <img src="/img/galeri-kami/1.jpg" alt="img-1" class="object-cover w-full h-full rounded-lg">
            </div>
            <div class="w-[22rem] h-[22rem] md:h-72 md:w-72 lg:w-96 lg:h-96 rounded-lg">
                <img src="/img/galeri-kami/1.jpg" alt="img-1" class="object-cover w-full h-full rounded-lg">
            </div>
            <div class="w-[22rem] h-[22rem] md:h-72 md:w-72 lg:w-96 lg:h-96 rounded-lg">
                <img src="/img/galeri-kami/1.jpg" alt="img-1" class="object-cover w-full h-full rounded-lg">
            </div>
            <div class="w-[22rem] h-[22rem] md:h-72 md:w-72 lg:w-96 lg:h-96 rounded-lg">
                <img src="/img/galeri-kami/1.jpg" alt="img-1" class="object-cover w-full h-full rounded-lg">
            </div>
        </div>
        
        <button class="bg-black font-semibold w-3/4 md:w-1/4 py-4 text-white">LIHAT LEBIH BANYAK</button>
    </section>
        
    {{-- Footer --}}
    <section class="w-full flex flex-col md:flex-row justify-center items-center gap-10 md:gap-20 py-14 md:py-20 px-4 bg-[#232323]">
        <div class="text-white flex flex-col gap-6 w-full md:w-1/2">
            <h2 class="font-bold text-xl md:text-2xl">Tasty Food</h2>
            <p class="font-light text-sm md:text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum eaque eveniet saepe! Accusantium sint laudantium, autem similique doloremque reiciendis. Provident ut maiores nulla et vero minus esse dignissimos facere obcaecati, dolores suscipit dolorum tempore voluptatibus saepe. Architecto, soluta aliquam modi officiis dolorum deserunt dolores delectus mollitia, eaque, adipisci omnis! Et?</p>
            <div class="flex gap-6">
                <a href="facebook.com"><img src="/img/icons/facebook-icon.png" alt="facebook-icon" class="w-6 md:w-8"></a>
                <a href="x.com"><img src="img/icons/twitter-icon.png" alt="twitter-icon" class="w-6 md:w-8"></a>
            </div>
        </div>
        <div class="flex flex-col gap-6 w-full md:w-1/2">
            <h3 class="font-bold text-xl">Usefull links</h3>
            <ul class="flex flex-col gap-2 text-sm md:text-base">
                <li><a href="/blog">Blog</a></li>
                <li><a href="/hewan">Hewan</a></li>
                <li><a href="/galeri">Galeri</a></li>
                <li><a href="/testimonial">Testimonial</a></li>
            </ul>
        </div>
    </section>
</body>
</html>
