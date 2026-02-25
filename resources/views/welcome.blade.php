<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EasyColoc — Gérez vos dépenses en colocation au Maroc</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* ── BASE ── */
        body {
            font-family: 'Inter', sans-serif;
            background: #F9FAFB;
            color: #111827;
            font-size: 15px;
            line-height: 1.6;
        }

        /* ── NAVBAR ── */
        .navbar {
            background: #ffffff;
            border-bottom: 1px solid #E5E7EB;
            padding: 14px 0;
        }
        .navbar-brand {
            font-size: 1.25rem;
            font-weight: 800;
            color: #111827 !important;
            letter-spacing: -.02em;
        }
        .navbar-brand .dot { color: #16A34A; }
        .nav-link {
            color: #6B7280 !important;
            font-weight: 500;
            font-size: .875rem;
            transition: color .15s;
        }
        .nav-link:hover { color: #111827 !important; }

        /* ── HERO ── */
        .hero {
            background: #ffffff;
            border-bottom: 1px solid #E5E7EB;
            padding: 72px 0 64px;
        }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #F0FDF4;
            border: 1px solid #BBF7D0;
            color: #15803D;
            font-size: .75rem;
            font-weight: 600;
            letter-spacing: .04em;
            text-transform: uppercase;
            padding: 5px 12px;
            border-radius: 100px;
            margin-bottom: 20px;
        }
        .hero h1 {
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -.03em;
            color: #111827;
            margin-bottom: 16px;
        }
        .hero h1 .highlight { color: #16A34A; }
        .hero-sub {
            font-size: 1.05rem;
            color: #6B7280;
            line-height: 1.7;
            max-width: 480px;
            margin-bottom: 28px;
        }
        .hero-checklist {
            list-style: none;
            padding: 0;
            margin: 0 0 32px;
            display: flex;
            flex-wrap: wrap;
            gap: 8px 20px;
        }
        .hero-checklist li {
            font-size: .85rem;
            color: #374151;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .hero-checklist li::before {
            content: '✓';
            color: #16A34A;
            font-weight: 700;
        }

        /* ── MOCKUP CARD ── */
        .mockup-card {
            background: #ffffff;
            border: 1px solid #E5E7EB;
            border-radius: 14px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,.07), 0 2px 4px -2px rgba(0,0,0,.05);
            overflow: hidden;
        }
        .mockup-header {
            background: #F9FAFB;
            border-bottom: 1px solid #E5E7EB;
            padding: 12px 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .mockup-title { font-weight: 600; font-size: .875rem; color: #374151; }
        .mockup-month { font-size: .78rem; color: #9CA3AF; }
        .expense-row {
            padding: 12px 16px;
            border-bottom: 1px solid #F3F4F6;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .expense-row:last-child { border-bottom: none; }
        .expense-label { font-size: .875rem; font-weight: 500; color: #111827; }
        .expense-sub   { font-size: .75rem; color: #9CA3AF; margin-top: 1px; }
        .expense-amt   { font-size: .9rem; font-weight: 700; color: #111827; }
        .mockup-footer {
            background: #F0FDF4;
            border-top: 1px solid #BBF7D0;
            padding: 12px 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .balance-pill {
            background: #F0FDF4;
            border: 1px solid #BBF7D0;
            border-radius: 8px;
            padding: 10px 14px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: .82rem;
        }

        /* ── SECTION COMMON ── */
        .section-eyebrow {
            font-size: .75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: #16A34A;
            margin-bottom: 8px;
        }
        .section-title {
            font-size: 1.85rem;
            font-weight: 800;
            letter-spacing: -.025em;
            color: #111827;
            margin-bottom: 12px;
        }
        .section-sub {
            font-size: .95rem;
            color: #6B7280;
            line-height: 1.65;
        }

        /* ── STEPS ── */
        .steps-section {
            background: #ffffff;
            border-top: 1px solid #E5E7EB;
            border-bottom: 1px solid #E5E7EB;
        }
        .step-item { text-align: center; padding: 8px; }
        .step-num {
            width: 44px; height: 44px;
            background: #16A34A; color: white;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-weight: 800; font-size: .95rem;
            margin: 0 auto 14px;
        }
        .step-title { font-weight: 700; font-size: .95rem; color: #111827; margin-bottom: 6px; }
        .step-desc  { font-size: .82rem; color: #6B7280; line-height: 1.55; }

        /* ── FEATURES ── */
        .features-section { background: #F9FAFB; }
        .feature-card {
            background: #ffffff;
            border: 1px solid #E5E7EB;
            border-radius: 12px;
            padding: 24px;
            height: 100%;
            transition: box-shadow .2s, border-color .2s;
        }
        .feature-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,.08);
            border-color: #D1FAE5;
        }
        .feature-emoji {
            font-size: 1.6rem;
            margin-bottom: 12px;
            display: block;
        }
        .feature-title { font-weight: 700; font-size: .95rem; color: #111827; margin-bottom: 6px; }
        .feature-desc  { font-size: .82rem; color: #6B7280; line-height: 1.6; margin: 0; }

        /* ── PROBLEM STRIP ── */
        .problem-section { background: #FEF2F2; border-top: 1px solid #FECACA; border-bottom: 1px solid #FECACA; }
        .problem-card {
            background: #ffffff;
            border: 1px solid #FECACA;
            border-radius: 10px;
            padding: 20px;
            height: 100%;
        }
        .problem-title { font-weight: 700; font-size: .9rem; color: #111827; margin-bottom: 6px; }
        .problem-desc  { font-size: .82rem; color: #6B7280; line-height: 1.55; margin: 0; }

        /* ── CTA ── */
        .cta-section { background: #16A34A; }
        .cta-section h2 { font-weight: 800; letter-spacing: -.025em; }

        /* ── FOOTER ── */
        .footer { background: #ffffff; border-top: 1px solid #E5E7EB; }

        /* ── BUTTONS ── */
        .btn-main {
            background: #16A34A;
            color: white;
            border: none;
            font-weight: 600;
            font-size: .9rem;
            padding: 11px 24px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: background .15s;
        }
        .btn-main:hover { background: #15803D; color: white; }
        .btn-secondary-outline {
            background: transparent;
            color: #374151;
            border: 1px solid #D1D5DB;
            font-weight: 600;
            font-size: .9rem;
            padding: 11px 24px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: border-color .15s, background .15s;
        }
        .btn-secondary-outline:hover { border-color: #9CA3AF; background: #F9FAFB; color: #111827; }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2rem; }
            .section-title { font-size: 1.5rem; }
        }
    </style>
</head>
<body>

{{-- ── NAVBAR ── --}}
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">easy<span class="dot">coloc</span></a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav me-auto gap-1">
                <li class="nav-item"><a class="nav-link" href="#comment-ca-marche">Comment ça marche</a></li>
                <li class="nav-item"><a class="nav-link" href="#fonctionnalites">Fonctionnalités</a></li>
            </ul>
            <div class="d-flex gap-2 mt-3 mt-lg-0">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn-main">Mon espace →</a>
                    @else
                        <a href="{{ route('login') }}" class="btn-secondary-outline">Se connecter</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-main">S'inscrire gratuitement</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</nav>

{{-- ── HERO ── --}}
<section class="hero">
    <div class="container">
        <div class="row align-items-center g-5">

            {{-- Left: copy --}}
            <div class="col-lg-6">
                <div class="hero-badge">
                    <span style="width:6px;height:6px;border-radius:50%;background:#16A34A;display:inline-block;"></span>
                    Gestion de colocation au Maroc
                </div>
                <h1>
                    Fini les disputes<br>
                    <span class="highlight">d'argent</span> en coloc
                </h1>
                <p class="hero-sub">
                    EasyColoc calcule automatiquement qui doit quoi à qui.
                    Ajoutez une dépense en quelques secondes — l'app répartit tout équitablement entre colocataires.
                </p>
                <ul class="hero-checklist">
                    <li>Répartition automatique</li>
                    <li>Soldes en temps réel</li>
                    <li>Historique complet</li>
                    <li>100% gratuit</li>
                </ul>
                <div class="d-flex gap-3 flex-wrap">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-main">
                            Créer ma colocation →
                        </a>
                    @endif
                    <a href="#comment-ca-marche" class="btn-secondary-outline">
                        Comment ça marche
                    </a>
                </div>
            </div>

            {{-- Right: mockup --}}
            <div class="col-lg-6">
                <div class="mockup-card">
                    <div class="mockup-header">
                        <span class="mockup-title">🧾 Dépenses — Janvier 2025</span>
                        <span class="badge bg-success-subtle text-success border border-success-subtle">4 colocataires</span>
                    </div>

                    <div class="expense-row">
                        <div>
                            <div class="expense-label">🛒 Courses Marjane</div>
                            <div class="expense-sub">Payé par Youssef · 55 DH / pers.</div>
                        </div>
                        <span class="expense-amt">220 DH</span>
                    </div>
                    <div class="expense-row">
                        <div>
                            <div class="expense-label">💡 ONEE Électricité</div>
                            <div class="expense-sub">Payé par Fatima · 43 DH / pers.</div>
                        </div>
                        <span class="expense-amt">172 DH</span>
                    </div>
                    <div class="expense-row">
                        <div>
                            <div class="expense-label">🌐 Maroc Telecom Internet</div>
                            <div class="expense-sub">Payé par Mehdi · 25 DH / pers.</div>
                        </div>
                        <span class="expense-amt">100 DH</span>
                    </div>

                    <div class="mockup-footer">
                        <span class="text-muted" style="font-size:.82rem;">Total partagé</span>
                        <span style="font-weight:800; font-size:1.1rem; color:#15803D;">4 920 DH <span style="font-size:.78rem; font-weight:500; color:#6B7280;">· 1 230 DH / pers.</span></span>
                    </div>
                </div>

                {{-- Balance summary --}}
                <div class="mt-3 p-3 rounded-3 bg-white border" style="border-color:#E5E7EB !important;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span style="font-size:.8rem; font-weight:600; color:#374151;">⚖️ Soldes actuels</span>
                        <span style="font-size:.75rem; color:#9CA3AF;">Mis à jour à l'instant</span>
                    </div>
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="font-size:.85rem; color:#374151;">Youssef</span>
                            <span class="badge bg-success-subtle text-success border border-success-subtle fw-semibold">+ 180 DH</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="font-size:.85rem; color:#374151;">Fatima</span>
                            <span class="badge bg-danger-subtle text-danger border border-danger-subtle fw-semibold">− 80 DH</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="font-size:.85rem; color:#374151;">Mehdi</span>
                            <span class="badge bg-danger-subtle text-danger border border-danger-subtle fw-semibold">− 100 DH</span>
                        </div>
                    </div>
                </div>

                <div class="alert alert-success border-0 rounded-3 mt-3 py-2 px-3 d-flex align-items-center gap-2 mb-0" style="background:#F0FDF4; color:#15803D; font-size:.82rem;">
                    ✅ <span>Mehdi a remboursé <strong>100 DH</strong> à Youssef — il y a 5 min</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── PROBLEM STRIP ── --}}
<section class="problem-section py-5">
    <div class="container">
        <div class="text-center mb-4">
            <div class="section-eyebrow">Le problème qu'on résout</div>
            <h2 class="section-title">La coloc c'est super.<br>Les comptes, beaucoup moins.</h2>
        </div>
        <div class="row g-3 justify-content-center">
            <div class="col-md-4">
                <div class="problem-card">
                    <div class="mb-2" style="font-size:1.4rem;">🤯</div>
                    <div class="problem-title">Calculs interminables</div>
                    <p class="problem-desc">Tableurs, notes sur téléphone, SMS oubliés… La gestion manuelle génère des erreurs et de la confusion.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="problem-card">
                    <div class="mb-2" style="font-size:1.4rem;">😤</div>
                    <div class="problem-title">Tensions inutiles</div>
                    <p class="problem-desc">Rappeler quelqu'un qu'il doit de l'argent est gênant. Les petites dettes s'accumulent et créent des frictions.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="problem-card">
                    <div class="mb-2" style="font-size:1.4rem;">🙈</div>
                    <div class="problem-title">Zéro transparence</div>
                    <p class="problem-desc">Impossible de savoir rapidement qui a payé quoi ce mois-ci ou quel est l'historique des remboursements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── HOW IT WORKS ── --}}
<section id="comment-ca-marche" class="steps-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-eyebrow">Simple comme un virement</div>
            <h2 class="section-title">En 4 étapes, c'est réglé</h2>
            <p class="section-sub mx-auto" style="max-width:480px;">Pas de configuration compliquée, pas de formation nécessaire.</p>
        </div>
        <div class="row g-4">
            <div class="col-6 col-md-3">
                <div class="step-item">
                    <div class="step-num">1</div>
                    <div class="step-title">Crée ta colocation</div>
                    <p class="step-desc">Invite tes colocataires par lien. Tout le monde rejoint en 30 secondes.</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="step-item">
                    <div class="step-num">2</div>
                    <div class="step-title">Ajoute une dépense</div>
                    <p class="step-desc">Montant, catégorie, payeur. La part de chacun est calculée instantanément.</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="step-item">
                    <div class="step-num">3</div>
                    <div class="step-title">Consulte les soldes</div>
                    <p class="step-desc">Qui doit combien à qui, en temps réel. Aucune ambiguïté possible.</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="step-item">
                    <div class="step-num">4</div>
                    <div class="step-title">Règle d'un clic</div>
                    <p class="step-desc">Marque un remboursement effectué. Les soldes se mettent à jour aussitôt.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── FEATURES ── --}}
<section id="fonctionnalites" class="features-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-eyebrow">Fonctionnalités</div>
            <h2 class="section-title">Tout ce dont votre coloc a besoin</h2>
            <p class="section-sub mx-auto" style="max-width:460px;">Pensé pour éliminer les frictions et rendre la gestion financière agréable.</p>
        </div>
        <div class="row g-3">
            <div class="col-md-4 col-sm-6">
                <div class="feature-card">
                    <span class="feature-emoji">⚖️</span>
                    <div class="feature-title">Répartition automatique</div>
                    <p class="feature-desc">L'algorithme calcule les soldes nets et minimise le nombre de virements nécessaires.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="feature-card">
                    <span class="feature-emoji">📊</span>
                    <div class="feature-title">Historique complet</div>
                    <p class="feature-desc">Toutes les dépenses archivées, filtrables par mois, membre ou catégorie.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="feature-card">
                    <span class="feature-emoji">🔔</span>
                    <div class="feature-title">Rappels automatiques</div>
                    <p class="feature-desc">Notifications pour les dettes en attente. Plus besoin de relancer vous-même.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="feature-card">
                    <span class="feature-emoji">🏷️</span>
                    <div class="feature-title">Catégories</div>
                    <p class="feature-desc">Courses, loyer, électricité, loisirs… Organisez chaque dépense facilement.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="feature-card">
                    <span class="feature-emoji">👥</span>
                    <div class="feature-title">Multi-colocation</div>
                    <p class="feature-desc">Gérez plusieurs colocations depuis un seul compte. Idéal pour les étudiants.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="feature-card">
                    <span class="feature-emoji">💸</span>
                    <div class="feature-title">100% gratuit</div>
                    <p class="feature-desc">Pas de frais cachés, pas d'abonnement requis pour commencer.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── CTA ── --}}
<section class="cta-section py-5">
    <div class="container text-center py-3">
        <h2 class="text-white mb-3" style="font-size:2rem; letter-spacing:-.025em;">
            Arrêtez de compter dans votre tête.
        </h2>
        <p class="text-white mb-4" style="opacity:.8; font-size:.95rem; max-width:460px; margin:0 auto 24px;">
            Créez votre colocation en 2 minutes et invitez vos colocataires.
            Gratuit, sans carte bancaire.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   class="btn btn-light btn-lg fw-bold px-5"
                   style="color:#15803D; border-radius:9px;">
                    Créer ma colocation →
                </a>
            @endif
            @if (Route::has('login'))
                <a href="{{ route('login') }}"
                   class="btn btn-outline-light btn-lg px-4"
                   style="border-radius:9px;">
                    Se connecter
                </a>
            @endif
        </div>
        <p class="text-white mt-3 mb-0" style="opacity:.55; font-size:.8rem;">
            ✓ Aucune carte requise &nbsp;·&nbsp; ✓ Prêt en 2 minutes &nbsp;·&nbsp; ✓ Données sécurisées
        </p>
    </div>
</section>

{{-- ── FOOTER ── --}}
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center g-3">
            <div class="col-md-4">
                <a href="/" class="navbar-brand" style="font-size:1.1rem;">easy<span class="dot">coloc</span></a>
                <p class="text-muted small mb-0 mt-1">Gestion des dépenses en colocation au Maroc.</p>
            </div>
            <div class="col-md-4 text-md-center">
                <p class="text-muted small mb-0">© {{ date('Y') }} EasyColoc. Tous droits réservés.</p>
            </div>
            <div class="col-md-4 text-md-end d-flex gap-3 justify-content-md-end">
                <a href="#" class="text-muted small text-decoration-none">CGU</a>
                <a href="#" class="text-muted small text-decoration-none">Confidentialité</a>
                <a href="#" class="text-muted small text-decoration-none">Contact</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>