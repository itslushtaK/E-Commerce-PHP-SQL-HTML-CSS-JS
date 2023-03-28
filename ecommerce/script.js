// Check the status of the request every second
setInterval(function() {
    $.ajax({
        url: 'check_status.php',
        success: function(data) {
            // If the request is complete, redirect the user to the homepage
            if (data === 'complete') {
                window.location.href = 'homepage.php';
            }
        }
    });
}, 1000);
