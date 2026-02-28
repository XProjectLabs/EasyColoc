<x-app-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<style>
:root{
    --green:#16A34A;--green-hover:#15803D;--green-light:#22C55E;
    --green-soft:#F0FDF4;--green-border:#BBF7D0;--green-mid:#DCFCE7;
    --text-1:#0F172A;--text-2:#475569;--text-3:#94A3B8;
    --surface:#FFFFFF;--bg:#F8FAFC;--border:#E2E8F0;--border-light:#F1F5F9;
    --sh-sm:0 1px 3px rgba(0,0,0,.07),0 1px 2px -1px rgba(0,0,0,.06);
    --sh-md:0 4px 6px -1px rgba(0,0,0,.07),0 2px 4px -2px rgba(0,0,0,.06);
    --sh-lg:0 10px 20px -3px rgba(0,0,0,.08),0 4px 6px -4px rgba(0,0,0,.05);
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
.ec-bar-right{display:flex;align-items:center;gap:8px;}

/* MAIN */
.ec-wrap{max-width:1060px;margin:0 auto;padding:36px 40px;}

/* PAGE HERO */
.page-hero{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);padding:28px 32px;margin-bottom:24px;box-shadow:var(--sh-sm);display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap;}
.hero-left{display:flex;align-items:center;gap:18px;}
.hero-ico{width:54px;height:54px;background:var(--green-soft);border:2px solid var(--green-border);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;flex-shrink:0;}
.hero-label{font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--green);margin-bottom:3px;}
.hero-title{font-family:var(--f-head);font-size:1.55rem;font-weight:800;color:var(--text-1);letter-spacing:-.025em;margin:0 0 2px;}
.hero-meta{font-size:.8rem;color:var(--text-3);display:flex;align-items:center;gap:10px;}
.hero-meta-sep{width:3px;height:3px;border-radius:50%;background:var(--border);}
.hero-right{display:flex;align-items:center;gap:8px;}
.badge-active{display:inline-flex;align-items:center;gap:5px;font-size:.7rem;font-weight:600;padding:5px 10px;border-radius:100px;background:var(--green-soft);color:var(--green);border:1px solid var(--green-border);}
.badge-dot{width:5px;height:5px;border-radius:50%;background:currentColor;animation:blink 2s infinite;}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.35}}

/* MAIN LAYOUT */
.layout{display:grid;grid-template-columns:1fr 320px;gap:20px;align-items:start;}

/* CARD */
.card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);box-shadow:var(--sh-sm);overflow:hidden;}
.card-head{padding:16px 22px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;justify-content:space-between;}
.card-head-title{display:flex;align-items:center;gap:8px;font-family:var(--f-head);font-size:.9rem;font-weight:700;color:var(--text-1);}
.card-badge{background:var(--border-light);color:var(--text-2);border:1px solid var(--border);font-size:.7rem;font-weight:700;padding:2px 8px;border-radius:100px;}

