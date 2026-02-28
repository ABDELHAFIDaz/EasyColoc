<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>EasyColoc — Home</title>
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
  <a href="{{ route('home') }}" class="font-serif text-xl font-bold tracking-tight">Easy<span class="text-accent">Coloc</span></a>
  <div class="flex items-center gap-2"><a href="{{ route('home') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-accent bg-accent/10">Home</a>
<a href="{{ route('login') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-muted hover:text-white hover:bg-surface2 transition-all">Sign In</a>
<a href="{{ route('member.overview') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-muted hover:text-white hover:bg-surface2 transition-all">Member Dashboard</a>
<a href="{{ route('admin.stats') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-muted hover:text-white hover:bg-surface2 transition-all">Admin Dashboard</a>
</div>
</nav>

<section class="pt-36 pb-24 px-10 max-w-7xl mx-auto relative overflow-hidden">
  <div class="absolute top-20 left-1/4 w-96 h-96 rounded-full opacity-10 blur-3xl pointer-events-none" style="background:radial-gradient(circle,#c9f169 0%,transparent 70%)"></div>
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
    <div>
      <div class="anim anim-1 inline-flex items-center gap-2 px-3 py-1.5 rounded-full border text-xs font-medium text-accent border-accent/30 bg-accent/5 mb-8">
        <span class="w-1.5 h-1.5 rounded-full bg-accent pulse-dot"></span>Shared living expense management
      </div>
      <h1 class="anim anim-2 font-serif text-6xl lg:text-8xl font-bold leading-none tracking-tight mb-6">No more <br/><em class="text-accent not-italic">money fights</em></h1>
      <p class="anim anim-3 text-lg text-muted max-w-md mb-10 leading-relaxed">Track shared expenses, automatically calculate balances, and know exactly who owes what — all in one place.</p>
      <div class="anim anim-4 flex gap-3 flex-wrap">
        <a href="member/overview.html" class="px-7 py-3.5 rounded-xl font-semibold bg-accent text-black hover:-translate-y-0.5 hover:shadow-xl transition-all">View Demo →</a>
        <a href="#features" class="px-7 py-3.5 rounded-xl font-medium border border-border text-white hover:border-muted transition-all">Learn More</a>
      </div>
    </div>
    <div class="hidden lg:flex flex-col gap-3">
      <div class="slide-in rounded-2xl border border-border p-5 relative overflow-hidden" style="background:#161616">
        <div class="absolute inset-0" style="background:linear-gradient(135deg,rgba(201,241,105,.04) 0%,transparent 60%)"></div>
        <div class="text-xs text-muted uppercase tracking-widest mb-2">Your Balance</div>
        <div class="font-serif text-3xl font-semibold text-green-400">+$142.50</div>
        <div class="text-xs text-muted mt-1">You're a creditor 🎉</div>
      </div>
      <div class="slide-in-2 rounded-2xl border border-border p-5" style="background:#161616">
        <div class="text-xs text-muted uppercase tracking-widest mb-3">Pending Repayments</div>
        <div class="flex items-center gap-3 py-2 border-b border-border">
          <div class="w-7 h-7 rounded-full bg-accent3/20 text-accent3 text-[10px] font-bold flex items-center justify-center flex-shrink-0">ML</div>
          <div class="flex-1"><div class="text-sm font-medium">Marie owes Alex</div><div class="text-xs text-muted">Groceries + Electricity</div></div>
          <div class="text-sm font-semibold text-red-400">$67.50</div>
        </div>
        <div class="flex items-center gap-3 py-2">
          <div class="w-7 h-7 rounded-full bg-accent2/20 text-accent2 text-[10px] font-bold flex items-center justify-center flex-shrink-0">TK</div>
          <div class="flex-1"><div class="text-sm font-medium">Thomas owes Alex</div><div class="text-xs text-muted">Netflix + WiFi</div></div>
          <div class="text-sm font-semibold text-red-400">$75.00</div>
        </div>
      </div>
      <div class="slide-in-3 rounded-2xl border border-border p-5 flex items-center gap-5" style="background:#161616">
        <div><div class="text-xs text-muted uppercase tracking-widest mb-1">Reputation</div><div class="font-serif text-2xl font-semibold text-accent2">★ 4.8</div></div>
        <div class="flex gap-2 flex-wrap">
          <span class="px-2 py-0.5 rounded text-xs font-medium bg-green-400/10 text-green-400">Reliable</span>
          <span class="px-2 py-0.5 rounded text-xs font-medium bg-accent2/10 text-accent2">Owner</span>
          <span class="px-2 py-0.5 rounded text-xs font-medium bg-green-400/10 text-green-400">3 payments</span>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="border-y border-border py-10 px-10">
  <div class="max-w-5xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
    <div><div class="font-serif text-4xl font-semibold text-accent">248</div><div class="text-sm text-muted mt-1">Active users</div></div>
    <div><div class="font-serif text-4xl font-semibold text-accent">74</div><div class="text-sm text-muted mt-1">Apartments</div></div>
    <div><div class="font-serif text-4xl font-semibold text-accent">$94k</div><div class="text-sm text-muted mt-1">Tracked expenses</div></div>
    <div><div class="font-serif text-4xl font-semibold text-accent">99%</div><div class="text-sm text-muted mt-1">Disputes solved</div></div>
  </div>
</div>

