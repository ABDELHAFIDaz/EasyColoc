<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EasyColoc — Create Account</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,600;0,700;1,600&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
  <style>
    *{box-sizing:border-box}
    body{margin:0;background:#0f0f0f;color:#f0ede8;font-family:'DM Sans',sans-serif}
    ::-webkit-scrollbar{width:5px}::-webkit-scrollbar-track{background:#0f0f0f}::-webkit-scrollbar-thumb{background:#222;border-radius:3px}
    input::placeholder{color:#444}
    input:focus,select:focus{outline:none;border-color:#c9f169!important;box-shadow:0 0 0 3px rgba(201,241,105,.07)}
    input[type=checkbox]{accent-color:#c9f169;width:14px;height:14px;cursor:pointer}
    nav{position:fixed;top:0;left:0;right:0;z-index:50;display:flex;align-items:center;justify-content:space-between;padding:15px 36px;border-bottom:1px solid #1c1c1c;background:rgba(15,15,15,.94);backdrop-filter:blur(12px)}
    .nav-link{padding:7px 13px;border-radius:9px;font-size:13px;font-weight:500;color:#666;text-decoration:none;transition:color .15s,background .15s}
    .nav-link:hover{color:#f0ede8;background:#161616}
    .nav-link.active{color:#c9f169;background:rgba(201,241,105,.08)}
    .field-label{display:block;font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:#555;margin-bottom:9px}
    .input{display:block;width:100%;background:#0d0d0d;border:1px solid #222;border-radius:12px;padding:12px 16px;font-size:14px;color:#f0ede8;transition:border-color .15s;font-family:'DM Sans',sans-serif}
    .btn-primary{display:block;width:100%;background:#c9f169;color:#000;font-weight:600;font-size:14px;border:none;border-radius:12px;padding:14px;cursor:pointer;transition:transform .15s,box-shadow .15s;font-family:'DM Sans',sans-serif}
    .btn-primary:hover{transform:translateY(-1px);box-shadow:0 8px 28px rgba(201,241,105,.12)}
    .btn-google{display:flex;align-items:center;justify-content:center;gap:10px;width:100%;background:#0d0d0d;border:1px solid #222;border-radius:12px;padding:12px 16px;font-size:14px;color:#f0ede8;cursor:pointer;transition:border-color .15s;font-family:'DM Sans',sans-serif}
    .btn-google:hover{border-color:#3a3a3a}
    .check-item{display:flex;align-items:flex-start;gap:12px}
    .check-icon{width:18px;height:18px;border-radius:50%;background:#161616;border:1px solid #2a2a2a;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;font-size:9px;color:#c9f169}
    .sep{height:1px;background:#1a1a1a;position:relative;margin:20px 0}
    .sep span{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);background:#0f0f0f;padding:0 12px;font-size:11px;color:#3a3a3a}
    .strength-bar{height:3px;flex:1;border-radius:99px;background:#1a1a1a;transition:background .25s}
    .lp{display:none}
    @media(min-width:1024px){.lp{display:flex}}
  </style>
</head>
<body>

<nav>
  <a href="index.html" style="font-family:'Fraunces',serif;font-size:18px;font-weight:700;color:#f0ede8;text-decoration:none">EasyColoc</a>
  <div style="display:flex;gap:2px">
    <a href="index.html" class="nav-link">Home</a>
    <a href="login.html" class="nav-link active">Sign In</a>
    <a href="member/overview.html" class="nav-link">Member Dashboard</a>
    <a href="admin/stats.html" class="nav-link">Admin Dashboard</a>
  </div>
</nav>

<div style="display:flex;min-height:100vh;padding-top:57px">

  <!-- LEFT PANEL -->
  <div class="lp" style="width:44%;border-right:1px solid #161616;padding:56px 52px;flex-direction:column;justify-content:space-between;background:#0a0a0a">

    <div>
      <div style="font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:#3a3a3a;margin-bottom:28px">✦ What you get</div>
      <h2 style="font-family:'Fraunces',serif;font-size:36px;font-weight:600;line-height:1.2;margin:0 0 14px;letter-spacing:-.3px">Everything you need to manage shared living.</h2>
      <p style="font-size:13px;color:#555;line-height:1.65;margin:0">Set up in under a minute.<br/>Free forever, no card required.</p>
    </div>

    <div style="display:flex;flex-direction:column;gap:20px">
      <div class="check-item">
        <div class="check-icon">✓</div>
        <div>
          <div style="font-size:14px;font-weight:500;margin-bottom:3px">One active apartment per account</div>
          <div style="font-size:12px;color:#4a4a4a;line-height:1.5">No confusion about which colocation you're in.</div>
        </div>
      </div>
      <div class="check-item">
        <div class="check-icon">✓</div>
        <div>
          <div style="font-size:14px;font-weight:500;margin-bottom:3px">Automatic balance calculations</div>
          <div style="font-size:12px;color:#4a4a4a;line-height:1.5">No spreadsheets. Balances update in real-time.</div>
        </div>
      </div>
      <div class="check-item">
        <div class="check-icon">✓</div>
        <div>
          <div style="font-size:14px;font-weight:500;margin-bottom:3px">Reputation system</div>
          <div style="font-size:12px;color:#4a4a4a;line-height:1.5">Build financial trust with your housemates.</div>
        </div>
      </div>
      <div class="check-item">
        <div class="check-icon">✓</div>
        <div>
          <div style="font-size:14px;font-weight:500;margin-bottom:3px">Invite by email</div>
          <div style="font-size:12px;color:#4a4a4a;line-height:1.5">Send secure invitation links to future housemates.</div>
        </div>
      </div>
    </div>

    <p style="font-size:11px;color:#2a2a2a">
      By signing up you agree to our
      <a href="#" style="color:#3a3a3a;text-decoration:none">Terms</a> and
      <a href="#" style="color:#3a3a3a;text-decoration:none">Privacy Policy</a>
    </p>
  </div>

  <!-- RIGHT: FORM -->
  <div style="flex:1;display:flex;align-items:center;justify-content:center;padding:48px 40px">
    <div style="width:100%;max-width:380px">

      <div style="margin-bottom:32px">
        <h1 style="font-family:'Fraunces',serif;font-size:38px;font-weight:600;letter-spacing:-.5px;margin:0 0 10px">Create account</h1>
        <p style="font-size:14px;color:#666;margin:0">Free forever. No credit card required.</p>
      </div>

      <button class="btn-google" style="margin-bottom:20px">
        <svg width="16" height="16" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
        Continue with Google
      </button>

      <div class="sep"><span>or</span></div>

      <form action="{{ route('register') }}" style="display:flex;flex-direction:column;gap:16px;margin-top:4px">
        @csrf

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px">
          <div>
            <label class="field-label" for="fn">First name</label>
            <input class="input" id="fn" type="text" placeholder="Alex" required/>
          </div>
          <div>
            <label class="field-label" for="ln">Last name</label>
            <input class="input" id="ln" type="text" placeholder="Bernard" required/>
          </div>
        </div>

        <div>
          <label class="field-label" for="email">Email</label>
          <input class="input" id="email" type="email" placeholder="alex@email.com" required/>
        </div>

        <div>
          <label class="field-label" for="pw">Password</label>
          <div style="position:relative">
            <input class="input" id="pw" type="password" placeholder="Min. 8 characters" required minlength="8" oninput="strength(this.value)" style="padding-right:46px"/>
            <button type="button" onclick="const e=document.getElementById('pw');e.type=e.type==='password'?'text':'password'" style="position:absolute;right:14px;top:50%;transform:translateY(-50%);background:none;border:none;color:#444;cursor:pointer;font-size:14px;padding:0;line-height:1">👁</button>
          </div>
          <!-- strength meter -->
          <div style="display:flex;gap:4px;margin-top:8px">
            <div class="strength-bar" id="s1"></div>
            <div class="strength-bar" id="s2"></div>
            <div class="strength-bar" id="s3"></div>
            <div class="strength-bar" id="s4"></div>
          </div>
          <div id="slabel" style="font-size:10px;color:#555;margin-top:5px;letter-spacing:.04em"></div>
        </div>

        <div>
          <label class="field-label" for="cpw">Confirm password</label>
          <input class="input" id="cpw" type="password" placeholder="••••••••" required/>
        </div>

        <div style="display:flex;align-items:flex-start;gap:10px;margin-top:2px">
          <input type="checkbox" id="terms" required style="margin-top:2px"/>
          <label for="terms" style="font-size:12px;color:#555;cursor:pointer;line-height:1.6">
            I agree to the
            <a href="#" style="color:#888;text-decoration:none" onmouseover="this.style.color='#f0ede8'" onmouseout="this.style.color='#888'">Terms of Service</a>
            and
            <a href="#" style="color:#888;text-decoration:none" onmouseover="this.style.color='#f0ede8'" onmouseout="this.style.color='#888'">Privacy Policy</a>
          </label>
        </div>

        <button type="submit" class="btn-primary" style="margin-top:4px">Create Account →</button>
      </form>

      <p style="font-size:13px;color:#555;text-align:center;margin-top:24px">
        Already have an account?
        <a href="{{ route('login') }}" style="color:#f0ede8;text-decoration:none;font-weight:500;margin-left:2px;transition:color .15s" onmouseover="this.style.color='#c9f169'" onmouseout="this.style.color='#f0ede8'">Sign in</a>
      </p>
    </div>
  </div>

</div>

<script>
function strength(v) {
  const bars = [1,2,3,4].map(n => document.getElementById('s'+n));
  const lbl  = document.getElementById('slabel');
  let s = 0;
  if (v.length >= 8)          s++;
  if (/[A-Z]/.test(v))        s++;
  if (/[0-9]/.test(v))        s++;
  if (/[^A-Za-z0-9]/.test(v)) s++;
  const cols  = ['','#ef4444','#f59e0b','#6ee7b7','#c9f169'];
  const labels= ['','Weak','Fair','Good','Strong'];
  bars.forEach((b,i) => b.style.background = i < s ? cols[s] : '#1a1a1a');
  lbl.textContent = v.length ? labels[s] : '';
  lbl.style.color = cols[s] || '#555';
}
</script>

</body>
</html>