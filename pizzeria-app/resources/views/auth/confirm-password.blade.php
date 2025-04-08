<x-guest-layout>
    <div class="text-center mb-4">
        <h2 class="fw-bold text-danger fs-4">
            Confirma tu contraseña 🔐
        </h2>
    </div>

    <div class="text-secondary text-center mb-3">
        Esta es una zona segura de la aplicación. Por favor, confirma tu contraseña para continuar.
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label fw-bold">🔑 Contraseña</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control border-danger" />
            @error('password')
                <div class="text-danger mt-1 small">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-grid mt-4">
            <button type="submit" class="btn btn-danger">
                Confirmar
            </button>
        </div>
    </form>
</x-guest-layout>
