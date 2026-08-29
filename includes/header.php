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
    <title>Yayasan Bumi Inovasi Muda & Langit Publishing</title>
    
    <!-- Meta Tags for SEO -->
    <meta name="description" content="Yayasan Bumi Inovasi Muda - Lembaga pengabdian masyarakat di bidang keagamaan, sosial, dan kemanusiaan, serta penerbit jurnal ilmiah Langit Publishing.">
    <meta name="keywords" content="Yayasan Bumi Inovasi Muda, Langit Publishing, Jurnal Ilmiah, Pengabdian Masyarakat, Makan Bergizi Gratis">
    
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
            <i class="ph ph-planet"></i>
            <span>Bumi Inovasi Muda</span>
        </a>
        
        <button class="mobile-menu-btn" aria-label="Toggle Menu">
            <i class="ph ph-list"></i>
        </button>
        
        <ul class="navbar-nav">
            <li><a href="index.php" class="nav-link <?= is_active('index.php') ?>">Beranda</a></li>
            <li><a href="about.php" class="nav-link <?= is_active('about.php') ?>">Tentang Kami</a></li>
            <li><a href="programs.php" class="nav-link <?= is_active('programs.php') ?>">Program Kerja</a></li>
            <li><a href="journals.php" class="nav-link <?= is_active('journals.php') ?>">Publikasi Ilmiah</a></li>
            <li><a href="contact.php" class="nav-link <?= is_active('contact.php') ?>">Kontak</a></li>
        </ul>
    </div>
</nav>
