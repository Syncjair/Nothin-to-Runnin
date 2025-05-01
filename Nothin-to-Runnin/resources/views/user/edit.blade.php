<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gebruiker bewerken - Nothin2Runnin</title>
    <link rel="stylesheet" href="{{ asset('css/inzien.css') }}">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">Nothin2Runnin</div>
                <ul class="nav-links">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="logout-button">Uitloggen</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="edit-header">
                <h1>Gebruiker {{ $user->username }} bewerken</h1>
                <div class="action-buttons">
                    <a href="{{ route('user') }}" class="btn-back">Terug naar overzicht</a>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <script src="{{ asset('js/script.js') }}"></script>

            <div class="edit-container">
                <!-- User Profile Form -->
                <div class="edit-section">
                    <h2>Gebruikersinformatie</h2>
                    <form method="POST" action="{{ route('user.update', $user->id) }}" class="edit-form">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="username">Gebruikersnaam</label>
                            <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}">
                        </div>
                        
                        <div class="form-group password-field">
                            <label for="password">Nieuw wachtwoord</label>
                            <div class="password-input-wrapper">
                                <input type="password" id="password" name="password">
                                <span class="password-toggle" onclick="togglePasswordVisibility()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn-update">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Nothin2Runnin. Alle rechten voorbehouden.</p>
        </div>
    </footer>
</body>
</html>