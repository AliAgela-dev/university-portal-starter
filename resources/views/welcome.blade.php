<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Portal - Welcome</title>
    
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>

    <div class="welcome-container">
        <div class="glass-card">
            
            <div class="graduation-icon">
                <svg viewBox="0 0 100 100">
                    <path class="cap" d="M50 15 L90 35 L50 55 L10 35 Z" />
                    <path class="cap-body" d="M25 42.5 V65 C 25 75, 75 75, 75 65 V42.5" />
                    <path d="M90 35 V60" stroke="#F2B33D" stroke-width="3" fill="none"/>
                    <circle cx="90" cy="60" r="4" fill="#F2B33D" />
                </svg>
            </div>

            <h1>University Portal</h1>
            <p>Smart academic management system for students, courses, departments and professors.</p>

            <div class="buttons">
                <a href="{{ route('login') }}" class="glass-btn gold">
                    <div class="person-icon">
                        <svg viewBox="0 0 64 64">
                            <circle cx="32" cy="22" r="10"/>
                            <path d="M14 54 C14 40, 50 40, 50 54" />
                        </svg>
                    </div>
                    Login
                </a>

                <a href="{{ route('register') }}" class="glass-btn white-glass">
                    <div class="person-icon">
                        <svg viewBox="0 0 64 64">
                            <circle cx="28" cy="22" r="10"/>
                            <path d="M10 54 C10 40, 46 40, 46 54" />
                            <line x1="54" y1="22" x2="54" y2="38" stroke-linecap="round"/>
                            <line x1="46" y1="30" x2="62" y2="30" stroke-linecap="round"/>
                        </svg>
                    </div>
                    Sign Up
                </a>
            </div>
        </div>
    </div>

</body>
</html>