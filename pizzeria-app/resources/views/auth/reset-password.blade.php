<x-guest-layout>
    <div class="text-center mb-4">
        <h2 class="mt-3 fw-bold text-danger fs-4">
            Restablece tu contraseña 🔐
        </h2>
    </div>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Token oculto -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">📧 Correo Electrónico</label>
            <input id="email" class="form-control border-danger" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
        </div>

        <!-- Nueva contraseña -->
        <div class="mb-3">
            <label for="password" class="form-label">🔒 Nueva Contraseña</label>
            <input id="password" class="form-control border-danger" type="password" name="password" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
        </div>

        <!-- Confirmar contraseña -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">🔐 Confirmar Contraseña</label>
            <input id="password_confirmation" class="form-control border-danger" type="password" name="password_confirmation" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
        </div>

        <!-- Botón -->
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-danger">
                Restablecer Contraseña
            </button>
        </div>
    </form>
</x-guest-layout>
