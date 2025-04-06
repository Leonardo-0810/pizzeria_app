<x-guest-layout>
    <div class="text-center mb-4">
        <h2 class="fw-bold text-danger fs-4">
            Verifica tu correo electrónico 📬
        </h2>
    </div>

    <div class="mb-3 text-secondary">
        Gracias por registrarte en <strong>PizzeríaApp</strong> 🍕. Antes de continuar, por favor verifica tu dirección de correo electrónico haciendo clic en el enlace que te enviamos.
        <br><br>
        Si no recibiste el correo, te podemos enviar otro.
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success py-2 px-3 text-center">
            ✅ ¡Te hemos enviado un nuevo enlace de verificación!
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mt-4">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-danger">
                Reenviar Correo
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link text-danger text-decoration-none">
                Cerrar Sesión
            </button>
        </form>
    </div>
</x-guest-layout>
