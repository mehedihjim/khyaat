<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khyaat - Coming Soon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .brand-name {
            font-family: 'Playfair Display', serif;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }
        .fade-in-up { 
            animation: fadeInUp 1s ease-out forwards; 
            opacity: 0;
        }
        .float { animation: float 8s ease-in-out infinite; }
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            background-size: 1000px 100%;
            animation: shimmer 3s infinite;
        }
        .text-gradient {
            background: linear-gradient(135deg, #d4af37 0%, #f4e5c2 50%, #d4af37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-zinc-950 min-h-screen flex items-center justify-center p-4 overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-96 h-96 bg-amber-900 rounded-full mix-blend-multiply filter blur-3xl opacity-10 float"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-yellow-800 rounded-full mix-blend-multiply filter blur-3xl opacity-10 float" style="animation-delay: 3s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-full">
            <div class="absolute top-10 right-1/4 w-2 h-2 bg-amber-400 rounded-full opacity-40"></div>
            <div class="absolute bottom-1/4 left-1/3 w-1 h-1 bg-amber-300 rounded-full opacity-30"></div>
            <div class="absolute top-1/3 right-1/3 w-1 h-1 bg-yellow-400 rounded-full opacity-50"></div>
        </div>
    </div>

    <!-- Main content -->
    <div class="relative z-10 text-center max-w-5xl mx-auto px-4">
        <!-- Decorative line -->
        <div class="mb-8 fade-in-up">
            <div class="h-px w-24 bg-gradient-to-r from-transparent via-amber-500 to-transparent mx-auto"></div>
        </div>

        <!-- Brand name -->
        <h1 class="brand-name text-7xl md:text-9xl font-bold text-gradient mb-4 fade-in-up delay-1 tracking-wider">
            KHYAAT
        </h1>

        <!-- Tagline -->
        <p class="text-amber-200 text-lg md:text-xl mb-12 fade-in-up delay-2 tracking-widest uppercase font-light">
            Coming Soon~
        </p>

        <!-- Main message -->
        <div class="mb-16 fade-in-up delay-2">
            <p class="text-zinc-300 text-xl md:text-2xl mb-6 max-w-2xl mx-auto leading-relaxed font-light">
                We're curating an exclusive collection that redefines fashion.
            </p>
            <p class="text-zinc-400 text-base md:text-lg font-light">
                Our doors open soon.
            </p>
        </div>

        <!-- Fashion icons/decorative elements -->
        <div class="flex justify-center gap-12 mb-16 fade-in-up delay-3">
            <div class="text-amber-400 opacity-60 hover:opacity-100 transition-opacity duration-300">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <div class="text-amber-400 opacity-60 hover:opacity-100 transition-opacity duration-300">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
            </div>
            <div class="text-amber-400 opacity-60 hover:opacity-100 transition-opacity duration-300">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                </svg>
            </div>
        </div>

        <!-- Decorative line -->
        <div class="mb-12 fade-in-up delay-3">
            <div class="h-px w-24 bg-gradient-to-r from-transparent via-amber-500 to-transparent mx-auto"></div>
        </div>

        <!-- Social links -->
        <div class="flex justify-center gap-8 fade-in-up delay-3">
            <a href="#" class="text-zinc-400 hover:text-amber-400 transition-all duration-300 transform hover:scale-110">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
            <a href="#" class="text-zinc-400 hover:text-amber-400 transition-all duration-300 transform hover:scale-110">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.46 6c-.85.38-1.78.64-2.75.76 1-.6 1.76-1.55 2.12-2.68-.93.55-1.96.96-3.06 1.18-.88-.95-2.13-1.54-3.51-1.54-2.66 0-4.82 2.16-4.82 4.82 0 .38.04.75.13 1.1-4-.2-7.55-2.12-9.93-5.04-.42.72-.66 1.55-.66 2.44 0 1.67.85 3.15 2.14 4.01-.79-.02-1.53-.24-2.18-.6v.06c0 2.34 1.66 4.29 3.87 4.73-.4.11-.83.17-1.27.17-.31 0-.62-.03-.92-.08.62 1.94 2.42 3.35 4.55 3.39-1.67 1.31-3.77 2.09-6.05 2.09-.39 0-.78-.02-1.17-.07 2.18 1.4 4.77 2.21 7.55 2.21 9.06 0 14.01-7.5 14.01-14.01 0-.21 0-.42-.02-.63.96-.7 1.8-1.56 2.46-2.55z"/>
                </svg>
            </a>
            <a href="#" class="text-zinc-400 hover:text-amber-400 transition-all duration-300 transform hover:scale-110">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                </svg>
            </a>
        </div>

        <!-- Footer text -->
        <div class="mt-16 fade-in-up delay-3">
            <p class="text-zinc-600 text-sm tracking-wider">
                © 2025 KHYAAT. ALL RIGHTS RESERVED BY <a href="https://beacons.ai/mhjim">JIM</a>.
            </p>
        </div>
    </div>
</body>
</html>