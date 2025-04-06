<section class="bg-white border border-danger-subtle rounded p-4 shadow-sm">
    <header class="mb-4">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <h2 class="fs-4 fw-bold text-danger">
            ⚠️ Eliminar cuenta
        </h2>
        <p class="text-muted small">
            Una vez que elimines tu cuenta, todos los datos y recursos asociados serán eliminados permanentemente. Asegúrate de descargar cualquier información que desees conservar antes de continuar.
        </p>
    </header>

    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
        Eliminar cuenta
    </button>

    <!-- Modal Confirmación -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('profile.destroy') }}" class="modal-content">
                @csrf
                @method('delete')

                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="deleteModalLabel">¿Estás seguro?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted mb-3">
                        Una vez eliminada tu cuenta, no podrás recuperarla. Por favor, ingresa tu contraseña para confirmar.
                    </p>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control border-danger" placeholder="••••••" required>
                        @if ($errors->userDeletion->get('password'))
                            <div class="text-danger small mt-1">
                                {{ $errors->userDeletion->first('password') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar definitivamente</button>
                </div>
            </form>
        </div>
    </div>
</section>
