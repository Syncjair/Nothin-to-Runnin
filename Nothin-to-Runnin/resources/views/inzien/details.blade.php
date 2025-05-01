<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie Details - Nothin2Runnin</title>
    <link rel="stylesheet" href="{{ asset('css/inzien.css') }}">
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
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
            <div class="detail-header">
                <h1>Registratie Details van {{ $registration->name }}</h1>
                <div class="action-buttons">
                    <a href="{{ route('inzien') }}" class="btn-back">Terug</a>
                </div>
            </div>

            <div class="registration-detail">
                <div class="detail-section">
                    <h2>Persoonlijke informatie</h2>
                    <div class="detail-grid">
                        <div class="detail-item">
                            <span class="label">Naam:</span>
                            <span class="value">{{ $registration->name }}</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Geboortedatum:</span>
                            <span class="value">{{ date('d-m-Y', strtotime($registration->date_of_birth)) }}</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Geslacht:</span>
                            <span class="value">{{ $registration->gender }}</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Woonplaats:</span>
                            <span class="value">{{ $registration->residence }}</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Telefoonnummer:</span>
                            <span class="value">{{ $registration->phonenumber }}</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">E-mail:</span>
                            <span class="value">{{ $registration->email }}</span>
                        </div>
                    </div>
                </div>

                <div class="detail-section">
                    <h2>Noodcontact</h2>
                    <div class="detail-grid">
                        <div class="detail-item">
                            <span class="label">Naam:</span>
                            <span class="value">{{ $registration->emergency_contact_name }}</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Telefoonnummer:</span>
                            <span class="value">{{ $registration->emergency_contact_phone }}</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Relatie:</span>
                            <span class="value">{{ $registration->emergency_contact_relation }}</span>
                        </div>
                    </div>
                </div>

                <div class="detail-section">
                    <h2>Medische informatie</h2>
                    <div class="detail-grid">
                        <div class="detail-item full-width">
                            <span class="label">Medische aandoeningen:</span>
                            <span class="value">{{ $registration->medical_conditions ?? 'Geen' }}</span>
                        </div>
                        <div class="detail-item full-width">
                            <span class="label">Medicatie tijdens sport:</span>
                            <span class="value">{{ $registration->medication_during_sports ?? 'Geen' }}</span>
                        </div>
                        <div class="detail-item full-width">
                            <span class="label">Allergieën:</span>
                            <span class="value">{{ $registration->allergies ?? 'Geen' }}</span>
                        </div>
                    </div>
                </div>

                <div class="detail-section">
                    <h2>Hardloop informatie</h2>
                    <div class="detail-grid">
                        <div class="detail-item">
                            <span class="label">Niveau:</span>
                            <span class="value">{{ $registration->running_level }}</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Ervaring (km):</span>
                            <span class="value">{{ $registration->running_experience_km ?? 'Niet opgegeven' }}</span>
                        </div>
                        <div class="detail-item full-width">
                            <span class="label">Eerdere blessures:</span>
                            <span class="value">{{ $registration->previous_injuries ?? 'Geen' }}</span>
                        </div>
                    </div>
                </div>

                <div class="detail-section">
                    <h2>Registratie informatie</h2>
                    <div class="detail-grid">
                        <div class="detail-item">
                            <span class="label">Registratiedatum:</span>
                            <span class="value">{{ date('d-m-Y', strtotime($registration->registration_date)) }}</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Toestemmingen:</span>
                            <span class="value">
                                Privacy: {{ $registration->privacy_agree ? 'Ja' : 'Nee' }} | 
                                Foto's: {{ $registration->photo_agree ? 'Ja' : 'Nee' }}
                            </span>
                        </div>
                    </div>
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