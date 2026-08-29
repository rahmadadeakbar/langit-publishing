<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="py-4" style="background-color: var(--color-primary); color: white; text-align: center;">
    <div class="container">
        <h1 style="color: white; margin-bottom: 1rem;">Tim Editorial</h1>
        <p style="color: #cbd5e1; font-size: 1.125rem; max-width: 600px; margin: 0 auto;">Para akademisi dan peneliti profesional yang memastikan kualitas setiap publikasi di Langit Publishing.</p>
    </div>
</div>

<!-- Editor in Chief & Co Editor -->
<section class="py-4">
    <div class="container">
        <div class="section-title">
            <h2>Pimpinan Redaksi</h2>
            <div style="width: 60px; height: 4px; background-color: var(--color-accent); margin: 0 auto 1.5rem;"></div>
        </div>
        <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 2rem; margin-bottom: 3rem;">
            <div class="card" style="text-align: center; max-width: 380px; padding: 2.5rem 2rem; border-top: 4px solid var(--color-accent);">
                <div style="width: 120px; height: 120px; border-radius: 50%; background-color: #e2e8f0; margin: 0 auto 1.5rem; overflow: hidden;">
                    <img src="https://ui-avatars.com/api/?name=Ulung+Napitu&background=0f172a&color=fff&size=120" alt="Prof. Dr. Ulung Napitu, M.Si">
                </div>
                <div style="display: inline-block; background-color: rgba(234, 179, 8, 0.15); color: #b45309; padding: 0.25rem 0.75rem; border-radius: 2rem; font-weight: 600; font-size: 0.75rem; margin-bottom: 1rem;">EDITOR IN CHIEF</div>
                <h3 style="margin-bottom: 0.25rem; font-size: 1.25rem;">Prof. Dr. Ulung Napitu, M.Si</h3>
                <p style="color: var(--color-secondary); font-weight: 500;">Universitas Simalungun</p>
            </div>
            <div class="card" style="text-align: center; max-width: 380px; padding: 2.5rem 2rem; border-top: 4px solid var(--color-secondary);">
                <div style="width: 120px; height: 120px; border-radius: 50%; background-color: #e2e8f0; margin: 0 auto 1.5rem; overflow: hidden;">
                    <img src="https://ui-avatars.com/api/?name=Endrise+Septina+Rawanoko&background=0ea5e9&color=fff&size=120" alt="Dr. Endrise Septina Rawanoko, M.Pd">
                </div>
                <div style="display: inline-block; background-color: rgba(14, 165, 233, 0.15); color: #0369a1; padding: 0.25rem 0.75rem; border-radius: 2rem; font-weight: 600; font-size: 0.75rem; margin-bottom: 1rem;">CO EDITOR IN CHIEF</div>
                <h3 style="margin-bottom: 0.25rem; font-size: 1.25rem;">Dr. Endrise Septina Rawanoko, M.Pd</h3>
                <p style="color: var(--color-secondary); font-weight: 500;">Universitas Sebelas Maret</p>
            </div>
        </div>
    </div>
</section>

<!-- Editor -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Editor</h2>
            <div style="width: 60px; height: 4px; background-color: var(--color-secondary); margin: 0 auto 1.5rem;"></div>
            <p>Tim editor yang bertanggung jawab atas proses editorial dan pengelolaan jurnal</p>
        </div>
        <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
            <?php
            $editors = [
                ['Dr. Maulana Andinata Dalimunthe, M.A.', 'Universitas Sumatera Utara'],
                ['Abdi Mubarak Syam, M.Hum', 'Universitas Islam Negeri Sumatera Utara'],
                ['Dr. Joni Wilson Sitopu, M.Pd.', 'Universitas Simalungun'],
                ['Dr. Muhammad Komarul Huda, M.Pd.', 'Universitas Sriwijaya'],
                ['Dr. Feriyansyah, M.Pd.', 'Universitas Negeri Medan'],
                ['Dr. Aulia Novemy Dhita, M.Pd.', 'Universitas Sriwijaya'],
            ];
            foreach ($editors as $editor):
                $initials = implode('+', array_slice(explode(' ', $editor[0]), 0, 2));
            ?>
            <div class="card" style="text-align: center;">
                <div style="width: 80px; height: 80px; border-radius: 50%; background-color: #e2e8f0; margin: 0 auto 1rem; overflow: hidden;">
                    <img src="https://ui-avatars.com/api/?name=<?= urlencode($initials) ?>&background=0f172a&color=fff&size=80" alt="<?= $editor[0] ?>">
                </div>
                <h4 style="font-size: 1rem; margin-bottom: 0.25rem;"><?= $editor[0] ?></h4>
                <p style="color: var(--color-text-light); font-size: 0.875rem;"><?= $editor[1] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Reviewer -->
