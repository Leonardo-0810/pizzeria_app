<x-guest-layout>
    <div class="text-center mb-4">
        <h2 class="fw-bold text-danger fs-4">
            ¿Olvidaste tu contraseña? 🔐
        </h2>
    </div>

    <div class="mb-3 text-secondary text-center">
        No te preocupes, sucede a veces 😊. Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.
    </div>

    @if (session('status'))
        <div class="alert alert-success text-center">
            ✅ {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">📧 Correo Electrónico</label>
            <input id="email" class="form-control border-danger" type="email" name="email" value="{{ old('email') }}" required autofocus />
            @error('email')
                <div class="text-danger mt-1 small">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-grid mt-4">
            <button type="submit" class="btn btn-danger">
                Enviar enlace de recuperación
            </button>
        </div>
    </form>
</x-guest-layout>
