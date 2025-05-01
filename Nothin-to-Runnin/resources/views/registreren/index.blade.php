<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nothin2Runnin - Hardlopen voor het goede doel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">Nothin2Runnin</div>
                <ul class="nav-links">
                    <li><a href="#welkom">Welkom</a></li>
                    <li><a href="#inschrijven">Inschrijven</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="{{ route('login')}}">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="welkom" class="welkom">
        <div class="container">
            <h1>Welkom bij Nothin2Runnin!</h1>
            <div class="welcome-content">
                <p>Sluit je aan bij onze hardloop lifestyle en zet samen met ons de benen in voor het goede doel! Bij Nothin2Runnin combineren we sportiviteit met solidariteit: we halen geld op en creëren aandacht voor Nothin2Rockin Stichting door samen marathons en hardloopuitdagingen aan te gaan.</p>
                <p>Iedere week organiseren we 2 trainingssessies — geschikt voor zowel beginners als gevorderde lopers. Of je nu traint voor een afstand van 2,5 km, 5 km, 10 km of zelfs 21 km: er is altijd een plek voor jou in ons team!</p>
                
                <div class="extra-info">
                    <h3>Extra leuk:</h3>
                    <ul>
                        <li>De eerste 5 leden ontvangen een uniek Nothin2Runnin shirt.</li>
                        <li>Loop je een marathon voor onze stichting en haal je een minimale donatie van €200 op? Dan vergoeden wij jouw inschrijfgeld én ontvang je een shirt + sokken vanuit de Nothin2Rockin Stichting!</li>
                    </ul>
                </div>
                
                <p class="slogan">Word fit, verbind, en maak impact.<br>
                Samen rennen we voor meer dan alleen de finishlijn!</p>

                <a href="{{ asset('img/nothin2runnin.jpg') }}" target="_blank" class="btn">Bekijk hier de flyer</a>
                
                <a href="#inschrijven" class="btn">Inschrijven</a>
            </div>
        </div>
    </section>

    <section id="inschrijven" class="inschrijven">
        <div class="container">
            <h2>Inschrijfformulier</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            
            <form id="registrationForm" action="{{ route('inschrijven.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-section">
                    <h3>1. Persoonlijke gegevens</h3>
                    <div class="form-group">
                        <label for="name">Volledige naam</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Geboortedatum</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" required>
                            <option value="man">Man</option>
                            <option value="vrouw">Vrouw</option>
                            <option value="anders">Anders</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="residence">Woonplaats</label>
                        <input type="text" id="residence" name="residence" required>
                    </div>
                    <div class="form-group">
                        <label for="phonenumber">Telefoonnummer</label>
                        <input type="tel" id="phonenumber" name="phonenumber" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mailadres</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-divider"></div>

                <div class="form-section">
                    <h3>2. Noodgevallen / Contactpersoon</h3>
                    <div class="form-group">
                        <label for="emergency_contact_name">Naam noodcontact</label>
                        <input type="text" id="emergency_contact_name" name="emergency_contact_name" required>
                    </div>
                    <div class="form-group">
                        <label for="emergency_contact_phone">Telefoonnummer noodcontact</label>
                        <input type="tel" id="emergency_contact_phone" name="emergency_contact_phone" required>
                    </div>
                    <div class="form-group">
                        <label for="emergency_contact_relation">Relatie tot lid</label>
                        <input type="text" id="emergency_contact_relation" name="emergency_contact_relation" placeholder="partner, ouder, vriend etc." required>
                    </div>
                </div>

                <div class="form-divider"></div>

                <div class="form-section">
                    <h3>3. Medische informatie</h3>
                    <p class="form-note">(optioneel, maar belangrijk voor de veiligheid tijdens trainingen)</p>
                    <div class="form-group">
                        <label for="medical_conditions">Heb je medische aandoeningen waar wij rekening mee moeten houden?</label>
                        <textarea id="medical_conditions" name="medical_conditions" placeholder="bijv. astma, hartklachten, epilepsie"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_during_sports">Gebruik je medicatie tijdens het sporten?</label>
                        <textarea id="medication_during_sports" name="medication_during_sports"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="allergies">Allergieën</label>
                        <textarea id="allergies" name="allergies" placeholder="bijv. insectenbeten, notenallergie"></textarea>
                    </div>
                </div>

                <div class="form-divider"></div>

                <div class="form-section">
                    <h3>4. Sportachtergrond</h3>
                    <div class="form-group">
                        <label for="running_level">Loopervaring</label>
                        <select id="running_level" name="running_level" required>
                            <option value="">Selecteer je ervaring</option>
                            <option value="beginner">Beginner</option>
                            <option value="gevorderd">Gevorderd</option>
                            <option value="wedstrijdloper">Wedstrijdloper</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="running_experience_km">Gemiddelde afstand of tempo (optioneel)</label>
                        <input type="text" id="running_experience_km" name="running_experience_km">
                    </div>
                    <div class="form-group">
                        <label for="previous_injuries">Eerdere blessures (optioneel)</label>
                        <textarea id="previous_injuries" name="previous_injuries"></textarea>
                    </div>
                </div>

                <div class="form-divider"></div>

                <div class="form-section">
                    <h3>5. Toestemmingen / Akkoordverklaringen</h3>
                    <div class="form-group checkbox">
                        <input type="checkbox" id="privacy_agree" name="privacy_agree" value="1" required>
                        <label for="privacy_agree">Akkoord met de <a href="{{ route('privacy') }}" target="_blank">privacyverklaring (AVG)</a></label>
                    </div>
                    <div class="form-group checkbox">
                        <input type="checkbox" id="photo_agree" name="photo_agree" value="1" required>
                        <label for="photo_agree">Toestemming voor gebruik van foto's / video's voor website of social media</label>
                    </div>
                    <div class="form-group checkbox">
                        <input type="checkbox" id="terms_agree" name="terms_agree" value="1" required>
                        <label for="terms_agree">Akkoord met de <a href="{{ route('voorwaarden') }}" target="_blank">algemene voorwaarden en clubregels</a></label>
                    </div>
                </div>

                <div class="form-divider"></div>

                <div class="form-section">
                    <h3>6. Handtekening</h3>
                    <div class="form-group">
                        <label for="signature">Handtekening lid</label>
                        <input type="text" id="signature" name="signature" required 
                            class="signature-input" placeholder="Typ je naam als handtekening">
                        <small class="form-text text-muted">Typ je volledige naam als digitale handtekening</small>
                    </div>
                    <div class="form-group">
                        <label for="registration_date">Datum van inschrijving</label>
                        <input type="date" id="registration_date" name="registration_date" required>
                    </div>
                </div>

                <div class="form-submit">
                    <button type="submit" class="btn">Inschrijven</button>
                </div>
            </form>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Neem contact met ons op</h3>
                    <ul>
                        <li><strong>Email:</strong> rocknrosestudio@outlook.com</li>
                        <li><strong>Telefoon:</strong> 010-8408978</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">Nothin2Runnin</div>
                <div class="footer-links">
                    <a href="#welkom">Welkom</a>
                    <a href="#inschrijven">Inschrijven</a>
                    <a href="#contact">Contact</a>
                </div>
                <div class="footer-social">
                    <a href="#" class="social-icon">FB</a>
                    <a href="#" class="social-icon">IG</a>
                    <a href="#" class="social-icon">TW</a>
                </div>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2025 Nothin2Runnin. Alle rechten voorbehouden.</p>
            </div>
        </div>
    </footer>
    
</body>
</html>