<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Club</title>
    @vite('resources/css/app.css')

    <!-- Anime Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Press+Start+2P&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link rel="icon" type="image/png" href="{{ asset('images/otaku.png') }}">
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

        <!-- Big Welcome -->
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 animate-pulse leading-none"
            style="font-family: 'Bangers', cursive;">
            ✨ WELCOME TO ANIME CLUB ✨
        </h1>

        <!-- Subtitle -->
        <p class="text-lg md:text-2xl text-gray-200 mb-12 drop-shadow-lg"
           style="font-family: 'Press Start 2P', cursive;">
            Where Otakus Unite!
        </p>

        <!-- Buttons -->
        <div class="flex justify-center gap-10 mb-16">
            <a href="{{ route('login') }}"
               class="px-3 py-1.5 rounded-xl bg-white text-purple-700 font-bold text-lg shadow-md 
                      border-2 border-purple-300 hover:scale-110 
                      hover:shadow-[0_0_30px_rgba(168,85,247,0.8)] 
                      active:translate-y-1 transition-all duration-200"
               style="font-family: 'Press Start 2P', cursive;">
                LOGIN
            </a>

            <a href="{{ route('register') }}"
               class="px-3 py-1.5 rounded-xl bg-white text-red-600 font-bold text-lg shadow-md 
                      border-2 border-pink-300 hover:scale-110 
                      hover:shadow-[0_0_30px_rgba(239,68,68,0.8)] 
                      active:translate-y-1 transition-all duration-200"
               style="font-family: 'Press Start 2P', cursive;">
                REGISTER
            </a>
        </div>

        <!-- Features Showcase -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl w-full text-white">

            <!-- Track Anime -->
            <div class="bg-gray-800/80 rounded-3xl shadow-xl p-6 text-center hover:scale-105 transition-transform">
                <div class="text-4xl mb-3">🎬</div>
                <h3 class="text-xl font-bold mb-2" style="font-family: 'Bangers', cursive;">Track Anime</h3>
                <p class="text-sm text-gray-300" style="font-family: 'Press Start 2P', cursive;">
                    Keep track of your watched episodes and progress easily.
                </p>
            </div>

            <!-- Manage Reading List -->
            <div class="bg-gray-800/80 rounded-3xl shadow-xl p-6 text-center hover:scale-105 transition-transform">
                <div class="text-4xl mb-3">📚</div>
                <h3 class="text-xl font-bold mb-2" style="font-family: 'Bangers', cursive;">Reading List</h3>
                <p class="text-sm text-gray-300" style="font-family: 'Press Start 2P', cursive;">
                    Organize your Manga, Manhwa, Manhua, Webtoons & Novels.
                </p>
            </div>

            <!-- Profile & Customization -->
            <div class="bg-gray-800/80 rounded-3xl shadow-xl p-6 text-center hover:scale-105 transition-transform">
                <div class="text-4xl mb-3">👤</div>
                <h3 class="text-xl font-bold mb-2" style="font-family: 'Bangers', cursive;">Profile & Customization</h3>
                <p class="text-sm text-gray-300" style="font-family: 'Press Start 2P', cursive;">
                    Personalize your profile and make it your own otaku hub.
                </p>
            </div>
        </div>

    </div>
</body>
</html>
