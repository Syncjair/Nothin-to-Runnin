// Google Translate initialization function
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'nl',
        includedLanguages: 'en,nl',
        autoDisplay: false
    }, 'google_translate_element');
}

document.addEventListener('DOMContentLoaded', function() {
    // Add Google Translate script
    const googleTranslateScript = document.createElement('script');
    googleTranslateScript.src = '//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
    document.head.appendChild(googleTranslateScript);
    
    // Set up language toggle
    const languageToggle = document.getElementById('languageToggle');
    const logo = document.querySelector('.logo');
    languageToggle.classList.add('notranslate');
    logo.classList.add('notranslate');
    let currentLang = 'nl'; // Default language is Dutch
    
    languageToggle.addEventListener('click', function(e) {
        e.preventDefault();
        
        if (currentLang === 'nl') {
            // Switch to English
            setTimeout(function() {
                const selectElement = document.querySelector('.goog-te-combo');
                if (selectElement) {
                    selectElement.value = 'en';
                    selectElement.dispatchEvent(new Event('change'));
                }
            }, 1000);
            languageToggle.textContent = 'NL';
            currentLang = 'en';
        } else {
            // Switch back to Dutch
            setTimeout(function() {
                const selectElement = document.querySelector('.goog-te-combo');
                if (selectElement) {
                    selectElement.value = 'nl';
                    selectElement.dispatchEvent(new Event('change'));
                }
            }, 1000);
            languageToggle.textContent = 'EN';
            currentLang = 'nl';
        }
    });
});