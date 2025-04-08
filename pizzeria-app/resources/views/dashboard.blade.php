<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-red-700 leading-tight">
            🍕 Bienvenido al Sistema de Pizzería
        </h2>
    </x-slot>

    <div class="py-12 bg-yellow-50 min-h-screen">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-xl overflow-hidden border-l-8 border-red-500">
                <div class="p-8 flex items-center gap-6">
                    <img src="https://cdn-icons-png.flaticon.com/512/3132/3132693.png" alt="Pizza" class="w-21 h-21">
                    <div class="text-gray-800">
                        <h3 class="text-2xl font-semibold text-red-600">¡Estás dentro! 👏</h3>
                        <p class="mt-2 text-gray-600">
                            Ahora puedes gestionar pedidos, ingredientes, empleados y mucho más.
                        </p>
                        <p class="mt-1 text-sm text-gray-500">
                            Usa el menú de navegación para comenzar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
