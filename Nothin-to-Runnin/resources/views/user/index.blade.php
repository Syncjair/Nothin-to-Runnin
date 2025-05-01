<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gebruikers Beheren - Nothin2Runnin</title>
    <link rel="stylesheet" href="{{ asset('css/inzien.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
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
                    <li><a href="{{ route('inzien') }}">Terug naar registratie overzicht</a></li>
                    <li><a href="{{ route('user.create') }}">Nieuwe gebruiker</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
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
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>

        <div class="container">
            <h1>Gebruikers Beheren</h1>
            
            <div class="table-container">
                <table class="users-table">
                    <thead>
                        <tr>
                            <th>Gebruikersnaam</th>
                            <th>Wachtwoord</th>
                            <th>Aangemaakt op</th>
                            <th>Laatst bijgewerkt</th>
                            <th>Acties</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td><span class="password-badge">Versleuteld</span></td>
                                <td>{{ date('d-m-Y H:i', strtotime($user->created_at)) }}</td>
                                <td>{{ date('d-m-Y H:i', strtotime($user->updated_at)) }}</td>
                                <td class="actions">
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn-edit">Bewerken</a>
                                    <a href="{{ route('user.delete', $user->id) }}" class="btn-delete">Verwijderen</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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