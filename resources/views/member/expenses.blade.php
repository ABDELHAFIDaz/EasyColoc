<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>EasyColoc — Expenses</title>
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
<a href="../member/overview.html" class="px-4 py-2 rounded-lg text-sm font-medium text-accent bg-accent/10">Member Dashboard</a>
<a href="../admin/stats.html" class="px-4 py-2 rounded-lg text-sm font-medium text-muted hover:text-white hover:bg-surface2 transition-all">Admin Dashboard</a>
</div>
</nav>
<div class="dash-layout">
  
<aside class="w-56 border-r border-border flex flex-col px-3 py-6 sticky top-[57px] h-[calc(100vh-57px)] overflow-y-auto flex-shrink-0" style="background:#161616">
  <div class="mb-6">
    <div class="text-[10px] text-muted uppercase tracking-widest px-3 mb-2">Apartment</div>
    <a href="../member/overview.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted transition-all hover:bg-surface2 hover:text-white"><span>🏠</span>Overview</a>
<a href="../member/expenses.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm transition-all bg-accent/10 text-accent"><span>💸</span>Expenses</a>
<a href="../member/balances.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted transition-all hover:bg-surface2 hover:text-white"><span>⚖️</span>Balances</a>
<a href="../member/members.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted transition-all hover:bg-surface2 hover:text-white"><span>👥</span>Members</a>

  </div>
  <div class="mb-6">
    <div class="text-[10px] text-muted uppercase tracking-widest px-3 mb-2">Account</div>
    <a href="#" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted hover:bg-surface2 hover:text-white transition-all"><span>👤</span>Profile</a>
    <a href="#" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted hover:bg-surface2 hover:text-white transition-all"><span>🔔</span>Invitations</a>
  </div>
  <div class="mt-auto">
    <div class="flex items-center gap-2.5 p-3 rounded-xl border border-border" style="background:#1e1e1e">
      <div class="w-8 h-8 rounded-full bg-accent/20 text-accent text-xs font-bold flex items-center justify-center flex-shrink-0">AB</div>
      <div class="flex-1 min-w-0">
        <div class="text-sm font-medium truncate">Alex Bernard</div>
        <span class="px-1.5 py-0.5 rounded text-[10px] font-semibold bg-accent2/10 text-accent2">Owner</span>
      </div>
      <div class="text-xs font-semibold text-accent2">★4.8</div>
    </div>
  </div>
</aside>
  <main class="dash-main">
    
<div class="flex items-start justify-between mb-7 anim anim-1">
  <div><h1 class="font-serif text-3xl font-semibold tracking-tight">Expenses</h1><p class="text-sm text-muted mt-1">Full history · Downtown Apartment</p></div>
  <button onclick="openModal()" class="px-5 py-2.5 rounded-xl font-semibold text-sm bg-accent text-black hover:-translate-y-0.5 transition-all">+ Add Expense</button>
</div>
<div class="flex gap-2 mb-5 flex-wrap anim anim-2">
  <button onclick="filterMonth(this)" class="month-chip px-4 py-1.5 rounded-full text-xs font-medium border border-accent bg-accent text-black transition-all">All</button>
  <button onclick="filterMonth(this)" class="month-chip px-4 py-1.5 rounded-full text-xs font-medium border border-border text-muted hover:text-white hover:border-muted transition-all">Feb 2025</button>
  <button onclick="filterMonth(this)" class="month-chip px-4 py-1.5 rounded-full text-xs font-medium border border-border text-muted hover:text-white hover:border-muted transition-all">Jan 2025</button>
  <button onclick="filterMonth(this)" class="month-chip px-4 py-1.5 rounded-full text-xs font-medium border border-border text-muted hover:text-white hover:border-muted transition-all">Dec 2024</button>
  <button onclick="filterMonth(this)" class="month-chip px-4 py-1.5 rounded-full text-xs font-medium border border-border text-muted hover:text-white hover:border-muted transition-all">Nov 2024</button>
