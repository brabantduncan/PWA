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
    <script src="assets/js/localforage.js"></script>

</head>
<body>
<section class="header1 cid-rlh4cQkbp7 mbr-fullscreen mbr-parallax-background" id="header16-0">


    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(79, 4, 36);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Roses &amp; Co.</h1>
                <div class="mbr-section-btn">
                    <a class="btn btn-md btn-white-outline display-4" href="process.php">
                        <span class="mbri-refresh mbr-iconfont mbr-iconfont-btn"></span>PROCESS</a>
                    <a class="btn btn-md btn-white-outline display-4" href="reminders.php">
                        <span class="mbri-info mbr-iconfont mbr-iconfont-btn"></span>REMINDERS</a>
                </div>
            </div>
        </div>
    </div>

</section>


<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/theme/js/script.js"></script>

<script>
    const check = () => {
        if (!('serviceWorker' in navigator)) {
            throw new Error('No Service Worker support!')
        }
        if (!('PushManager' in window)) {
            throw new Error('No Push API Support!')
        }
    }

    const registerServiceWorker = async () => {
        const swRegistration = await navigator.serviceWorker.register('service.js'); //notice the file name
        return swRegistration;
    };

    const requestNotificationPermission = async () => {
        const permission = await window.Notification.requestPermission();
        // value of permission can be 'granted', 'default', 'denied'
        // granted: user has accepted the request
        // default: user has dismissed the notification permission popup by clicking on x
        // denied: user has denied the request.
        if(permission !== 'granted'){
            throw new Error('Permission not granted for Notification');
        }
    };

    const main = async () => {
        check();
        const swRegistration = await registerServiceWorker();
        const permission =  await requestNotificationPermission();
    };
    main();




</script>

</body>
</html>