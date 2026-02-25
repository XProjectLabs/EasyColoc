<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EasyColoc') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Outfit:wght@300;400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --ink:        #0B0F1A;
            --navy:       #111827;
            --card-bg:    #161D2E;
            --card-border:rgba(255,255,255,.07);
            --lime:       #C8F135;
            --lime-dim:   #A5D020;
            --white:      #FFFFFF;
            --muted:      rgba(255,255,255,.45);
            --red-acc:    #F87171;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Outfit', sans-serif;
            background: var(--ink);
            color: var(--white);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* background glow blobs */
        body::before {
            content: '';
            position: fixed; top: -20%; left: -10%;
            width: 600px; height: 600px;
            background: radial-gradient(ellipse, rgba(200,241,53,.05) 0%, transparent 65%);
            pointer-events: none;
        }
        body::after {
            content: '';
            position: fixed; bottom: -20%; right: -10%;
            width: 500px; height: 500px;
            background: radial-gradient(ellipse, rgba(99,102,241,.06) 0%, transparent 65%);
            pointer-events: none;
        }

        .auth-wrapper {
            width: 100%;
            max-width: 440px;
            padding: 1.5rem;
            position: relative; z-index: 1;
        }

        /* brand header */
        .auth-brand {
            text-align: center;
            margin-bottom: 2rem;
        }
        .auth-logo {
            font-family: 'Syne', sans-serif; font-weight: 800;
            font-size: 1.75rem; letter-spacing: -.03em;
            text-decoration: none; color: var(--white);
            display: inline-block; margin-bottom: .5rem;
        }
        .auth-logo span { color: var(--lime); }
        .auth-tagline {
            font-size: .82rem; color: var(--muted);
        }

        /* form card */
        .auth-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 24px 60px rgba(0,0,0,.5);
        }

        /* override Breeze default form styling */
        .auth-card input[type="text"],
        .auth-card input[type="email"],
        .auth-card input[type="password"],
        .auth-card input[type="number"] {
            width: 100%;
            background: rgba(255,255,255,.05) !important;
            border: 1px solid var(--card-border) !important;
            border-radius: 10px !important;
            color: var(--white) !important;
            font-family: 'Outfit', sans-serif;
            font-size: .9rem;
            padding: .7rem 1rem !important;
            outline: none;
            transition: border-color .2s;
        }
        .auth-card input:focus {
            border-color: rgba(200,241,53,.4) !important;
            box-shadow: 0 0 0 3px rgba(200,241,53,.07) !important;
        }
        .auth-card input::placeholder { color: rgba(255,255,255,.25) !important; }

        .auth-card label {
            font-size: .82rem; font-weight: 500;
            color: rgba(255,255,255,.65) !important;
            display: block; margin-bottom: .4rem;
        }

        /* primary button */
        .auth-card button[type="submit"],
        .auth-card .btn-primary {
            background: var(--lime) !important;
            color: var(--ink) !important;
            font-family: 'Syne', sans-serif !important;
            font-weight: 700 !important;
            font-size: .9rem !important;
            padding: .75rem 1.5rem !important;
            border-radius: 10px !important;
            border: none !important;
            cursor: pointer;
            transition: background .2s, transform .15s;
            width: 100%;
            letter-spacing: .01em;
        }
        .auth-card button[type="submit"]:hover { background: var(--lime-dim) !important; transform: translateY(-1px); }

        /* links */
        .auth-card a {
            color: var(--lime) !important;
            font-size: .85rem;
            text-decoration: none;
            transition: opacity .2s;
        }
        .auth-card a:hover { opacity: .75; }

        /* checkbox */
        .auth-card input[type="checkbox"] {
            accent-color: var(--lime) !important;
            width: auto !important;
        }

        /* validation errors */
        .auth-card .text-red-600,
        .auth-card .text-red-500 {
            color: var(--red-acc) !important;
            font-size: .78rem;
        }
        .auth-card .border-red-500 {
            border-color: rgba(248,113,113,.4) !important;
        }

        /* divider */
        .auth-divider {
            display: flex; align-items: center; gap: 1rem;
            margin: 1.25rem 0; color: var(--muted); font-size: .78rem;
        }
        .auth-divider::before, .auth-divider::after {
            content: ''; flex: 1; height: 1px; background: var(--card-border);
        }

        /* footer link */
        .auth-footer {
            text-align: center; margin-top: 1.5rem;
            font-size: .84rem; color: var(--muted);
        }
        .auth-footer a { color: var(--lime) !important; font-weight: 500; }

        /* status message */
        .auth-status {
            background: rgba(200,241,53,.08);
            border: 1px solid rgba(200,241,53,.2);
            border-radius: 10px; padding: .75rem 1rem;
            font-size: .84rem; color: var(--lime);
            margin-bottom: 1.25rem;
        }
    </style>
</head>
<body>

    <div class="auth-wrapper">

        <div class="auth-brand">
            <a href="/" class="auth-logo">easy<span>coloc</span></a>
            <div class="auth-tagline">Gestion des dépenses en colocation</div>
        </div>

        <div class="auth-card">
            {{ $slot }}
        </div>

    </div>

</body>
</html>