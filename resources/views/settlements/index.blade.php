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
.btn-back{background:transparent;color:var(--text-3)!important;border:1px solid var(--border);font-family:var(--f-body);font-weight:500;font-size:.82rem;padding:8px 14px;border-radius:var(--r-sm);text-decoration:none;display:inline-flex;align-items:center;gap:5px;transition:all .15s;}
.btn-back:hover{border-color:var(--text-3);background:var(--border-light);color:var(--text-1)!important;}

/* MAIN */
.ec-wrap{max-width:800px;margin:0 auto;padding:36px 40px;}

/* HERO */
.page-hero{display:flex;align-items:center;gap:16px;margin-bottom:24px;}
.hero-ico{width:50px;height:50px;background:var(--green-soft);border:2px solid var(--green-border);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.25rem;flex-shrink:0;}
.hero-eyebrow{font-size:.7rem;font-weight:700;text-transform:uppercase;letter-spacing:.09em;color:var(--green);margin-bottom:3px;}
.hero-title{font-family:var(--f-head);font-size:1.55rem;font-weight:800;color:var(--text-1);letter-spacing:-.025em;margin:0 0 2px;}
.hero-sub{font-size:.8rem;color:var(--text-3);}

/* ALL SETTLED */
.settled-state{background:var(--surface);border:1px solid var(--green-border);border-radius:var(--r-lg);padding:56px 40px;text-align:center;box-shadow:var(--sh-sm);}
.settled-em{font-size:3rem;margin-bottom:14px;}
.settled-title{font-family:var(--f-head);font-size:1.2rem;font-weight:800;color:var(--text-1);margin-bottom:8px;}
.settled-desc{font-size:.875rem;color:var(--text-2);max-width:320px;margin:0 auto;}

/* STATS */
.stats{display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-bottom:22px;}
.stat{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-md);padding:16px 20px;box-shadow:var(--sh-sm);display:flex;align-items:flex-start;justify-content:space-between;gap:8px;}
.stat-l{font-size:.72rem;font-weight:600;text-transform:uppercase;letter-spacing:.06em;color:var(--text-3);margin-bottom:5px;}
.stat-v{font-family:var(--f-head);font-size:1.4rem;font-weight:800;color:var(--text-1);line-height:1;}
.stat-s{font-size:.72rem;color:var(--text-3);margin-top:4px;}
.stat-ic{width:34px;height:34px;border-radius:var(--r-sm);display:flex;align-items:center;justify-content:center;font-size:.95rem;flex-shrink:0;}
.ic-green{background:var(--green-soft);border:1px solid var(--green-border);}
.ic-amber{background:#FFFBEB;border:1px solid #FDE68A;}

/* LIST CARD */
.list-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);box-shadow:var(--sh-md);overflow:hidden;}
.list-card-head{padding:16px 22px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;justify-content:space-between;}
.list-card-title{display:flex;align-items:center;gap:8px;font-family:var(--f-head);font-size:.95rem;font-weight:700;color:var(--text-1);}
.list-card-badge{background:var(--border-light);color:var(--text-2);border:1px solid var(--border);font-size:.7rem;font-weight:700;padding:2px 9px;border-radius:100px;}

/* SETTLEMENT ROW */
.s-row{padding:16px 22px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;justify-content:space-between;gap:16px;transition:background .15s;}
.s-row:last-child{border-bottom:none;}
.s-row:hover{background:var(--border-light);}

.s-left{display:flex;align-items:center;gap:12px;flex:1;min-width:0;}

