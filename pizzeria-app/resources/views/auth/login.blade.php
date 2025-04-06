<x-guest-layout>
    <div class="text-center mb-4">
        <h2 class="mt-3 fw-bold text-danger fs-4">
            Bienvenido a PizzeríaApp 🍕
        </h2>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Correo -->
        <div class="mb-3">
            <label for="email" class="form-label">
                📧 Correo Electrónico
            </label>
            <input id="email" class="form-control border-danger" type="email" name="email" :value="old('email')" required autofocus>
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
        </div>

        <!-- Contraseña -->
        <div class="mb-3">
            <label for="password" class="form-label">
                🔒 Contraseña
            </label>
            <input id="password" class="form-control border-danger" type="password" name="password" required autocomplete="current-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
        </div>

        <!-- Recuérdame -->
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
            <label class="form-check-label" for="remember_me">
                Recuérdame
            </label>
        </div>

        <!-- Enlaces y botón -->
        <div class="d-flex justify-content-between align-items-center">
            @if (Route::has('password.request'))
                <a class="text-decoration-none text-danger small" href="{{ route('password.request') }}">
                    ¿Olvidaste tu contraseña?
                </a>
            @endif

            <button type="submit" class="btn btn-danger">
                Ingresar
            </button>
        </div>
    </form>
</x-guest-layout>
