<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIMU Portal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="login-box">
    <div class="login-logo">
        <div class="brand-mark">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 10 12 4 2 10l10 6 10-6Z"></path>
                <path d="M6 12v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5"></path>
            </svg>
        </div>
        <div class="login-logo-text">
            <h1>LIMU Portal</h1>
            <span>University Management</span>
        </div>
    </div>

    <div class="login-title">
        <h2>Create Account</h2>
        <p>Sign up for a new account</p>
    </div>

    <div class="form-group">
        <label>Email Address</label>
        <input type="email" id="reg-email" placeholder="you@limu.edu.ly">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" id="reg-password" placeholder="••••••••">
    </div>
    <p class="error-msg" id="reg-error"></p>

<button type="button" onclick="checkRegister()" class="login-btn">Sign Up</button>

<button type="button" onclick="window.location.href='{{ route('login') }}'" class="login-btn">Log In</button>
    <div class="login-footer">
        &copy; {{ date('Y') }} LIMU Portal &mdash; University Management System
    </div>
</div>
<script>
function checkRegister() {
    const email    = document.getElementById('reg-email').value.trim();
    const password = document.getElementById('reg-password').value;
    const errorEl  = document.getElementById('reg-error');

    errorEl.style.display = 'none';
    errorEl.textContent = '';

    if (!email || !email.includes('@')) {
        showError('Please enter a valid email address.'); return;
    }
    if (password.length < 8) {
        showError('Password must be at least 8 characters.'); return;
    
    }

    alert('Account created successfully!');
    window.location.href = "{{ route('login') }}";
}

function showError(msg) {
    const errorEl = document.getElementById('reg-error');
    errorEl.textContent = msg;
    errorEl.style.display = 'block';
}
</script>
</body>
</html>