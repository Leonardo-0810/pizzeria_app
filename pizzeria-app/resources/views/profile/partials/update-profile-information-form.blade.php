<section class="bg-white p-4 rounded shadow-sm border border-danger-subtle">
    <header class="mb-4">
        <h2 class="fs-4 fw-bold text-danger">
            🍕 Información del Perfil
        </h2>
        <p class="text-muted">
            Actualiza tu nombre y correo electrónico registrados en el sistema.
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="row g-3">
        @csrf
        @method('patch')

        <!-- Nombre -->
        <div class="col-12">
            <label for="name" class="form-label fw-semibold">Nombre</label>
            <input id="name" name="name" type="text" class="form-control border-danger" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            @error('name')
                <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="col-12">
            <label for="email" class="form-label fw-semibold">Correo electrónico</label>
            <input id="email" name="email" type="email" class="form-control border-danger" value="{{ old('email', $user->email) }}" required autocomplete="username">
            @error('email')
                <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2 alert alert-warning p-2">
                    <p class="mb-1 small">
                        Tu correo electrónico no está verificado.
                        <button form="send-verification" class="btn btn-sm btn-outline-danger ms-2">
                            Reenviar verificación
                        </button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                        <div class="text-success small mt-1">
                            Se envió un nuevo enlace de verificación a tu correo.
                        </div>
                    @endif
                </div>
            @endif
        </div>

        <!-- Botón Guardar -->
        <div class="col-12 d-flex align-items-center gap-2">
            <button type="submit" class="btn btn-danger">
                Guardar cambios
            </button>

            @if (session('status') === 'profile-updated')
                <span
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-success small"
                >Guardado correctamente.</span>
            @endif
        </div>
    </form>
</section>
