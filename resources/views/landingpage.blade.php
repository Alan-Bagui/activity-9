<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-blue-500 to-purple-600 min-h-screen flex items-center justify-center">
    <div class="text-center text-white">
        <h1 class="text-6xl font-bold mb-4">🌟 Bienvenido</h1>
        <p class="text-xl mb-8">Área pública — Por favor inicia sesión para continuar</p>
        <div class="space-x-4">
            <a href="/login" class="bg-white text-purple-600 px-6 py-3 rounded-full font-bold hover:bg-gray-100">
                Iniciar Sesión
            </a>
            <a href="/register" class="border-2 border-white text-white px-6 py-3 rounded-full font-bold hover:bg-white hover:text-purple-600">
                Registrarse
            </a>
        </div>
    </div>
</body>
</html>