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
    --r-sm:8px;--r-md:12px;--r-lg:16px;
    --f-head:'Outfit',sans-serif;--f-body:'DM Sans',sans-serif;
}
*{box-sizing:border-box;}
.ec-root{background:var(--bg);min-height:100vh;font-family:var(--f-body);color:var(--text-1);}

/* TOP BAR */
.ec-bar{background:var(--surface);border-bottom:1px solid var(--border);padding:0 40px;height:58px;display:flex;align-items:center;position:sticky;top:0;z-index:50;}
.ec-crumb{display:flex;align-items:center;gap:8px;font-size:.8rem;color:var(--text-3);}
.ec-crumb a{color:var(--text-3);text-decoration:none;transition:color .15s;}
.ec-crumb a:hover{color:var(--text-1);}
.ec-crumb span{color:var(--border);}
.ec-crumb b{color:var(--text-1);font-weight:600;}

/* MAIN */
.ec-wrap{max-width:860px;margin:0 auto;padding:40px;}

/* TWO COLUMN */
.two-col{display:grid;grid-template-columns:1fr 320px;gap:24px;align-items:start;}

/* FORM CARD */
.form-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);box-shadow:var(--sh-sm);overflow:hidden;}
.form-card-head{padding:24px 28px 20px;border-bottom:1px solid var(--border-light);}
.form-card-head-eyebrow{font-size:.7rem;font-weight:700;text-transform:uppercase;letter-spacing:.09em;color:var(--green);margin-bottom:4px;}
.form-card-head-title{font-family:var(--f-head);font-size:1.15rem;font-weight:700;color:var(--text-1);margin:0 0 3px;}
.form-card-head-sub{font-size:.83rem;color:var(--text-2);}
.form-card-body{padding:24px 28px;}
.form-card-foot{padding:16px 28px;background:var(--border-light);border-top:1px solid var(--border);display:flex;align-items:center;gap:12px;flex-wrap:wrap;}

