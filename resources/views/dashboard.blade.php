<x-app-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<style>
:root{
    --green:#16A34A;--green-hover:#15803D;--green-light:#22C55E;
    --green-soft:#F0FDF4;--green-border:#BBF7D0;
    --text-1:#0F172A;--text-2:#475569;--text-3:#94A3B8;
    --surface:#FFFFFF;--bg:#F8FAFC;--border:#E2E8F0;--border-light:#F1F5F9;
    --sidebar-w:240px;
    --sh-sm:0 1px 3px rgba(0,0,0,.07),0 1px 2px -1px rgba(0,0,0,.06);
    --sh-md:0 4px 6px -1px rgba(0,0,0,.07),0 2px 4px -2px rgba(0,0,0,.06);
    --r-sm:8px;--r-md:12px;--r-lg:16px;
    --f-head:'Outfit',sans-serif;--f-body:'DM Sans',sans-serif;
}
*{box-sizing:border-box;margin:0;padding:0;}

/* ── SHELL ── */
.app-shell{display:flex;min-height:100vh;background:var(--bg);font-family:var(--f-body);color:var(--text-1);}

/* ── SIDEBAR ── */
.sidebar{
    width:var(--sidebar-w);
    background:var(--surface);
    border-right:1px solid var(--border);
    display:flex;
    flex-direction:column;
    position:fixed;
    top:0;left:0;bottom:0;
    z-index:40;
    transition:transform .25s ease;
}

/* Brand */
.sb-brand{
    padding:20px 18px 16px;
    border-bottom:1px solid var(--border-light);
    display:flex;align-items:center;gap:10px;
    text-decoration:none;
}
.sb-brand-ico{
    width:34px;height:34px;
    background:var(--green);
    border-radius:9px;
    display:flex;align-items:center;justify-content:center;
    font-size:.95rem;
    flex-shrink:0;
}
.sb-brand-name{
    font-family:var(--f-head);
    font-size:1rem;
    font-weight:800;
    color:var(--text-1);
    letter-spacing:-.02em;
}
.sb-brand-name .dot{color:var(--green);}

/* Nav sections */
.sb-body{flex:1;overflow-y:auto;padding:12px 10px;}
.sb-section{margin-bottom:20px;}
.sb-section-label{
    font-size:.66rem;
    font-weight:700;
    text-transform:uppercase;
    letter-spacing:.09em;
    color:var(--text-3);
    padding:0 8px;
    margin-bottom:4px;
}
.sb-link{
    display:flex;align-items:center;gap:10px;
    padding:9px 10px;
    border-radius:var(--r-sm);
    text-decoration:none;
    font-size:.855rem;
    font-weight:500;
    color:var(--text-2);
    transition:background .15s,color .15s;
    position:relative;
}
.sb-link:hover{background:var(--border-light);color:var(--text-1);}
.sb-link.active{background:var(--green-soft);color:var(--green);font-weight:600;}
.sb-link.active .sb-link-ico{color:var(--green);}
.sb-link-ico{width:18px;display:flex;align-items:center;justify-content:center;color:var(--text-3);flex-shrink:0;transition:color .15s;}
.sb-link:hover .sb-link-ico{color:var(--text-1);}
.sb-badge{
    margin-left:auto;
    background:var(--green-soft);
    color:var(--green);
    border:1px solid var(--green-border);
    font-size:.62rem;font-weight:700;
    padding:1px 7px;border-radius:100px;
}

/* User card at bottom */
.sb-foot{
    padding:12px 10px;
    border-top:1px solid var(--border-light);
}
.sb-user{
    display:flex;align-items:center;gap:10px;
    padding:9px 10px;
    border-radius:var(--r-sm);
    cursor:default;
}
.sb-user-av{
    width:32px;height:32px;
    border-radius:50%;
    background:linear-gradient(135deg,var(--green),var(--green-light));
    display:flex;align-items:center;justify-content:center;
    font-family:var(--f-head);font-size:.75rem;font-weight:700;color:#fff;
    flex-shrink:0;
}
.sb-user-name{font-size:.82rem;font-weight:600;color:var(--text-1);line-height:1.2;}
.sb-user-role{font-size:.7rem;color:var(--text-3);}

