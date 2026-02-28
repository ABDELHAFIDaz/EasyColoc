<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>EasyColoc — Admin Users</title>
<script>
  tailwind = { config: { theme: { extend: {
    fontFamily: { serif:['Fraunces','serif'], sans:['DM Sans','sans-serif'] },
    colors: { surface:'#161616', surface2:'#1e1e1e', border:'#2a2a2a',
              accent:'#c9f169', accent2:'#f7c369', accent3:'#69d4f7', muted:'#888888' },
  }}}};
</script>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,600;0,700;1,600&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
<style>
  body { background:#0f0f0f; color:#f0ede8; }
  ::-webkit-scrollbar{width:5px} ::-webkit-scrollbar-track{background:#0f0f0f} ::-webkit-scrollbar-thumb{background:#2a2a2a;border-radius:3px}
  @keyframes fadeUp{from{opacity:0;transform:translateY(14px)}to{opacity:1;transform:translateY(0)}}
  @keyframes slideIn{from{opacity:0;transform:translateX(30px)}to{opacity:1;transform:translateX(0)}}
  @keyframes pulseDot{0%,100%{opacity:1}50%{opacity:.3}}
  @keyframes barGrow{from{transform:scaleY(0)}to{transform:scaleY(1)}}
  .anim{animation:fadeUp .4s ease both} .anim-1{animation-delay:.05s} .anim-2{animation-delay:.1s} .anim-3{animation-delay:.15s} .anim-4{animation-delay:.2s}
  .slide-in{animation:slideIn .7s ease both;opacity:0} .slide-in-2{animation:slideIn .7s .15s ease both;opacity:0} .slide-in-3{animation:slideIn .7s .3s ease both;opacity:0}
  .pulse-dot{animation:pulseDot 2s infinite}
  .bar{transform-origin:bottom;animation:barGrow .6s ease both}
  .bar:nth-child(1){animation-delay:.2s} .bar:nth-child(2){animation-delay:.28s} .bar:nth-child(3){animation-delay:.36s}
  .bar:nth-child(4){animation-delay:.44s} .bar:nth-child(5){animation-delay:.52s} .bar:nth-child(6){animation-delay:.6s}
  input:focus,select:focus,textarea:focus{box-shadow:0 0 0 3px rgba(201,241,105,.1)}
  .dash-layout{display:flex;padding-top:57px;min-height:100vh}
  .dash-main{flex:1;padding:2rem;overflow-y:auto}
</style>
</head>
<body class="font-sans">

<nav class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-8 py-4 border-b border-border" style="background:rgba(15,15,15,.9);backdrop-filter:blur(12px)">
  <a href="../index.html" class="font-serif text-xl font-bold tracking-tight">Easy<span class="text-accent">Coloc</span></a>
  <div class="flex items-center gap-2"><a href="../index.html" class="px-4 py-2 rounded-lg text-sm font-medium text-muted hover:text-white hover:bg-surface2 transition-all">Home</a>
<a href="../login.html" class="px-4 py-2 rounded-lg text-sm font-medium text-muted hover:text-white hover:bg-surface2 transition-all">Sign In</a>
<a href="../member/overview.html" class="px-4 py-2 rounded-lg text-sm font-medium text-muted hover:text-white hover:bg-surface2 transition-all">Member Dashboard</a>
<a href="../admin/stats.html" class="px-4 py-2 rounded-lg text-sm font-medium text-accent bg-accent/10">Admin Dashboard</a>
</div>
</nav>
<div class="dash-layout">
  
<aside class="w-56 border-r border-border flex flex-col px-3 py-6 sticky top-[57px] h-[calc(100vh-57px)] overflow-y-auto flex-shrink-0" style="background:#161616">
  <div class="mb-6">
    <div class="text-[10px] text-muted uppercase tracking-widest px-3 mb-2">Administration</div>
    <a href="../admin/stats.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted transition-all hover:bg-surface2 hover:text-white"><span>📊</span>Statistics</a>
<a href="../admin/users.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm transition-all bg-accent/10 text-accent"><span>👥</span>Users</a>
<a href="../admin/apartments.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted transition-all hover:bg-surface2 hover:text-white"><span>🏠</span>Apartments</a>
<a href="../admin/banned.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted transition-all hover:bg-surface2 hover:text-white"><span>🚫</span>Banned</a>

  </div>
  <div class="mt-auto">
    <div class="flex items-center gap-2.5 p-3 rounded-xl border border-border" style="background:#1e1e1e">
      <div class="w-8 h-8 rounded-full bg-red-400/20 text-red-400 text-xs font-bold flex items-center justify-center flex-shrink-0">SA</div>
      <div class="flex-1 min-w-0">
        <div class="text-sm font-medium truncate">Super Admin</div>
        <span class="px-1.5 py-0.5 rounded text-[10px] font-semibold bg-red-400/10 text-red-400">Global Admin</span>
      </div>
    </div>
  </div>
</aside>
  <main class="dash-main">
    
<div class="mb-7 anim anim-1"><h1 class="font-serif text-3xl font-semibold tracking-tight">User Management</h1><p class="text-sm text-muted mt-1">248 registered users · 5 banned</p></div>
<div class="flex gap-1 p-1 rounded-xl w-fit mb-5 anim anim-2" style="background:#1e1e1e">
  <button onclick="setTab(this)" class="user-tab px-4 py-2 rounded-lg text-sm font-medium transition-all" style="background:#161616;color:#f0ede8">All (248)</button>
  <button onclick="setTab(this)" class="user-tab px-4 py-2 rounded-lg text-sm font-medium transition-all" style="color:#888">Active (243)</button>
  <button onclick="setTab(this)" class="user-tab px-4 py-2 rounded-lg text-sm font-medium transition-all" style="color:#888">Banned (5)</button>
</div>
<div class="rounded-2xl border border-border overflow-hidden anim anim-3" style="background:#161616">
  <table class="w-full">
    <thead><tr class="text-[11px] text-muted uppercase tracking-wider border-b border-border"><th class="text-left px-6 py-3">User</th><th class="text-left px-4 py-3">Status</th><th class="text-left px-4 py-3">Apartments</th><th class="text-left px-4 py-3">Expenses</th><th class="text-left px-4 py-3">Reputation</th><th class="text-left px-4 py-3">Joined</th><th class="px-4 py-3">Actions</th></tr></thead>
    <tbody class="text-sm">
      <tr class="hover:bg-white/[.02] border-b border-border/50"><td class="px-6 py-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-full bg-accent/20 text-accent text-xs font-bold flex items-center justify-center">AB</div><div><div class="font-medium">Alex Bernard</div><div class="text-xs text-muted">alex@email.com</div></div></div></td><td class="px-4 py-4"><span class="flex items-center gap-1.5 text-xs"><span class="w-1.5 h-1.5 rounded-full bg-green-400 inline-block"></span>Active</span></td><td class="px-4 py-4 text-muted">2</td><td class="px-4 py-4 text-muted">$340</td><td class="px-4 py-4 font-semibold text-green-400">★ +5</td><td class="px-4 py-4 text-muted">Sep 12, 2024</td><td class="px-4 py-4"><button class="px-3 py-1 rounded-lg text-xs font-medium bg-red-400/10 text-red-400 border border-red-400/20 hover:bg-red-400/20 transition-all">Ban</button></td></tr>
      <tr class="hover:bg-white/[.02] border-b border-border/50"><td class="px-6 py-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-full bg-accent3/20 text-accent3 text-xs font-bold flex items-center justify-center">ML</div><div><div class="font-medium">Marie Leroy</div><div class="text-xs text-muted">marie@email.com</div></div></div></td><td class="px-4 py-4"><span class="flex items-center gap-1.5 text-xs"><span class="w-1.5 h-1.5 rounded-full bg-green-400 inline-block"></span>Active</span></td><td class="px-4 py-4 text-muted">1</td><td class="px-4 py-4 text-muted">$220</td><td class="px-4 py-4 font-semibold text-green-400">★ +3</td><td class="px-4 py-4 text-muted">Sep 15, 2024</td><td class="px-4 py-4"><button class="px-3 py-1 rounded-lg text-xs font-medium bg-red-400/10 text-red-400 border border-red-400/20 hover:bg-red-400/20 transition-all">Ban</button></td></tr>
      <tr class="hover:bg-white/[.02] border-b border-border/50"><td class="px-6 py-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-full bg-accent2/20 text-accent2 text-xs font-bold flex items-center justify-center">TK</div><div><div class="font-medium">Thomas Karim</div><div class="text-xs text-muted">thomas@email.com</div></div></div></td><td class="px-4 py-4"><span class="flex items-center gap-1.5 text-xs"><span class="w-1.5 h-1.5 rounded-full bg-accent2 inline-block"></span>Suspended</span></td><td class="px-4 py-4 text-muted">1</td><td class="px-4 py-4 text-muted">$15</td><td class="px-4 py-4 font-semibold text-red-400">★ -1</td><td class="px-4 py-4 text-muted">Sep 20, 2024</td><td class="px-4 py-4"><button class="px-3 py-1 rounded-lg text-xs font-medium bg-red-400/10 text-red-400 border border-red-400/20 hover:bg-red-400/20 transition-all">Ban</button></td></tr>
      <tr class="hover:bg-white/[.02] border-b border-border/50" style="opacity:.6"><td class="px-6 py-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-full bg-red-400/20 text-red-400 text-xs font-bold flex items-center justify-center">BU</div><div><div class="font-medium">Bob Unel</div><div class="text-xs text-muted">bob@email.com</div></div></div></td><td class="px-4 py-4"><span class="flex items-center gap-1.5 text-xs text-red-400"><span class="w-1.5 h-1.5 rounded-full bg-red-400 inline-block"></span>Banned</span></td><td class="px-4 py-4 text-muted">0</td><td class="px-4 py-4 text-muted">$0</td><td class="px-4 py-4 font-semibold text-red-400">★ -3</td><td class="px-4 py-4 text-muted">Oct 3, 2024</td><td class="px-4 py-4"><button class="px-3 py-1 rounded-lg text-xs font-medium border border-border text-muted hover:text-white hover:border-muted transition-all">Unban</button></td></tr>
      <tr class="hover:bg-white/[.02]"><td class="px-6 py-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-full bg-accent/20 text-accent text-xs font-bold flex items-center justify-center">JR</div><div><div class="font-medium">Julie Renault</div><div class="text-xs text-muted">julie@email.com</div></div></div></td><td class="px-4 py-4"><span class="flex items-center gap-1.5 text-xs"><span class="w-1.5 h-1.5 rounded-full bg-green-400 inline-block"></span>Active</span></td><td class="px-4 py-4 text-muted">1</td><td class="px-4 py-4 text-muted">$44</td><td class="px-4 py-4 font-semibold text-green-400">★ +2</td><td class="px-4 py-4 text-muted">Oct 1, 2024</td><td class="px-4 py-4"><button class="px-3 py-1 rounded-lg text-xs font-medium bg-red-400/10 text-red-400 border border-red-400/20 hover:bg-red-400/20 transition-all">Ban</button></td></tr>
    </tbody>
  </table>
</div>
  </main>
</div>

<script>
function openModal(){document.getElementById('modal').classList.remove('hidden')}
function closeModal(){document.getElementById('modal').classList.add('hidden')}
function markPaid(btn){
  const row=btn.closest('.settle-row');
  if(row){row.style.opacity='0.4';row.style.transition='opacity .3s'}
  btn.textContent='✓ Paid'; btn.disabled=true; btn.style.opacity='0.5';
}
function filterMonth(el){
  document.querySelectorAll('.month-chip').forEach(c=>{
    c.classList.remove('border-accent','bg-accent','text-black');
    c.classList.add('border-border','text-muted');
  });
  el.classList.add('border-accent','bg-accent','text-black');
  el.classList.remove('border-border','text-muted');
}
function setTab(btn){document.querySelectorAll('.user-tab').forEach(t=>{t.style.background='transparent';t.style.color='#888'});btn.style.background='#161616';btn.style.color='#f0ede8'}</script>
</body>
</html>