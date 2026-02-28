<x-app-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<style>
:root{
    --green:#16A34A;--green-hover:#15803D;--green-light:#22C55E;
    --green-soft:#F0FDF4;--green-border:#BBF7D0;
    --red-soft:#FEF2F2;--red-border:#FECACA;--red:#DC2626;
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
.btn-back{background:transparent;color:var(--text-3)!important;border:1px solid var(--border);font-family:var(--f-body);font-weight:500;font-size:.82rem;padding:8px 14px;border-radius:var(--r-sm);text-decoration:none;display:inline-flex;align-items:center;gap:5px;transition:all .15s;}
.btn-back:hover{border-color:var(--text-3);background:var(--border-light);color:var(--text-1)!important;}

/* MAIN */
.ec-wrap{max-width:900px;margin:0 auto;padding:36px 40px;}

/* PAGE HERO */
.page-hero{display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap;margin-bottom:24px;}
.hero-left{display:flex;align-items:center;gap:16px;}
.hero-ico{width:50px;height:50px;background:var(--green-soft);border:2px solid var(--green-border);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.25rem;flex-shrink:0;}
.hero-eyebrow{font-size:.7rem;font-weight:700;text-transform:uppercase;letter-spacing:.09em;color:var(--green);margin-bottom:3px;}
.hero-title{font-family:var(--f-head);font-size:1.55rem;font-weight:800;color:var(--text-1);letter-spacing:-.025em;margin:0 0 2px;}
.hero-sub{font-size:.8rem;color:var(--text-3);}

/* STAT STRIP */
.stats{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-bottom:24px;}
.stat{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-md);padding:16px 20px;box-shadow:var(--sh-sm);display:flex;align-items:flex-start;justify-content:space-between;gap:8px;}
.stat-l{font-size:.72rem;font-weight:600;text-transform:uppercase;letter-spacing:.06em;color:var(--text-3);margin-bottom:5px;}
.stat-v{font-family:var(--f-head);font-size:1.4rem;font-weight:800;color:var(--text-1);line-height:1;}
.stat-s{font-size:.72rem;color:var(--text-3);margin-top:4px;}
.stat-ic{width:34px;height:34px;border-radius:var(--r-sm);display:flex;align-items:center;justify-content:center;font-size:.95rem;flex-shrink:0;}
.ic-green{background:var(--green-soft);border:1px solid var(--green-border);}
.ic-blue{background:#EFF6FF;border:1px solid #BFDBFE;}
.ic-amber{background:#FFFBEB;border:1px solid #FDE68A;}

/* TABLE CARD */
.table-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);box-shadow:var(--sh-md);overflow:hidden;}
.table-card-head{padding:16px 24px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;justify-content:space-between;}
.table-card-title{display:flex;align-items:center;gap:8px;font-family:var(--f-head);font-size:.95rem;font-weight:700;color:var(--text-1);}
.table-card-badge{background:var(--border-light);color:var(--text-2);border:1px solid var(--border);font-size:.7rem;font-weight:700;padding:2px 9px;border-radius:100px;}

/* TABLE */
.bal-table{width:100%;border-collapse:collapse;}
.bal-table thead tr{background:var(--border-light);}
.bal-table th{padding:11px 20px;font-size:.74rem;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:var(--text-3);text-align:left;border-bottom:1px solid var(--border);}
.bal-table th:not(:first-child){text-align:right;}
.bal-table tbody tr{border-bottom:1px solid var(--border-light);transition:background .15s;}
.bal-table tbody tr:last-child{border-bottom:none;}
.bal-table tbody tr:hover{background:var(--border-light);}
.bal-table td{padding:14px 20px;font-size:.875rem;color:var(--text-1);vertical-align:middle;}
.bal-table td:not(:first-child){text-align:right;}

