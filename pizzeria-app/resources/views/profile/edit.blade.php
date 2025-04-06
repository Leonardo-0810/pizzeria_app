<x-app-layout>
    <x-slot name="header">
        <h2 class="fs-3 fw-bold text-danger">
            🍕 Perfil del Usuario
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container">
            <div class="row g-4">

                <!-- Actualizar información -->
                <div class="col-12">
                    <div class="p-4 bg-white rounded shadow border border-danger-subtle">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <!-- Cambiar contraseña -->
                <div class="col-12">
                    <div class="p-4 bg-white rounded shadow border border-warning-subtle">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <!-- Eliminar cuenta -->
                <div class="col-12">
                    <div class="p-4 bg-white rounded shadow border border-dark-subtle">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
