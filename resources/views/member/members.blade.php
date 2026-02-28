<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>EasyColoc — Members</title>
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
<a href="../member/expenses.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted transition-all hover:bg-surface2 hover:text-white"><span>💸</span>Expenses</a>
<a href="../member/balances.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted transition-all hover:bg-surface2 hover:text-white"><span>⚖️</span>Balances</a>
<a href="../member/members.html" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm transition-all bg-accent/10 text-accent"><span>👥</span>Members</a>

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
  <div><h1 class="font-serif text-3xl font-semibold tracking-tight">Members</h1><p class="text-sm text-muted mt-1">4 active members · 1 invitation pending</p></div>
  <button onclick="document.getElementById('invite-modal').classList.remove('hidden')" class="px-5 py-2.5 rounded-xl font-semibold text-sm bg-accent text-black hover:-translate-y-0.5 transition-all">✉️ Invite Member</button>
</div>
<div class="flex gap-3 px-5 py-3.5 rounded-xl border border-accent2/20 mb-5 text-sm text-accent2 anim anim-2" style="background:rgba(247,195,105,.06)">
  <span class="mt-0.5 flex-shrink-0">⚠️</span>
  <span>An invitation is pending for <strong>luc@email.com</strong>. Expires in 2 days. <button class="underline hover:no-underline ml-1">Resend</button></span>
</div>
<div class="rounded-2xl border border-border overflow-hidden anim anim-3" style="background:#161616">
  <table class="w-full">
    <thead><tr class="text-[11px] text-muted uppercase tracking-wider border-b border-border"><th class="text-left px-6 py-3">Member</th><th class="text-left px-4 py-3">Role</th><th class="text-left px-4 py-3">Joined</th><th class="text-left px-4 py-3">Reputation</th><th class="text-left px-4 py-3">Balance</th><th class="px-4 py-3"></th></tr></thead>
    <tbody class="text-sm">
      <tr class="hover:bg-white/[.02] border-b border-border/50"><td class="px-6 py-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-full bg-accent/20 text-accent text-xs font-bold flex items-center justify-center">AB</div><div><div class="font-medium">Alex Bernard</div><div class="text-xs text-muted">alex@email.com</div></div></div></td><td class="px-4 py-4"><span class="px-2 py-0.5 rounded text-[11px] font-semibold bg-accent2/10 text-accent2">Owner</span></td><td class="px-4 py-4 text-muted">Sep 12, 2024</td><td class="px-4 py-4 font-semibold text-green-400">★ +5</td><td class="px-4 py-4 font-semibold text-accent">+$142.50</td><td class="px-4 py-4 text-xs text-muted">—</td></tr>
      <tr class="hover:bg-white/[.02] border-b border-border/50"><td class="px-6 py-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-full bg-accent3/20 text-accent3 text-xs font-bold flex items-center justify-center">ML</div><div><div class="font-medium">Marie Leroy</div><div class="text-xs text-muted">marie@email.com</div></div></div></td><td class="px-4 py-4"><span class="px-2 py-0.5 rounded text-[11px] font-semibold bg-accent3/10 text-accent3">Member</span></td><td class="px-4 py-4 text-muted">Sep 15, 2024</td><td class="px-4 py-4 font-semibold text-green-400">★ +3</td><td class="px-4 py-4 font-semibold text-red-400">-$67.50</td><td class="px-4 py-4"><button onclick="confirmRemove(this,'Marie Leroy')" class="px-3 py-1 rounded-lg text-xs font-medium bg-red-400/10 text-red-400 border border-red-400/20 hover:bg-red-400/20 transition-all">Remove</button></td></tr>
      <tr class="hover:bg-white/[.02] border-b border-border/50"><td class="px-6 py-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-full bg-accent2/20 text-accent2 text-xs font-bold flex items-center justify-center">TK</div><div><div class="font-medium">Thomas Karim</div><div class="text-xs text-muted">thomas@email.com</div></div></div></td><td class="px-4 py-4"><span class="px-2 py-0.5 rounded text-[11px] font-semibold bg-accent3/10 text-accent3">Member</span></td><td class="px-4 py-4 text-muted">Sep 20, 2024</td><td class="px-4 py-4 font-semibold text-red-400">★ -1</td><td class="px-4 py-4 font-semibold text-red-400">-$75.00</td><td class="px-4 py-4"><button onclick="confirmRemove(this,'Thomas Karim')" class="px-3 py-1 rounded-lg text-xs font-medium bg-red-400/10 text-red-400 border border-red-400/20 hover:bg-red-400/20 transition-all">Remove</button></td></tr>
      <tr class="hover:bg-white/[.02]"><td class="px-6 py-4"><div class="flex items-center gap-3"><div class="w-9 h-9 rounded-full bg-red-400/20 text-red-400 text-xs font-bold flex items-center justify-center">JR</div><div><div class="font-medium">Julie Renault</div><div class="text-xs text-muted">julie@email.com</div></div></div></td><td class="px-4 py-4"><span class="px-2 py-0.5 rounded text-[11px] font-semibold bg-accent3/10 text-accent3">Member</span></td><td class="px-4 py-4 text-muted">Oct 1, 2024</td><td class="px-4 py-4 font-semibold text-green-400">★ +2</td><td class="px-4 py-4 font-semibold text-green-400">$0.00</td><td class="px-4 py-4"><button onclick="confirmRemove(this,'Julie Renault')" class="px-3 py-1 rounded-lg text-xs font-medium bg-red-400/10 text-red-400 border border-red-400/20 hover:bg-red-400/20 transition-all">Remove</button></td></tr>
    </tbody>
  </table>