/* AVATARS */
.av{width:36px;height:36px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:var(--f-head);font-size:.82rem;font-weight:700;color:#fff;flex-shrink:0;}
.av-0{background:linear-gradient(135deg,#16A34A,#22C55E);}
.av-1{background:linear-gradient(135deg,#2563EB,#60A5FA);}
.av-2{background:linear-gradient(135deg,#9333EA,#C084FC);}
.av-3{background:linear-gradient(135deg,#EA580C,#FB923C);}
.av-4{background:linear-gradient(135deg,#0891B2,#22D3EE);}
.av-5{background:linear-gradient(135deg,#BE185D,#F472B6);}

.s-flow{display:flex;align-items:center;gap:8px;flex:1;min-width:0;}
.s-name{font-weight:600;font-size:.875rem;color:var(--text-1);white-space:nowrap;}
.s-name-sub{font-size:.74rem;color:var(--text-3);margin-top:1px;}
.s-arrow{display:flex;flex-direction:column;align-items:center;gap:2px;flex-shrink:0;padding:0 4px;}
.s-arrow-line{width:40px;height:2px;background:linear-gradient(90deg,#E2E8F0,var(--green));border-radius:100px;}
.s-arrow-tip{font-size:.65rem;color:var(--green);}
.s-label{font-size:.7rem;color:var(--text-3);white-space:nowrap;margin-top:2px;}

.s-right{flex-shrink:0;}
.amount-pill{display:inline-flex;align-items:center;gap:5px;background:var(--green-soft);color:var(--green);border:1px solid var(--green-border);font-size:.85rem;font-weight:700;padding:6px 14px;border-radius:100px;font-family:var(--f-head);}

/* INDEX NUMBERS */
.s-index{width:24px;height:24px;border-radius:50%;background:var(--border-light);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;font-size:.68rem;font-weight:700;color:var(--text-3);flex-shrink:0;}

/* INFO STRIP */
.info-strip{margin-top:14px;background:var(--green-soft);border:1px solid var(--green-border);border-radius:var(--r-md);padding:11px 16px;font-size:.8rem;color:#15803D;display:flex;align-items:center;gap:8px;}

/* ANIM */
@keyframes up{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.list-card{animation:up .3s ease both;}
.stats .stat:nth-child(1){animation:up .2s ease both;}
.stats .stat:nth-child(2){animation:up .2s ease .05s both;}
.s-row{animation:up .25s ease both;}
.s-row:nth-child(1){animation-delay:.05s}.s-row:nth-child(2){animation-delay:.1s}
.s-row:nth-child(3){animation-delay:.15s}.s-row:nth-child(4){animation-delay:.2s}
.s-row:nth-child(5){animation-delay:.25s}.s-row:nth-child(6){animation-delay:.3s}

@media(max-width:640px){
    .ec-bar,.ec-wrap{padding-left:20px;padding-right:20px;}
    .ec-wrap{padding-top:24px;padding-bottom:24px;}
    .stats{grid-template-columns:1fr;}
    .s-arrow-line{width:24px;}
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
            <b>Règlements</b>
        </div>
        <a href="{{ route('colocations.show', $colocation->id) }}" class="btn-back">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
            Retour
        </a>
    </div>

    <div class="ec-wrap">

        {{-- HERO --}}
        <div class="page-hero">
            <div class="hero-ico">💰</div>
            <div>
                <div class="hero-eyebrow">Colocation · {{ $colocation->name }}</div>
                <h1 class="hero-title">Règlements</h1>
                <div class="hero-sub">Transactions minimales pour tout solder.</div>
            </div>
        </div>

        {{-- ── ORIGINAL BLADE LOGIC: count($settlements) == 0 ── --}}
        @if(count($settlements) == 0)
            <div class="settled-state">
                <div class="settled-em">🎉</div>
                <div class="settled-title">Tout est réglé !</div>
                <p class="settled-desc">Aucun remboursement nécessaire. Tous les soldes sont équilibrés entre les membres.</p>
            </div>
        @else

            {{-- STATS --}}
            <div class="stats">
                <div class="stat">
                    <div>
                        <div class="stat-l">Transactions</div>
                        <div class="stat-v">{{ count($settlements) }}</div>
                        <div class="stat-s">à effectuer</div>
                    </div>
                    <div class="stat-ic ic-green">🔄</div>
                </div>
                <div class="stat">
                    <div>
                        <div class="stat-l">Montant total</div>
                        <div class="stat-v">{{ number_format(collect($settlements)->sum('amount'), 0) }} DH</div>
                        <div class="stat-s">à rembourser</div>
                    </div>
                    <div class="stat-ic ic-amber">💸</div>
                </div>
            </div>

            {{-- LIST CARD --}}
            <div class="list-card">
                <div class="list-card-head">
                    <div class="list-card-title">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="17 1 21 5 17 9"/><path d="M3 11V9a4 4 0 0 1 4-4h14"/><polyline points="7 23 3 19 7 15"/><path d="M21 13v2a4 4 0 0 1-4 4H3"/></svg>
                        Qui rembourse qui
                    </div>
                    <span class="list-card-badge">{{ count($settlements) }} transaction(s)</span>
                </div>

                {{-- ── ORIGINAL BLADE LOGIC: @foreach($settlements as $s) ── --}}
                @php $avColors = ['av-0','av-1','av-2','av-3','av-4','av-5']; @endphp
                @foreach($settlements as $i => $s)
                <div class="s-row">
                    <div class="s-left">
                        <span class="s-index">{{ $i + 1 }}</span>

                        {{-- FROM --}}
                        <div class="av {{ $avColors[$i % 6] }}">
                            {{ strtoupper(substr($s['from']->name, 0, 1)) }}
                        </div>
                        <div>
                            <div class="s-name">{{ $s['from']->name }}</div>
                            <div class="s-name-sub">Débiteur</div>
                        </div>

                        {{-- ARROW --}}
                        <div class="s-arrow">
                            <div class="s-arrow-line"></div>
                            <div class="s-arrow-tip">▶</div>
                            <div class="s-label">rembourse</div>
                        </div>

                        {{-- TO --}}
                        <div class="av {{ $avColors[($i + 2) % 6] }}">
                            {{ strtoupper(substr($s['to']->name, 0, 1)) }}
                        </div>
                        <div>
                            <div class="s-name">{{ $s['to']->name }}</div>
                            <div class="s-name-sub">Créditeur</div>
                        </div>
                    </div>

                    <div class="s-right">
                        {{-- ── ORIGINAL BLADE LOGIC: $s['amount'] ── --}}
                        <span class="amount-pill">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                            {{ $s['amount'] }} DH
                        </span>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="info-strip">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink:0;"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                Ces transactions sont calculées pour minimiser le nombre de virements nécessaires entre tous les membres.
            </div>

        @endif

    </div>
</div>

</x-app-layout>