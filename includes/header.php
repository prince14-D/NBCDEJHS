<!DOCTYPE html>
<html>
<head>
    <title>NBCDEJHS - Official Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


<link rel="icon" type="image/jpeg" sizes="32x32" href="assets/images/favicon.jpeg">
<link rel="icon" type="image/jpeg" sizes="16x16" href="assets/images/favicon.jpeg">
<link rel="shortcut icon" href="assets/images/favicon.jpeg">

<link rel="manifest" href="manifest.json">
<meta name="theme-color" content="#1E4FA3">
    <!-- iOS / Apple touch icon and web app meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="NBCDEJHS">
    <link rel="apple-touch-icon" href="assets/images/icon-192.png">



</head>
<body>

<?php if (basename($_SERVER['PHP_SELF']) === 'index.php'): ?>
<div id="splash-screen">
    <img src="assets/images/icon-192.png" alt="NBCDEJHS Logo">
    <h3>New Born Christian School</h3>
</div>
<?php endif; ?>


<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo.jpeg" width="50">
            NBCDEJHS
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

       <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="director.php">Director</a></li>
        <li class="nav-item"><a class="nav-link" href="academics.php">Academics</a></li>
        <li class="nav-item"><a class="nav-link" href="admission.php">Admissions</a></li>
        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

        <!-- E-Portal Button -->
        <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
            <a href="eportal/login.php" class="btn btn-warning fw-bold">
                E-Portal
            </a>
        </li>
        <!-- Install Button (appears when browser fires beforeinstallprompt) -->
        <li class="nav-item ms-2 mt-2 mt-lg-0">
            <button id="installBtn" class="btn btn-outline-light fw-bold" style="display:none;">Install App</button>
        </li>
    </ul>
</div>
</nav>
