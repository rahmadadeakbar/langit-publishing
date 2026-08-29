<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <h3 style="display: flex; align-items: center; gap: 0.5rem;">
                    <div style="width: 36px; height: 36px; border-radius: 50%; background-color: white; display: flex; align-items: center; justify-content: center; overflow: hidden; flex-shrink: 0;">
                        <img src="assets/images/logo-langit.jpeg" alt="Logo" style="width: 30px; height: 30px; object-fit: contain;">
                    </div>
                    Langit Publishing
                </h3>
                <p>Penerbit jurnal ilmiah open access yang mengelola publikasi multidisiplin bereputasi dengan standar peer-review internasional.</p>
                <div class="footer-social">
                    <a href="#" aria-label="Instagram"><i class="ph ph-instagram-logo"></i></a>
                    <a href="#" aria-label="Facebook"><i class="ph ph-facebook-logo"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="ph ph-linkedin-logo"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h3>Tautan Cepat</h3>
                <ul class="footer-links">
                    <li><a href="about.php">Tentang Kami</a></li>
                    <li><a href="journals.php">Jurnal Ilmiah</a></li>
                    <li><a href="programs.php">Tim Editorial</a></li>
                    <li><a href="contact.php">Hubungi Kami</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Hubungi Kami</h3>
                <ul class="footer-links">
                    <li style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="ph ph-envelope-simple"></i> info@langitpublishing.org
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="ph ph-phone"></i> +62 813-8548-8531
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                        <i class="ph ph-map-pin" style="margin-top: 0.25rem;"></i>
                        <span>Kota Pematangsiantar,<br>Sumatera Utara, Indonesia</span>
                    </li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Katalog Jurnal</h3>
                <p>Kami mengelola enam jurnal ilmiah open access multidisiplin menggunakan standar Open Journal Systems (OJS).</p>
                <a href="journals.php" class="btn btn-outline" style="color: white; border-color: rgba(255,255,255,0.3); margin-top: 1rem;">Lihat Jurnal <i class="ph ph-arrow-right"></i></a>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> Langit Publishing. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    // Simple script for mobile menu toggle (if needed)
    document.addEventListener('DOMContentLoaded', function() {
        const mobileBtn = document.querySelector('.mobile-menu-btn');
        const nav = document.querySelector('.navbar-nav');
        
        if(mobileBtn && nav) {
            mobileBtn.addEventListener('click', function() {
                if(nav.style.display === 'flex') {
                    nav.style.display = 'none';
                } else {
                    nav.style.display = 'flex';
                    nav.style.flexDirection = 'column';
                    nav.style.position = 'absolute';
                    nav.style.top = '80px';
                    nav.style.left = '0';
                    nav.style.width = '100%';
                    nav.style.backgroundColor = 'white';
                    nav.style.padding = '1rem';
                    nav.style.boxShadow = 'var(--shadow-md)';
                }
            });
        }
    });
</script>
</body>
</html>