/* FIELD */
.field-label{display:block;font-size:.855rem;font-weight:600;color:var(--text-1);margin-bottom:6px;}
.field-hint{font-size:.74rem;color:var(--text-3);font-weight:400;margin-left:6px;}
.field-input{width:100%;padding:11px 14px;border:1.5px solid var(--border);border-radius:var(--r-sm);font-family:var(--f-body);font-size:.9rem;color:var(--text-1);background:var(--surface);outline:none;transition:border-color .15s,box-shadow .15s;}
.field-input:focus{border-color:var(--green);box-shadow:0 0 0 3px rgba(22,163,74,.1);}
.field-input:hover:not(:focus){border-color:var(--text-3);}
.field-input::placeholder{color:var(--text-3);}
.field-error{font-size:.76rem;color:#DC2626;margin-top:5px;display:flex;align-items:center;gap:4px;}

/* BUTTONS */
.btn-p{background:var(--green);color:#fff!important;border:none;font-family:var(--f-body);font-weight:600;font-size:.875rem;padding:11px 22px;border-radius:var(--r-sm);cursor:pointer;text-decoration:none;display:inline-flex;align-items:center;gap:7px;transition:background .15s,transform .1s,box-shadow .15s;box-shadow:0 1px 2px rgba(22,163,74,.3);}
.btn-p:hover{background:var(--green-hover);transform:translateY(-1px);box-shadow:0 4px 10px rgba(22,163,74,.28);}
.btn-p:active{transform:none;}
.btn-g{background:transparent;color:var(--text-2)!important;border:1px solid var(--border);font-family:var(--f-body);font-weight:500;font-size:.855rem;padding:10px 18px;border-radius:var(--r-sm);text-decoration:none;display:inline-flex;align-items:center;gap:6px;transition:all .15s;}
.btn-g:hover{border-color:var(--text-3);background:var(--border-light);color:var(--text-1)!important;}

/* ALERT */
.alert-e{display:flex;align-items:center;gap:9px;padding:11px 16px;border-radius:var(--r-sm);font-size:.855rem;margin-bottom:18px;background:#FEF2F2;border:1px solid #FECACA;color:#DC2626;}

/* SIDEBAR */
.sidebar{display:flex;flex-direction:column;gap:14px;}

/* TIP CARD */
.tip-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-md);overflow:hidden;box-shadow:var(--sh-sm);}
.tip-card-head{padding:13px 18px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;gap:8px;}
.tip-card-ico{width:26px;height:26px;border-radius:var(--r-sm);display:flex;align-items:center;justify-content:center;font-size:.82rem;background:var(--green-soft);border:1px solid var(--green-border);}
.tip-card-label{font-size:.8rem;font-weight:700;color:var(--text-1);}
.tip-card-body{padding:14px 18px;display:flex;flex-direction:column;gap:2px;}
.tip-item{display:flex;align-items:flex-start;gap:8px;font-size:.8rem;color:var(--text-2);line-height:1.55;padding:5px 0;}
.tip-item::before{content:'✓';color:var(--green);font-weight:700;flex-shrink:0;margin-top:1px;}
.tip-divider{height:1px;background:var(--border-light);margin:0;}

/* ANIM */
@keyframes up{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.form-card{animation:up .3s ease both;}
.sidebar{animation:up .3s ease .1s both;}

@media(max-width:768px){
    .ec-bar,.ec-wrap{padding-left:20px;padding-right:20px;}
    .two-col{grid-template-columns:1fr;}
    .ec-wrap{padding:24px 20px;}
}
</style>

<div class="ec-root">

    {{-- TOP BAR --}}
    <div class="ec-bar">
        <div class="ec-crumb">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            <a href="{{ route('colocations.index') }}">Mes colocations</a>
            <span>›</span>
            <b>Nouvelle colocation</b>
        </div>
    </div>

    <div class="ec-wrap">

        {{-- ── ORIGINAL BLADE LOGIC: session error ── --}}
        @if(session('error'))
        <div class="alert-e">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            {{ session('error') }}
        </div>
        @endif

        <div class="two-col">

            {{-- FORM --}}
            <div class="form-card">
                <div class="form-card-head">
                    <div class="form-card-head-eyebrow">Mes colocations</div>
                    <div class="form-card-head-title">Créer une colocation</div>
                    <div class="form-card-head-sub">Commencez par donner un nom à votre espace partagé.</div>
                </div>

                {{-- ── ORIGINAL BLADE LOGIC: form ── --}}
                <form action="{{ route('colocations.store') }}" method="POST">
                    @csrf

                    <div class="form-card-body">
                        <label class="field-label">
                            Nom de la colocation
                            <span class="field-hint">Obligatoire</span>
                        </label>
                        <input
                            type="text"
                            name="name"
                            class="field-input"
                            placeholder="Ex: Appart Gueliz, Coloc Hassan II…"
                            value="{{ old('name') }}"
                            required
                            autofocus
                        >
                        {{-- ── ORIGINAL BLADE LOGIC: validation error ── --}}
                        @error('name')
                            <div class="field-error">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-card-foot">
                        <button type="submit" class="btn-p">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Créer la colocation
                        </button>
                        {{-- ── ORIGINAL BLADE LOGIC: cancel link ── --}}
                        <a href="{{ route('colocations.index') }}" class="btn-g">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>

            {{-- TIPS SIDEBAR --}}
            <div class="sidebar">
                <div class="tip-card">
                    <div class="tip-card-head">
                        <div class="tip-card-ico">💡</div>
                        <div class="tip-card-label">Conseils</div>
                    </div>
                    <div class="tip-card-body">
                        <div class="tip-item">Choisissez un nom parlant pour tous vos colocataires.</div>
                        <div class="tip-divider"></div>
                        <div class="tip-item">Vous pourrez inviter des membres juste après la création.</div>
                        <div class="tip-divider"></div>
                        <div class="tip-item">Gérez plusieurs colocations depuis un seul compte.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</x-app-layout>