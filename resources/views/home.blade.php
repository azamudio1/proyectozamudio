<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fútbol - Bienvenido</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="bg-green-700 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Proyecto Fútbol</h1>
            <nav>
                <a href="{{ route('login') }}" class="text-white px-4 py-2 rounded hover:bg-green-600">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="text-white px-4 py-2 rounded hover:bg-green-600">Registrarse</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-800">¡Bienvenido al Portal de Fútbol!</h2>
            <p class="text-gray-600 mt-4">
                Descubre todo sobre equipos, jugadas, reglas del juego y mucho más.
            </p>
            <a href="{{ route('login') }}" class="mt-6 inline-block bg-green-700 text-white px-6 py-3 rounded-full shadow-md hover:bg-green-600">
                Comenzar Ahora
            </a>
        </div>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold text-gray-800">Equipos</h3>
                <p class="text-gray-600 mt-2">Explora los equipos más icónicos y sus jugadores.</p>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold text-gray-800">Jugadas</h3>
                <p class="text-gray-600 mt-2">Aprende las estrategias y movimientos más espectaculares.</p>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold text-gray-800">Reglas</h3>
                <p class="text-gray-600 mt-2">Conoce las reglas del juego como nunca antes.</p>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white mt-10 py-4">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Proyecto Fútbol. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
