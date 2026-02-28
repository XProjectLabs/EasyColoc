<x-app-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<style>
/* ── SHARED ADMIN SHELL (paste same CSS in every admin page) ── */
:root{
    --green:#16A34A;--green-hover:#15803D;--green-light:#22C55E;
    --green-soft:#F0FDF4;--green-border:#BBF7D0;
    --red:#DC2626;--red-soft:#FEF2F2;--red-border:#FECACA;
    --amber:#D97706;--amber-soft:#FFFBEB;--amber-border:#FDE68A;
    --blue:#2563EB;--blue-soft:#EFF6FF;--blue-border:#BFDBFE;
    --text-1:#0F172A;--text-2:#475569;--text-3:#94A3B8;
    --surface:#FFFFFF;--bg:#F8FAFC;--border:#E2E8F0;--border-light:#F1F5F9;
    --sidebar-w:240px;
    --sh-sm:0 1px 3px rgba(0,0,0,.07),0 1px 2px -1px rgba(0,0,0,.06);
    --sh-md:0 4px 6px -1px rgba(0,0,0,.07),0 2px 4px -2px rgba(0,0,0,.06);
    --r-sm:8px;--r-md:12px;--r-lg:16px;
    --f-head:'Outfit',sans-serif;--f-body:'DM Sans',sans-serif;
}
*{box-sizing:border-box;margin:0;padding:0;}
.admin-shell{display:flex;min-height:100vh;background:var(--bg);font-family:var(--f-body);color:var(--text-1);}

/* ── SIDEBAR ── */
.adm-sb{
    width:var(--sidebar-w);
    background:var(--surface);
    border-right:1px solid var(--border);
    display:flex;flex-direction:column;
    position:fixed;top:0;left:0;bottom:0;
    z-index:40;
    transition:transform .25s ease;
    overflow-y:auto;
}

/* Brand */
.adm-brand{
    padding:18px 16px 15px;
    border-bottom:1px solid var(--border-light);
    display:flex;align-items:center;gap:10px;
    text-decoration:none;
    flex-shrink:0;
}
.adm-brand-ico{
    width:32px;height:32px;
    background:#0F172A;
    border-radius:8px;
    display:flex;align-items:center;justify-content:center;
    font-size:.85rem;flex-shrink:0;
}
.adm-brand-name{font-family:var(--f-head);font-size:.95rem;font-weight:800;color:var(--text-1);letter-spacing:-.02em;line-height:1.1;}
.adm-brand-badge{font-size:.58rem;font-weight:700;text-transform:uppercase;letter-spacing:.08em;background:#0F172A;color:#fff;padding:2px 6px;border-radius:4px;display:inline-block;margin-top:2px;}

/* Nav */
.adm-nav{flex:1;padding:12px 10px;display:flex;flex-direction:column;gap:2px;}
.adm-section-label{font-size:.64rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--text-3);padding:10px 8px 4px;margin-top:4px;}
.adm-section-label:first-child{margin-top:0;}

