<x-app-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<style>
:root{
    --green:#16A34A;--green-hover:#15803D;--green-light:#22C55E;
    --green-soft:#F0FDF4;--green-border:#BBF7D0;
    --text-1:#0F172A;--text-2:#475569;--text-3:#94A3B8;
    --surface:#FFFFFF;--bg:#F8FAFC;--border:#E2E8F0;--border-light:#F1F5F9;
    --sh-sm:0 1px 3px rgba(0,0,0,.07),0 1px 2px -1px rgba(0,0,0,.06);
    --sh-md:0 4px 6px -1px rgba(0,0,0,.07),0 2px 4px -2px rgba(0,0,0,.06);
    --r-sm:8px;--r-md:12px;--r-lg:16px;
    --f-head:'Outfit',sans-serif;--f-body:'DM Sans',sans-serif;
}
*{box-sizing:border-box;}
.ec-root{background:var(--bg);min-height:100vh;font-family:var(--f-body);color:var(--text-1);}

/* TOP BAR */
.ec-bar{background:var(--surface);border-bottom:1px solid var(--border);padding:0 40px;height:58px;display:flex;align-items:center;justify-content:space-between;position:sticky;top:0;z-index:50;}
.ec-crumb{display:flex;align-items:center;gap:8px;font-size:.8rem;color:var(--text-3);}
.ec-crumb a{color:var(--text-3);text-decoration:none;transition:color .15s;}
.ec-crumb a:hover{color:var(--text-1);}
.ec-crumb span{color:var(--border);}
.ec-crumb b{color:var(--text-1);font-weight:600;}

/* MAIN */
.ec-wrap{max-width:720px;margin:0 auto;padding:36px 40px;}

/* HEADER */
.ec-hd{margin-bottom:24px;}
.ec-label{font-size:.7rem;font-weight:700;text-transform:uppercase;letter-spacing:.09em;color:var(--green);margin-bottom:4px;}
.ec-title{font-family:var(--f-head);font-size:1.65rem;font-weight:800;color:var(--text-1);letter-spacing:-.025em;margin:0 0 3px;}
.ec-sub{font-size:.855rem;color:var(--text-2);}

/* ADD FORM CARD */
.add-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);box-shadow:var(--sh-sm);padding:20px 24px;margin-bottom:20px;display:flex;align-items:flex-start;gap:16px;}
.add-card-ico{width:40px;height:40px;background:var(--green-soft);border:1.5px solid var(--green-border);border-radius:var(--r-md);display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0;margin-top:2px;}
.add-card-body{flex:1;}
.add-card-label{font-size:.82rem;font-weight:600;color:var(--text-1);margin-bottom:8px;}
.add-row{display:flex;gap:8px;}
.add-input{flex:1;padding:10px 14px;border:1.5px solid var(--border);border-radius:var(--r-sm);font-family:var(--f-body);font-size:.875rem;color:var(--text-1);background:var(--surface);outline:none;transition:border-color .15s,box-shadow .15s;}
.add-input:focus{border-color:var(--green);box-shadow:0 0 0 3px rgba(22,163,74,.1);}
.add-input:hover:not(:focus){border-color:var(--text-3);}
.add-input::placeholder{color:var(--text-3);}
.btn-add{background:var(--green);color:#fff!important;border:none;font-family:var(--f-body);font-weight:600;font-size:.875rem;padding:10px 20px;border-radius:var(--r-sm);cursor:pointer;display:inline-flex;align-items:center;gap:6px;transition:background .15s,transform .1s,box-shadow .15s;white-space:nowrap;box-shadow:0 1px 2px rgba(22,163,74,.25);}
.btn-add:hover{background:var(--green-hover);transform:translateY(-1px);box-shadow:0 4px 10px rgba(22,163,74,.25);}
.btn-add:active{transform:none;}

/* LIST CARD */
.list-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);box-shadow:var(--sh-md);overflow:hidden;}
.list-head{padding:14px 22px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;justify-content:space-between;}
.list-head-title{display:flex;align-items:center;gap:8px;font-family:var(--f-head);font-size:.9rem;font-weight:700;color:var(--text-1);}
.list-count{background:var(--border-light);color:var(--text-2);border:1px solid var(--border);font-size:.7rem;font-weight:700;padding:2px 9px;border-radius:100px;}

/* CATEGORY ROWS */
.cat-row{padding:14px 22px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;justify-content:space-between;gap:12px;transition:background .15s;}
.cat-row:last-child{border-bottom:none;}
.cat-row:hover{background:var(--border-light);}
.cat-left{display:flex;align-items:center;gap:11px;}
.cat-dot{width:8px;height:8px;border-radius:50%;background:var(--green);flex-shrink:0;}
.cat-name{font-size:.9rem;font-weight:600;color:var(--text-1);}

