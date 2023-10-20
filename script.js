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
    window.open('https://paiias.org/Brochure.pdf', 'download');
}


function openOURL() {
    window.open('https://forms.gle/USp9iAzRwYa3Eyo3A', 'download');
}

// Function to open a URL in a new tab
function openWH() {
    window.open('https://chat.whatsapp.com/E3gpSLnnDsG24LAL6bH81v', '_blank');
}