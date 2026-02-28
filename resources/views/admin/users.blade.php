<x-app-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<style>
/* ── SHARED ADMIN SHELL ── */
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
.adm-sb{width:var(--sidebar-w);background:var(--surface);border-right:1px solid var(--border);display:flex;flex-direction:column;position:fixed;top:0;left:0;bottom:0;z-index:40;transition:transform .25s ease;overflow-y:auto;}
.adm-brand{padding:18px 16px 15px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;gap:10px;text-decoration:none;flex-shrink:0;}
.adm-brand-ico{width:32px;height:32px;background:#0F172A;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:.85rem;flex-shrink:0;}
.adm-brand-name{font-family:var(--f-head);font-size:.95rem;font-weight:800;color:var(--text-1);letter-spacing:-.02em;line-height:1.1;}
.adm-brand-badge{font-size:.58rem;font-weight:700;text-transform:uppercase;letter-spacing:.08em;background:#0F172A;color:#fff;padding:2px 6px;border-radius:4px;display:inline-block;margin-top:2px;}
.adm-nav{flex:1;padding:12px 10px;display:flex;flex-direction:column;gap:2px;}
.adm-section-label{font-size:.64rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--text-3);padding:10px 8px 4px;margin-top:4px;}
.adm-section-label:first-child{margin-top:0;}
.adm-link{display:flex;align-items:center;gap:10px;padding:9px 10px;border-radius:var(--r-sm);text-decoration:none;font-size:.845rem;font-weight:500;color:var(--text-2);transition:background .12s,color .12s;position:relative;}
.adm-link:hover{background:var(--border-light);color:var(--text-1);}
.adm-link.active{background:#F1F5F9;color:var(--text-1);font-weight:600;}
.adm-link.active::before{content:'';position:absolute;left:0;top:20%;bottom:20%;width:3px;background:#0F172A;border-radius:0 3px 3px 0;}
.adm-link-ico{width:17px;display:flex;align-items:center;justify-content:center;color:var(--text-3);flex-shrink:0;transition:color .12s;}
.adm-link:hover .adm-link-ico,.adm-link.active .adm-link-ico{color:var(--text-1);}
.adm-badge{margin-left:auto;font-size:.62rem;font-weight:700;padding:1px 7px;border-radius:100px;}
.adm-badge-red{background:var(--red-soft);color:var(--red);border:1px solid var(--red-border);}
.adm-badge-gray{background:var(--border-light);color:var(--text-2);border:1px solid var(--border);}
.adm-divider{height:1px;background:var(--border-light);margin:8px 10px;}
.adm-foot{padding:10px;border-top:1px solid var(--border-light);flex-shrink:0;}
.adm-user{display:flex;align-items:center;gap:9px;padding:9px 10px;border-radius:var(--r-sm);}
.adm-av{width:30px;height:30px;border-radius:50%;background:#0F172A;display:flex;align-items:center;justify-content:center;font-family:var(--f-head);font-size:.72rem;font-weight:700;color:#fff;flex-shrink:0;}
.adm-user-name{font-size:.8rem;font-weight:600;color:var(--text-1);line-height:1.2;}
.adm-user-role{font-size:.68rem;color:var(--text-3);}
.adm-logout{display:flex;align-items:center;gap:9px;padding:8px 10px;border-radius:var(--r-sm);font-size:.82rem;font-weight:500;color:var(--red);cursor:pointer;border:none;background:transparent;width:100%;transition:background .12s;text-decoration:none;margin-top:2px;}
.adm-logout:hover{background:var(--red-soft);}
.adm-logout .adm-link-ico{color:var(--red);}

/* ── MAIN ── */
.adm-main{margin-left:var(--sidebar-w);flex:1;display:flex;flex-direction:column;min-height:100vh;}
.adm-bar{background:var(--surface);border-bottom:1px solid var(--border);height:56px;display:flex;align-items:center;justify-content:space-between;padding:0 32px;position:sticky;top:0;z-index:30;}
.adm-bar-left{display:flex;align-items:center;gap:10px;}
.adm-crumb{font-size:.78rem;color:var(--text-3);}
.adm-crumb b{color:var(--text-1);}
.adm-bar-right{display:flex;align-items:center;gap:10px;}
.hamburger{display:none;background:transparent;border:1px solid var(--border);border-radius:var(--r-sm);padding:6px 8px;cursor:pointer;color:var(--text-2);}
.adm-content{padding:30px 32px;flex:1;}

/* PAGE HEADER */
.page-hd{display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:22px;gap:16px;flex-wrap:wrap;}
.page-eyebrow{font-size:.68rem;font-weight:700;text-transform:uppercase;letter-spacing:.09em;color:var(--text-3);margin-bottom:4px;}
.page-title{font-family:var(--f-head);font-size:1.5rem;font-weight:800;color:var(--text-1);letter-spacing:-.025em;margin:0 0 3px;}
.page-sub{font-size:.845rem;color:var(--text-2);}

/* STATS */
.stat-strip{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-bottom:22px;}
.stat-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-md);padding:16px 18px;box-shadow:var(--sh-sm);display:flex;align-items:flex-start;justify-content:space-between;gap:8px;}
.stat-label{font-size:.7rem;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:var(--text-3);margin-bottom:5px;}
.stat-val{font-family:var(--f-head);font-size:1.5rem;font-weight:800;color:var(--text-1);line-height:1;}
.stat-sub{font-size:.72rem;color:var(--text-3);margin-top:4px;}
.stat-ico{width:34px;height:34px;border-radius:var(--r-sm);display:flex;align-items:center;justify-content:center;font-size:.9rem;flex-shrink:0;}
.ic-blue{background:var(--blue-soft);border:1px solid var(--blue-border);}
.ic-green{background:var(--green-soft);border:1px solid var(--green-border);}
.ic-red{background:var(--red-soft);border:1px solid var(--red-border);}

/* SEARCH / TOOLBAR */
.toolbar{display:flex;align-items:center;justify-content:space-between;margin-bottom:16px;gap:12px;flex-wrap:wrap;}
.search-box{position:relative;flex:1;max-width:300px;}
.search-box svg{position:absolute;left:10px;top:50%;transform:translateY(-50%);color:var(--text-3);}
.search-box input{width:100%;padding:9px 12px 9px 32px;border:1px solid var(--border);border-radius:var(--r-sm);font-family:var(--f-body);font-size:.855rem;color:var(--text-1);background:var(--surface);outline:none;transition:border-color .15s,box-shadow .15s;}
.search-box input:focus{border-color:#0F172A;box-shadow:0 0 0 3px rgba(15,23,42,.08);}
.search-box input::placeholder{color:var(--text-3);}
.result-count{font-size:.78rem;color:var(--text-3);}

/* TABLE */
.table-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);box-shadow:var(--sh-md);overflow:hidden;}
.table-card-head{padding:14px 22px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;justify-content:space-between;}
.table-card-title{font-family:var(--f-head);font-size:.9rem;font-weight:700;color:var(--text-1);display:flex;align-items:center;gap:7px;}
.table-badge{background:var(--border-light);color:var(--text-2);border:1px solid var(--border);font-size:.7rem;font-weight:700;padding:2px 9px;border-radius:100px;}

.u-table{width:100%;border-collapse:collapse;}
.u-table thead tr{background:var(--border-light);}
.u-table th{padding:11px 18px;font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:var(--text-3);text-align:left;border-bottom:1px solid var(--border);white-space:nowrap;}
.u-table tbody tr{border-bottom:1px solid var(--border-light);transition:background .12s;}
.u-table tbody tr:last-child{border-bottom:none;}
.u-table tbody tr:hover{background:var(--border-light);}
.u-table td{padding:13px 18px;font-size:.865rem;color:var(--text-1);vertical-align:middle;}

/* User cell */
.user-cell{display:flex;align-items:center;gap:10px;}
.u-av{width:34px;height:34px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:var(--f-head);font-size:.8rem;font-weight:700;color:#fff;flex-shrink:0;}
.av-0{background:linear-gradient(135deg,#16A34A,#22C55E);}
.av-1{background:linear-gradient(135deg,#2563EB,#60A5FA);}
.av-2{background:linear-gradient(135deg,#9333EA,#C084FC);}
.av-3{background:linear-gradient(135deg,#EA580C,#FB923C);}
.av-4{background:linear-gradient(135deg,#0891B2,#22D3EE);}
.av-5{background:linear-gradient(135deg,#BE185D,#F472B6);}
.u-name{font-weight:600;font-size:.875rem;color:var(--text-1);}
.u-email{font-size:.74rem;color:var(--text-3);margin-top:1px;}

/* Rep badge */
.rep-badge{display:inline-flex;align-items:center;gap:4px;font-size:.78rem;font-weight:600;padding:3px 9px;border-radius:100px;background:var(--border-light);color:var(--text-2);border:1px solid var(--border);}
.rep-badge.rep-high{background:var(--green-soft);color:var(--green);border-color:var(--green-border);}

/* Status badge */
.status-active{display:inline-flex;align-items:center;gap:5px;font-size:.72rem;font-weight:600;padding:4px 10px;border-radius:100px;background:var(--green-soft);color:var(--green);border:1px solid var(--green-border);}
.status-banned{background:var(--red-soft);color:var(--red);border:1px solid var(--red-border);}
.s-dot{width:5px;height:5px;border-radius:50%;background:currentColor;}

/* Action buttons */
.btn-ban{background:transparent;color:var(--red)!important;border:1.5px solid var(--red-border);font-family:var(--f-body);font-weight:600;font-size:.78rem;padding:6px 14px;border-radius:var(--r-sm);cursor:pointer;display:inline-flex;align-items:center;gap:5px;transition:all .15s;}
.btn-ban:hover{background:var(--red-soft);border-color:var(--red);}
.btn-unban{background:transparent;color:var(--green)!important;border:1.5px solid var(--green-border);font-family:var(--f-body);font-weight:600;font-size:.78rem;padding:6px 14px;border-radius:var(--r-sm);cursor:pointer;display:inline-flex;align-items:center;gap:5px;transition:all .15s;}
.btn-unban:hover{background:var(--green-soft);border-color:var(--green);}

/* Overlay */
.sb-overlay{display:none;position:fixed;inset:0;background:rgba(15,23,42,.4);z-index:39;backdrop-filter:blur(2px);}

/* Animations */
@keyframes up{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.stat-strip{animation:up .2s ease both;}
.table-card{animation:up .25s ease .1s both;}

@media(max-width:1024px){.stat-strip{grid-template-columns:1fr 1fr;}}
@media(max-width:768px){
    .adm-sb{transform:translateX(-100%);}
    .adm-sb.open{transform:translateX(0);}
    .sb-overlay.open{display:block;}
    .adm-main{margin-left:0;}
    .hamburger{display:flex;align-items:center;}
    .adm-bar,.adm-content{padding-left:20px;padding-right:20px;}
    .stat-strip{grid-template-columns:1fr 1fr;}
    .u-table td:nth-child(3),.u-table th:nth-child(3){display:none;}
}
</style>

<div class="admin-shell">

    {{-- ══════════════════════════════════
         STICKY SIDEBAR — same in every admin page
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
                @php $bannedCount = $users->where('is_banned', true)->count(); @endphp
                @if($bannedCount > 0)
                <span class="adm-badge adm-badge-red">{{ $bannedCount }}</span>
                @endif
            </a>

            <a href="{{ route('colocations.index') }}"
               class="adm-link {{ request()->routeIs('colocations.*') ? 'active' : '' }}">
                <span class="adm-link-ico">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                </span>
                Colocations
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

            <a href="{{ route('dashboard') }}" class="adm-link">
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
                <div class="adm-crumb">Admin <b>› Utilisateurs</b></div>
            </div>
            <div class="adm-bar-right">
                <span style="font-size:.78rem;color:var(--text-3);">{{ $users->count() }} utilisateur(s)</span>
            </div>
        </div>

        <div class="adm-content">

            <div class="page-hd">
                <div>
                    <div class="page-eyebrow">Administration</div>
                    <h1 class="page-title">Utilisateurs</h1>
                    <p class="page-sub">Gérez les comptes, la réputation et les suspensions.</p>
                </div>
            </div>

            {{-- STATS --}}
            {{-- ── ORIGINAL BLADE LOGIC: $users collection ── --}}
            <div class="stat-strip">
                <div class="stat-card">
                    <div>
                        <div class="stat-label">Total</div>
                        <div class="stat-val">{{ $users->count() }}</div>
                        <div class="stat-sub">utilisateurs inscrits</div>
                    </div>
                    <div class="stat-ico ic-blue">👥</div>
                </div>
                <div class="stat-card">
                    <div>
                        <div class="stat-label">Actifs</div>
                        <div class="stat-val">{{ $users->where('is_banned', false)->count() }}</div>
                        <div class="stat-sub">comptes actifs</div>
                    </div>
                    <div class="stat-ico ic-green">✅</div>
                </div>
                <div class="stat-card">
                    <div>
                        <div class="stat-label">Bannis</div>
                        <div class="stat-val" style="color:var(--red);">{{ $users->where('is_banned', true)->count() }}</div>
                        <div class="stat-sub">comptes suspendus</div>
                    </div>
                    <div class="stat-ico ic-red">🚫</div>
                </div>
            </div>

            {{-- TOOLBAR --}}
            <div class="toolbar">
                <div class="search-box">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                    <input type="text" placeholder="Rechercher un utilisateur…" id="searchInput" oninput="filterUsers(this.value)">
                </div>
                <span class="result-count" id="userCount">{{ $users->count() }} résultat(s)</span>
            </div>

            {{-- TABLE --}}
            <div class="table-card">
                <div class="table-card-head">
                    <div class="table-card-title">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                        Liste des utilisateurs
                    </div>
                    <span class="table-badge">{{ $users->count() }}</span>
                </div>

                <table class="u-table" id="usersTable">
                    <thead>
                        <tr>
                            <th>Utilisateur</th>
                            <th>Réputation</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- ── ORIGINAL BLADE LOGIC: @foreach($users as $user) ── --}}
                        @php $avColors = ['av-0','av-1','av-2','av-3','av-4','av-5']; @endphp
                        @foreach($users as $i => $user)
                        <tr data-name="{{ strtolower($user->name) }} {{ strtolower($user->email) }}">
                            <td>
                                <div class="user-cell">
                                    <div class="u-av {{ $avColors[$i % 6] }}">
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </div>
                                    <div>
                                        <div class="u-name">{{ $user->name }}</div>
                                        <div class="u-email">{{ $user->email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="rep-badge {{ $user->reputation >= 50 ? 'rep-high' : '' }}">
                                    ⭐ {{ $user->reputation }}
                                </span>
                            </td>
                            <td>
                                {{-- ── ORIGINAL BLADE LOGIC: is_banned condition ── --}}
                                @if($user->is_banned)
                                    <span class="status-banned" style="display:inline-flex;align-items:center;gap:5px;font-size:.72rem;font-weight:600;padding:4px 10px;border-radius:100px;">
                                        <span class="s-dot"></span> Banni
                                    </span>
                                @else
                                    <span class="status-active">
                                        <span class="s-dot"></span> Actif
                                    </span>
                                @endif
                            </td>
                            <td>
                                {{-- ── ORIGINAL BLADE LOGIC: admin.ban / admin.unban ── --}}
                                @if(!$user->is_banned)
                                    <form method="POST" action="{{ route('admin.ban', $user) }}"
                                          onsubmit="return confirm('Bannir {{ $user->name }} ?')">
                                        @csrf
                                        <button type="submit" class="btn-ban">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg>
                                            Bannir
                                        </button>
                                    </form>
                                @else
                                    <form method="POST" action="{{ route('admin.unban', $user) }}">
                                        @csrf
                                        <button type="submit" class="btn-unban">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                                            Débannir
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<script>
function filterUsers(q){
    const rows=document.querySelectorAll('#usersTable tbody tr');
    let v=0;
    rows.forEach(r=>{
        const m=r.dataset.name.includes(q.toLowerCase());
        r.style.display=m?'':'none';
        if(m)v++;
    });
    document.getElementById('userCount').textContent=v+' résultat(s)';
}
function toggleSb(){document.getElementById('admSb').classList.toggle('open');document.getElementById('sbOverlay').classList.toggle('open');}
function closeSb(){document.getElementById('admSb').classList.remove('open');document.getElementById('sbOverlay').classList.remove('open');}
document.addEventListener('keydown',e=>{if(e.key==='Escape')closeSb();});
</script>

</x-app-layout>