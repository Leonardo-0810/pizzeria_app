<x-guest-layout>
    <div class="text-center mb-4">
        <h2 class="mt-3 fw-bold text-danger fs-4">
            ¡Crea tu cuenta en PizzeríaApp 🍕!
        </h2>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nombre -->
        <div class="mb-3">
            <label for="name" class="form-label">👤 Nombre</label>
            <input id="name" class="form-control border-danger" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
        </div>

        <!-- Correo -->
        <div class="mb-3">
            <label for="email" class="form-label">📧 Correo Electrónico</label>
            <input id="email" class="form-control border-danger" type="email" name="email" :value="old('email')" required autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
        </div>

        <!-- Rol -->
        <div>
            <label for="role" class="block text-sm font-medium text-gray-700">Rol</label>
            <select name="role" id="role" required class="form-control border-danger" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <option value="cliente">Cliente</option>
                <option value="empleado">Empleado</option>
            </select>
            @error('role')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>


        <!-- Contraseña -->
        <div class="mb-3">
            <label for="password" class="form-label">🔒 Contraseña</label>
            <input id="password" class="form-control border-danger" type="password" name="password" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
        </div>

        <!-- Confirmar Contraseña -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">🔐 Confirmar Contraseña</label>
            <input id="password_confirmation" class="form-control border-danger" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <!-- Botón -->
        <div class="d-flex justify-content-end mt-4">
            <a class="text-decoration-none text-danger me-3" href="{{ route('login') }}">
                ¿Ya tienes cuenta?
            </a>
            <button type="submit" class="btn btn-danger">
                Registrarse
            </button>
        </div>
    </form>
</x-guest-layout>
