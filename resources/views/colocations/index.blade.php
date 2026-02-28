<x-app-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<style>
:root {
    --green:        #16A34A;
    --green-hover:  #15803D;
    --green-light:  #22C55E;
    --green-soft:   #F0FDF4;
    --green-mid:    #DCFCE7;
    --green-border: #BBF7D0;
    --text-1: #0F172A;
    --text-2: #475569;
    --text-3: #94A3B8;
    --surface:#FFFFFF;
    --bg:     #F8FAFC;
    --border: #E2E8F0;
    --border-light:#F1F5F9;
    --sh-sm:  0 1px 3px rgba(0,0,0,.07),0 1px 2px -1px rgba(0,0,0,.06);
    --sh-md:  0 4px 6px -1px rgba(0,0,0,.07),0 2px 4px -2px rgba(0,0,0,.06);
    --sh-lg:  0 10px 20px -3px rgba(0,0,0,.08),0 4px 6px -4px rgba(0,0,0,.05);
    --r-sm:8px; --r-md:12px; --r-lg:16px;
    --f-head:'Outfit',sans-serif;
    --f-body:'DM Sans',sans-serif;
}
*{box-sizing:border-box;}
.ec-root{background:var(--bg);min-height:100vh;font-family:var(--f-body);color:var(--text-1);}

/* TOP BAR */
.ec-bar{background:var(--surface);border-bottom:1px solid var(--border);padding:0 40px;height:58px;display:flex;align-items:center;justify-content:space-between;position:sticky;top:0;z-index:50;}
.ec-crumb{display:flex;align-items:center;gap:8px;font-size:.8rem;color:var(--text-3);}
.ec-crumb b{color:var(--text-1);font-weight:600;}
.ec-crumb span{color:var(--border);}

/* MAIN */
.ec-wrap{max-width:1080px;margin:0 auto;padding:36px 40px;}

/* HEADER */
.ec-hd{display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:28px;gap:16px;flex-wrap:wrap;}
.ec-label{font-size:.7rem;font-weight:700;text-transform:uppercase;letter-spacing:.09em;color:var(--green);margin-bottom:4px;}
.ec-title{font-family:var(--f-head);font-size:1.7rem;font-weight:800;color:var(--text-1);letter-spacing:-.025em;margin:0 0 3px;}
.ec-sub{font-size:.855rem;color:var(--text-2);}

/* BUTTONS */
.btn-p{background:var(--green);color:#fff!important;border:none;font-family:var(--f-body);font-weight:600;font-size:.875rem;padding:10px 18px;border-radius:var(--r-sm);cursor:pointer;text-decoration:none;display:inline-flex;align-items:center;gap:7px;transition:background .15s,transform .1s,box-shadow .15s;box-shadow:0 1px 2px rgba(22,163,74,.3);}
.btn-p:hover{background:var(--green-hover);transform:translateY(-1px);box-shadow:0 4px 10px rgba(22,163,74,.28);}
.btn-p:active{transform:translateY(0);}
.btn-g{background:transparent;color:var(--text-2)!important;border:1px solid var(--border);font-family:var(--f-body);font-weight:500;font-size:.82rem;padding:8px 14px;border-radius:var(--r-sm);text-decoration:none;display:inline-flex;align-items:center;gap:6px;transition:all .15s;}
.btn-g:hover{border-color:var(--text-3);background:var(--border-light);color:var(--text-1)!important;}

/* STATS */
.stats{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-bottom:26px;}
.stat{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-md);padding:18px 20px;box-shadow:var(--sh-sm);display:flex;align-items:flex-start;justify-content:space-between;gap:8px;}
.stat-body{}
.stat-l{font-size:.72rem;font-weight:600;text-transform:uppercase;letter-spacing:.06em;color:var(--text-3);margin-bottom:6px;}
.stat-v{font-family:var(--f-head);font-size:1.55rem;font-weight:800;color:var(--text-1);line-height:1;}
.stat-s{font-size:.74rem;color:var(--text-3);margin-top:5px;}
.stat-ic{width:36px;height:36px;border-radius:var(--r-sm);display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0;}
.stat-ic.green{background:var(--green-soft);border:1px solid var(--green-border);}
.stat-ic.blue{background:#EFF6FF;border:1px solid #BFDBFE;}
.stat-ic.amber{background:#FFFBEB;border:1px solid #FDE68A;}

/* TOOLBAR */
.toolbar{display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;gap:12px;flex-wrap:wrap;}
.search-box{position:relative;flex:1;max-width:280px;}
.search-box svg{position:absolute;left:11px;top:50%;transform:translateY(-50%);color:var(--text-3);}
.search-box input{width:100%;padding:9px 12px 9px 34px;border:1px solid var(--border);border-radius:var(--r-sm);font-family:var(--f-body);font-size:.855rem;color:var(--text-1);background:var(--surface);outline:none;transition:border-color .15s,box-shadow .15s;}
.search-box input:focus{border-color:var(--green);box-shadow:0 0 0 3px rgba(22,163,74,.1);}
.search-box input::placeholder{color:var(--text-3);}
.tc{font-size:.78rem;color:var(--text-3);}

/* GRID */
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:14px;}

.ccard{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);padding:22px;text-decoration:none;color:inherit;display:flex;flex-direction:column;gap:14px;box-shadow:var(--sh-sm);transition:box-shadow .2s,border-color .2s,transform .15s;position:relative;overflow:hidden;}
.ccard::after{content:'';position:absolute;top:0;left:0;right:0;height:2.5px;background:linear-gradient(90deg,var(--green),var(--green-light));opacity:0;transition:opacity .2s;}
.ccard:hover{box-shadow:var(--sh-lg);border-color:var(--green-border);transform:translateY(-2px);}
.ccard:hover::after{opacity:1;}

