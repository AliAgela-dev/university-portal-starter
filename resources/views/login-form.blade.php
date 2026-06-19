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
        <h2>Welcome</h2>
        <p>Log in to your account</p>
    </div>

    <div class="form-group">
        <label>Email Address</label>
        <input type="email" id="email" placeholder="you@limu.edu.ly">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" id="password" placeholder="••••••••">
    </div>

    <p class="error-msg" id="error-msg">Please enter your email and password!</p>

    <button type="button" onclick="checkLogin()" class="login-btn">Log In</button>

    <div class="login-footer">
        &copy; {{ date('Y') }} LIMU Portal &mdash; University Management System
    </div>
</div>
<script>
function checkLogin() {

    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const error = document.getElementById('error-msg');


    if (
        email === 'Limu#2026' &&
        password === 'Limu#2026'
    ) {

        error.style.display = 'none';

        window.location.href = "{{ route('departments.index') }}";

    } else {

        error.innerText = "Invalid email or password!";
        error.style.display = 'block';

    }
}
</script>
</body>
</html>