<section id="features" class="py-24 px-10 max-w-7xl mx-auto">
  <div class="text-xs text-accent uppercase tracking-widest font-semibold mb-4">✦ Features</div>
  <h2 class="font-serif text-4xl lg:text-5xl font-semibold tracking-tight mb-14 max-w-lg">Everything you need to live peacefully</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <div class="rounded-2xl border border-border p-7 hover:border-accent hover:-translate-y-1 transition-all duration-200" style="background:#161616"><div class="w-11 h-11 rounded-xl flex items-center justify-center text-xl mb-5 bg-accent/8">💸</div><div class="font-semibold text-base mb-2">Expense Tracking</div><div class="text-sm text-muted leading-relaxed">Add shared expenses with payer, category and date. Full history and monthly stats.</div></div>
    <div class="rounded-2xl border border-border p-7 hover:border-accent hover:-translate-y-1 transition-all duration-200" style="background:#161616"><div class="w-11 h-11 rounded-xl flex items-center justify-center text-xl mb-5 bg-accent/8">⚖️</div><div class="font-semibold text-base mb-2">Auto Calculation</div><div class="text-sm text-muted leading-relaxed">Balances and repayments calculated in real-time. Simplified "who owes whom" view.</div></div>
    <div class="rounded-2xl border border-border p-7 hover:border-accent hover:-translate-y-1 transition-all duration-200" style="background:#161616"><div class="w-11 h-11 rounded-xl flex items-center justify-center text-xl mb-5 bg-accent/8">✉️</div><div class="font-semibold text-base mb-2">Email Invitations</div><div class="text-sm text-muted leading-relaxed">Invite housemates via a unique link. One-click accept or decline.</div></div>
    <div class="rounded-2xl border border-border p-7 hover:border-accent hover:-translate-y-1 transition-all duration-200" style="background:#161616"><div class="w-11 h-11 rounded-xl flex items-center justify-center text-xl mb-5 bg-accent/8">⭐</div><div class="font-semibold text-base mb-2">Reputation System</div><div class="text-sm text-muted leading-relaxed">Financial reliability score based on payment behaviour.</div></div>
    <div class="rounded-2xl border border-border p-7 hover:border-accent hover:-translate-y-1 transition-all duration-200" style="background:#161616"><div class="w-11 h-11 rounded-xl flex items-center justify-center text-xl mb-5 bg-accent/8">✅</div><div class="font-semibold text-base mb-2">Mark as Paid</div><div class="text-sm text-muted leading-relaxed">Record repayments with one click. Balances update instantly.</div></div>
    <div class="rounded-2xl border border-border p-7 hover:border-accent hover:-translate-y-1 transition-all duration-200" style="background:#161616"><div class="w-11 h-11 rounded-xl flex items-center justify-center text-xl mb-5 bg-accent/8">🛡️</div><div class="font-semibold text-base mb-2">Admin Dashboard</div><div class="text-sm text-muted leading-relaxed">Global dashboard to manage users, stats and moderate accounts.</div></div>
  </div>
</section>

<section class="py-20 px-10 border-t border-border">
  <div class="max-w-5xl mx-auto">
    <div class="text-xs text-accent uppercase tracking-widest font-semibold mb-4 text-center">✦ How it works</div>
    <h2 class="font-serif text-4xl font-semibold tracking-tight mb-14 text-center">Three simple steps</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="text-center"><div class="w-12 h-12 rounded-full flex items-center justify-center font-serif text-xl font-bold bg-accent text-black mx-auto mb-5">1</div><div class="font-semibold mb-2">Create or join</div><div class="text-sm text-muted">Create a shared apartment or accept an invitation link.</div></div>
      <div class="text-center"><div class="w-12 h-12 rounded-full flex items-center justify-center font-serif text-xl font-bold bg-accent text-black mx-auto mb-5">2</div><div class="font-semibold mb-2">Log expenses</div><div class="text-sm text-muted">Add every shared expense — who paid, how much, which category.</div></div>
      <div class="text-center"><div class="w-12 h-12 rounded-full flex items-center justify-center font-serif text-xl font-bold bg-accent text-black mx-auto mb-5">3</div><div class="font-semibold mb-2">Settle up</div><div class="text-sm text-muted">See exactly who owes what and mark payments done in one click.</div></div>
    </div>
  </div>
</section>

<section class="py-24 px-10">
  <div class="max-w-3xl mx-auto rounded-3xl border border-accent/20 p-14 text-center relative overflow-hidden" style="background:rgba(201,241,105,.04)">
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse at 50% 0%,rgba(201,241,105,.1) 0%,transparent 70%)"></div>
    <div class="relative">
      <h2 class="font-serif text-4xl lg:text-5xl font-semibold tracking-tight mb-4">Ready to live<br/><em class="text-accent">drama-free?</em></h2>
      <p class="text-muted mb-8 max-w-sm mx-auto">Join hundreds of housemates who already manage finances together.</p>
      <a href="register.html" class="inline-block px-8 py-4 rounded-xl font-semibold bg-accent text-black hover:-translate-y-1 hover:shadow-xl transition-all">Get started — it's free</a>
    </div>
  </div>
</section>

<footer class="border-t border-border px-10 py-6 flex items-center justify-between text-xs text-muted">
  <div class="font-serif text-sm font-semibold">Easy<span class="text-accent">Coloc</span></div>
  <div>© 2025 EasyColoc · Built with Laravel + Tailwind CSS</div>
  <div class="flex gap-4">
    <a href="member/overview.html" class="hover:text-white transition-colors">Dashboard</a>
    <a href="admin/stats.html" class="hover:text-white transition-colors">Admin</a>
  </div>
</footer>
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