<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registraties Inzien - Nothin2Runnin</title>
    <link rel="stylesheet" href="{{ asset('css/inzien.css') }}">
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
                    <li><a href="{{ route('user') }}">Gebruikers</a></li>
                    <li><form method="POST" action="{{ route('logout') }}" style="display: inline;">
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

            @elseif(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>  

        <div class="container">
            <h1>Registraties Beheren</h1>
            
            <div class="table-actions">
                <form method="GET" action="{{ route('inzien.search') }}" class="search-form">
                    <div class="search-box">
                        <input type="text" name="search" value="{{ request('search') }}" 
                            placeholder="Zoek op naam, email, woonplaats...">
                        <button type="submit">Zoeken</button>
                    </div>
                </form>
            </div>  
            
            <div class="table-container">
                <table class="registrations-table">
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Email</th>
                            <th>Datum Inschrijving</th>
                            <th>Niveau</th>
                            <th>Woonplaats</th>
                            <th>Acties</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registrations as $registration)
                        <tr>
                            <td>{{ $registration->name }}</td>
                            <td>{{ $registration->email }}</td>
                            <td>{{ $registration->created_at->format('d-m-Y') }}</td>
                            <td>{{ $registration->running_level }}</td>
                            <td>{{ $registration->residence }}</td>
                            <td class="actions">
                                <a href="{{ route('inzien.show', $registration->id)}}" class="btn-view">Bekijken</a>
                                <a href="{{ route('inzien.delete', $registration->id)}}" class="btn-delete">Verwijderen</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="pagination">
                {{ $registrations->appends(request()->query())->links() }}
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