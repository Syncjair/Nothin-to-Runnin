<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bevestig Verwijderen - Nothin2Runnin</title>
    <link rel="stylesheet" href="{{ asset('css/inzien.css') }}">
    <link rel="stylesheet" href="{{ asset('css/delete.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">Nothin2Runnin</div>
                <ul class="nav-links">
                    <li><a href="{{ route('inzien') }}">Terug naar overzicht</a></li>
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
            <div class="delete-confirmation">
                <div class="warning-icon">⚠️</div>
                <h1>Bevestig Verwijderen</h1>
                
                <div class="confirmation-message">
                    <p>Weet je zeker dat je de volgende inschrijving van {{ $registration->name }} wilt verwijderen?</p>
                </div>
                
                <div class="registration-summary">
                    <div class="summary-item">
                        <span class="label">Naam:</span>
                        <span class="value">{{ $registration->name }}</span>
                    </div>
                    <div class="summary-item">
                        <span class="label">Email:</span>
                        <span class="value">{{ $registration->email }}</span>
                    </div>
                    <div class="summary-item">
                        <span class="label">Inschrijfdatum:</span>
                        <span class="value">{{ date('d-m-Y', strtotime($registration->registration_date)) }}</span>
                    </div>
                </div>
                
                <div class="warning-message">
                    <p>Deze actie kan niet ongedaan worden gemaakt!</p>
                </div>
                
                <div class="action-buttons">
                    <a href="{{ route('inzien') }}" class="confirmation-cancel-btn">Annuleren</a>
                    
                    <form method="POST" action="{{ route('inzien.destroy', $registration->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="confirmation-delete-btn">Verwijderen</button>
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