</div>
<div class="mt-4 rounded-2xl border border-border p-6 anim anim-4" style="background:#161616">
  <div class="font-semibold text-sm mb-4">Pending Invitations</div>
  <div class="flex items-center gap-4 p-4 rounded-xl border border-border/50" style="background:#1e1e1e"><div class="w-9 h-9 rounded-full border-2 border-dashed border-muted flex items-center justify-center text-muted text-lg flex-shrink-0">?</div><div class="flex-1"><div class="text-sm font-medium">luc@email.com</div><div class="text-xs text-muted">Invited Feb 24 · Expires Feb 27, 2025</div></div><span class="px-2 py-0.5 rounded text-[11px] font-semibold bg-accent2/10 text-accent2">Pending</span><button class="px-3 py-1 rounded-lg text-xs font-medium border border-border text-muted hover:text-white hover:border-muted transition-all">Cancel</button></div>
</div>
<!-- Invite modal -->
<div id="invite-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center" style="background:rgba(0,0,0,.75);backdrop-filter:blur(4px)">
  <div class="rounded-3xl border border-border p-8 w-full max-w-md mx-4 relative" style="background:#161616">
    <button onclick="document.getElementById('invite-modal').classList.add('hidden')" class="absolute top-4 right-4 px-3 py-1 rounded-lg text-muted border border-border hover:text-white hover:border-muted transition-all text-sm">✕</button>
    <h2 class="font-serif text-2xl font-semibold mb-1">Invite a Member</h2>
    <p class="text-sm text-muted mb-6">A unique link will be sent to their email.</p>
    <div class="space-y-4">
      <div><label class="text-xs text-muted block mb-1.5">Email address</label><input type="email" placeholder="friend@email.com" class="w-full rounded-xl border border-border px-4 py-2.5 text-sm text-white placeholder-muted focus:border-accent focus:outline-none transition-colors" style="background:#1e1e1e"/></div>
      <div><label class="text-xs text-muted block mb-1.5">Personal message (optional)</label><textarea rows="3" placeholder="Hey! Join our apartment on EasyColoc..." class="w-full rounded-xl border border-border px-4 py-2.5 text-sm text-white placeholder-muted focus:border-accent focus:outline-none transition-colors resize-none" style="background:#1e1e1e"></textarea></div>
      <button class="w-full py-3 rounded-xl font-semibold bg-accent text-black hover:-translate-y-0.5 transition-all">Send Invitation ✉️</button>
    </div>
  </div>
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

document.getElementById('invite-modal').addEventListener('click',function(e){if(e.target===this)this.classList.add('hidden')});
function confirmRemove(btn,name){if(confirm('Remove '+name+' from the apartment? Outstanding debts will transfer to you as owner.')){const tr=btn.closest('tr');tr.style.opacity='0.3';tr.style.transition='opacity .4s';}}
</script>
</body>
</html>