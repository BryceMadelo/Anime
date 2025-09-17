<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Club</title>
    @vite('resources/css/app.css')

    <!-- Anime Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen flex items-center justify-center relative bg-black overflow-hidden">

    <!-- Background GIF -->
    <img src="https://i.pinimg.com/originals/71/56/a0/7156a0a530a855ef70df0ba333affa35.gif" 
         alt="Anime Background" 
         class="absolute inset-0 w-full h-full object-cover">

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/70"></div>

    <!-- Content -->
    <div class="relative z-10 flex flex-col items-center text-center px-6">

        <!-- Big Anime Welcome -->
        <h1 class="text-xl font-extrabold text-white mb-8 animate-pulse leading-none overflow-visible"
            style="font-family: 'Bangers', cursive;">
            ✨ WELCOME TO ANIME CLUB ✨
        </h1>


        <!-- Subtitle -->
        <p class="text-xl md:text-2xl text-gray-200 mb-12 drop-shadow-lg"
           style="font-family: 'Press Start 2P', cursive;">
            Where Otakus Unite!
        </p>

        <!-- Buttons -->
        <div class="absolute top-24 flex justify-center gap-12 w-full max-w-3xl mx-auto">
            <a href="{{ route('login') }}"
            class="inline-block px-4 py-2 rounded-2xl bg-white text-purple-700 font-bold text-2xl shadow-xl border-4 border-purple-300 hover:scale-110 hover:shadow-[0_0_30px_rgba(168,85,247,0.8)] active:translate-y-1 transition-all duration-200 text-center"
            style="font-family: 'Press Start 2P', cursive;">
                LOGIN
            </a>
            <a href="{{ route('register') }}"
            class="inline-block px-4 py-2 rounded-2xl bg-white text-red-600 font-bold text-2xl shadow-xl border-4 border-pink-300 hover:scale-110 hover:shadow-[0_0_30px_rgba(239,68,68,0.8)] active:translate-y-1 transition-all duration-200 text-center"
            style="font-family: 'Press Start 2P', cursive;">
                REGISTER
            </a>
        </div>

    </div>
</body>
</html>