/* USER CELL */
.user-cell{display:flex;align-items:center;gap:10px;}
.av{width:34px;height:34px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:var(--f-head);font-size:.8rem;font-weight:700;color:#fff;flex-shrink:0;}
.av-0{background:linear-gradient(135deg,#16A34A,#22C55E);}
.av-1{background:linear-gradient(135deg,#2563EB,#60A5FA);}
.av-2{background:linear-gradient(135deg,#9333EA,#C084FC);}
.av-3{background:linear-gradient(135deg,#EA580C,#FB923C);}
.av-4{background:linear-gradient(135deg,#0891B2,#22D3EE);}
.av-5{background:linear-gradient(135deg,#BE185D,#F472B6);}
.user-name{font-weight:600;font-size:.875rem;color:var(--text-1);}

/* AMOUNT CELLS */
.amt-paid{font-weight:600;color:var(--text-1);}
.amt-should{font-weight:500;color:var(--text-2);}

/* BALANCE BADGE */
.bal-pos{display:inline-flex;align-items:center;gap:4px;background:var(--green-soft);color:var(--green);border:1px solid var(--green-border);font-size:.8rem;font-weight:700;padding:4px 10px;border-radius:100px;}
.bal-neg{display:inline-flex;align-items:center;gap:4px;background:var(--red-soft);color:var(--red);border:1px solid var(--red-border);font-size:.8rem;font-weight:700;padding:4px 10px;border-radius:100px;}
.bal-zero{display:inline-flex;align-items:center;gap:4px;background:var(--border-light);color:var(--text-3);border:1px solid var(--border);font-size:.8rem;font-weight:700;padding:4px 10px;border-radius:100px;}

/* PROGRESS BAR */
.progress-wrap{margin-top:5px;}
.progress-track{height:4px;background:var(--border);border-radius:100px;overflow:hidden;width:100px;margin-left:auto;}
.progress-fill-pos{height:100%;background:var(--green);border-radius:100px;}
.progress-fill-neg{height:100%;background:var(--red);border-radius:100px;}

/* INFO STRIP */
.info-strip{margin-top:16px;background:var(--green-soft);border:1px solid var(--green-border);border-radius:var(--r-md);padding:12px 18px;font-size:.8rem;color:#15803D;display:flex;align-items:center;gap:8px;}

/* ANIM */
@keyframes up{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.table-card{animation:up .3s ease both;}
.stats .stat:nth-child(1){animation:up .2s ease both;}
.stats .stat:nth-child(2){animation:up .2s ease .05s both;}
.stats .stat:nth-child(3){animation:up .2s ease .1s both;}

@media(max-width:768px){
    .ec-bar,.ec-wrap{padding-left:20px;padding-right:20px;}
    .stats{grid-template-columns:1fr 1fr;}
    .stats .stat:last-child{grid-column:1/-1;}
    .ec-wrap{padding:24px 20px;}
    .bal-table th,.bal-table td{padding:12px 14px;}
    .progress-track{width:60px;}
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
            <b>Soldes</b>
        </div>
        <a href="{{ route('colocations.show', $colocation->id) }}" class="btn-back">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
            Retour
        </a>
    </div>

    <div class="ec-wrap">

        {{-- PAGE HERO --}}
        <div class="page-hero">
            <div class="hero-left">
                <div class="hero-ico">⚖️</div>
                <div>
                    <div class="hero-eyebrow">Colocation · {{ $colocation->name }}</div>
                    <h1 class="hero-title">Soldes</h1>
                    <div class="hero-sub">Qui doit quoi à qui, en temps réel.</div>
                </div>
            </div>
        </div>

        {{-- ── ORIGINAL BLADE LOGIC: $balances ── --}}

        {{-- STAT STRIP --}}
        <div class="stats">
            <div class="stat">
                <div>
                    <div class="stat-l">Membres</div>
                    <div class="stat-v">{{ count($balances) }}</div>
                    <div class="stat-s">dans cette coloc</div>
                </div>
                <div class="stat-ic ic-green">👥</div>
            </div>
            <div class="stat">
                <div>
                    <div class="stat-l">Total payé</div>
                    <div class="stat-v">{{ number_format(collect($balances)->sum('paid'), 0) }} DH</div>
                    <div class="stat-s">par tous les membres</div>
                </div>
                <div class="stat-ic ic-blue">💳</div>
            </div>
            <div class="stat">
                <div>
                    <div class="stat-l">Part par personne</div>
                    <div class="stat-v">{{ count($balances) > 0 ? number_format(collect($balances)->sum('should_pay') / count($balances), 0) : 0 }} DH</div>
                    <div class="stat-s">en moyenne</div>
                </div>
                <div class="stat-ic ic-amber">📊</div>
            </div>
        </div>

        {{-- TABLE CARD --}}
        <div class="table-card">
            <div class="table-card-head">
                <div class="table-card-title">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    Détail des soldes
                </div>
                <span class="table-card-badge">{{ count($balances) }} membres</span>
            </div>

            <table class="bal-table">
                <thead>
                    <tr>
                        <th>Membre</th>
                        <th>Total payé</th>
                        <th>Part dûe</th>
                        <th>Solde</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- ── ORIGINAL BLADE LOGIC: @foreach($balances as $b) ── --}}
                    @php $avColors = ['av-0','av-1','av-2','av-3','av-4','av-5']; @endphp
                    @foreach($balances as $i => $b)
                    <tr>
                        <td>
                            <div class="user-cell">
                                <div class="av {{ $avColors[$i % 6] }}">
                                    {{ strtoupper(substr($b['user']->name, 0, 1)) }}
                                </div>
                                <span class="user-name">{{ $b['user']->name }}</span>
                            </div>
                        </td>
                        <td><span class="amt-paid">{{ $b['paid'] }} DH</span></td>
                        <td><span class="amt-should">{{ round($b['should_pay'], 2) }} DH</span></td>
                        <td>
                            <div>
                                {{-- ── ORIGINAL BLADE LOGIC: balance condition ── --}}
                                @if($b['balance'] > 0)
                                    <span class="bal-pos">
                                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="18 15 12 9 6 15"/></svg>
                                        +{{ round($b['balance'], 2) }} DH
                                    </span>
                                @elseif($b['balance'] < 0)
                                    <span class="bal-neg">
                                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="6 9 12 15 18 9"/></svg>
                                        {{ round($b['balance'], 2) }} DH
                                    </span>
                                @else
                                    <span class="bal-zero">= 0 DH</span>
                                @endif
                                <div class="progress-wrap">
                                    <div class="progress-track">
                                        @if($b['balance'] > 0)
                                            <div class="progress-fill-pos" style="width:{{ min(100, ($b['balance'] / max(collect($balances)->max('paid'), 1)) * 100) }}%"></div>
                                        @elseif($b['balance'] < 0)
                                            <div class="progress-fill-neg" style="width:{{ min(100, (abs($b['balance']) / max(collect($balances)->max('paid'), 1)) * 100) }}%"></div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- INFO STRIP --}}
        <div class="info-strip">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink:0;"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
            Un solde positif signifie que le membre a trop payé — il doit recevoir de l'argent. Un solde négatif signifie qu'il doit encore rembourser.
        </div>

    </div>
</div>

</x-app-layout>