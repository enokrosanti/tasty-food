<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kontak Kami</title>
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
        <h1 class="font-bold text-4xl md:text-6xl md:my-36 text-white text-left self-start">KONTAK KAMI</h1>
    </section>

    {{-- Form --}}
    <section class="flex bg-white flex-col items-center gap-8 px-4 md:px-14 py-20">
        <h2 class="text-2xl text-left text-black font-bold self-start">KONTAK KAMI</h2>
        <form action="" class="flex flex-col gap-3 w-full">
            <div class="flex flex-col md:flex-row gap-3">
                <div class="flex flex-col gap-3 w-full md:w-1/2">
                    <input type="text" placeholder="Subject" class="border border-gray-700 font-normal text-sm text-black p-4 rounded-xl placeholder:text-sm focus:outline-none" />
                    <input type="text" placeholder="Name" class="border border-gray-700 font-normal text-sm text-black p-4 rounded-xl placeholder:text-sm focus:outline-none" />
                    <input type="email" placeholder="Email" class="border border-gray-700 font-normal text-sm text-black p-4 rounded-xl placeholder:text-sm focus:outline-none" />
                </div>
                <textarea name="message" id="message" placeholder="Message" class="focus:outline-none border border-gray-700 text-black p-4 rounded-xl text-sm placeholder:text-sm w-full md:w-1/2 h-auto"></textarea>
            </div>
            <button type="submit" class="bg-black text-white p-4 rounded-lg">KIRIM</button>
        </form>          
    </section>

    <section class="flex bg-white items-center justify-center md:gap-24 px-4 md:px-14 py-20 flex-wrap md:flex-nowrap gap-8">
        <div class="flex flex-col items-center gap-2 w-full md:w-1/3">
            <img src="/img/kontak-kami/email-icon.png" alt="email-icon" class="w-24 h-24">
            <h4 class="text-black font-bold text-xl">EMAIL</h4>
            <p class="text-base font-normal text-black">tastyfood@gmail.com</p>
        </div>
        <div class="flex flex-col items-center gap-2 w-full md:w-1/3">
            <img src="/img/kontak-kami/phone-icon.png" alt="phone-icon" class="w-24 h-24">
            <h4 class="text-black font-bold text-xl">PHONE</h4>
            <p class="text-base font-normal text-black">+62 812 3456 7890</p>
        </div>
        <div class="flex flex-col items-center gap-2 w-full md:w-1/3">
            <img src="/img/kontak-kami/address-icon.png" alt="address-icon" class="w-24 h-24">
            <h4 class="text-black font-bold text-xl">LOCATION</h4>
            <p class="text-base font-normal text-black">Kota Bandung, Jawa Barat</p>
        </div>
    </section>
    
    {{-- Map --}}
    <section class="flex bg-[#f4f4f4] items-center justify-center px-4 md:px-14 py-20 w-full">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56400423251!2d107.56075467629881!3d-6.903442379271375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1728538247779!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
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
