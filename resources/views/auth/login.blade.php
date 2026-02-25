<x-guest-layout>

    {{-- Session status (e.g. password reset link sent) --}}
    @if (session('status'))
        <div class="alert d-flex align-items-center gap-2 mb-4 py-2 px-3"
             style="background:#F0FDF4; border:1px solid #BBF7D0; border-radius:8px; color:#15803D; font-size:.85rem;">
            ✅ {{ session('status') }}
        </div>
    @endif

    {{-- Header --}}
    <div class="mb-4">
        <h5 class="fw-800 mb-1" style="font-weight:800; font-size:1.2rem; letter-spacing:-.02em;">
            Connexion
        </h5>
        <p class="text-muted mb-0" style="font-size:.85rem;">
            Content de vous revoir ! Entrez vos identifiants.
        </p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Email --}}
        <div class="mb-3">
            <label for="email" class="form-label fw-semibold" style="font-size:.82rem; color:#374151;">
                Adresse e-mail
            </label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="username"
                placeholder="votre@email.com"
                class="form-control @error('email') is-invalid @enderror"
                style="border-radius:8px; font-size:.9rem; padding:10px 12px; border-color:#D1D5DB;"
            >
            @error('email')
                <div class="invalid-feedback" style="font-size:.78rem;">{{ $message }}</div>
            @enderror
        </div>

        {{-- Password --}}
        <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <label for="password" class="form-label fw-semibold mb-0" style="font-size:.82rem; color:#374151;">
                    Mot de passe
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                       class="text-decoration-none"
                       style="font-size:.78rem; color:#16A34A;">
                        Mot de passe oublié ?
                    </a>
                @endif
            </div>
            <input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="••••••••"
                class="form-control @error('password') is-invalid @enderror"
                style="border-radius:8px; font-size:.9rem; padding:10px 12px; border-color:#D1D5DB;"
            >
            @error('password')
                <div class="invalid-feedback" style="font-size:.78rem;">{{ $message }}</div>
            @enderror
        </div>

        {{-- Remember me --}}
        <div class="mb-4">
            <div class="form-check">
                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                    class="form-check-input"
                    style="border-color:#D1D5DB; accent-color:#16A34A;"
                >
                <label for="remember_me" class="form-check-label" style="font-size:.85rem; color:#6B7280;">
                    Se souvenir de moi
                </label>
            </div>
        </div>

        {{-- Submit --}}
        <button
            type="submit"
            class="btn w-100 fw-semibold"
            style="background:#16A34A; color:#fff; border-radius:9px; padding:11px; font-size:.9rem; border:none; transition:background .15s;"
            onmouseover="this.style.background='#15803D'"
            onmouseout="this.style.background='#16A34A'"
        >
            Se connecter →
        </button>
    </form>

    {{-- Register link --}}
    <p class="text-center mt-4 mb-0" style="font-size:.84rem; color:#6B7280;">
        Pas encore de compte ?
        <a href="{{ route('register') }}"
           class="text-decoration-none fw-semibold"
           style="color:#16A34A;">
            Créer un compte
        </a>
    </p>

</x-guest-layout>