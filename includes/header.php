<?php
// Function to check active page
function is_active($page) {
    $current_page = basename($_SERVER['PHP_SELF']);
    return ($current_page == $page) ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langit Publishing — Open Access Journal Publisher</title>
    
    <!-- Meta Tags for SEO -->
    <meta name="description" content="Langit Publishing — Penerbit jurnal ilmiah open access yang mengelola publikasi multidisiplin bereputasi dengan standar peer-review internasional.">
    <meta name="keywords" content="Langit Publishing, Jurnal Ilmiah, Open Access, Peer Review, Publikasi Akademik, OJS, EDUSKY, JCPI, ECONVERGIA, METLA, REPUBLICA">
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <div style="width: 42px; height: 42px; border-radius: 50%; background-color: white; display: flex; align-items: center; justify-content: center; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.1); flex-shrink: 0;">
                <img src="assets/images/logo-langit.jpeg" alt="Langit Publishing Logo" style="width: 36px; height: 36px; object-fit: contain;">
            </div>
            <span>Langit Publishing</span>
        </a>
        
        <button class="mobile-menu-btn" aria-label="Toggle Menu">
            <i class="ph ph-list"></i>
        </button>
        
        <ul class="navbar-nav">
            <li><a href="index.php" class="nav-link <?= is_active('index.php') ?>">Beranda</a></li>
            <li><a href="about.php" class="nav-link <?= is_active('about.php') ?>">Tentang Kami</a></li>
            <li><a href="journals.php" class="nav-link <?= is_active('journals.php') ?>">Jurnal</a></li>
            <li><a href="programs.php" class="nav-link <?= is_active('programs.php') ?>">Tim Editorial</a></li>
            <li><a href="contact.php" class="nav-link <?= is_active('contact.php') ?>">Kontak</a></li>
        </ul>
    </div>
</nav>
