document.addEventListener("DOMContentLoaded", function() {
    // Show the overlay and popup
    document.getElementById('overlay').style.display = 'flex';
});

// Function to close the popup
function closePopup() {
    document.getElementById('overlay').style.display = 'none';
}