<section class="py-4">
    <div class="container">
        <div class="section-title">
            <h2>Reviewer</h2>
            <div style="width: 60px; height: 4px; background-color: #10b981; margin: 0 auto 1.5rem;"></div>
            <p>Para reviewer ahli yang menjamin kualitas setiap artikel melalui proses Double-Blind Peer Review</p>
        </div>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th style="width: 50px;">No</th>
                        <th>Nama</th>
                        <th>Afiliasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $reviewers = [
                        ['Fatimatuz Zahrah, S.Pd., M.Pd.', 'Universitas Pendidikan Ganesha (UNDIKSHA)'],
                        ['Aris Suhendar, S.Pd., M.Pd.', 'Universitas Simalungun'],
                        ['Ahmad Fakhri Hutauruk, S.Pd., M.Pd.', 'Universitas Simalungun'],
                        ['Ryan Taufika, M.Pd.', 'Universitas Muhammadiyah Sumatera Utara'],
                        ['Dr. Vinda Chairunnisa, M.Pd.', 'Universitas Al-Washliyah, Medan'],
                        ['Rahmansyah Fadlul Al-Karim Rambe, S.H., M.H.', 'Universitas Terbuka'],
                        ['Iwan Fajri, S.Pd., M.Pd', 'Universitas Islam Negeri Ar-Raniry Banda Aceh'],
                        ['Ahmad Bakri, S.Pd., M.Pd.', 'Universitas Muhammadiyah Riau'],
                        ['Meutia Handayani, S.E., M.Si.', 'Politeknik Aceh'],
                        ['Syahrial Arif Hutagalung, S.H., M.H.', 'Politeknik Negeri Medan'],
                        ['Dr. Bismar Sibuea, S.Pd., M.Pd.', 'Universitas Simalungun'],
                        ['Nur Pitri Arisandi, S.Pd., M.Pd.', 'Universitas Sehati Indonesia'],
                        ['Husna Fatwana, S.Pd., M.Pd.', 'Universitas Al Muslim'],
                        ['Muhammad Adika Nugraha, S.Pd., M.Pd.', 'Universitas Syiah Kuala'],
                        ['Yasir Maulana Rambe', 'Universitas Samudra'],
                        ['Apriya Maharani Rustandi, M.Pd.', 'Universitas Pendidikan Indonesia'],
                        ['Thoriq Abdul Aziz, M.Pd.', 'Universitas Pendidikan Indonesia'],
                        ['Galih Pandu Wiratama, M.Pd.', 'Universitas Pendidikan Indonesia'],
                        ['Dr. Ease Arent, M.Pd.', 'Universitas Negeri Makassar'],
                        ['Rahmad Ade Akbar, M.Pd.', 'Universitas Islam Negeri Ar-Raniry Banda Aceh'],
                    ];
                    foreach ($reviewers as $i => $reviewer): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><strong><?= $reviewer[0] ?></strong></td>
                        <td><?= $reviewer[1] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Editorial Board -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Editorial Board</h2>
            <div style="width: 60px; height: 4px; background-color: #8b5cf6; margin: 0 auto 1.5rem;"></div>
            <p>Dewan editorial yang memberikan arahan strategis dan menjaga standar kualitas penerbitan</p>
        </div>
        <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 2rem;">
            <div class="card" style="text-align: center; max-width: 350px; padding: 2rem 1.5rem; border-top: 4px solid #8b5cf6;">
                <div style="width: 100px; height: 100px; border-radius: 50%; background-color: #e2e8f0; margin: 0 auto 1.5rem; overflow: hidden;">
                    <img src="https://ui-avatars.com/api/?name=Syamsu+Nahar&background=0f172a&color=fff&size=100" alt="Prof. Dr. H. Syamsu Nahar, M.Ag">
                </div>
                <h4 style="font-size: 1.125rem; margin-bottom: 0.25rem;">Prof. Dr. H. Syamsu Nahar, M.Ag</h4>
                <p style="color: var(--color-secondary); font-weight: 500;">Universitas Islam Negeri Sumatera Utara</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Join -->
<section class="py-4 text-center">
    <div class="container">
        <h2 class="mb-3 text-primary">Bergabung dengan Tim Kami</h2>
        <p class="mb-4" style="color: var(--color-text-light); max-width: 600px; margin: 0 auto 2rem; font-size: 1.125rem;">Langit Publishing membuka kesempatan bagi akademisi dan peneliti untuk bergabung sebagai reviewer atau editorial board member.</p>
        <a href="contact.php" class="btn btn-primary">Hubungi Kami</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
