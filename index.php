<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/3022cf58cbc1c5a01de004e504d16ad8-128x128.png" type="image/x-icon">
    <meta name="description" content="Roses & Co">

    <title>Home</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="manifest" href="/manifest.json">

    <script src="serviceworker.js"></script>

</head>
<body>
<section class="header1 cid-rlh4cQkbp7 mbr-fullscreen mbr-parallax-background" id="header16-0">
    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(255, 255, 255);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Roses &amp; Co.</h1>
                <div class="mbr-section-btn">
                    <a class="btn btn-md btn-secondary-outline display-4" href="process.php">
                        <span class="mbri-refresh mbr-iconfont mbr-iconfont-btn"></span>PROCESS</a>
                    <a class="btn btn-md btn-secondary-outline display-4" href="reminders.php"><span
                            class="mbri-info mbr-iconfont mbr-iconfont-btn"></span>REMINDERS</a>
                </div>
            </div>
        </div>
    </div>
</section>
<button class="add-button" style="position: absolute;top: 1px;left: 1px;">Add to home screen</button>


<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/theme/js/script.js"></script>

<script>
    if('serviceWorker' in navigator) {
        navigator.serviceWorker
            .register('/serviceworker.js')
            .then(function() { console.log("Service Worker Registered"); });
    }

    let deferredPrompt;
    const addBtn = document.querySelector('.add-button');
    addBtn.style.display = 'none';

    window.addEventListener('beforeinstallprompt', (e) => {
        // Prevent Chrome 67 and earlier from automatically showing the prompt
        e.preventDefault();
    // Stash the event so it can be triggered later.
    deferredPrompt = e;
    // Update UI to notify the user they can add to home screen
    addBtn.style.display = 'block';

    addBtn.addEventListener('click', (e) => {
        // hide our user interface that shows our A2HS button
        addBtn.style.display = 'none';
    // Show the prompt
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then((choiceResult) => {
        if (choiceResult.outcome === 'accepted') {
        console.log('User accepted the A2HS prompt');
    } else {
        console.log('User dismissed the A2HS prompt');
    }
    deferredPrompt = null;
    });
    });
    });
</script>

</body>
</html>