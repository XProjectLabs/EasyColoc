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
.ec-wrap{max-width:1040px;margin:0 auto;padding:36px 40px;}

/* PAGE HERO */
.page-hero{display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap;margin-bottom:24px;}
.hero-left{display:flex;align-items:center;gap:16px;}
.hero-ico{width:50px;height:50px;background:var(--green-soft);border:2px solid var(--green-border);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.25rem;flex-shrink:0;}
.hero-eyebrow{font-size:.7rem;font-weight:700;text-transform:uppercase;letter-spacing:.09em;color:var(--green);margin-bottom:3px;}
.hero-title{font-family:var(--f-head);font-size:1.55rem;font-weight:800;color:var(--text-1);letter-spacing:-.025em;margin:0 0 2px;}
.hero-sub{font-size:.8rem;color:var(--text-3);}

/* BUTTONS */
.btn-p{background:var(--green);color:#fff!important;border:none;font-family:var(--f-body);font-weight:600;font-size:.875rem;padding:10px 18px;border-radius:var(--r-sm);cursor:pointer;text-decoration:none;display:inline-flex;align-items:center;gap:7px;transition:background .15s,transform .1s,box-shadow .15s;box-shadow:0 1px 2px rgba(22,163,74,.3);}
.btn-p:hover{background:var(--green-hover);transform:translateY(-1px);box-shadow:0 4px 10px rgba(22,163,74,.28);}
.btn-p:active{transform:none;}

/* STATS */
.stats{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-bottom:24px;}
.stat{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-md);padding:16px 20px;box-shadow:var(--sh-sm);display:flex;align-items:flex-start;justify-content:space-between;gap:8px;}
.stat-l{font-size:.72rem;font-weight:600;text-transform:uppercase;letter-spacing:.06em;color:var(--text-3);margin-bottom:5px;}
.stat-v{font-family:var(--f-head);font-size:1.35rem;font-weight:800;color:var(--text-1);line-height:1;}
.stat-s{font-size:.72rem;color:var(--text-3);margin-top:4px;}
.stat-ic{width:34px;height:34px;border-radius:var(--r-sm);display:flex;align-items:center;justify-content:center;font-size:.95rem;flex-shrink:0;}
.ic-green{background:var(--green-soft);border:1px solid var(--green-border);}
.ic-blue{background:#EFF6FF;border:1px solid #BFDBFE;}
.ic-purple{background:#FAF5FF;border:1px solid #E9D5FF;}
.ic-amber{background:#FFFBEB;border:1px solid #FDE68A;}

/* TOOLBAR */
.toolbar{display:flex;align-items:center;justify-content:space-between;margin-bottom:16px;gap:12px;flex-wrap:wrap;}
.search-box{position:relative;flex:1;max-width:280px;}
.search-box svg{position:absolute;left:11px;top:50%;transform:translateY(-50%);color:var(--text-3);}
.search-box input{width:100%;padding:9px 12px 9px 34px;border:1px solid var(--border);border-radius:var(--r-sm);font-family:var(--f-body);font-size:.855rem;color:var(--text-1);background:var(--surface);outline:none;transition:border-color .15s,box-shadow .15s;}
.search-box input:focus{border-color:var(--green);box-shadow:0 0 0 3px rgba(22,163,74,.1);}
.search-box input::placeholder{color:var(--text-3);}
.tc{font-size:.78rem;color:var(--text-3);}

/* TABLE CARD */
.table-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);box-shadow:var(--sh-md);overflow:hidden;}
.table-card-head{padding:16px 24px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;justify-content:space-between;}
.table-card-title{display:flex;align-items:center;gap:8px;font-family:var(--f-head);font-size:.95rem;font-weight:700;color:var(--text-1);}
.table-card-badge{background:var(--border-light);color:var(--text-2);border:1px solid var(--border);font-size:.7rem;font-weight:700;padding:2px 9px;border-radius:100px;}

/* TABLE */
.exp-table{width:100%;border-collapse:collapse;}
.exp-table thead tr{background:var(--border-light);}
.exp-table th{padding:11px 20px;font-size:.74rem;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:var(--text-3);text-align:left;border-bottom:1px solid var(--border);white-space:nowrap;}
.exp-table tbody tr{border-bottom:1px solid var(--border-light);transition:background .15s;}
.exp-table tbody tr:last-child{border-bottom:none;}
.exp-table tbody tr:hover{background:#FAFBFC;}
.exp-table td{padding:14px 20px;font-size:.875rem;color:var(--text-1);vertical-align:middle;}

/* TITLE CELL */
.title-cell{display:flex;align-items:center;gap:10px;}
.exp-ico{width:34px;height:34px;border-radius:10px;background:var(--border-light);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;font-size:.9rem;flex-shrink:0;}

/* AMOUNT */
.amount-val{font-family:var(--f-head);font-weight:700;color:var(--text-1);font-size:.9rem;}
.amount-sub{font-size:.72rem;color:var(--text-3);margin-top:1px;}

/* PAYER */
.payer-cell{display:flex;align-items:center;gap:7px;}
.av-sm{width:26px;height:26px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:.65rem;font-weight:700;color:#fff;flex-shrink:0;}
.av-0{background:linear-gradient(135deg,#16A34A,#22C55E);}
.av-1{background:linear-gradient(135deg,#2563EB,#60A5FA);}
.av-2{background:linear-gradient(135deg,#9333EA,#C084FC);}
.av-3{background:linear-gradient(135deg,#EA580C,#FB923C);}
.av-4{background:linear-gradient(135deg,#0891B2,#22D3EE);}
.av-5{background:linear-gradient(135deg,#BE185D,#F472B6);}

/* CATEGORY BADGE */
.cat-badge{display:inline-flex;align-items:center;gap:5px;font-size:.75rem;font-weight:600;padding:4px 10px;border-radius:100px;background:var(--border-light);color:var(--text-2);border:1px solid var(--border);}

/* DATE */
.date-val{font-size:.8rem;color:var(--text-2);}
.date-rel{font-size:.72rem;color:var(--text-3);margin-top:1px;}

/* EMPTY */
.empty-row td{padding:48px 24px;text-align:center;}
.empty-ico{font-size:2rem;margin-bottom:10px;}
.empty-t{font-family:var(--f-head);font-weight:700;font-size:.95rem;color:var(--text-1);margin-bottom:5px;}
.empty-d{font-size:.82rem;color:var(--text-2);margin-bottom:16px;}

/* ANIM */
@keyframes up{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.table-card{animation:up .3s ease both;}
.stat:nth-child(1){animation:up .2s ease .0s both;}
.stat:nth-child(2){animation:up .2s ease .05s both;}
.stat:nth-child(3){animation:up .2s ease .1s both;}
.stat:nth-child(4){animation:up .2s ease .15s both;}

@media(max-width:900px){
    .ec-bar,.ec-wrap{padding-left:20px;padding-right:20px;}
    .stats{grid-template-columns:1fr 1fr;}
    .ec-wrap{padding:24px 20px;}
    .exp-table th,.exp-table td{padding:12px 14px;}
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
            <b>Dépenses</b>
        </div>
        {{-- ── ORIGINAL BLADE LOGIC: add expense link ── --}}
        <a href="{{ route('expenses.create', $colocation->id) }}" class="btn-p">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
            Ajouter une dépense
        </a>
    </div>

    <div class="ec-wrap">

        {{-- PAGE HERO --}}
        <div class="page-hero">
            <div class="hero-left">
                <div class="hero-ico">💸</div>
                <div>
                    <div class="hero-eyebrow">Colocation · {{ $colocation->name }}</div>
                    <h1 class="hero-title">Dépenses</h1>
                    <div class="hero-sub">Toutes les dépenses partagées de votre colocation.</div>
                </div>
            </div>
        </div>

        {{-- STATS --}}
        <div class="stats">
            <div class="stat">
                <div>
                    <div class="stat-l">Total dépenses</div>
                    <div class="stat-v">{{ $expenses->count() }}</div>
                    <div class="stat-s">enregistrées</div>
                </div>
                <div class="stat-ic ic-blue">🧾</div>
            </div>
            <div class="stat">
                <div>
                    <div class="stat-l">Montant total</div>
                    <div class="stat-v">{{ number_format($expenses->sum('amount'), 0) }} DH</div>
                    <div class="stat-s">toutes dépenses</div>
                </div>
                <div class="stat-ic ic-green">💰</div>
            </div>
            <div class="stat">
                <div>
                    <div class="stat-l">Catégories</div>
                    <div class="stat-v">{{ $expenses->pluck('category.name')->unique()->count() }}</div>
                    <div class="stat-s">différentes</div>
                </div>
                <div class="stat-ic ic-purple">🏷️</div>
            </div>
            <div class="stat">
                <div>
                    <div class="stat-l">Dernière dépense</div>
                    <div class="stat-v" style="font-size:1rem;padding-top:3px;">
                        {{ $expenses->sortByDesc('date')->first()?->date ? \Carbon\Carbon::parse($expenses->sortByDesc('date')->first()->date)->diffForHumans() : '—' }}
                    </div>
                    <div class="stat-s">ajoutée</div>
                </div>
                <div class="stat-ic ic-amber">📅</div>
            </div>
        </div>

        {{-- TOOLBAR --}}
        <div class="toolbar">
            <div class="search-box">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                <input type="text" placeholder="Rechercher une dépense…" id="si" oninput="filterExp(this.value)">
            </div>
            <span class="tc" id="ec">{{ $expenses->count() }} dépense(s)</span>
        </div>

        {{-- TABLE CARD --}}
        <div class="table-card">
            <div class="table-card-head">
                <div class="table-card-title">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                    Liste des dépenses
                </div>
                <span class="table-card-badge" id="tableBadge">{{ $expenses->count() }}</span>
            </div>

            <table class="exp-table">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Montant</th>
                        <th>Payeur</th>
                        <th>Catégorie</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody id="expBody">
                    {{-- ── ORIGINAL BLADE LOGIC: @foreach($expenses as $expense) ── --}}
                    @forelse($expenses as $i => $expense)
                    <tr data-title="{{ strtolower($expense->title) }}">
                        <td>
                            <div class="title-cell">
                                <div class="exp-ico">💸</div>
                                <div>
                                    <div style="font-weight:600;font-size:.875rem;">{{ $expense->title }}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="amount-val">{{ number_format($expense->amount, 2) }} DH</div>
                        </td>
                        <td>
                            <div class="payer-cell">
                                <div class="av-sm av-{{ $i % 6 }}">{{ strtoupper(substr($expense->payer->name, 0, 1)) }}</div>
                                <span style="font-size:.855rem;font-weight:500;">{{ $expense->payer->name }}</span>
                            </div>
                        </td>
                        <td>
                            <span class="cat-badge">{{ $expense->category->name }}</span>
                        </td>
                        <td>
                            <div class="date-val">{{ \Carbon\Carbon::parse($expense->date)->format('d M Y') }}</div>
                            <div class="date-rel">{{ \Carbon\Carbon::parse($expense->date)->diffForHumans() }}</div>
                        </td>
                    </tr>
                    @empty
                    <tr class="empty-row">
                        <td colspan="5">
                            <div class="empty-ico">💸</div>
                            <div class="empty-t">Aucune dépense pour l'instant</div>
                            <p class="empty-d">Ajoutez votre première dépense partagée.</p>
                            <a href="{{ route('expenses.create', $colocation->id) }}" class="btn-p" style="display:inline-flex;margin:0 auto;">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                                Ajouter une dépense
                            </a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>

<script>
function filterExp(q){
    const rows=document.querySelectorAll('#expBody tr[data-title]');
    let v=0;
    rows.forEach(r=>{
        const m=r.dataset.title.includes(q.toLowerCase());
        r.style.display=m?'':'none';
        if(m)v++;
    });
    document.getElementById('ec').textContent=v+' dépense(s)';
    document.getElementById('tableBadge').textContent=v;
}
</script>

</x-app-layout>