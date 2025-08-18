<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Agente - Bienvenida</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- HEADER -->
    <header class="bg-indigo-600 text-white py-4 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-6">
            <h1 class="text-2xl font-bold flex items-center gap-2">💼 Mini Agente</h1>
            <span class="text-sm">Sistema Interno</span>
        </div>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="flex items-center justify-center h-[calc(100vh-80px)] px-4">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Bienvenido</h2>
        <p class="text-gray-600 mb-6">Inicie Sesion</p>

        <div class="flex flex-col gap-4">
            <a href="{{ route('login') }}" 
                class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-500 transition">
                    Iniciar Sesion
            </a>
            <a href="{{route('register')}}"
                class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-500 transition">
                Registrar
            </a>
        </div>
    </div>
</main>


    <!-- FOOTER -->
    <footer class="bg-gray-900 text-gray-400 text-center py-4">
        <p>&copy; {{ date('Y') }} Mini Agente. Uso exclusivo interno.</p>
    </footer>

</body>
</html>
