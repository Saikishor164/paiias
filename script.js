document.addEventListener("DOMContentLoaded", function() {
    // Show the overlay and popup
    document.getElementById('overlay').style.display = 'flex';
});

// Function to close the popup
function closePopup() {
    document.getElementById('overlay').style.display = 'none';
}

// Function to open a URL in a new tab
function openURL() {
    window.open('https://paiias.org/Brochure.pdf', '_blank');
}