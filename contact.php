<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="py-4" style="background-color: var(--color-primary); color: white; text-align: center;">
    <div class="container">
        <h1 style="color: white; margin-bottom: 1rem;">Hubungi Kami</h1>
        <p style="color: #cbd5e1; font-size: 1.125rem; max-width: 600px; margin: 0 auto;">Kami siap berkolaborasi dan mendengarkan aspirasi Anda demi mewujudkan program kemanusiaan yang berdampak.</p>
    </div>
</div>

<section class="py-4">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1.5fr; gap: 4rem;">
            <!-- Informasi Kontak -->
            <div>
                <h2 class="text-primary mb-3">Informasi Kontak</h2>
                <p class="mb-4" style="color: var(--color-text-light); font-size: 1.125rem;">Jangan ragu untuk menghubungi kami melalui saluran resmi berikut terkait program donasi, kemitraan, atau publikasi jurnal.</p>
                
                <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="background-color: #f1f5f9; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--color-secondary); font-size: 1.5rem; flex-shrink: 0;">
                            <i class="ph ph-map-pin"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.125rem; margin-bottom: 0.25rem;">Kantor Pusat</h3>
                            <p style="color: var(--color-text-main);">Kota Pematangsiantar,<br>Sumatera Utara, Indonesia</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="background-color: #f1f5f9; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--color-secondary); font-size: 1.5rem; flex-shrink: 0;">
                            <i class="ph ph-phone"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.125rem; margin-bottom: 0.25rem;">Telepon / WhatsApp</h3>
                            <p style="color: var(--color-text-main);">+62 812-3456-7890</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="background-color: #f1f5f9; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--color-secondary); font-size: 1.5rem; flex-shrink: 0;">
                            <i class="ph ph-envelope-simple"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.125rem; margin-bottom: 0.25rem;">Email</h3>
                            <p style="color: var(--color-text-main);">info@bumiinovasimuda.or.id</p>
                        </div>
                    </div>
                </div>
                
                <h3 class="text-primary mt-4 mb-3">Media Sosial</h3>
                <div style="display: flex; gap: 1rem;">
                    <a href="#" style="background-color: var(--color-primary); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: background-color var(--transition-fast);"><i class="ph ph-instagram-logo"></i></a>
                    <a href="#" style="background-color: var(--color-primary); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: background-color var(--transition-fast);"><i class="ph ph-facebook-logo"></i></a>
                    <a href="#" style="background-color: var(--color-primary); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: background-color var(--transition-fast);"><i class="ph ph-linkedin-logo"></i></a>
                </div>
            </div>
            
            <!-- Formulir Kontak -->
            <div>
                <div class="card">
                    <h2 class="text-primary mb-3">Kirim Pesan</h2>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
                        </div>
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
                            <div>
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Alamat email Anda" required>
                            </div>
                            <div>
                                <label for="phone" class="form-label">Nomor Telepon</label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Nomor yang bisa dihubungi">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject" class="form-label">Subjek</label>
                            <select id="subject" name="subject" class="form-control" required>
                                <option value="" disabled selected>Pilih subjek pesan...</option>
                                <option value="Kemitraan & Donasi">Kemitraan & Donasi</option>
                                <option value="Informasi Jurnal (Langit Publishing)">Informasi Jurnal (Langit Publishing)</option>
                                <option value="Program Makan Bergizi Gratis">Program Makan Bergizi Gratis</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Tuliskan pesan atau pertanyaan Anda di sini..." required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Pesan <i class="ph ph-paper-plane-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Peta / Lokasi -->
<section style="height: 400px; background-color: #e2e8f0; display: flex; align-items: center; justify-content: center;">
    <div style="text-align: center; color: var(--color-text-light);">
        <i class="ph ph-map-trifold" style="font-size: 3rem; margin-bottom: 1rem;"></i>
        <p>Integrasi Google Maps Pematangsiantar akan ditampilkan di sini</p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