.adm-link{
    display:flex;align-items:center;gap:10px;
    padding:9px 10px;border-radius:var(--r-sm);
    text-decoration:none;font-size:.845rem;font-weight:500;
    color:var(--text-2);
    transition:background .12s,color .12s;
    position:relative;
}
.adm-link:hover{background:var(--border-light);color:var(--text-1);}
.adm-link.active{background:#F1F5F9;color:var(--text-1);font-weight:600;}
.adm-link.active::before{content:'';position:absolute;left:0;top:20%;bottom:20%;width:3px;background:#0F172A;border-radius:0 3px 3px 0;}
.adm-link-ico{width:17px;display:flex;align-items:center;justify-content:center;color:var(--text-3);flex-shrink:0;transition:color .12s;}
.adm-link:hover .adm-link-ico,.adm-link.active .adm-link-ico{color:var(--text-1);}
.adm-link.active-danger{background:var(--red-soft);color:var(--red);font-weight:600;}
.adm-link.active-danger::before{background:var(--red);}
.adm-link.active-danger .adm-link-ico{color:var(--red);}

.adm-badge{margin-left:auto;font-size:.62rem;font-weight:700;padding:1px 7px;border-radius:100px;}
.adm-badge-red{background:var(--red-soft);color:var(--red);border:1px solid var(--red-border);}
.adm-badge-gray{background:var(--border-light);color:var(--text-2);border:1px solid var(--border);}

/* Divider */
.adm-divider{height:1px;background:var(--border-light);margin:8px 10px;}

/* Footer */
.adm-foot{padding:10px;border-top:1px solid var(--border-light);flex-shrink:0;}
.adm-user{display:flex;align-items:center;gap:9px;padding:9px 10px;border-radius:var(--r-sm);}
.adm-av{width:30px;height:30px;border-radius:50%;background:#0F172A;display:flex;align-items:center;justify-content:center;font-family:var(--f-head);font-size:.72rem;font-weight:700;color:#fff;flex-shrink:0;}
.adm-user-name{font-size:.8rem;font-weight:600;color:var(--text-1);line-height:1.2;}
.adm-user-role{font-size:.68rem;color:var(--text-3);}
.adm-logout{display:flex;align-items:center;gap:9px;padding:8px 10px;border-radius:var(--r-sm);font-size:.82rem;font-weight:500;color:var(--red);cursor:pointer;border:none;background:transparent;width:100%;transition:background .12s;text-decoration:none;margin-top:2px;}
.adm-logout:hover{background:var(--red-soft);}
.adm-logout .adm-link-ico{color:var(--red);}

/* ── MAIN AREA ── */
.adm-main{margin-left:var(--sidebar-w);flex:1;display:flex;flex-direction:column;min-height:100vh;}

/* Topbar */
.adm-bar{background:var(--surface);border-bottom:1px solid var(--border);height:56px;display:flex;align-items:center;justify-content:space-between;padding:0 32px;position:sticky;top:0;z-index:30;}
.adm-bar-left{display:flex;align-items:center;gap:10px;}
.adm-bar-title{font-family:var(--f-head);font-size:.9rem;font-weight:700;color:var(--text-1);}
.adm-crumb{font-size:.78rem;color:var(--text-3);}
.adm-crumb b{color:var(--text-1);}
.adm-bar-right{display:flex;align-items:center;gap:8px;}
.hamburger{display:none;background:transparent;border:1px solid var(--border);border-radius:var(--r-sm);padding:6px 8px;cursor:pointer;color:var(--text-2);}

/* Content */
.adm-content{padding:30px 32px;flex:1;}

/* ── STAT GRID ── */
.stat-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-bottom:26px;}
.stat-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-md);padding:18px 20px;box-shadow:var(--sh-sm);display:flex;align-items:flex-start;justify-content:space-between;gap:10px;position:relative;overflow:hidden;}
.stat-card::after{content:'';position:absolute;bottom:0;left:0;right:0;height:2px;}
.stat-card.s-users::after{background:var(--blue);}
.stat-card.s-colocs::after{background:var(--green);}
.stat-card.s-expenses::after{background:var(--amber);}
.stat-card.s-banned::after{background:var(--red);}
.stat-label{font-size:.7rem;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:var(--text-3);margin-bottom:6px;}
.stat-val{font-family:var(--f-head);font-size:1.8rem;font-weight:800;color:var(--text-1);line-height:1;}
.stat-sub{font-size:.72rem;color:var(--text-3);margin-top:5px;}
.stat-ico{width:36px;height:36px;border-radius:var(--r-sm);display:flex;align-items:center;justify-content:center;font-size:.95rem;flex-shrink:0;}
.ic-blue{background:var(--blue-soft);border:1px solid var(--blue-border);}
.ic-green{background:var(--green-soft);border:1px solid var(--green-border);}
.ic-amber{background:var(--amber-soft);border:1px solid var(--amber-border);}
.ic-red{background:var(--red-soft);border:1px solid var(--red-border);}

/* ── INFO PANELS ── */
.panels{display:grid;grid-template-columns:1fr 1fr;gap:16px;}
.panel{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);box-shadow:var(--sh-sm);overflow:hidden;}
.panel-head{padding:14px 20px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;justify-content:space-between;}
.panel-title{font-family:var(--f-head);font-size:.875rem;font-weight:700;color:var(--text-1);display:flex;align-items:center;gap:7px;}
.panel-link{font-size:.78rem;font-weight:600;color:var(--blue);text-decoration:none;}
.panel-link:hover{text-decoration:underline;}
.panel-body{padding:16px 20px;}

/* Quick nav items */
.qnav-item{display:flex;align-items:center;gap:12px;padding:10px 0;border-bottom:1px solid var(--border-light);text-decoration:none;color:inherit;}
.qnav-item:last-child{border-bottom:none;}
.qnav-ico{width:34px;height:34px;border-radius:var(--r-sm);display:flex;align-items:center;justify-content:center;font-size:.9rem;flex-shrink:0;}
.qnav-label{font-size:.855rem;font-weight:600;color:var(--text-1);}
.qnav-sub{font-size:.74rem;color:var(--text-3);margin-top:1px;}
.qnav-arrow{margin-left:auto;color:var(--text-3);transition:color .15s,transform .15s;}
.qnav-item:hover .qnav-arrow{color:#0F172A;transform:translateX(3px);}

/* System status */
.status-row{display:flex;align-items:center;justify-content:space-between;padding:10px 0;border-bottom:1px solid var(--border-light);font-size:.85rem;}
.status-row:last-child{border-bottom:none;}
.status-label{color:var(--text-2);font-weight:500;}
.status-ok{display:inline-flex;align-items:center;gap:5px;font-size:.75rem;font-weight:600;padding:3px 10px;border-radius:100px;background:var(--green-soft);color:var(--green);border:1px solid var(--green-border);}
.status-warn{background:var(--red-soft);color:var(--red);border:1px solid var(--red-border);}
.status-dot{width:5px;height:5px;border-radius:50%;background:currentColor;animation:blink 2s infinite;}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.4}}

