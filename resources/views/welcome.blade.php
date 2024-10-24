<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student Management</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
           
        @endif
        <style>
            .login-register {
                display: flex;
                justify-content: center;
                gap: 20px;
                margin-top: 20px;
                font-size: 1.5rem;
                transition: transform 0.3s ease, background-color 0.3s ease;
            }
            .login-register a {
                padding: 10px 20px;
                border-radius: 8px;
                background-color: rgba(255, 255, 255, 0.1);
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            .login-register a:hover {
                transform: scale(1.1);
                background-color: rgba(255, 45, 32, 0.8);
                color: white;
            }
            h1 {
                text-align: center;
                font-size: 2.5rem;
                font-weight: 600;
                margin-top: 40px;
                color: #FF2D20;
                text-transform: uppercase;
                letter-spacing: 1.5px;
            }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <!-- Header and SVG omitted for brevity -->
                    
                    <!-- Add the heading for User Management System -->
                    <h1>This is User Management System</h1>

                    <!-- Center the login and register links with motion effects -->
                    @if (Route::has('login'))
                        <div class="login-register">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="transition-all">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="transition-all">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="transition-all">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Student Management System
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
