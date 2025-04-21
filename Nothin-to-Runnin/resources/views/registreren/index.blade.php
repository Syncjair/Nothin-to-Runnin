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
                    <li><a href="">Login</a></li>
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
                
                <a href="#inschrijven" class="btn">Inschrijven</a>
            </div>
        </div>
    </section>

    <section id="inschrijven" class="inschrijven">
        <div class="container">
            <h2>Inschrijfformulier</h2>
            <form id="registrationForm">
                <div class="form-section">
                    <h3>1. Persoonlijke gegevens</h3>
                    <div class="form-group">
                        <label for="fullName">Volledige naam</label>
                        <input type="text" id="fullName" name="fullName" required>
                    </div>
                    <div class="form-group">
                        <label for="birthDate">Geboortedatum</label>
                        <input type="date" id="birthDate" name="birthDate" required>
                    </div>
                    <div class="form-group">
                        <label for="city">Woonplaats</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefoonnummer</label>
                        <input type="tel" id="phone" name="phone" required>
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
                        <label for="emergencyName">Naam noodcontact</label>
                        <input type="text" id="emergencyName" name="emergencyName" required>
                    </div>
                    <div class="form-group">
                        <label for="emergencyPhone">Telefoonnummer noodcontact</label>
                        <input type="tel" id="emergencyPhone" name="emergencyPhone" required>
                    </div>
                    <div class="form-group">
                        <label for="relationship">Relatie tot lid</label>
                        <input type="text" id="relationship" name="relationship" placeholder="partner, ouder, vriend etc." required>
                    </div>
                </div>

                <div class="form-divider"></div>

                <div class="form-section">
                    <h3>3. Medische informatie</h3>
                    <p class="form-note">(optioneel, maar belangrijk voor de veiligheid tijdens trainingen)</p>
                    <div class="form-group">
                        <label for="medicalConditions">Heb je medische aandoeningen waar wij rekening mee moeten houden?</label>
                        <textarea id="medicalConditions" name="medicalConditions" placeholder="bijv. astma, hartklachten, epilepsie"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medications">Gebruik je medicatie tijdens het sporten?</label>
                        <textarea id="medications" name="medications"></textarea>
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
                        <label for="experience">Loopervaring</label>
                        <select id="experience" name="experience" required>
                            <option value="">Selecteer je ervaring</option>
                            <option value="beginner">Beginner</option>
                            <option value="gevorderd">Gevorderd</option>
                            <option value="wedstrijdloper">Wedstrijdloper</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="averageDistance">Gemiddelde afstand of tempo (optioneel)</label>
                        <input type="text" id="averageDistance" name="averageDistance">
                    </div>
                    <div class="form-group">
                        <label for="injuries">Eerdere blessures (optioneel)</label>
                        <textarea id="injuries" name="injuries"></textarea>
                    </div>
                </div>

                <div class="form-divider"></div>

                <div class="form-section">
                    <h3>5. Toestemmingen / Akkoordverklaringen</h3>
                    <div class="form-group checkbox">
                        <input type="checkbox" id="privacyAgree" name="privacyAgree" required>
                        <label for="privacyAgree">Akkoord met de <a href="{{ route('privacy') }}" target="_blank">privacyverklaring (AVG)</a></label>
                    </div>
                    <div class="form-group checkbox">
                        <input type="checkbox" id="photoAgree" name="photoAgree" required>
                        <label for="photoAgree">Toestemming voor gebruik van foto's / video's voor website of social media</label>
                    </div>
                    <div class="form-group checkbox">
                        <input type="checkbox" id="termsAgree" name="termsAgree" required>
                        <label for="termsAgree">Akkoord met de <a href="{{ route('voorwaarden') }}" target="_blank">algemene voorwaarden en clubregels</a></label>
                    </div>
                </div>

                <div class="form-divider"></div>

                <div class="form-section">
                    <h3>6. Handtekening</h3>
                    <div class="form-group">
                        <label for="signature">Handtekening lid</label>
                        <div class="signature-pad">
                            <p>Handtekening hier plaatsen</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="signDate">Datum van inschrijving</label>
                        <input type="date" id="signDate" name="signDate" required>
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