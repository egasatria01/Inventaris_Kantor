<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventaris Kantor</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="bg-animation"></div>

    <nav>
          <img 
        src="{{ asset('assets/img/logo/logo.png') }}" 
        alt="Logo Inventaris Kantor"
        class="nav-logo"
    >
        <ul class="nav-links">
            <li><a href="#features">Fitur</a></li>
            <li><a href="#about">Tentang</a></li>
        </ul>
        <a href="/login" class="cta-btn" style="text-decoration: none; display: inline-block;">Login</a>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <!-- <div class="hero-badge animate-fadeInUp">
                <span>✨</span>
                <span>Sistem Inventaris Terpadu untuk Perusahaan Modern</span>
            </div> -->
            <h1 class="animate-fadeInUp">Kelola Inventaris Kantor Lebih Efisien</h1>
            <p class="animate-fadeInUp">Platform manajemen inventaris yang membantu Anda mengelola aset, melacak perpindahan barang, dan menghasilkan laporan secara real-time.</p>
            <!-- <div class="hero-buttons animate-fadeInUp">
                <a href="/login" class="btn-primary" style="text-decoration: none; display: inline-block;">Mulai Gratis</a>
                <button class="btn-secondary">Lihat Demo</button>
            </div> -->
        </div>
    </section>

    <section class="stats-section">
        <div class="stats-grid">
            <div class="stat-card animate-fadeInUp">
                <div class="stat-icon">📦</div>
                <h3>1,247</h3>
                <p>Aset Terkelola</p>
            </div>
            <div class="stat-card animate-fadeInUp">
                <div class="stat-icon">✓</div>
                <h3>98.5%</h3>
                <p>Akurasi Data</p>
            </div>
            <div class="stat-card animate-fadeInUp">
                <div class="stat-icon">👥</div>
                <h3>500+</h3>
                <p>Perusahaan Pengguna</p>
            </div>
            <div class="stat-card animate-fadeInUp">
                <div class="stat-icon">⚡</div>
                <h3>24/7</h3>
                <p>Akses Real-time</p>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="section-title">
            <h2>Fitur Unggulan</h2>
            <p>Semua yang Anda butuhkan untuk mengelola inventaris secara profesional</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">📦</div>
                <h3>Database Aset Terpusat</h3>
                <p>Dokumentasi lengkap setiap aset perusahaan dengan sistem yang mudah diakses kapan saja.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📍</div>
                <h3>Tracking Lokasi Real-time</h3>
                <p>Pantau posisi dan perpindahan barang secara akurat untuk mengurangi kehilangan aset.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔄</div>
                <h3>Manajemen Mutasi</h3>
                <p>Kontrol setiap perpindahan barang dengan pencatatan otomatis dan transparansi penuh.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">👥</div>
                <h3>Sistem Peminjaman</h3>
                <p>Proses peminjaman terstruktur dengan reminder otomatis untuk mengurangi risiko kehilangan.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔧</div>
                <h3>Jadwal Maintenance</h3>
                <p>Tingkatkan umur aset dengan penjadwalan perawatan yang terorganisir dan tepat waktu.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Laporan Komprehensif</h3>
                <p>Visualisasi data inventaris yang mudah dipahami untuk pengambilan keputusan yang lebih baik.</p>
            </div>
        </div>
    </section>

    <!-- <section class="cta-section" id="about">
        <div class="cta-container">
            <h2>Mulai Kelola Inventaris Anda</h2>
            <p>Bergabunglah dengan ratusan perusahaan yang sudah mengoptimalkan pengelolaan aset mereka dengan InvenTrack</p>
            <a href="/login" class="btn-primary" style="padding: 1.2rem 3rem; font-size: 1.1rem; text-decoration: none; display: inline-block;">Coba Gratis 14 Hari</a>
        </div> -->
    </section>

    <footer>
        <p>&copy; 2026 InvenTrack. Sistem Manajemen Inventaris Kantor. All rights reserved.</p>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Add scroll animation for cards
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.feature-card, .stat-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'all 0.6s ease-out';
            observer.observe(card);
        });
    </script>
</body>
</html>