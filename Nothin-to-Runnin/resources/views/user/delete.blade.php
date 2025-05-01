<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gebruiker Verwijderen - Nothin2Runnin</title>
    <link rel="stylesheet" href="{{ asset('css/inzien.css') }}">
    <link rel="stylesheet" href="{{ asset('css/delete.css') }}">
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
                    <li><a href="{{ route('user') }}">Terug naar gebruikers</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="delete-confirmation">
                <div class="confirmation-header">
                    <h1>Gebruiker Verwijderen</h1>
                </div>
                
                <div class="confirmation-message">
                    <h2>Weet je zeker dat je deze gebruiker wilt verwijderen?</h2>
                </div>
                
                <div class="user-summary">
                    <div class="summary-item">
                        <span class="label">Gebruikersnaam: </span>
                        <span class="value">{{ $user->username }}</span>
                    </div>
                    <div class="summary-item">
                        <span class="label">Wachtwoord:</span>
                        <span class="value">{{ $user->password }}</span>
                    </div>
                </div>
                
                <div class="warning-message">
                    <p><strong>Let op:</strong> Deze actie kan niet ongedaan worden gemaakt! Na verwijdering heeft deze gebruiker geen toegang meer tot het systeem.</p>
                    
                    @if($user->id == Auth::id())
                        <p class="danger-alert">Je staat op het punt je eigen account te verwijderen! Je zal uitgelogd worden na deze actie.</p>
                    @endif
                </div>
                
                <div class="action-buttons">
                    <a href="{{ route('user') }}" class="confirmation-cancel-btn">Annuleren</a>
                    
                    <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="confirmation-delete-btn">Gebruiker Verwijderen</button>
                    </form>
                </div>
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