.ccard-top{display:flex;align-items:flex-start;justify-content:space-between;}
.ccard-ico{width:42px;height:42px;background:var(--green-soft);border:1.5px solid var(--green-border);border-radius:11px;display:flex;align-items:center;justify-content:center;font-size:1.1rem;}
.badge-active{display:inline-flex;align-items:center;gap:5px;font-size:.7rem;font-weight:600;padding:4px 9px;border-radius:100px;background:var(--green-soft);color:var(--green);border:1px solid var(--green-border);}
.badge-dot{width:5px;height:5px;border-radius:50%;background:currentColor;animation:blink 2s infinite;}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.35}}

.ccard-name{font-family:var(--f-head);font-size:1rem;font-weight:700;color:var(--text-1);letter-spacing:-.015em;margin:2px 0 2px;}
.ccard-date{font-size:.76rem;color:var(--text-3);}

.ccard-divider{height:1px;background:var(--border-light);}

.ccard-meta{display:flex;gap:16px;}
.meta-i{display:flex;align-items:center;gap:5px;font-size:.78rem;color:var(--text-2);}

.ccard-foot{display:flex;align-items:center;justify-content:space-between;}
.avatars{display:flex;}
.av{width:24px;height:24px;border-radius:50%;border:2px solid var(--surface);display:flex;align-items:center;justify-content:center;font-size:.58rem;font-weight:700;color:#fff;background:linear-gradient(135deg,var(--green),var(--green-light));margin-left:-7px;}
.av:first-child{margin-left:0;}
.av-more{background:#CBD5E1!important;background:linear-gradient(135deg,#94A3B8,#CBD5E1)!important;}
.arr{color:var(--text-3);font-size:.875rem;transition:color .15s,transform .15s;}
.ccard:hover .arr{color:var(--green);transform:translateX(3px);}

/* EMPTY */
.empty{grid-column:1/-1;background:var(--surface);border:2px dashed var(--border);border-radius:var(--r-lg);padding:56px 40px;text-align:center;}
.empty-em{font-size:2.8rem;margin-bottom:14px;}
.empty-t{font-family:var(--f-head);font-size:1.1rem;font-weight:700;color:var(--text-1);margin-bottom:6px;}
.empty-d{font-size:.855rem;color:var(--text-2);max-width:340px;margin:0 auto 22px;line-height:1.65;}

/* ALERTS */
.alert-s{display:flex;align-items:center;gap:9px;padding:11px 15px;border-radius:var(--r-sm);font-size:.855rem;margin-bottom:18px;background:var(--green-soft);border:1px solid var(--green-border);color:#15803D;}
.alert-e{background:#FEF2F2;border:1px solid #FECACA;color:#DC2626;}

/* ANIM */
@keyframes up{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.ccard{animation:up .3s ease both;}
.ccard:nth-child(1){animation-delay:.04s}.ccard:nth-child(2){animation-delay:.08s}.ccard:nth-child(3){animation-delay:.12s}
.ccard:nth-child(4){animation-delay:.16s}.ccard:nth-child(5){animation-delay:.20s}.ccard:nth-child(6){animation-delay:.24s}
.stat{animation:up .25s ease both;}
.stat:nth-child(1){animation-delay:.0s}.stat:nth-child(2){animation-delay:.05s}.stat:nth-child(3){animation-delay:.1s}

@media(max-width:768px){
    .ec-bar,.ec-wrap{padding-left:20px;padding-right:20px;}
    .stats{grid-template-columns:1fr 1fr;}
    .stats .stat:last-child{grid-column:1/-1;}
    .ec-hd{flex-direction:column;}
}
</style>

<div class="ec-root">

    <div class="ec-bar">
        <div class="ec-crumb">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            EasyColoc
            <span>›</span>
            <b>Mes colocations</b>
        </div>
        <a href="{{ route('colocations.create') }}" class="btn-p">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
            Nouvelle colocation
        </a>
    </div>

    <div class="ec-wrap">

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

        <div class="ec-hd">
            <div>
                <div class="ec-label">Vue d'ensemble</div>
                <h1 class="ec-title">Mes colocations</h1>
                <p class="ec-sub">Gérez vos espaces partagés et suivez les dépenses en temps réel.</p>
            </div>
        </div>

        <div class="stats">
            <div class="stat">
                <div class="stat-body">
                    <div class="stat-l">Colocations</div>
                    <div class="stat-v">{{ $colocations->count() }}</div>
                    <div class="stat-s">espaces actifs</div>
                </div>
                <div class="stat-ic green">🏠</div>
            </div>
            <div class="stat">
                <div class="stat-body">
                    <div class="stat-l">Membres</div>
                    <div class="stat-v">{{ $colocations->sum(fn($c) => $c->members->count()) }}</div>
                    <div class="stat-s">au total</div>
                </div>
                <div class="stat-ic blue">👥</div>
            </div>
            <div class="stat">
                <div class="stat-body">
                    <div class="stat-l">Statut global</div>
                    <div class="stat-v" style="font-size:.95rem;padding-top:5px;">
                        <span class="badge-active"><span class="badge-dot"></span>Actif</span>
                    </div>
                    <div class="stat-s">tout est à jour</div>
                </div>
                <div class="stat-ic amber">✅</div>
            </div>
        </div>

        <div class="toolbar">
            <div class="search-box">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                <input type="text" placeholder="Rechercher…" id="si" oninput="filterC(this.value)">
            </div>
            <span class="tc" id="cc">{{ $colocations->count() }} colocation(s)</span>
        </div>

        <div class="grid" id="cg">
            @forelse($colocations as $col)
            <a href="{{ route('colocations.show', $col->id) }}" class="ccard" data-name="{{ strtolower($col->name) }}">
                <div class="ccard-top">
                    <div class="ccard-ico">🏠</div>
                    <span class="badge-active"><span class="badge-dot"></span>Active</span>
                </div>
                <div>
                    <div class="ccard-name">{{ $col->name }}</div>
                    <div class="ccard-date">Créée le {{ $col->created_at->format('d M Y') }}</div>
                </div>
                <div class="ccard-divider"></div>
                <div class="ccard-meta">
                    <div class="meta-i">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        {{ $col->members->count() }} membre(s)
                    </div>
                    <div class="meta-i">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        {{ $col->updated_at->diffForHumans() }}
                    </div>
                </div>
                <div class="ccard-foot">
                    <div class="avatars">
                        @foreach($col->members->take(4) as $m)
                        <div class="av">{{ strtoupper(substr($m->name,0,1)) }}</div>
                        @endforeach
                        @if($col->members->count() > 4)
                        <div class="av av-more">+{{ $col->members->count()-4 }}</div>
                        @endif
                    </div>
                    <span class="arr">→</span>
                </div>
            </a>
            @empty
            <div class="empty">
                <div class="empty-em">🏠</div>
                <div class="empty-t">Aucune colocation pour l'instant</div>
                <p class="empty-d">Créez votre première colocation, invitez vos colocataires et commencez à suivre vos dépenses partagées sans effort.</p>
                <a href="{{ route('colocations.create') }}" class="btn-p">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                    Créer ma première colocation
                </a>
            </div>
            @endforelse
        </div>

    </div>
</div>

<script>
function filterC(q){
    const cards=document.querySelectorAll('.ccard[data-name]');
    let v=0;
    cards.forEach(c=>{
        const m=c.dataset.name.includes(q.toLowerCase());
        c.style.display=m?'':'none';
        if(m)v++;
    });
    document.getElementById('cc').textContent=v+' colocation(s)';
}
</script>

</x-app-layout>