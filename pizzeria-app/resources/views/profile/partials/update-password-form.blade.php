<section class="bg-white p-4 rounded shadow-sm border border-danger-subtle">
    <header class="mb-4">
        <h2 class="fs-4 fw-bold text-danger">
            🔐 Actualizar Contraseña
        </h2>
        <p class="text-muted">
            Asegúrate de usar una contraseña larga y aleatoria para mantener tu cuenta segura.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="row g-3">
        @csrf
        @method('put')

        <!-- Contraseña actual -->
        <div class="col-12">
            <label for="update_password_current_password" class="form-label fw-semibold">
                Contraseña actual <span class="text-danger">*</span>
            </label>
            <input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="form-control border-danger"
                required
                autocomplete="current-password"
            >
            @if ($errors->updatePassword->has('current_password'))
                <div class="text-danger small mt-1">
                    {{ $errors->updatePassword->first('current_password') }}
                </div>
            @endif
        </div>

        <!-- Nueva contraseña -->
        <div class="col-12">
            <label for="update_password_password" class="form-label fw-semibold">
                Nueva contraseña <span class="text-danger">*</span>
            </label>
            <input
                id="update_password_password"
                name="password"
                type="password"
                class="form-control border-danger"
                required
                autocomplete="new-password"
            >
            @if ($errors->updatePassword->has('password'))
                <div class="text-danger small mt-1">
                    {{ $errors->updatePassword->first('password') }}
                </div>
            @endif
        </div>

        <!-- Confirmar contraseña -->
        <div class="col-12">
            <label for="update_password_password_confirmation" class="form-label fw-semibold">
                Confirmar contraseña <span class="text-danger">*</span>
            </label>
            <input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="form-control border-danger"
                required
                autocomplete="new-password"
            >
            @if ($errors->updatePassword->has('password_confirmation'))
                <div class="text-danger small mt-1">
                    {{ $errors->updatePassword->first('password_confirmation') }}
                </div>
            @endif
        </div>

        <!-- Botón -->
        <div class="col-12 d-flex align-items-center gap-2">
            <button type="submit" class="btn btn-danger">
                Guardar cambios
            </button>

            @if (session('status') === 'password-updated')
                <span
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-success small"
                >Contraseña actualizada correctamente.</span>
            @endif
        </div>
    </form>
</section>