/* Page header */
.page-hd{margin-bottom:22px;}
.page-eyebrow{font-size:.68rem;font-weight:700;text-transform:uppercase;letter-spacing:.09em;color:var(--text-3);margin-bottom:4px;}
.page-title{font-family:var(--f-head);font-size:1.5rem;font-weight:800;color:var(--text-1);letter-spacing:-.025em;margin:0 0 3px;}
.page-sub{font-size:.845rem;color:var(--text-2);}

/* Overlay */
.sb-overlay{display:none;position:fixed;inset:0;background:rgba(15,23,42,.4);z-index:39;backdrop-filter:blur(2px);}

/* Animations */
@keyframes up{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.stat-card:nth-child(1){animation:up .2s ease .04s both;}
.stat-card:nth-child(2){animation:up .2s ease .08s both;}
.stat-card:nth-child(3){animation:up .2s ease .12s both;}
.stat-card:nth-child(4){animation:up .2s ease .16s both;}
.panels{animation:up .3s ease .2s both;}

/* Responsive */
@media(max-width:1024px){.stat-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){
    .adm-sb{transform:translateX(-100%);}
    .adm-sb.open{transform:translateX(0);}
    .sb-overlay.open{display:block;}
    .adm-main{margin-left:0;}
    .hamburger{display:flex;align-items:center;}
    .adm-bar,.adm-content{padding-left:20px;padding-right:20px;}
    .panels{grid-template-columns:1fr;}
    .stat-grid{grid-template-columns:1fr 1fr;}
}
</style>

<div class="admin-shell">

    {{-- ══════════════════════════════════
         STICKY SIDEBAR — same in every admin page
         Active class: add  class="adm-link active"  to current page link
         ══════════════════════════════════ --}}
    <aside class="adm-sb" id="admSb">

        <a href="{{ route('admin.dashboard') }}" class="adm-brand">
            <div class="adm-brand-ico">⚙️</div>
            <div>
                <div class="adm-brand-name">EasyColoc</div>
                <span class="adm-badge">Admin Panel</span>
            </div>
        </a>

        <nav class="adm-nav">

            <div class="adm-section-label">Vue générale</div>

            <a href="{{ route('admin.dashboard') }}"
               class="adm-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <span class="adm-link-ico">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                </span>
                Dashboard
            </a>

            <div class="adm-section-label">Gestion</div>

            <a href="{{ route('admin.users') }}"
               class="adm-link {{ request()->routeIs('admin.users') ? 'active' : '' }}">
                <span class="adm-link-ico">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </span>
                Utilisateurs
                @if($bannedUsers > 0)
                <span class="adm-badge adm-badge-red">{{ $bannedUsers }}</span>
                @endif
            </a>

            <a href="{{ route('colocations.index') }}"
               class="adm-link {{ request()->routeIs('colocations.*') ? 'active' : '' }}">
                <span class="adm-link-ico">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                </span>
                Colocations
                <span class="adm-badge adm-badge-gray">{{ $colocationsCount }}</span>
            </a>

            <div class="adm-section-label">Paramètres</div>

            <a href="{{ route('categories.index') }}"
               class="adm-link {{ request()->routeIs('categories.*') ? 'active' : '' }}">
                <span class="adm-link-ico">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                </span>
                Catégories
            </a>

            <div class="adm-divider"></div>

            <a href="{{ route('dashboard') }}"
               class="adm-link">
                <span class="adm-link-ico">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
                </span>
                Retour à l'app
            </a>

        </nav>

        <div class="adm-foot">
            <div class="adm-user">
                <div class="adm-av">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
                <div>
                    <div class="adm-user-name">{{ Auth::user()->name }}</div>
                    <div class="adm-user-role">Administrateur</div>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="adm-logout">
                    <span class="adm-link-ico">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                    </span>
                    Déconnexion
                </button>
            </form>
        </div>
    </aside>

    <div class="sb-overlay" id="sbOverlay" onclick="closeSb()"></div>

    {{-- ── MAIN ── --}}
    <div class="adm-main">

        <div class="adm-bar">
            <div class="adm-bar-left">
                <button class="hamburger" onclick="toggleSb()">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                </button>
                <div class="adm-crumb">Admin <b>› Dashboard</b></div>
            </div>
            <div class="adm-bar-right">
                <span style="font-size:.78rem;color:var(--text-3);">Bonjour, {{ Auth::user()->name }} 👋</span>
            </div>
        </div>

        <div class="adm-content">

            <div class="page-hd">
                <div class="page-eyebrow">Administration</div>
                <h1 class="page-title">Tableau de bord</h1>
                <p class="page-sub">Vue d'ensemble de la plateforme EasyColoc.</p>
            </div>

            {{-- ── ORIGINAL BLADE LOGIC: $usersCount, $colocationsCount, $expensesCount, $bannedUsers ── --}}
            <div class="stat-grid">
                <div class="stat-card s-users">
                    <div>
                        <div class="stat-label">Utilisateurs</div>
                        <div class="stat-val">{{ $usersCount }}</div>
                        <div class="stat-sub">inscrits au total</div>
                    </div>
                    <div class="stat-ico ic-blue">👥</div>
                </div>
                <div class="stat-card s-colocs">
                    <div>
                        <div class="stat-label">Colocations</div>
                        <div class="stat-val">{{ $colocationsCount }}</div>
                        <div class="stat-sub">espaces actifs</div>
                    </div>
                    <div class="stat-ico ic-green">🏠</div>
                </div>
                <div class="stat-card s-expenses">
                    <div>
                        <div class="stat-label">Dépenses</div>
                        <div class="stat-val">{{ $expensesCount }}</div>
                        <div class="stat-sub">enregistrées</div>
                    </div>
                    <div class="stat-ico ic-amber">💳</div>
                </div>
                <div class="stat-card s-banned">
                    <div>
                        <div class="stat-label">Bannis</div>
                        <div class="stat-val" style="color:var(--red);">{{ $bannedUsers }}</div>
                        <div class="stat-sub">comptes suspendus</div>
                    </div>
                    <div class="stat-ico ic-red">🚫</div>
                </div>
            </div>

            <div class="panels">

                {{-- Quick nav --}}
                <div class="panel">
                    <div class="panel-head">
                        <span class="panel-title">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="13 17 18 12 13 7"/><polyline points="6 17 11 12 6 7"/></svg>
                            Accès rapide
                        </span>
                    </div>
                    <div class="panel-body">
                        <a href="{{ route('admin.users') }}" class="qnav-item">
                            <div class="qnav-ico ic-blue">👥</div>
                            <div>
                                <div class="qnav-label">Gérer les utilisateurs</div>
                                <div class="qnav-sub">Bannir, débannir, consulter les profils</div>
                            </div>
                            <span class="qnav-arrow">→</span>
                        </a>
                        <a href="{{ route('colocations.index') }}" class="qnav-item">
                            <div class="qnav-ico ic-green">🏠</div>
                            <div>
                                <div class="qnav-label">Voir les colocations</div>
                                <div class="qnav-sub">Parcourir tous les espaces</div>
                            </div>
                            <span class="qnav-arrow">→</span>
                        </a>
                        <a href="{{ route('categories.index') }}" class="qnav-item">
                            <div class="qnav-ico ic-amber">🏷️</div>
                            <div>
                                <div class="qnav-label">Catégories</div>
                                <div class="qnav-sub">Gérer les catégories de dépenses</div>
                            </div>
                            <span class="qnav-arrow">→</span>
                        </a>
                    </div>
                </div>

                {{-- System status --}}
                <div class="panel">
                    <div class="panel-head">
                        <span class="panel-title">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                            Statut système
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="status-row">
                            <span class="status-label">Plateforme</span>
                            <span class="status-ok"><span class="status-dot"></span>En ligne</span>
                        </div>
                        <div class="status-row">
                            <span class="status-label">Comptes bannis</span>
                            @if($bannedUsers > 0)
                            <span class="status-ok status-warn"><span class="status-dot"></span>{{ $bannedUsers }} banni(s)</span>
                            @else
                            <span class="status-ok"><span class="status-dot"></span>Aucun</span>
                            @endif
                        </div>
                        <div class="status-row">
                            <span class="status-label">Utilisateurs actifs</span>
                            <span class="status-ok"><span class="status-dot"></span>{{ $usersCount - $bannedUsers }} actifs</span>
                        </div>
                        <div class="status-row">
                            <span class="status-label">Taux d'occupation</span>
                            <span class="status-ok"><span class="status-dot"></span>
                                @if($usersCount > 0)
                                    {{ round(($colocationsCount / $usersCount) * 100) }}%
                                @else
                                    —
                                @endif
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
function toggleSb(){document.getElementById('admSb').classList.toggle('open');document.getElementById('sbOverlay').classList.toggle('open');}
function closeSb(){document.getElementById('admSb').classList.remove('open');document.getElementById('sbOverlay').classList.remove('open');}
document.addEventListener('keydown',e=>{if(e.key==='Escape')closeSb();});
</script>

</x-app-layout>