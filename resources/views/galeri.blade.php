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
    <section class="w-full flex flex-col md:flex-row justify-center items-center md:gap-24 py-16 md:py-20 px-4 md:px-14 bg-[#232323]">
        <div class="text-white flex flex-col gap-4 w-full md:w-1/2">
            <h2 class="font-bold text-2xl md:text-3xl">Tasty Food</h2>
            <p class="font-light text-sm md:text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum eaque eveniet saepe! Accusantium sint laudantium, autem similique doloremque reiciendis. Provident ut maiores nulla et vero minus esse dignissimos facere obcaecati, dolores suscipit dolorum tempore voluptatibus saepe. Architecto, soluta aliquam modi officiis dolorum deserunt dolores delectus mollitia, eaque, adipisci omnis! Et?</p>
            <div class="flex gap-4">
                <a href="facebook.com"><img src="/img/icons/facebook-icon.png" alt="facebook-icon" class="w-6 h-6 md:w-8 md:h-8"></a>
                <a href="x.com"><img src="img/icons/twitter-icon.png" alt="twitter-icon" class="w-6 h-6 md:w-8 md:h-8"></a>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-12 w-full md:w-1/2">
            <div class="text-white flex flex-col gap-4">
                <h3 class="font-bold text-2xl">Usefull links</h3>
                <ul class="flex flex-col gap-2 text-base font-normal">
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/hewan">Hewan</a></li>
                    <li><a href="/galeri">Galeri</a></li>
                    <li><a href="/testimonial">Testimonial</a></li>
                </ul>
            </div>
            <div class="text-white flex flex-col gap-4">
                <h3 class="font-bold text-2xl">Privacy</h3>
                <ul class="flex flex-col gap-2 text-base font-normal">
                    <li><a href="/karir">Karir</a></li>
                    <li><a href="/tentang-kami">Tentang Kami</a></li>
                    <li><a href="/kontak-kami">Kontak Kami</a></li>
                    <li><a href="/servis">Servis</a></li>
                </ul>
            </div>
            <div class="text-white flex flex-col gap-4">
                <h3 class="font-bold text-2xl">Contact Info</h3>
                <ul class="flex flex-col gap-2 text-base font-normal">
                    <li class="flex items-center gap-2">
                        <img src="/img/icons/email-icon.png" alt="email-icon">
                        <a href="mailto:tastyfood@gmail.com">tastyfood@gmail.com</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <img src="/img/icons/phone-icon.png" alt="email-icon">
                        +62 812 3456 7890
                    </li>
                    <li class="flex items-center gap-2">
                        <img src="/img/icons/address-icon.png" alt="email-icon">
                        Kota Bandung, Jawa Barat
                    </li>
                </ul>
            </div>
        </div>
    </section>
    </body>
</html>