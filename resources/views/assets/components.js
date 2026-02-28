const Components = (() => {

  // ── Tailwind Config ──────────────────────────────────────────────────────
  // Called BEFORE tailwind.config is set — each page does this via inline script.
  // Kept here as a reference object to copy.
  const twConfig = {
    theme: {
      extend: {
        fontFamily: { serif: ['Fraunces', 'serif'], sans: ['DM Sans', 'sans-serif'] },
        colors: {
          surface: '#161616', surface2: '#1e1e1e', border: '#2a2a2a',
          accent: '#c9f169', accent2: '#f7c369', accent3: '#69d4f7', muted: '#888888',
        },
      },
    },
  };

  // ── Nav ──────────────────────────────────────────────────────────────────
  function renderNav(base, activePage) {
    const links = [
      { id: 'home',   href: `${base}index.html`,              label: 'Home' },
      { id: 'login',  href: `${base}login.html`,              label: 'Sign In' },
      { id: 'member', href: `${base}member/overview.html`,    label: 'Member Dashboard' },
      { id: 'admin',  href: `${base}admin/stats.html`,        label: 'Admin Dashboard' },
    ];

    const navLinks = links.map(l => {
      const isActive = l.id === activePage;
      const base_cls = 'px-4 py-2 rounded-lg text-sm font-medium transition-all';
      const cls = isActive
        ? `${base_cls} text-accent bg-accent/10`
        : `${base_cls} text-muted hover:text-white hover:bg-surface2`;
      return `<a href="${l.href}" class="${cls}">${l.label}</a>`;
    }).join('');

    return `
      <nav class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-8 py-4 border-b border-border" style="background:rgba(15,15,15,0.9);backdrop-filter:blur(12px)">
        <a href="${base}index.html" class="font-serif text-xl font-bold tracking-tight text-white">Easy<span class="text-accent">Coloc</span></a>
        <div class="flex items-center gap-2">${navLinks}</div>
      </nav>`;
  }

  // ── Member Sidebar ───────────────────────────────────────────────────────
  function renderMemberSidebar(base, activeTab) {
    const items = [
      { id: 'overview',  href: `${base}member/overview.html`,  icon: '🏠', label: 'Overview' },
      { id: 'expenses',  href: `${base}member/expenses.html`,  icon: '💸', label: 'Expenses' },
      { id: 'balances',  href: `${base}member/balances.html`,  icon: '⚖️', label: 'Balances' },
      { id: 'members',   href: `${base}member/members.html`,   icon: '👥', label: 'Members' },
    ];
    const account = [
      { href: '#', icon: '👤', label: 'Profile' },
      { href: '#', icon: '🔔', label: 'Invitations' },
    ];

    const navItems = items.map(i => {
      const isActive = i.id === activeTab;
      const cls = isActive
        ? 'flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm transition-all bg-accent/10 text-accent'
        : 'flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted transition-all hover:bg-surface2 hover:text-white';
      return `<a href="${i.href}" class="${cls}"><span>${i.icon}</span>${i.label}</a>`;
    }).join('');

    const accountItems = account.map(i =>
      `<a href="${i.href}" class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted hover:bg-surface2 hover:text-white transition-all"><span>${i.icon}</span>${i.label}</a>`
    ).join('');

    return `
      <aside class="w-56 border-r border-border flex flex-col px-3 py-6 sticky top-[57px] h-[calc(100vh-57px)] overflow-y-auto flex-shrink-0" style="background:#161616">
        <div class="mb-6">
          <div class="text-[10px] text-muted uppercase tracking-widest px-3 mb-2">Apartment</div>
          ${navItems}
        </div>
        <div class="mb-6">
          <div class="text-[10px] text-muted uppercase tracking-widest px-3 mb-2">Account</div>
          ${accountItems}
        </div>
        <div class="mt-auto">
          <div class="flex items-center gap-2.5 p-3 rounded-xl border border-border" style="background:#1e1e1e">
            <div class="w-8 h-8 rounded-full bg-accent/20 text-accent text-xs font-bold flex items-center justify-center flex-shrink-0">AB</div>
            <div class="flex-1 min-w-0">
              <div class="text-sm font-medium truncate text-white">Alex Bernard</div>
              <span class="px-1.5 py-0.5 rounded text-[10px] font-semibold bg-accent2/10 text-accent2">Owner</span>
            </div>
            <div class="text-xs font-semibold text-accent2">★4.8</div>
          </div>
        </div>
      </aside>`;
  }

  // ── Admin Sidebar ────────────────────────────────────────────────────────
  function renderAdminSidebar(base, activeSection) {
    const items = [
      { id: 'stats',      href: `${base}admin/stats.html`,      icon: '📊', label: 'Statistics' },
      { id: 'users',      href: `${base}admin/users.html`,      icon: '👥', label: 'Users' },
      { id: 'apartments', href: `${base}admin/apartments.html`, icon: '🏠', label: 'Apartments' },
      { id: 'banned',     href: `${base}admin/banned.html`,     icon: '🚫', label: 'Banned' },
    ];

    const navItems = items.map(i => {
      const isActive = i.id === activeSection;
      const cls = isActive
        ? 'flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm transition-all bg-accent/10 text-accent'
        : 'flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm text-muted transition-all hover:bg-surface2 hover:text-white';
      return `<a href="${i.href}" class="${cls}"><span>${i.icon}</span>${i.label}</a>`;
    }).join('');

    return `
      <aside class="w-56 border-r border-border flex flex-col px-3 py-6 sticky top-[57px] h-[calc(100vh-57px)] overflow-y-auto flex-shrink-0" style="background:#161616">
        <div class="mb-6">
          <div class="text-[10px] text-muted uppercase tracking-widest px-3 mb-2">Administration</div>
          ${navItems}
        </div>
        <div class="mt-auto">
          <div class="flex items-center gap-2.5 p-3 rounded-xl border border-border" style="background:#1e1e1e">
            <div class="w-8 h-8 rounded-full bg-red-400/20 text-red-400 text-xs font-bold flex items-center justify-center flex-shrink-0">SA</div>
            <div class="flex-1 min-w-0">
              <div class="text-sm font-medium truncate text-white">Super Admin</div>
              <span class="px-1.5 py-0.5 rounded text-[10px] font-semibold bg-red-400/10 text-red-400">Global Admin</span>
            </div>
          </div>
        </div>
      </aside>`;
  }

  // ── Footer ───────────────────────────────────────────────────────────────
  function renderFooter(base) {
    return `
      <footer class="border-t border-border px-10 py-6 flex items-center justify-between text-xs text-muted">
        <div class="font-serif text-sm font-semibold text-white">Easy<span class="text-accent">Coloc</span></div>
        <div>© 2025 EasyColoc · Built with Laravel + Tailwind CSS</div>
        <div class="flex gap-4">
          <a href="${base}member/overview.html" class="hover:text-white transition-colors">Dashboard</a>
          <a href="${base}admin/stats.html" class="hover:text-white transition-colors">Admin</a>
        </div>
      </footer>`;
  }

  // ── Add Expense Modal ────────────────────────────────────────────────────
  function renderExpenseModal() {
    return `
      <div id="modal" class="hidden fixed inset-0 z-50 flex items-center justify-center" style="background:rgba(0,0,0,0.75);backdrop-filter:blur(4px)">
        <div class="rounded-3xl border border-border p-8 w-full max-w-md mx-4 relative" style="background:#161616">
          <button onclick="closeModal()" class="absolute top-4 right-4 px-3 py-1 rounded-lg text-muted border border-border hover:text-white hover:border-muted transition-all text-sm">✕</button>
          <h2 class="font-serif text-2xl font-semibold mb-1 text-white">New Expense</h2>
          <p class="text-sm text-muted mb-6">Downtown Apartment</p>
          <div class="space-y-4">
            <div>
              <label class="text-xs text-muted block mb-1.5">Description</label>
              <input type="text" placeholder="e.g. Supermarket run" class="w-full rounded-xl border border-border px-4 py-2.5 text-sm text-white placeholder-muted focus:border-accent focus:outline-none transition-colors" style="background:#1e1e1e"/>
            </div>
            <div class="grid grid-cols-2 gap-3">
              <div>
                <label class="text-xs text-muted block mb-1.5">Amount ($)</label>
                <input type="number" placeholder="0.00" class="w-full rounded-xl border border-border px-4 py-2.5 text-sm text-white placeholder-muted focus:border-accent focus:outline-none transition-colors" style="background:#1e1e1e"/>
              </div>
              <div>
                <label class="text-xs text-muted block mb-1.5">Date</label>
                <input type="date" class="w-full rounded-xl border border-border px-4 py-2.5 text-sm text-white focus:border-accent focus:outline-none transition-colors" style="background:#1e1e1e"/>
              </div>
            </div>
            <div class="grid grid-cols-2 gap-3">
              <div>
                <label class="text-xs text-muted block mb-1.5">Paid by</label>
                <select class="w-full rounded-xl border border-border px-4 py-2.5 text-sm text-white focus:border-accent focus:outline-none transition-colors" style="background:#1e1e1e">
                  <option>Alex Bernard</option><option>Marie Leroy</option><option>Thomas Karim</option><option>Julie Renault</option>
                </select>
              </div>
              <div>
                <label class="text-xs text-muted block mb-1.5">Category</label>
                <select class="w-full rounded-xl border border-border px-4 py-2.5 text-sm text-white focus:border-accent focus:outline-none transition-colors" style="background:#1e1e1e">
                  <option>Food</option><option>Utilities</option><option>Leisure</option><option>Maintenance</option>
                </select>
              </div>
            </div>
            <button class="w-full py-3 rounded-xl font-semibold bg-accent text-black hover:-translate-y-0.5 transition-all">
              Add Expense
            </button>
          </div>
        </div>
      </div>`;
  }

  // ── Shared Utilities ─────────────────────────────────────────────────────
  function setupModalHandlers() {
    const modal = document.getElementById('modal');
    if (!modal) return;
    modal.addEventListener('click', e => { if (e.target === modal) closeModal(); });
  }

  // ── Init ─────────────────────────────────────────────────────────────────
  function init({ base = '', nav, sidebar, active }) {
    // Inject nav
    const navContainer = document.getElementById('nav-container');
    if (navContainer) navContainer.innerHTML = renderNav(base, nav);

    // Inject sidebar
    const sidebarContainer = document.getElementById('sidebar-container');
    if (sidebarContainer) {
      if (sidebar === 'member') sidebarContainer.innerHTML = renderMemberSidebar(base, active);
      if (sidebar === 'admin')  sidebarContainer.innerHTML = renderAdminSidebar(base, active);
    }

    // Inject footer
    const footerContainer = document.getElementById('footer-container');
    if (footerContainer) footerContainer.innerHTML = renderFooter(base);

    // Inject expense modal
    const modalContainer = document.getElementById('modal-container');
    if (modalContainer) modalContainer.innerHTML = renderExpenseModal();
    setupModalHandlers();
  }

  // ── Public API ───────────────────────────────────────────────────────────
  return { init, twConfig };

})();

// ── Global helper functions (called from onclick attributes) ──────────────
function openModal()  { document.getElementById('modal').classList.remove('hidden'); }
function closeModal() { document.getElementById('modal').classList.add('hidden'); }

function markPaid(btn) {
  const row = btn.closest('.settle-row');
  if (row) { row.style.opacity = '0.4'; row.style.transition = 'opacity 0.3s'; }
  btn.textContent = '✓ Paid';
  btn.disabled = true;
  btn.style.opacity = '0.5';
  btn.style.cursor = 'default';
}

function filterMonth(el) {
  document.querySelectorAll('.month-chip').forEach(c => {
    c.className = c.className
      .replace('border-accent bg-accent text-black', '')
      .replace('border-border text-muted', '');
    c.classList.add('border-border', 'text-muted');
  });
  el.classList.remove('border-border', 'text-muted');
  el.classList.add('border-accent', 'bg-accent', 'text-black');
}