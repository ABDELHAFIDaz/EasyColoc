<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>EasyColoc — Admin Apartments</title>
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
<a href="../admin/apartments.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm transition-all bg-accent/10 text-accent"><span>🏠</span>Apartments</a>
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
    
<div class="mb-7 anim anim-1"><h1 class="font-serif text-3xl font-semibold tracking-tight">Apartments</h1><p class="text-sm text-muted mt-1">74 active · 3 cancelled this month</p></div>
<div class="grid grid-cols-3 gap-3 mb-6 anim anim-2">
  <div class="rounded-2xl border border-border p-5" style="background:#161616"><div class="text-[11px] text-muted uppercase tracking-wider mb-2">Active</div><div class="font-serif text-2xl font-semibold text-green-400">74</div></div>
  <div class="rounded-2xl border border-border p-5" style="background:#161616"><div class="text-[11px] text-muted uppercase tracking-wider mb-2">Cancelled</div><div class="font-serif text-2xl font-semibold text-red-400">12</div></div>
  <div class="rounded-2xl border border-border p-5" style="background:#161616"><div class="text-[11px] text-muted uppercase tracking-wider mb-2">Avg. Members</div><div class="font-serif text-2xl font-semibold text-accent">3.4</div></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 anim anim-3">
  <div class="rounded-2xl border border-border p-6" style="background:#161616"><div class="flex items-start justify-between mb-4"><div class="flex items-center gap-3"><div class="w-10 h-10 rounded-xl flex items-center justify-center text-xl" style="background:#2a2a2a">🏙️</div><div><div class="font-semibold">Downtown Apartment</div><div class="text-xs text-muted">Owner: Alex Bernard</div></div></div><span class="px-2 py-0.5 rounded-md text-xs font-semibold bg-green-400/10 text-green-400">Active</span></div><div class="grid grid-cols-3 gap-3 mb-4"><div class="rounded-lg p-3 text-center" style="background:#1e1e1e"><div class="text-lg font-serif font-semibold">4</div><div class="text-[10px] text-muted">Members</div></div><div class="rounded-lg p-3 text-center" style="background:#1e1e1e"><div class="text-lg font-serif font-semibold text-accent">$1,840</div><div class="text-[10px] text-muted">Expenses</div></div><div class="rounded-lg p-3 text-center" style="background:#1e1e1e"><div class="text-lg font-serif font-semibold text-red-400">$142</div><div class="text-[10px] text-muted">Debts</div></div></div><div class="text-xs text-muted">Created Sep 12, 2024</div></div>
  <div class="rounded-2xl border border-border p-6" style="background:#161616"><div class="flex items-start justify-between mb-4"><div class="flex items-center gap-3"><div class="w-10 h-10 rounded-xl flex items-center justify-center text-xl" style="background:#2a2a2a">🗼</div><div><div class="font-semibold">Paris 11th District</div><div class="text-xs text-muted">Owner: Lucas Dupont</div></div></div><span class="px-2 py-0.5 rounded-md text-xs font-semibold bg-green-400/10 text-green-400">Active</span></div><div class="grid grid-cols-3 gap-3 mb-4"><div class="rounded-lg p-3 text-center" style="background:#1e1e1e"><div class="text-lg font-serif font-semibold">5</div><div class="text-[10px] text-muted">Members</div></div><div class="rounded-lg p-3 text-center" style="background:#1e1e1e"><div class="text-lg font-serif font-semibold text-accent">$3,200</div><div class="text-[10px] text-muted">Expenses</div></div><div class="rounded-lg p-3 text-center" style="background:#1e1e1e"><div class="text-lg font-serif font-semibold text-green-400">$0</div><div class="text-[10px] text-muted">Debts</div></div></div><div class="text-xs text-muted">Created Aug 3, 2024</div></div>
  <div class="rounded-2xl border border-border p-6" style="background:#161616"><div class="flex items-start justify-between mb-4"><div class="flex items-center gap-3"><div class="w-10 h-10 rounded-xl flex items-center justify-center text-xl" style="background:#2a2a2a">🌊</div><div><div class="font-semibold">Marseille Beach House</div><div class="text-xs text-muted">Owner: Sara Mirabet</div></div></div><span class="px-2 py-0.5 rounded-md text-xs font-semibold bg-green-400/10 text-green-400">Active</span></div><div class="grid grid-cols-3 gap-3 mb-4"><div class="rounded-lg p-3 text-center" style="background:#1e1e1e"><div class="text-lg font-serif font-semibold">3</div><div class="text-[10px] text-muted">Members</div></div><div class="rounded-lg p-3 text-center" style="background:#1e1e1e"><div class="text-lg font-serif font-semibold text-accent">$980</div><div class="text-[10px] text-muted">Expenses</div></div><div class="rounded-lg p-3 text-center" style="background:#1e1e1e"><div class="text-lg font-serif font-semibold text-red-400">$55</div><div class="text-[10px] text-muted">Debts</div></div></div><div class="text-xs text-muted">Created Jul 19, 2024</div></div>
  <div class="rounded-2xl border border-red-400/10 p-6" style="background:#161616"><div class="flex items-start justify-between mb-4"><div class="flex items-center gap-3"><div class="w-10 h-10 rounded-xl flex items-center justify-center text-xl" style="background:#2a2a2a">🌿</div><div><div class="font-semibold">Grenoble East Coloc</div><div class="text-xs text-muted">Owner: Emma Rousseau</div></div></div><span class="px-2 py-0.5 rounded-md text-xs font-semibold bg-red-400/10 text-red-400">Cancelled</span></div><div class="grid grid-cols-3 gap-3 mb-4"><div class="rounded-lg p-3 text-center" style="background:#1e1e1e"><div class="text-lg font-serif font-semibold opacity-50">2</div><div class="text-[10px] text-muted">Members</div></div><div class="rounded-lg p-3 text-center" style="background:#1e1e1e"><div class="text-lg font-serif font-semibold opacity-50">$450</div><div class="text-[10px] text-muted">Expenses</div></div><div class="rounded-lg p-3 text-center" style="background:#1e1e1e"><div class="text-lg font-serif font-semibold text-green-400">$0</div><div class="text-[10px] text-muted">Debts</div></div></div><div class="text-xs text-muted">Cancelled Feb 14, 2025</div></div>
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