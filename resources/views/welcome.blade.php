<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: window.matchMedia('(prefers-color-scheme: dark)').matches }" @mediachange.window="darkMode = event.matches" :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VelsNote </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js"></script>
</head>
<body :class="{ 'bg-gray-900 text-white': darkMode, 'bg-white text-gray-900': !darkMode }" class="min-h-screen flex items-center justify-center">
    <div class="max-w-6xl w-full p-8 flex items-center justify-between flex-col lg:flex-row">
        <!-- Text Section -->
        <div class="text-center lg:text-left mb-8 lg:mb-0">
            <h1 class="text-5xl font-extrabold mb-6 tracking-tight">Welcome to <span class="text-red-600">VelsNoteApp</span></h1>
            <p class="text-lg mb-6 leading-relaxed">Your one-stop solution for managing notes. Create, edit, and organize your thoughts seamlessly. Start now to unleash your productivity!</p>
            <div class="flex space-x-4 justify-center lg:justify-start">
                <a href="{{ route('login') }}" class="px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition focus:outline-none focus:ring focus:ring-blue-300">
                    Login
                </a>
                <a href="{{ route('register') }}" class="px-8 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition focus:outline-none focus:ring focus:ring-green-300">
                    Register
                </a>
            </div>
        </div>
        <!-- SVG Illustration -->
        <div class="w-full max-w-lg">
            <img src="{{asset('svg/undraw_notebook_8ihb.svg')}}" alt="">
        </div>
    </div>
</body>
</html>
