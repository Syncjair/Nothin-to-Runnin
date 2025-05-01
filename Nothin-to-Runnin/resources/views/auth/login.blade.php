<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Nothin2Runnin</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">Nothin2Runnin</div>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="login-section">
        <div class="container">
            <div class="login-container">
                <h2>Login</h2>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <script src="{{ asset('js/script.js') }}"></script>

                <form method="POST" action="{{ route('authenticate') }}" class="login-form">
                    @csrf
                    
                    <div class="form-group">
                        <label for="username">Gebruikersnaam</label>
                        <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Wachtwoord</label>
                        <div class="password-input-wrapper">
                            <input type="password" id="password" name="password" required>
                            <span class="password-toggle" onclick="togglePasswordVisibility()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </span>
                        </div>
                    </div>
                    
                    <div class="form-submit">
                        <button type="submit" class="btn">Inloggen</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Nothin2Runnin. Alle rechten voorbehouden.</p>
        </div>
    </footer>
</body>
</html>