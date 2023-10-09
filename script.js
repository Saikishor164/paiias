document.addEventListener("DOMContentLoaded", function() {
    // Show the overlay and popup
    document.getElementById('overlay').style.display = 'flex';
});

// Function to close the popup
function closePopup() {
    document.getElementById('overlay').style.display = 'none';
}



    // Redirect to 404 page after a delay (in milliseconds)
    // setTimeout(function() {
    //     window.location.href = "/404.html";
    // }, 5000); // Adjust the delay as needed