/* DELETE BUTTON */
.btn-del{background:transparent;color:var(--text-3)!important;border:1px solid var(--border);font-family:var(--f-body);font-weight:500;font-size:.78rem;padding:6px 12px;border-radius:var(--r-sm);cursor:pointer;display:inline-flex;align-items:center;gap:5px;transition:all .15s;}
.btn-del:hover{border-color:#FECACA;background:#FEF2F2;color:#DC2626!important;}

/* EMPTY STATE */
.empty{padding:44px 20px;text-align:center;}
.empty-em{font-size:2.2rem;margin-bottom:10px;}
.empty-t{font-family:var(--f-head);font-size:1rem;font-weight:700;color:var(--text-1);margin-bottom:5px;}
.empty-s{font-size:.83rem;color:var(--text-2);}

/* ALERTS */
.alert-s{display:flex;align-items:center;gap:9px;padding:11px 15px;border-radius:var(--r-sm);font-size:.855rem;margin-bottom:18px;background:var(--green-soft);border:1px solid var(--green-border);color:#15803D;}
.alert-e{background:#FEF2F2;border:1px solid #FECACA;color:#DC2626;}

/* ANIM */
@keyframes up{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.add-card{animation:up .25s ease both;}
.list-card{animation:up .3s ease .08s both;}
.cat-row{animation:up .25s ease both;}
.cat-row:nth-child(1){animation-delay:.05s}.cat-row:nth-child(2){animation-delay:.09s}
.cat-row:nth-child(3){animation-delay:.13s}.cat-row:nth-child(4){animation-delay:.17s}
.cat-row:nth-child(5){animation-delay:.21s}

@media(max-width:640px){
    .ec-bar,.ec-wrap{padding-left:20px;padding-right:20px;}
    .ec-wrap{padding-top:24px;padding-bottom:24px;}
    .add-row{flex-direction:column;}
    .btn-add{width:100%;justify-content:center;}
}
</style>

<div class="ec-root">

    {{-- TOP BAR --}}
    <div class="ec-bar">
        <div class="ec-crumb">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            <a href="{{ route('dashboard') }}">Tableau de bord</a>
            <span>›</span>
            <b>Catégories</b>
        </div>
    </div>

    <div class="ec-wrap">

        {{-- ALERTS --}}
        @if(session('success'))
        <div class="alert-s">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
        <div class="alert-s alert-e">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            {{ session('error') }}
        </div>
        @endif

        {{-- HEADER --}}
        <div class="ec-hd">
            <div class="ec-label">Paramètres</div>
            <h1 class="ec-title">Catégories</h1>
            <p class="ec-sub">Organisez vos dépenses par catégories personnalisées.</p>
        </div>

        {{-- ── ORIGINAL BLADE LOGIC: categories.store ── --}}
        <div class="add-card">
            <div class="add-card-ico">🏷️</div>
            <div class="add-card-body">
                <div class="add-card-label">Ajouter une catégorie</div>
                <form method="POST" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="add-row">
                        <input
                            type="text"
                            name="name"
                            class="add-input"
                            placeholder="Ex: Courses, Loyer, Internet…"
                            required
                            autofocus
                            value="{{ old('name') }}"
                        >
                        <button type="submit" class="btn-add">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                            Ajouter
                        </button>
                    </div>
                    @error('name')
                    <div style="font-size:.74rem;color:#DC2626;margin-top:5px;display:flex;align-items:center;gap:4px;">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        {{ $message }}
                    </div>
                    @enderror
                </form>
            </div>
        </div>

        {{-- LIST CARD --}}
        <div class="list-card">
            <div class="list-head">
                <div class="list-head-title">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                    Liste des catégories
                </div>
                <span class="list-count">{{ $categories->count() }}</span>
            </div>

            {{-- ── ORIGINAL BLADE LOGIC: @forelse($categories as $category) ── --}}
            @forelse($categories as $category)
            <div class="cat-row">
                <div class="cat-left">
                    <span class="cat-dot"></span>
                    <span class="cat-name">{{ $category->name }}</span>
                </div>

                {{-- ── ORIGINAL BLADE LOGIC: categories.destroy ── --}}
                <form method="POST" action="{{ route('categories.destroy', $category) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-del"
                        onclick="return confirm('Supprimer « {{ $category->name }} » ?')">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6 18.1 20a2 2 0 0 1-2 1.9H7.9a2 2 0 0 1-2-1.9L5 6"/><path d="M10 11v6M14 11v6"/></svg>
                        Supprimer
                    </button>
                </form>
            </div>
            @empty
            <div class="empty">
                <div class="empty-em">🏷️</div>
                <div class="empty-t">Aucune catégorie pour l'instant</div>
                <p class="empty-s">Ajoutez votre première catégorie pour organiser vos dépenses.</p>
            </div>
            @endforelse
        </div>

    </div>
</div>

</x-app-layout>