</div>
<div class="grid grid-cols-3 gap-3 mb-5 anim anim-2">
  <div class="rounded-xl border border-border px-4 py-3 flex items-center gap-3" style="background:#161616"><span class="text-xl">💸</span><div><div class="text-xs text-muted">Total this period</div><div class="font-serif text-lg font-semibold">$309.99</div></div></div>
  <div class="rounded-xl border border-border px-4 py-3 flex items-center gap-3" style="background:#161616"><span class="text-xl">📋</span><div><div class="text-xs text-muted">Expenses logged</div><div class="font-serif text-lg font-semibold">5</div></div></div>
  <div class="rounded-xl border border-border px-4 py-3 flex items-center gap-3" style="background:#161616"><span class="text-xl">👤</span><div><div class="text-xs text-muted">Your share</div><div class="font-serif text-lg font-semibold">$77.50</div></div></div>
</div>
<div class="rounded-2xl border border-border overflow-hidden anim anim-3" style="background:#161616">
  <table class="w-full">
    <thead><tr class="text-[11px] text-muted uppercase tracking-wider border-b border-border"><th class="text-left px-6 py-3">Description</th><th class="text-left px-4 py-3">Paid by</th><th class="text-left px-4 py-3">Category</th><th class="text-left px-4 py-3">Date</th><th class="text-left px-4 py-3">Per person</th><th class="text-right px-4 py-3">Total</th><th class="px-4 py-3"></th></tr></thead>
    <tbody class="text-sm">
      <tr class="hover:bg-white/[.02] group border-b border-border/50"><td class="px-6 py-3.5 font-medium">Carrefour Groceries</td><td class="px-4 py-3.5"><span class="flex items-center gap-2"><span class="w-6 h-6 rounded-full bg-accent/20 text-accent text-[10px] flex items-center justify-center font-bold">AB</span>Alex</span></td><td class="px-4 py-3.5"><span class="px-2 py-0.5 rounded text-[11px] font-medium bg-accent2/10 text-accent2">Food</span></td><td class="px-4 py-3.5 text-muted">Feb 24</td><td class="px-4 py-3.5 text-muted">$30.00</td><td class="px-4 py-3.5 text-right font-semibold">$120.00</td><td class="px-4 py-3.5"><button class="opacity-0 group-hover:opacity-100 px-2 py-1 rounded bg-red-400/10 text-red-400 border border-red-400/20 text-xs hover:bg-red-400/20 transition-all">✕</button></td></tr>
      <tr class="hover:bg-white/[.02] group border-b border-border/50"><td class="px-6 py-3.5 font-medium">Electricity Bill</td><td class="px-4 py-3.5"><span class="flex items-center gap-2"><span class="w-6 h-6 rounded-full bg-accent/20 text-accent text-[10px] flex items-center justify-center font-bold">AB</span>Alex</span></td><td class="px-4 py-3.5"><span class="px-2 py-0.5 rounded text-[11px] font-medium bg-accent3/10 text-accent3">Utilities</span></td><td class="px-4 py-3.5 text-muted">Feb 20</td><td class="px-4 py-3.5 text-muted">$22.50</td><td class="px-4 py-3.5 text-right font-semibold">$90.00</td><td class="px-4 py-3.5"><button class="opacity-0 group-hover:opacity-100 px-2 py-1 rounded bg-red-400/10 text-red-400 border border-red-400/20 text-xs hover:bg-red-400/20 transition-all">✕</button></td></tr>
      <tr class="hover:bg-white/[.02] group border-b border-border/50"><td class="px-6 py-3.5 font-medium">Netflix Subscription</td><td class="px-4 py-3.5"><span class="flex items-center gap-2"><span class="w-6 h-6 rounded-full bg-accent2/20 text-accent2 text-[10px] flex items-center justify-center font-bold">TK</span>Thomas</span></td><td class="px-4 py-3.5"><span class="px-2 py-0.5 rounded text-[11px] font-medium bg-red-400/10 text-red-400">Leisure</span></td><td class="px-4 py-3.5 text-muted">Feb 18</td><td class="px-4 py-3.5 text-muted">$4.00</td><td class="px-4 py-3.5 text-right font-semibold">$15.99</td><td class="px-4 py-3.5"><button class="opacity-0 group-hover:opacity-100 px-2 py-1 rounded bg-red-400/10 text-red-400 border border-red-400/20 text-xs hover:bg-red-400/20 transition-all">✕</button></td></tr>
      <tr class="hover:bg-white/[.02] group border-b border-border/50"><td class="px-6 py-3.5 font-medium">Internet Bill</td><td class="px-4 py-3.5"><span class="flex items-center gap-2"><span class="w-6 h-6 rounded-full bg-accent3/20 text-accent3 text-[10px] flex items-center justify-center font-bold">ML</span>Marie</span></td><td class="px-4 py-3.5"><span class="px-2 py-0.5 rounded text-[11px] font-medium bg-accent3/10 text-accent3">Utilities</span></td><td class="px-4 py-3.5 text-muted">Feb 15</td><td class="px-4 py-3.5 text-muted">$10.00</td><td class="px-4 py-3.5 text-right font-semibold">$40.00</td><td class="px-4 py-3.5"><button class="opacity-0 group-hover:opacity-100 px-2 py-1 rounded bg-red-400/10 text-red-400 border border-red-400/20 text-xs hover:bg-red-400/20 transition-all">✕</button></td></tr>
      <tr class="hover:bg-white/[.02] group"><td class="px-6 py-3.5 font-medium">Cleaning Supplies</td><td class="px-4 py-3.5"><span class="flex items-center gap-2"><span class="w-6 h-6 rounded-full bg-red-400/20 text-red-400 text-[10px] flex items-center justify-center font-bold">JR</span>Julie</span></td><td class="px-4 py-3.5"><span class="px-2 py-0.5 rounded text-[11px] font-medium bg-accent/10 text-accent">Maintenance</span></td><td class="px-4 py-3.5 text-muted">Feb 10</td><td class="px-4 py-3.5 text-muted">$11.00</td><td class="px-4 py-3.5 text-right font-semibold">$44.00</td><td class="px-4 py-3.5"><button class="opacity-0 group-hover:opacity-100 px-2 py-1 rounded bg-red-400/10 text-red-400 border border-red-400/20 text-xs hover:bg-red-400/20 transition-all">✕</button></td></tr>
    </tbody>
  </table>
