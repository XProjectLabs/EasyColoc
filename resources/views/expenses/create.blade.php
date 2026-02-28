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
.ec-wrap{max-width:880px;margin:0 auto;padding:40px;}

/* TWO COL */
.two-col{display:grid;grid-template-columns:1fr 300px;gap:24px;align-items:start;}

/* FORM CARD */
.form-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);box-shadow:var(--sh-sm);overflow:hidden;}
.form-card-head{padding:22px 28px 18px;border-bottom:1px solid var(--border-light);}
.form-card-eyebrow{font-size:.7rem;font-weight:700;text-transform:uppercase;letter-spacing:.09em;color:var(--green);margin-bottom:4px;}
.form-card-title{font-family:var(--f-head);font-size:1.15rem;font-weight:700;color:var(--text-1);margin:0 0 3px;}
.form-card-sub{font-size:.83rem;color:var(--text-2);}
.form-card-body{padding:24px 28px;display:flex;flex-direction:column;gap:18px;}
.form-card-foot{padding:16px 28px;background:var(--border-light);border-top:1px solid var(--border);display:flex;align-items:center;gap:12px;}

/* FIELD */
.field{}
.field-label{display:block;font-size:.855rem;font-weight:600;color:var(--text-1);margin-bottom:6px;}
.field-hint{font-size:.74rem;color:var(--text-3);font-weight:400;margin-left:6px;}
.field-input{width:100%;padding:11px 14px;border:1.5px solid var(--border);border-radius:var(--r-sm);font-family:var(--f-body);font-size:.9rem;color:var(--text-1);background:var(--surface);outline:none;transition:border-color .15s,box-shadow .15s;}
.field-input:focus{border-color:var(--green);box-shadow:0 0 0 3px rgba(22,163,74,.1);}
.field-input:hover:not(:focus){border-color:var(--text-3);}
.field-input::placeholder{color:var(--text-3);}

/* Amount field with DH suffix */
.field-suffix{position:relative;}
.field-suffix .field-input{padding-right:48px;}
.field-suffix-label{position:absolute;right:14px;top:50%;transform:translateY(-50%);font-size:.855rem;font-weight:600;color:var(--text-3);pointer-events:none;}

/* SELECT */
select.field-input{appearance:none;-webkit-appearance:none;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%2394A3B8' stroke-width='2.5'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 14px center;padding-right:36px;cursor:pointer;}

/* TWO COLS in form */
.field-row{display:grid;grid-template-columns:1fr 1fr;gap:16px;}

/* BUTTONS */
.btn-p{background:var(--green);color:#fff!important;border:none;font-family:var(--f-body);font-weight:600;font-size:.875rem;padding:11px 22px;border-radius:var(--r-sm);cursor:pointer;text-decoration:none;display:inline-flex;align-items:center;gap:7px;transition:background .15s,transform .1s,box-shadow .15s;box-shadow:0 1px 2px rgba(22,163,74,.3);}
.btn-p:hover{background:var(--green-hover);transform:translateY(-1px);box-shadow:0 4px 10px rgba(22,163,74,.28);}
.btn-p:active{transform:none;}
.btn-g{background:transparent;color:var(--text-2)!important;border:1px solid var(--border);font-family:var(--f-body);font-weight:500;font-size:.855rem;padding:10px 18px;border-radius:var(--r-sm);text-decoration:none;display:inline-flex;align-items:center;gap:6px;transition:all .15s;}
.btn-g:hover{border-color:var(--text-3);background:var(--border-light);color:var(--text-1)!important;}

/* SIDEBAR */
.sidebar{display:flex;flex-direction:column;gap:14px;}

/* PREVIEW CARD */
.preview-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-md);overflow:hidden;box-shadow:var(--sh-sm);}
.preview-head{padding:13px 18px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;gap:8px;}
.preview-head-ico{width:26px;height:26px;border-radius:var(--r-sm);display:flex;align-items:center;justify-content:center;font-size:.82rem;background:var(--green-soft);border:1px solid var(--green-border);}
.preview-head-label{font-size:.8rem;font-weight:700;color:var(--text-1);}
.preview-body{padding:16px 18px;}
.preview-row{display:flex;align-items:center;justify-content:space-between;padding:6px 0;border-bottom:1px solid var(--border-light);}
.preview-row:last-child{border-bottom:none;}
.preview-row-label{font-size:.76rem;color:var(--text-3);}
.preview-row-val{font-size:.82rem;font-weight:600;color:var(--text-1);}
.preview-amount{font-family:var(--f-head);font-size:1.3rem;font-weight:800;color:var(--green);text-align:center;padding:12px 0 4px;}

