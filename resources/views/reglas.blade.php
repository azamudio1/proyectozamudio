<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reglas del Juego</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="bg-green-700 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Reglas del Juego</h1>
            <a href="{{ route('home') }}" class="text-white px-4 py-2 rounded hover:bg-green-600">Volver</a>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-3xl font-bold text-gray-800">Reglas del Juego</h2>
            <p class="text-gray-600 mt-4">Consulta y busca las reglas del juego directamente aquí:</p>
            
            <!-- PDF interactivo -->
            <iframe 
                src="{{ asset('archivos/Reglas.pdf') }}" 
                width="100%" 
                height="600px" 
                class="mt-4 border rounded"
            ></iframe>
        </div>
    </main>

    <footer class="bg-gray-800 text-white mt-10 py-4">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Proyecto Fútbol. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