/* MEMBERS */
.member-list{}
.member-row{padding:14px 22px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;justify-content:space-between;transition:background .15s;}
.member-row:last-child{border-bottom:none;}
.member-row:hover{background:var(--border-light);}
.member-left{display:flex;align-items:center;gap:12px;}
.av-lg{width:38px;height:38px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:var(--f-head);font-size:.85rem;font-weight:700;color:#fff;flex-shrink:0;}
.member-name{font-size:.9rem;font-weight:600;color:var(--text-1);}
.member-email{font-size:.75rem;color:var(--text-3);margin-top:1px;}
.role-badge{font-size:.68rem;font-weight:700;padding:3px 9px;border-radius:100px;text-transform:capitalize;}
.role-admin{background:var(--green-soft);color:var(--green);border:1px solid var(--green-border);}
.role-member{background:var(--border-light);color:var(--text-2);border:1px solid var(--border);}
.av-0{background:linear-gradient(135deg,#16A34A,#22C55E);}
.av-1{background:linear-gradient(135deg,#2563EB,#60A5FA);}
.av-2{background:linear-gradient(135deg,#9333EA,#C084FC);}
.av-3{background:linear-gradient(135deg,#EA580C,#FB923C);}
.av-4{background:linear-gradient(135deg,#0891B2,#22D3EE);}

/* BUTTONS */
.btn-p{background:var(--green);color:#fff!important;border:none;font-family:var(--f-body);font-weight:600;font-size:.875rem;padding:10px 18px;border-radius:var(--r-sm);cursor:pointer;text-decoration:none;display:inline-flex;align-items:center;gap:7px;transition:background .15s,transform .1s,box-shadow .15s;box-shadow:0 1px 2px rgba(22,163,74,.25);width:100%;justify-content:center;}
.btn-p:hover{background:var(--green-hover);transform:translateY(-1px);box-shadow:0 4px 10px rgba(22,163,74,.28);}
.btn-p:active{transform:none;}
.btn-g{background:transparent;color:var(--text-2)!important;border:1px solid var(--border);font-family:var(--f-body);font-weight:500;font-size:.855rem;padding:10px 18px;border-radius:var(--r-sm);text-decoration:none;display:inline-flex;align-items:center;gap:6px;transition:all .15s;width:100%;justify-content:center;}
.btn-g:hover{border-color:var(--text-3);background:var(--border-light);color:var(--text-1)!important;}
.btn-back{background:transparent;color:var(--text-3)!important;border:1px solid var(--border);font-family:var(--f-body);font-weight:500;font-size:.82rem;padding:8px 14px;border-radius:var(--r-sm);text-decoration:none;display:inline-flex;align-items:center;gap:5px;transition:all .15s;}
.btn-back:hover{border-color:var(--text-3);background:var(--border-light);color:var(--text-1)!important;}

/* SIDEBAR */
.sidebar{display:flex;flex-direction:column;gap:14px;}
.action-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--r-lg);box-shadow:var(--sh-sm);overflow:hidden;}
.action-head{padding:14px 18px;border-bottom:1px solid var(--border-light);}
.action-head-title{font-size:.78rem;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:var(--text-3);}
.action-body{padding:14px 18px;display:flex;flex-direction:column;gap:8px;}

/* INVITE CARD */
.invite-card{background:var(--surface);border:1.5px solid #BFDBFE;border-radius:var(--r-lg);box-shadow:var(--sh-sm);overflow:hidden;}
.invite-head{padding:14px 18px;border-bottom:1px solid #DBEAFE;display:flex;align-items:center;gap:10px;background:#F0F9FF;}
.invite-head-ico{width:30px;height:30px;border-radius:var(--r-sm);background:#EFF6FF;border:1px solid #BFDBFE;display:flex;align-items:center;justify-content:center;font-size:.9rem;flex-shrink:0;}
.invite-head-title{font-size:.875rem;font-weight:700;color:#1E3A5F;}
.invite-head-sub{font-size:.72rem;color:#64748B;margin-top:1px;}
.invite-body{padding:16px 18px;}
.invite-field-wrap{position:relative;margin-bottom:10px;}
.invite-field-icon{position:absolute;left:11px;top:50%;transform:translateY(-50%);color:var(--text-3);pointer-events:none;}
.invite-field{width:100%;padding:10px 12px 10px 34px;border:1.5px solid var(--border);border-radius:var(--r-sm);font-family:var(--f-body);font-size:.855rem;color:var(--text-1);background:var(--surface);outline:none;transition:border-color .15s,box-shadow .15s;}
.invite-field:focus{border-color:#3B82F6;box-shadow:0 0 0 3px rgba(59,130,246,.12);}
.invite-field:hover:not(:focus){border-color:var(--text-3);}
.invite-field::placeholder{color:var(--text-3);}
.btn-invite{background:#2563EB;color:#fff!important;border:none;font-family:var(--f-body);font-weight:600;font-size:.855rem;padding:10px 16px;border-radius:var(--r-sm);cursor:pointer;display:inline-flex;align-items:center;justify-content:center;gap:6px;transition:background .15s,transform .1s;box-shadow:0 1px 2px rgba(37,99,235,.25);width:100%;}
.btn-invite:hover{background:#1D4ED8;transform:translateY(-1px);}
.btn-invite:active{transform:none;}
.invite-hint{font-size:.72rem;color:var(--text-3);margin-top:8px;display:flex;align-items:flex-start;gap:5px;line-height:1.45;}

/* INFO STRIP */
.info-strip{background:var(--green-soft);border:1px solid var(--green-border);border-radius:var(--r-md);padding:12px 16px;font-size:.8rem;color:#15803D;display:flex;align-items:flex-start;gap:8px;}

/* DANGER */
.danger-card{background:#FFFBFB;border:1px solid #FECACA;border-radius:var(--r-lg);overflow:hidden;}
.danger-head{padding:14px 18px;border-bottom:1px solid #FECACA;}
.danger-head-title{font-size:.78rem;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:#DC2626;display:flex;align-items:center;gap:6px;}
.danger-body{padding:14px 18px;}
.danger-desc{font-size:.8rem;color:var(--text-2);line-height:1.55;margin-bottom:12px;}
.btn-danger{background:transparent;color:#DC2626!important;border:1.5px solid #FECACA;font-family:var(--f-body);font-weight:600;font-size:.855rem;padding:10px 18px;border-radius:var(--r-sm);cursor:pointer;display:inline-flex;align-items:center;gap:6px;transition:all .15s;width:100%;justify-content:center;}
.btn-danger:hover{border-color:#DC2626;background:#FEF2F2;color:#B91C1C!important;}

/* ── INVITE LINK MODAL ── */
.modal-overlay{display:none;position:fixed;inset:0;background:rgba(15,23,42,.5);z-index:100;align-items:center;justify-content:center;padding:20px;backdrop-filter:blur(6px);}
.modal-overlay.open{display:flex;}

.modal-box{background:var(--surface);border-radius:var(--r-lg);box-shadow:0 24px 48px rgba(0,0,0,.22);width:100%;padding:32px;animation:popIn .25s ease;}
@keyframes popIn{from{opacity:0;transform:scale(.95) translateY(8px)}to{opacity:1;transform:scale(1) translateY(0)}}

/* Cancel modal */
.cancel-modal .modal-box{max-width:420px;}
.modal-ico{width:48px;height:48px;border-radius:var(--r-md);display:flex;align-items:center;justify-content:center;font-size:1.2rem;margin-bottom:16px;}
.modal-ico.red{background:#FEF2F2;border:1.5px solid #FECACA;}
.modal-title{font-family:var(--f-head);font-size:1.1rem;font-weight:700;color:var(--text-1);margin-bottom:6px;}
.modal-desc{font-size:.855rem;color:var(--text-2);line-height:1.6;margin-bottom:22px;}
.modal-actions{display:flex;gap:10px;}
.modal-actions .btn-cancel{flex:1;}

/* Invite link modal */
.invite-modal .modal-box{max-width:500px;}
.invite-modal-head{display:flex;align-items:flex-start;justify-content:space-between;gap:12px;margin-bottom:20px;}
.invite-modal-ico{width:46px;height:46px;background:#EFF6FF;border:1.5px solid #BFDBFE;border-radius:var(--r-md);display:flex;align-items:center;justify-content:center;font-size:1.15rem;flex-shrink:0;}
.invite-modal-title{font-family:var(--f-head);font-size:1.05rem;font-weight:700;color:var(--text-1);margin-bottom:3px;}
.invite-modal-sub{font-size:.8rem;color:var(--text-2);line-height:1.5;}
.modal-close{background:transparent;border:none;cursor:pointer;color:var(--text-3);padding:4px;border-radius:var(--r-sm);transition:color .15s,background .15s;display:flex;align-items:center;}
.modal-close:hover{color:var(--text-1);background:var(--border-light);}

.link-box{background:var(--border-light);border:1.5px solid var(--border);border-radius:var(--r-md);padding:14px 16px;margin-bottom:12px;}
.link-box-label{font-size:.7rem;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:var(--text-3);margin-bottom:6px;}
.link-box-url{font-size:.8rem;color:var(--text-1);word-break:break-all;line-height:1.55;font-family:monospace;}

.copy-row{display:flex;gap:8px;}
.btn-copy{background:#2563EB;color:#fff!important;border:none;font-family:var(--f-body);font-weight:600;font-size:.855rem;padding:10px 18px;border-radius:var(--r-sm);cursor:pointer;display:inline-flex;align-items:center;gap:6px;transition:background .15s,transform .1s;flex:1;justify-content:center;}
.btn-copy:hover{background:#1D4ED8;transform:translateY(-1px);}
.btn-copy.copied{background:var(--green);}
.btn-dismiss{background:transparent;color:var(--text-2)!important;border:1px solid var(--border);font-family:var(--f-body);font-weight:500;font-size:.855rem;padding:10px 16px;border-radius:var(--r-sm);cursor:pointer;display:inline-flex;align-items:center;gap:6px;transition:all .15s;}
.btn-dismiss:hover{border-color:var(--text-3);background:var(--border-light);}

.expire-note{display:flex;align-items:center;gap:6px;font-size:.75rem;color:var(--text-3);margin-top:12px;padding-top:12px;border-top:1px solid var(--border-light);}

/* BALANCES */
.balance-row{padding:12px 22px;border-bottom:1px solid var(--border-light);display:flex;align-items:center;justify-content:space-between;gap:12px;transition:background .15s;}
.balance-row:last-child{border-bottom:none;}
.balance-row:hover{background:var(--border-light);}
.balance-info{font-size:.875rem;color:var(--text-1);line-height:1.5;}
.balance-info strong{color:var(--text-1);font-weight:700;}
.balance-amount{font-weight:700;color:var(--green);white-space:nowrap;}
.btn-pay{background:var(--green);color:#fff!important;border:none;font-family:var(--f-body);font-weight:600;font-size:.78rem;padding:7px 14px;border-radius:var(--r-sm);cursor:pointer;display:inline-flex;align-items:center;gap:5px;transition:background .15s,transform .1s;white-space:nowrap;box-shadow:0 1px 2px rgba(22,163,74,.25);}
.btn-pay:hover{background:var(--green-hover);transform:translateY(-1px);}
.btn-pay:active{transform:none;}

/* ANIM */
@keyframes up{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:translateY(0)}}
.page-hero{animation:up .25s ease both;}
.layout{animation:up .3s ease .08s both;}

@media(max-width:900px){
    .ec-bar,.ec-wrap{padding-left:20px;padding-right:20px;}
    .layout{grid-template-columns:1fr;}
    .ec-wrap{padding:24px 20px;}
}
</style>

<div class="ec-root">

    <div class="ec-bar">
        <div class="ec-crumb">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            <a href="{{ route('colocations.index') }}">Mes colocations</a>
            <span>›</span>
            <b>{{ $colocation->name }}</b>
        </div>
        <div class="ec-bar-right">
            <a href="{{ route('colocations.index') }}" class="btn-back">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
                Retour
            </a>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-0 rounded-0" role="alert" style="position:sticky;top:58px;z-index:49;">
        ✅ Invitation envoyée avec succès !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="ec-wrap">

        <div class="page-hero">
            <div class="hero-left">
                <div class="hero-ico">🏠</div>
                <div>
                    <div class="hero-label">Colocation</div>
                    <h1 class="hero-title">{{ $colocation->name }}</h1>
                    <div class="hero-meta">
                        <span>{{ count($members) }} membre(s)</span>
                        <span class="hero-meta-sep"></span>
                        <span>Créée {{ $colocation->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            </div>
            <div class="hero-right">
                <span class="badge-active"><span class="badge-dot"></span>Active</span>
            </div>
        </div>

        <div class="layout">

            {{-- MEMBERS CARD --}}
            <div class="card">
                <div class="card-head">
                    <div class="card-head-title">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        Membres
                    </div>
                    <span class="card-badge">{{ count($members) }}</span>
                </div>
                <div class="member-list">
                    @php $avColors = ['av-0','av-1','av-2','av-3','av-4']; @endphp
                    @foreach($members as $i => $member)
                    <div class="member-row">
                        <div class="member-left">
                            <div class="av-lg {{ $avColors[$i % 5] }}">
                                {{ strtoupper(substr($member->name, 0, 1)) }}
                            </div>
                            <div>
                                <div class="member-name">{{ $member->name }}</div>
                                @if(isset($member->email))
                                <div class="member-email">{{ $member->email }}</div>
                                @endif
                            </div>
                        </div>
                        <span class="role-badge {{ $member->pivot->role === 'admin' ? 'role-admin' : 'role-member' }}">
                            {{ $member->pivot->role === 'admin' ? '⭐ Admin' : 'Membre' }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- BALANCES CARD --}}
            @if(!empty($balances))
            <div class="card" style="margin-top:20px;">
                <div class="card-head">
                    <div class="card-head-title">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                        Soldes à régler
                    </div>
                    <span class="card-badge">{{ count($balances) }}</span>
                </div>
                <div>
                    @foreach($balances as $balance)
                    <div class="balance-row">
                        <div class="balance-info">
                            <strong>{{ $balance['from']->name }}</strong>
                            doit à
                            <strong>{{ $balance['to']->name }}</strong>
                            <span class="balance-amount" style="margin-left:6px;">{{ $balance['amount'] }} DH</span>
                        </div>
                        @if($balance['from']->id === auth()->id())
                        <form method="POST" action="{{ route('settlements.pay') }}" style="margin:0;">
                            @csrf
                            <input type="hidden" name="receiver_id" value="{{ $balance['to']->id }}">
                            <input type="hidden" name="amount" value="{{ $balance['amount'] }}">
                            <input type="hidden" name="colocation_id" value="{{ $colocation->id }}">
                            <button type="submit" class="btn-pay">
                                Payer ✅
                            </button>
                        </form>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            {{-- SIDEBAR --}}
            <div class="sidebar">

                {{-- INVITE CARD --}}
                <div class="invite-card">
                    <div class="invite-head">
                        <div class="invite-head-ico">📩</div>
                        <div>
                            <div class="invite-head-title">Inviter un membre</div>
                            <div class="invite-head-sub">Envoyez une invitation par e-mail</div>
                        </div>
                    </div>
                    <div class="invite-body">
                        {{-- ── ORIGINAL BLADE LOGIC: invitations.store ── --}}
                        <form method="POST" action="{{ route('invitations.store', $colocation->id) }}">
                            @csrf
                            <div class="invite-field-wrap">
                                <span class="invite-field-icon">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                </span>
                                <input
                                    type="email"
                                    name="email"
                                    class="invite-field"
                                    placeholder="nom@exemple.com"
                                    required
                                >
                                @error('email')
                                <div style="font-size:.74rem;color:#DC2626;margin-top:4px;">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn-invite">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                Générer le lien d'invitation
                            </button>
                        </form>
                        <div class="invite-hint">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink:0;margin-top:2px;"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                            Un lien unique valable 48h sera généré à partager manuellement.
                        </div>
                    </div>
                </div>

                {{-- Quick Actions --}}
                <div class="action-card">
                    <div class="action-head">
                        <div class="action-head-title">Actions</div>
                    </div>
                    <div class="action-body">
                        <a href="{{ route('colocations.balances', $colocation->id) }}" class="btn-g">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                            Voir les soldes
                        </a>
                        <a href="{{ route('colocations.settlements', $colocation->id) }}" class="btn-p">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 12 20 22 4 22 4 12"/><rect x="2" y="7" width="20" height="5"/><line x1="12" y1="22" x2="12" y2="7"/><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/></svg>
                            Voir les règlements
                        </a>
                    </div>
                </div>

                <div class="info-strip">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink:0;margin-top:1px;"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                    Les soldes se mettent à jour automatiquement à chaque nouvelle dépense ajoutée.
                </div>

                {{-- Danger Zone --}}
                <div class="danger-card">
                    <div class="danger-head">
                        <div class="danger-head-title">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                            Zone sensible
                        </div>
                    </div>
                    <div class="danger-body">
                        <p class="danger-desc">Annuler cette colocation archivera toutes les données. Cette action ne peut pas être annulée.</p>
                        <button type="button" class="btn-danger" onclick="openCancelModal()">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6 18.1 20a2 2 0 0 1-2 1.9H7.9a2 2 0 0 1-2-1.9L5 6"/><path d="M10 11v6M14 11v6"/><path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/></svg>
                            Annuler la colocation
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- CANCEL CONFIRMATION MODAL --}}
<div class="modal-overlay cancel-modal" id="cancelModal">
    <div class="modal-box">
        <div class="modal-ico red">⚠️</div>
        <div class="modal-title">Confirmer l'annulation</div>
        <p class="modal-desc">
            Vous êtes sur le point d'annuler <strong>{{ $colocation->name }}</strong>.
            Toutes les données seront archivées. Cette action est irréversible.
        </p>
        <div class="modal-actions">
            <button class="btn-g btn-cancel" onclick="closeCancelModal()">Garder la colocation</button>
            {{-- ── ORIGINAL BLADE LOGIC: cancel PATCH ── --}}
            <form action="{{ route('colocations.cancel', $colocation->id) }}" method="POST" style="flex:1;">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn-danger" style="width:100%;">Oui, annuler</button>
            </form>
        </div>
    </div>
</div>

<script>
// ── Cancel modal ──
function openCancelModal(){document.getElementById('cancelModal').classList.add('open');}
function closeCancelModal(){document.getElementById('cancelModal').classList.remove('open');}

document.addEventListener('keydown', e=>{
    if(e.key==='Escape'){closeCancelModal();}
});
const cancelEl = document.getElementById('cancelModal');
if(cancelEl) cancelEl.addEventListener('click', e=>{ if(e.target===cancelEl) cancelEl.classList.remove('open'); });
</script>

</x-app-layout>