/* TIP CARD */
.tip-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-md);overflow:hidden;box-shadow:var(--sh-sm);}
.tip-card-head{padding:13px 18px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;gap:8px;}
.tip-ico{width:26px;height:26px;border-radius:var(--r-sm);display:flex;align-items:center;justify-content:center;font-size:.82rem;background:#EFF6FF;border:1px solid #BFDBFE;}
.tip-label{font-size:.8rem;font-weight:700;color:var(--text-1);}
.tip-body{padding:14px 18px;display:flex;flex-direction:column;gap:2px;}
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
    .field-row{grid-template-columns:1fr;}
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
            <a href="{{ route('colocations.show', $colocation->id) }}">{{ $colocation->name }}</a>
            <span>›</span>
            <a href="{{ route('expenses.index', $colocation->id) }}">Dépenses</a>
            <span>›</span>
            <b>Nouvelle dépense</b>
        </div>
    </div>

    <div class="ec-wrap">
        <div class="two-col">

            {{-- FORM --}}
            <div class="form-card">
                <div class="form-card-head">
                    <div class="form-card-eyebrow">{{ $colocation->name }}</div>
                    <div class="form-card-title">Ajouter une dépense</div>
                    <div class="form-card-sub">Renseignez les détails de la dépense partagée.</div>
                </div>

                {{-- ── ORIGINAL BLADE LOGIC: form ── --}}
                <form method="POST" action="{{ route('expenses.store', $colocation->id) }}">
                    @csrf

                    <div class="form-card-body">

                        {{-- Title --}}
                        <div class="field">
                            <label class="field-label" for="titleInput">
                                Titre
                                <span class="field-hint">Requis</span>
                            </label>
                            <input
                                type="text"
                                name="title"
                                id="titleInput"
                                class="field-input"
                                placeholder="Ex: Courses Marjane, Électricité…"
                                required
                                oninput="updatePreview()"
                            >
                        </div>

                        {{-- Amount --}}
                        <div class="field">
                            <label class="field-label" for="amountInput">
                                Montant
                                <span class="field-hint">Requis</span>
                            </label>
                            <div class="field-suffix">
                                <input
                                    type="number"
                                    name="amount"
                                    id="amountInput"
                                    class="field-input"
                                    placeholder="0.00"
                                    min="0"
                                    step="0.01"
                                    required
                                    oninput="updatePreview()"
                                >
                                <span class="field-suffix-label">DH</span>
                            </div>
                        </div>

                        {{-- Category + Payer --}}
                        <div class="field-row">
                            <div class="field">
                                <label class="field-label" for="categoryInput">Catégorie</label>
                                {{-- ── ORIGINAL BLADE LOGIC: @foreach($categories as $cat) ── --}}
                                <select name="category_id" id="categoryInput" class="field-input" onchange="updatePreview()">
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="field">
                                <label class="field-label" for="payerInput">Payeur</label>
                                {{-- ── ORIGINAL BLADE LOGIC: @foreach($members as $member) ── --}}
                                <select name="payer_id" id="payerInput" class="field-input" onchange="updatePreview()">
                                    @foreach($members as $member)
                                        <option value="{{ $member->id }}">{{ $member->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="form-card-foot">
                        <button type="submit" class="btn-p">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Enregistrer la dépense
                        </button>
                        <a href="{{ route('expenses.index', $colocation->id) }}" class="btn-g">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>

            {{-- SIDEBAR --}}
            <div class="sidebar">

                {{-- Live Preview --}}
                <div class="preview-card">
                    <div class="preview-head">
                        <div class="preview-head-ico">👁️</div>
                        <div class="preview-head-label">Aperçu</div>
                    </div>
                    <div class="preview-body">
                        <div class="preview-amount" id="previewAmount" style="color:var(--text-3);">— DH</div>
                        <div class="preview-row">
                            <span class="preview-row-label">Titre</span>
                            <span class="preview-row-val" id="previewTitle" style="color:var(--text-3);font-style:italic;">—</span>
                        </div>
                        <div class="preview-row">
                            <span class="preview-row-label">Catégorie</span>
                            <span class="preview-row-val" id="previewCat">—</span>
                        </div>
                        <div class="preview-row">
                            <span class="preview-row-label">Payé par</span>
                            <span class="preview-row-val" id="previewPayer">—</span>
                        </div>
                    </div>
                </div>

                {{-- Tips --}}
                <div class="tip-card">
                    <div class="tip-card-head">
                        <div class="tip-ico">💡</div>
                        <div class="tip-label">Conseils</div>
                    </div>
                    <div class="tip-body">
                        <div class="tip-item">Le montant sera automatiquement divisé entre tous les membres.</div>
                        <div class="tip-divider"></div>
                        <div class="tip-item">Choisissez la bonne catégorie pour un meilleur suivi.</div>
                        <div class="tip-divider"></div>
                        <div class="tip-item">Les soldes sont mis à jour instantanément après l'enregistrement.</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
function updatePreview(){
    const title   = document.getElementById('titleInput').value;
    const amount  = document.getElementById('amountInput').value;
    const catSel  = document.getElementById('categoryInput');
    const payerSel= document.getElementById('payerInput');

    const catText   = catSel.options[catSel.selectedIndex]?.text  || '—';
    const payerText = payerSel.options[payerSel.selectedIndex]?.text || '—';

    const amtEl = document.getElementById('previewAmount');
    if(amount){
        amtEl.textContent = parseFloat(amount).toFixed(2) + ' DH';
        amtEl.style.color = 'var(--green)';
    } else {
        amtEl.textContent = '— DH';
        amtEl.style.color = 'var(--text-3)';
    }

    const titleEl = document.getElementById('previewTitle');
    if(title){
        titleEl.textContent = title;
        titleEl.style.color = 'var(--text-1)';
        titleEl.style.fontStyle = 'normal';
    } else {
        titleEl.textContent = '—';
        titleEl.style.color = 'var(--text-3)';
        titleEl.style.fontStyle = 'italic';
    }

    document.getElementById('previewCat').textContent   = catText;
    document.getElementById('previewPayer').textContent = payerText;
}
// Init
updatePreview();
</script>

</x-app-layout>