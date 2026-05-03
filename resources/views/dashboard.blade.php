<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            🚀 Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-100 border-l-4 border-green-500 p-6 rounded-lg shadow">
                <h1 class="text-3xl font-bold text-green-700 mb-2">¡Bienvenido, {{ Auth::user()->name }}! 🎉</h1>
                <p class="text-green-600 text-lg">Has accedido al área privada del sistema.</p>
                <p class="text-gray-500 mt-2">Esta vista solo es visible para usuarios registrados e autenticados.</p>
            </div>

            <div class="mt-6 grid grid-cols-3 gap-4">
                <div class="bg-blue-500 text-white p-6 rounded-lg text-center shadow">
                    <h3 class="text-2xl font-bold">📊 Estadísticas</h3>
                    <p class="mt-2">Panel de control activo</p>
                </div>
                <div class="bg-purple-500 text-white p-6 rounded-lg text-center shadow">
                    <h3 class="text-2xl font-bold">⚙️ Configuración</h3>
                    <p class="mt-2">Gestiona tu cuenta</p>
                </div>
                <div class="bg-orange-500 text-white p-6 rounded-lg text-center shadow">
                    <h3 class="text-2xl font-bold">Notificaciones</h3>
                    <p class="mt-2">Sin notificaciones nuevas</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>