/* Logout link */
.sb-logout{
    display:flex;align-items:center;gap:10px;
    padding:9px 10px;
    border-radius:var(--r-sm);
    font-size:.855rem;font-weight:500;
    color:#DC2626;
    cursor:pointer;
    border:none;background:transparent;width:100%;
    transition:background .15s;
    text-decoration:none;
    margin-top:2px;
}
.sb-logout:hover{background:#FEF2F2;}
.sb-logout .sb-link-ico{color:#DC2626;}

/* ── MAIN CONTENT ── */
.main{
    margin-left:var(--sidebar-w);
    flex:1;
    display:flex;
    flex-direction:column;
    min-height:100vh;
}

/* Top bar */
.main-bar{
    background:var(--surface);
    border-bottom:1px solid var(--border);
    height:58px;
    display:flex;align-items:center;justify-content:space-between;
    padding:0 36px;
    position:sticky;top:0;z-index:30;
}
.main-bar-title{font-family:var(--f-head);font-size:.95rem;font-weight:700;color:var(--text-1);}
.main-bar-right{display:flex;align-items:center;gap:10px;}
.topbar-greeting{font-size:.82rem;color:var(--text-3);}
.btn-p{background:var(--green);color:#fff!important;border:none;font-family:var(--f-body);font-weight:600;font-size:.855rem;padding:9px 16px;border-radius:var(--r-sm);cursor:pointer;text-decoration:none;display:inline-flex;align-items:center;gap:6px;transition:background .15s,transform .1s;box-shadow:0 1px 2px rgba(22,163,74,.25);}
.btn-p:hover{background:var(--green-hover);transform:translateY(-1px);}

/* Hamburger */
.hamburger{display:none;background:transparent;border:1px solid var(--border);border-radius:var(--r-sm);padding:7px 9px;cursor:pointer;color:var(--text-2);}

/* ── CONTENT AREA ── */
.content{padding:32px 36px;flex:1;}

/* ── WELCOME BANNER ── */
.welcome-banner{
    background:linear-gradient(135deg,var(--green) 0%,var(--green-hover) 100%);
    border-radius:var(--r-lg);
    padding:28px 32px;
    margin-bottom:24px;
    display:flex;align-items:center;justify-content:space-between;gap:20px;
    flex-wrap:wrap;
    position:relative;
    overflow:hidden;
}
.welcome-banner::before{
    content:'';
    position:absolute;top:-30px;right:-30px;
    width:160px;height:160px;
    border-radius:50%;
    background:rgba(255,255,255,.07);
}
.welcome-banner::after{
    content:'';
    position:absolute;bottom:-50px;right:80px;
    width:120px;height:120px;
    border-radius:50%;
    background:rgba(255,255,255,.05);
}
.wb-title{font-family:var(--f-head);font-size:1.35rem;font-weight:800;color:#fff;margin-bottom:4px;position:relative;}
.wb-sub{font-size:.855rem;color:rgba(255,255,255,.75);position:relative;}
.btn-wb{background:rgba(255,255,255,.15);color:#fff!important;border:1.5px solid rgba(255,255,255,.3);font-family:var(--f-body);font-weight:600;font-size:.855rem;padding:10px 20px;border-radius:var(--r-sm);text-decoration:none;display:inline-flex;align-items:center;gap:6px;transition:background .15s;backdrop-filter:blur(4px);position:relative;}
.btn-wb:hover{background:rgba(255,255,255,.25);}

/* ── STAT STRIP ── */
.stats{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-bottom:24px;}
.stat{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-md);padding:18px 20px;box-shadow:var(--sh-sm);display:flex;align-items:flex-start;justify-content:space-between;gap:10px;}
.stat-l{font-size:.72rem;font-weight:600;text-transform:uppercase;letter-spacing:.06em;color:var(--text-3);margin-bottom:5px;}
.stat-v{font-family:var(--f-head);font-size:1.45rem;font-weight:800;color:var(--text-1);line-height:1;}
.stat-s{font-size:.72rem;color:var(--text-3);margin-top:4px;}
.stat-ic{width:36px;height:36px;border-radius:var(--r-sm);display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0;}
.ic-green{background:var(--green-soft);border:1px solid var(--green-border);}
.ic-blue{background:#EFF6FF;border:1px solid #BFDBFE;}
.ic-purple{background:#F5F3FF;border:1px solid #DDD6FE;}
.ic-amber{background:#FFFBEB;border:1px solid #FDE68A;}

/* ── CARDS ROW ── */
.cards-row{display:grid;grid-template-columns:1fr 1fr;gap:18px;}

/* Quick actions */
.panel{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);box-shadow:var(--sh-sm);overflow:hidden;}
.panel-head{padding:16px 22px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;justify-content:space-between;}
.panel-title{font-family:var(--f-head);font-size:.9rem;font-weight:700;color:var(--text-1);}
.panel-link{font-size:.78rem;font-weight:600;color:var(--green);text-decoration:none;}
.panel-link:hover{text-decoration:underline;}
.panel-body{padding:16px 22px;}

/* Quick action items */
.qa-item{display:flex;align-items:center;gap:12px;padding:11px 0;border-bottom:1px solid var(--border-light);text-decoration:none;color:inherit;transition:background .1s;border-radius:var(--r-sm);}
.qa-item:last-child{border-bottom:none;}
.qa-ico{width:36px;height:36px;border-radius:var(--r-sm);display:flex;align-items:center;justify-content:center;font-size:.95rem;flex-shrink:0;}
.qa-label{font-size:.855rem;font-weight:600;color:var(--text-1);}
.qa-sub{font-size:.74rem;color:var(--text-3);margin-top:1px;}
.qa-arrow{margin-left:auto;color:var(--text-3);font-size:.8rem;transition:transform .15s,color .15s;}
.qa-item:hover .qa-arrow{color:var(--green);transform:translateX(3px);}

/* Recent activity placeholder */
.activity-empty{text-align:center;padding:32px 20px;}
.activity-empty-em{font-size:1.8rem;margin-bottom:8px;}
.activity-empty-t{font-size:.855rem;font-weight:600;color:var(--text-2);margin-bottom:4px;}
.activity-empty-s{font-size:.78rem;color:var(--text-3);}

/* ── MOBILE OVERLAY ── */
.sb-overlay{display:none;position:fixed;inset:0;background:rgba(15,23,42,.4);z-index:39;backdrop-filter:blur(2px);}

/* ── ANIMATIONS ── */
@keyframes up{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.welcome-banner{animation:up .3s ease both;}
.stats .stat:nth-child(1){animation:up .25s ease .05s both;}
.stats .stat:nth-child(2){animation:up .25s ease .10s both;}
.stats .stat:nth-child(3){animation:up .25s ease .15s both;}
.stats .stat:nth-child(4){animation:up .25s ease .20s both;}
.cards-row{animation:up .3s ease .25s both;}

/* ── RESPONSIVE ── */
@media(max-width:1024px){
    .stats{grid-template-columns:repeat(2,1fr);}
}
@media(max-width:768px){
    .sidebar{transform:translateX(-100%);}
    .sidebar.open{transform:translateX(0);}
    .sb-overlay.open{display:block;}
    .main{margin-left:0;}
    .hamburger{display:flex;align-items:center;}
    .main-bar,.content{padding-left:20px;padding-right:20px;}
    .cards-row{grid-template-columns:1fr;}
    .stats{grid-template-columns:1fr 1fr;}
    .welcome-banner{padding:22px 22px;}
}
</style>

<div class="app-shell">

    {{-- ── SIDEBAR ── --}}
    <aside class="sidebar" id="sidebar">

        {{-- Brand --}}
        <a href="{{ route('dashboard') }}" class="sb-brand">
            <div class="sb-brand-ico">🏠</div>
            <span class="sb-brand-name">easy<span class="dot">coloc</span></span>
        </a>

        {{-- Nav --}}
        <nav class="sb-body">

            {{-- Main section --}}
            <div class="sb-section">
                <div class="sb-section-label">Navigation</div>

                <a href="{{ route('colocations.index') }}" class="sb-link {{ request()->routeIs('colocations.*') ? 'active' : '' }}">
                    <span class="sb-link-ico">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </span>
                    Colocations
                </a>

                <a href="#" class="sb-link {{ request()->routeIs('expenses.*') ? 'active' : '' }}">
                    <span class="sb-link-ico">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </span>
                    Dépenses
                </a>

                <a href="#" class="sb-link {{ request()->routeIs('members.*') ? 'active' : '' }}">
                    <span class="sb-link-ico">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </span>
                    Membres
                </a>

                <a href="#" class="sb-link {{ request()->routeIs('categories.*') ? 'active' : '' }}">
                    <span class="sb-link-ico">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                    </span>
                    Catégories
                </a>
            </div>

            {{-- Account section --}}
            <div class="sb-section">
                <div class="sb-section-label">Compte</div>

                <a href="{{ route('dashboard') }}" class="sb-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <span class="sb-link-ico">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                    </span>
                    Tableau de bord
                </a>

                <a href="{{ route('profile.edit') }}" class="sb-link {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                    <span class="sb-link-ico">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </span>
                    Profil
                </a>
            </div>
        </nav>

        {{-- Footer: user + logout --}}
        <div class="sb-foot">
            <div class="sb-user">
                <div class="sb-user-av">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div>
                    <div class="sb-user-name">{{ Auth::user()->name }}</div>
                    <div class="sb-user-role">{{ Auth::user()->email }}</div>
                </div>
            </div>

            {{-- ── ORIGINAL BLADE LOGIC: Breeze logout ── --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="sb-logout">
                    <span class="sb-link-ico">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                    </span>
                    Déconnexion
                </button>
            </form>
        </div>
    </aside>

    {{-- Overlay for mobile --}}
    <div class="sb-overlay" id="sbOverlay" onclick="closeSidebar()"></div>

    {{-- ── MAIN ── --}}
    <div class="main">

        {{-- Top bar --}}
        <div class="main-bar">
            <div style="display:flex;align-items:center;gap:12px;">
                <button class="hamburger" onclick="toggleSidebar()" aria-label="Menu">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                </button>
                <span class="main-bar-title">Tableau de bord</span>
            </div>
            <div class="main-bar-right">
                <span class="topbar-greeting">Bonjour, {{ Auth::user()->name }} 👋</span>
                <a href="{{ route('colocations.create') }}" class="btn-p">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                    Nouvelle colocation
                </a>
            </div>
        </div>

        {{-- Content --}}
        <div class="content">

            {{-- ── ORIGINAL BLADE LOGIC: {{ __("You're logged in!") }} ── --}}

            {{-- Welcome banner --}}
            <div class="welcome-banner">
                <div>
                    <div class="wb-title">Bienvenue, {{ Auth::user()->name }} ! 🎉</div>
                    <div class="wb-sub">Gérez vos colocations et suivez vos dépenses partagées en toute simplicité.</div>
                </div>
                <a href="{{ route('colocations.create') }}" class="btn-wb">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                    Créer une colocation
                </a>
            </div>

            {{-- Stats --}}
            <div class="stats">
                <div class="stat">
                    <div>
                        <div class="stat-l">Colocations</div>
                        <div class="stat-v">{{ Auth::user()->colocations()->count() ?? 0 }}</div>
                        <div class="stat-s">actives</div>
                    </div>
                    <div class="stat-ic ic-green">🏠</div>
                </div>
                <div class="stat">
                    <div>
                        <div class="stat-l">Dépenses</div>
                        <div class="stat-v">—</div>
                        <div class="stat-s">ce mois</div>
                    </div>
                    <div class="stat-ic ic-blue">💳</div>
                </div>
                <div class="stat">
                    <div>
                        <div class="stat-l">Membres</div>
                        <div class="stat-v">—</div>
                        <div class="stat-s">au total</div>
                    </div>
                    <div class="stat-ic ic-purple">👥</div>
                </div>
                <div class="stat">
                    <div>
                        <div class="stat-l">Solde</div>
                        <div class="stat-v">—</div>
                        <div class="stat-s">net estimé</div>
                    </div>
                    <div class="stat-ic ic-amber">⚖️</div>
                </div>
            </div>

            {{-- Two-panel row --}}
            <div class="cards-row">

                {{-- Quick actions --}}
                <div class="panel">
                    <div class="panel-head">
                        <span class="panel-title">Actions rapides</span>
                    </div>
                    <div class="panel-body">

                        <a href="{{ route('colocations.index') }}" class="qa-item">
                            <div class="qa-ico ic-green" style="background:#F0FDF4;border:1px solid #BBF7D0;">🏠</div>
                            <div>
                                <div class="qa-label">Mes colocations</div>
                                <div class="qa-sub">Gérer vos espaces partagés</div>
                            </div>
                            <span class="qa-arrow">→</span>
                        </a>

                        <a href="{{ route('colocations.create') }}" class="qa-item">
                            <div class="qa-ico" style="background:#EFF6FF;border:1px solid #BFDBFE;">➕</div>
                            <div>
                                <div class="qa-label">Nouvelle colocation</div>
                                <div class="qa-sub">Créer un nouvel espace</div>
                            </div>
                            <span class="qa-arrow">→</span>
                        </a>

                        <a href="{{ route('profile.edit') }}" class="qa-item">
                            <div class="qa-ico" style="background:#F5F3FF;border:1px solid #DDD6FE;">👤</div>
                            <div>
                                <div class="qa-label">Mon profil</div>
                                <div class="qa-sub">Modifier vos informations</div>
                            </div>
                            <span class="qa-arrow">→</span>
                        </a>

                    </div>
                </div>

                {{-- Activity / tip --}}
                <div class="panel">
                    <div class="panel-head">
                        <span class="panel-title">Activité récente</span>
                    </div>
                    <div class="panel-body">
                        <div class="activity-empty">
                            <div class="activity-empty-em">📭</div>
                            <div class="activity-empty-t">Aucune activité récente</div>
                            <div class="activity-empty-s">Créez une colocation et ajoutez des dépenses pour voir l'activité ici.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
function toggleSidebar(){
    document.getElementById('sidebar').classList.toggle('open');
    document.getElementById('sbOverlay').classList.toggle('open');
}
function closeSidebar(){
    document.getElementById('sidebar').classList.remove('open');
    document.getElementById('sbOverlay').classList.remove('open');
}
// Close on Escape
document.addEventListener('keydown',e=>{if(e.key==='Escape')closeSidebar();});
</script>

</x-app-layout>