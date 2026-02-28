<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>EasyColoc — Admin Banned</title>
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
<a href="../admin/users.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted transition-all hover:bg-surface2 hover:text-white"><span>👥</span>Users</a>
<a href="../admin/apartments.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted transition-all hover:bg-surface2 hover:text-white"><span>🏠</span>Apartments</a>
<a href="../admin/banned.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm transition-all bg-accent/10 text-accent"><span>🚫</span>Banned</a>

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
    
<div class="mb-7 anim anim-1"><h1 class="font-serif text-3xl font-semibold tracking-tight">Banned Users</h1><p class="text-sm text-muted mt-1">5 banned accounts · 2 pending review</p></div>
<div class="flex gap-3 px-5 py-3.5 rounded-xl border border-red-400/20 mb-5 text-sm text-red-400 anim anim-2" style="background:rgba(255,107,107,.06)"><span class="mt-0.5 flex-shrink-0">⛔</span><span>Banned users are automatically disconnected and cannot log in. You can unban them at any time.</span></div>
<div class="mb-3 text-xs text-muted uppercase tracking-widest font-semibold px-1 anim anim-3">Pending Review (2)</div>
<div class="space-y-3 mb-6 anim anim-3">
  <div class="rounded-2xl border border-accent2/15 p-5 flex items-center gap-4" style="background:#161616"><div class="w-10 h-10 rounded-full bg-accent2/20 text-accent2 text-sm font-bold flex items-center justify-center flex-shrink-0">PR</div><div class="flex-1"><div class="flex items-center gap-2 mb-0.5"><div class="font-medium">Paul Renaud</div><span class="px-1.5 py-0.5 rounded text-[10px] font-semibold bg-accent2/10 text-accent2">Pending</span><span class="text-xs text-muted">paul@email.com</span></div><div class="text-xs text-muted">Feb 24, 2025 · <span class="text-accent2/80">Suspicious activity reported by 3 users</span></div></div><div class="text-right mr-4 flex-shrink-0"><div class="text-xs text-muted">Reputation</div><div class="font-semibold text-sm text-accent2">★ -1</div></div><div class="flex gap-2 flex-shrink-0"><button class="px-4 py-1.5 rounded-lg text-xs font-medium bg-red-400/10 text-red-400 border border-red-400/20 hover:bg-red-400/20 transition-all">Confirm ban</button><button class="px-4 py-1.5 rounded-lg text-xs font-medium border border-border text-muted hover:text-white hover:border-muted transition-all">Dismiss</button></div></div>
  <div class="rounded-2xl border border-accent2/15 p-5 flex items-center gap-4" style="background:#161616"><div class="w-10 h-10 rounded-full bg-accent3/20 text-accent3 text-sm font-bold flex items-center justify-center flex-shrink-0">NB</div><div class="flex-1"><div class="flex items-center gap-2 mb-0.5"><div class="font-medium">Nina Brooks</div><span class="px-1.5 py-0.5 rounded text-[10px] font-semibold bg-accent2/10 text-accent2">Pending</span><span class="text-xs text-muted">nina@email.com</span></div><div class="text-xs text-muted">Feb 25, 2025 · <span class="text-accent2/80">Left with $130 in unpaid debts</span></div></div><div class="text-right mr-4 flex-shrink-0"><div class="text-xs text-muted">Reputation</div><div class="font-semibold text-sm text-red-400">★ -2</div></div><div class="flex gap-2 flex-shrink-0"><button class="px-4 py-1.5 rounded-lg text-xs font-medium bg-red-400/10 text-red-400 border border-red-400/20 hover:bg-red-400/20 transition-all">Confirm ban</button><button class="px-4 py-1.5 rounded-lg text-xs font-medium border border-border text-muted hover:text-white hover:border-muted transition-all">Dismiss</button></div></div>
</div>
<div class="mb-3 text-xs text-muted uppercase tracking-widest font-semibold px-1 anim anim-4">Banned (5)</div>
<div class="space-y-3 anim anim-4">
  <div class="rounded-2xl border border-red-400/10 p-5 flex items-center gap-4" style="background:#161616"><div class="w-10 h-10 rounded-full bg-red-400/20 text-red-400 text-sm font-bold flex items-center justify-center flex-shrink-0">BU</div><div class="flex-1"><div class="font-medium mb-0.5">Bob Unel <span class="text-xs text-muted font-normal ml-1">bob@email.com</span></div><div class="text-xs text-muted">Banned Feb 10, 2025 · <span class="text-red-400/80">Repeated payment fraud</span></div></div><div class="text-right mr-4 flex-shrink-0"><div class="text-xs text-muted">Reputation</div><div class="font-semibold text-sm text-red-400">★ -3</div></div><button class="px-4 py-1.5 rounded-lg text-xs font-medium border border-border text-muted hover:text-white hover:border-muted transition-all flex-shrink-0">Unban</button></div>
  <div class="rounded-2xl border border-red-400/10 p-5 flex items-center gap-4" style="background:#161616"><div class="w-10 h-10 rounded-full bg-red-400/20 text-red-400 text-sm font-bold flex items-center justify-center flex-shrink-0">KM</div><div class="flex-1"><div class="font-medium mb-0.5">Kevin Martin <span class="text-xs text-muted font-normal ml-1">kevin@email.com</span></div><div class="text-xs text-muted">Banned Jan 28, 2025 · <span class="text-red-400/80">Left with unpaid debts × 3</span></div></div><div class="text-right mr-4 flex-shrink-0"><div class="text-xs text-muted">Reputation</div><div class="font-semibold text-sm text-red-400">★ -4</div></div><button class="px-4 py-1.5 rounded-lg text-xs font-medium border border-border text-muted hover:text-white hover:border-muted transition-all flex-shrink-0">Unban</button></div>
  <div class="rounded-2xl border border-red-400/10 p-5 flex items-center gap-4" style="background:#161616"><div class="w-10 h-10 rounded-full bg-red-400/20 text-red-400 text-sm font-bold flex items-center justify-center flex-shrink-0">SP</div><div class="flex-1"><div class="font-medium mb-0.5">Steve Porter <span class="text-xs text-muted font-normal ml-1">steve@email.com</span></div><div class="text-xs text-muted">Banned Jan 5, 2025 · <span class="text-red-400/80">Harassment of members</span></div></div><div class="text-right mr-4 flex-shrink-0"><div class="text-xs text-muted">Reputation</div><div class="font-semibold text-sm text-red-400">★ -5</div></div><button class="px-4 py-1.5 rounded-lg text-xs font-medium border border-border text-muted hover:text-white hover:border-muted transition-all flex-shrink-0">Unban</button></div>
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
</script>
</body>
</html>