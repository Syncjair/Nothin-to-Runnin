document.addEventListener('DOMContentLoaded', function() {
    const dateOfBirthInput = document.getElementById('date_of_birth');
    const ageError = document.getElementById('age_error');
    const form = document.getElementById('registrationForm');
    
    // Calculate date 18 years ago
    function getMinBirthdate() {
        const today = new Date();
        return new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());
    }
    
    // Validate age function
    function validateAge() {
        const birthDate = new Date(dateOfBirthInput.value);
        const minDate = getMinBirthdate();
        
        if (birthDate > minDate) {
            // User is under 18
            ageError.style.display = 'block';
            return false;
        } else {
            // User is 18 or older
            ageError.style.display = 'none';
            return true;
        }
    }
    
    // Add validation on input change
    dateOfBirthInput.addEventListener('change', validateAge);
    
    // Add validation on form submit
    form.addEventListener('submit', function(e) {
        if (!validateAge()) {
            e.preventDefault(); // Prevent form submission
        }
    });
});