</div>
  </main>
</div>

<div id="modal" class="hidden fixed inset-0 z-50 flex items-center justify-center" style="background:rgba(0,0,0,.75);backdrop-filter:blur(4px)">
  <div class="rounded-3xl border border-border p-8 w-full max-w-md mx-4 relative" style="background:#161616">
    <button onclick="closeModal()" class="absolute top-4 right-4 px-3 py-1 rounded-lg text-muted border border-border hover:text-white hover:border-muted transition-all text-sm">✕</button>
    <h2 class="font-serif text-2xl font-semibold mb-1">New Expense</h2>
    <p class="text-sm text-muted mb-6">Downtown Apartment</p>
    <div class="space-y-4">
      <div><label class="text-xs text-muted block mb-1.5">Description</label><input type="text" placeholder="e.g. Supermarket run" class="w-full rounded-xl border border-border px-4 py-2.5 text-sm text-white placeholder-muted focus:border-accent focus:outline-none transition-colors" style="background:#1e1e1e"/></div>
      <div class="grid grid-cols-2 gap-3">
        <div><label class="text-xs text-muted block mb-1.5">Amount ($)</label><input type="number" placeholder="0.00" class="w-full rounded-xl border border-border px-4 py-2.5 text-sm text-white placeholder-muted focus:border-accent focus:outline-none transition-colors" style="background:#1e1e1e"/></div>
        <div><label class="text-xs text-muted block mb-1.5">Date</label><input type="date" class="w-full rounded-xl border border-border px-4 py-2.5 text-sm text-white focus:border-accent focus:outline-none transition-colors" style="background:#1e1e1e"/></div>
      </div>
      <div class="grid grid-cols-2 gap-3">
        <div><label class="text-xs text-muted block mb-1.5">Paid by</label><select class="w-full rounded-xl border border-border px-4 py-2.5 text-sm text-white focus:border-accent focus:outline-none transition-colors" style="background:#1e1e1e"><option>Alex Bernard</option><option>Marie Leroy</option><option>Thomas Karim</option><option>Julie Renault</option></select></div>
        <div><label class="text-xs text-muted block mb-1.5">Category</label><select class="w-full rounded-xl border border-border px-4 py-2.5 text-sm text-white focus:border-accent focus:outline-none transition-colors" style="background:#1e1e1e"><option>Food</option><option>Utilities</option><option>Leisure</option><option>Maintenance</option></select></div>
      </div>
      <button class="w-full py-3 rounded-xl font-semibold bg-accent text-black hover:-translate-y-0.5 transition-all">Add Expense</button>
    </div>
  </div>
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