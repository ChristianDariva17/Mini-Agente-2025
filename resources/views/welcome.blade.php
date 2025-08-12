<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema Mini Agente</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans bg-gray-50 text-gray-800">

    <!-- HEADER -->
    <header class="bg-white shadow-md fixed top-0 left-0 w-full z-60">
        <div>
            <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-indigo-600">💼 Sistema Mini Agente</h1>
                    <nav>
                        @if (Route::has('login'))
                            <div class="flex gap-4">
                                <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 font-semibold">Iniciar Sesión</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-gray-700 hover:text-indigo-600 font-semibold">Registrarse</a>
                        @endif
                    </div>
                        @endif
            </nav>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="pt-24">
        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-indigo-500 to-purple-500 text-black py-10">
            <div class="max-w-4xl mx-auto text-center px-4">
                <h2 class="text-4xl font-bold mb-4">Bienvenido a Mini Agente</h2>
                <p class="text-lg mb-6">
                    Una plataforma simple y segura para administrar tu negocio y operaciones diarias.
                </p>
            </div>
        </section>

        <!-- Información del sistema -->
        <section class="max-w-6xl mx-auto px-4 py-16 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold text-indigo-600 mb-2">⚡ Rápido</h3>
                <p class="text-gray-600">Interfaz sencilla y optimizada para que trabajes sin complicaciones.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold text-indigo-600 mb-2">🔒 Seguro</h3>
                <p class="text-gray-600">Tus datos están protegidos con estándares modernos de seguridad.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold text-indigo-600 mb-2">🌍 Accesible</h3>
                <p class="text-gray-600">Disponible desde cualquier dispositivo con conexión a Internet.</p>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white text-center py-6">
        <p class="text-sm">&copy; {{ date('Y') }} Sistema Mini Agente. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
