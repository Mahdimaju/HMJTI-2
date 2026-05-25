<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- SEO Optimization -->
    <title>Website Resmi HMJTI | Himpunan Mahasiswa Jurusan Teknologi Informasi</title>
    <meta name="description" content="Portal resmi Himpunan Mahasiswa Jurusan Teknologi Informasi (HMJTI). Temukan informasi visi-misi, berita terbaru, agenda event, kepengurusan, informasi akademik, dan layanan aspirasi mahasiswa.">
    <meta name="keywords" content="HMJTI, Teknologi Informasi, Himpunan Mahasiswa, IT, Beasiswa, Magang, Aspirasi Mahasiswa, Coding, Programming">
    <meta name="author" content="HMJTI Dev Team">
    
    <!-- CSS and Fonts -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Favicon Placeholders -->
    <link rel="icon" type="image/png" href="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%23CC0000'/><text x='50%' y='65%' font-family='sans-serif' font-size='50' font-weight='bold' fill='white' text-anchor='middle'>TI</text></svg>">
</head>
<body>

    <!-- NAVBAR -->
    <header class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="#" class="nav-logo">
                <h2>HMJ<span>TI</span></h2>
            </a>
            
            <nav class="nav-menu" id="nav-menu">
                <a href="#hero" class="nav-link active" id="link-hero">Beranda</a>
                <a href="#profile" class="nav-link" id="link-profile">Profil</a>
                <a href="#news" class="nav-link" id="link-news">Berita</a>
                <a href="#events" class="nav-link" id="link-events">Event</a>
                <a href="#members" class="nav-link" id="link-members">Kepengurusan</a>
                <a href="#academic" class="nav-link" id="link-academic">Akademik</a>
                <a href="#aspiration" class="nav-link" id="link-aspiration">Aspirasi</a>
            </nav>
            
            <button class="hamburger" id="hamburger" aria-label="Toggle navigation">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-info">
                <h2>HMJ<span>TI</span></h2>
                <p>Himpunan Mahasiswa Jurusan Teknologi Informasi (HMJTI) merupakan wadah pembinaan, aspirasi, dan kreativitas mahasiswa Teknologi Informasi untuk berinovasi dan berkontribusi secara nyata di bidang teknologi.</p>
                <div class="footer-socials">
                    <a href="https://instagram.com" target="_blank" class="social-link" aria-label="Instagram">
                        <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="https://youtube.com" target="_blank" class="social-link" aria-label="YouTube">
                        <svg viewBox="0 0 24 24"><path d="M23.498 6.163a3.003 3.003 0 00-2.11-2.11C19.517 3.545 12 3.545 12 3.545s-7.517 0-9.388.507a3.003 3.003 0 00-2.11 2.11C0 8.033 0 12 0 12s0 3.967.502 5.837a3.003 3.003 0 002.11 2.11c1.871.507 9.388.507 9.388.507s7.517 0 9.388-.507a3.003 3.003 0 002.11-2.11C24 15.967 24 12 24 12s0-3.967-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" class="social-link" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>
            
            <div class="footer-links">
                <h3>Navigasi Cepat</h3>
                <ul class="footer-links-list">
                    <li><a href="#hero">Beranda</a></li>
                    <li><a href="#profile">Profil Himpunan</a></li>
                    <li><a href="#news">Berita Terkini</a></li>
                    <li><a href="#events">Agenda Kegiatan</a></li>
                    <li><a href="#members">Kepengurusan</a></li>
                    <li><a href="#academic">Informasi Akademik</a></li>
                    <li><a href="#aspiration">Aspirasi Mahasiswa</a></li>
                </ul>
            </div>
            
            <div class="footer-contact">
                <h3>Hubungi Kami</h3>
                <div class="contact-items">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" width="18" height="18"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        </div>
                        <div class="contact-text">
                            Gedung Sekretariat Bersama ORMAWA Lt. 2, Jurusan Teknologi Informasi, Kampus Terpadu Indonesia
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" width="18" height="18"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        </div>
                        <div class="contact-text">
                            hmjti@kampus.ac.id
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom container">
            <p>&copy; 2026 Himpunan Mahasiswa Jurusan Teknologi Informasi (HMJTI). All Rights Reserved. Designed by Senior Developer Team.</p>
        </div>
    </footer>

    <!-- TOAST NOTIFICATION CONTAINER -->
    <div class="toast-container" id="toast-container">
        <div class="toast toast-success" id="custom-toast">
            <div class="toast-icon" id="toast-icon">✓</div>
            <div class="toast-message" id="toast-message">Pesan Anda berhasil dikirim!</div>
            <div class="toast-progress" id="toast-progress"></div>
        </div>
    </div>

    <!-- MAIN JAVASCRIPT -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            // --- HEADER SCROLL STICKY EFFECT ---
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('sticky');
                } else {
                    navbar.classList.remove('sticky');
                }
                
                // Highlight active nav link on scroll
                spySections();
            });

            // --- MOBILE MENU HAMBURGER ---
            const hamburger = document.getElementById('hamburger');
            const navMenu = document.getElementById('nav-menu');
            const navLinks = document.querySelectorAll('.nav-link');

            hamburger.addEventListener('click', () => {
                hamburger.classList.toggle('active');
                navMenu.classList.toggle('active');
            });

            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                });
            });

            // --- ACTIVE SECTION LINK HIGHLIGHT ---
            const sections = document.querySelectorAll('section, header.hero');
            function spySections() {
                let current = '';
                const scrollPos = window.scrollY + 120; // offset for sticky navbar
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            }

            // --- TOAST FUNCTION ---
            const toastContainer = document.getElementById('toast-container');
            const toast = document.getElementById('custom-toast');
            const toastMsgElement = document.getElementById('toast-message');
            const toastIconElement = document.getElementById('toast-icon');
            
            function showToast(message, type = 'success') {
                toastMsgElement.innerText = message;
                
                // Setup styling based on type
                if (type === 'success') {
                    toast.className = 'toast toast-success';
                    toastIconElement.innerText = '✓';
                } else {
                    toast.className = 'toast toast-error';
                    toastIconElement.innerText = '✗';
                }
                
                toastContainer.classList.add('show');
                
                // Auto hide after 4 seconds
                setTimeout(() => {
                    toastContainer.classList.remove('show');
                }, 4000);
            }

            // --- AJAX ASPIRATION FORM HANDLER ---
            const aspirationForm = document.getElementById('aspiration-form');
            if (aspirationForm) {
                aspirationForm.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    
                    const formAction = aspirationForm.getAttribute('action');
                    const formData = new FormData(aspirationForm);
                    
                    // Button UI elements
                    const submitBtn = document.getElementById('submit-btn');
                    const btnText = document.getElementById('btn-text');
                    const btnSpinner = document.getElementById('btn-spinner');
                    
                    // Reset validation error text
                    document.querySelectorAll('.error-text').forEach(el => {
                        el.style.display = 'none';
                        el.innerText = '';
                    });
                    document.querySelectorAll('.form-control').forEach(el => {
                        el.classList.remove('is-invalid');
                    });
                    
                    // Set loading state
                    submitBtn.disabled = true;
                    btnText.innerText = 'Mengirim...';
                    btnSpinner.style.display = 'inline-block';
                    
                    try {
                        const response = await fetch(formAction, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                'Accept': 'application/json'
                            },
                            body: formData
                        });
                        
                        const result = await response.json();
                        
                        if (response.ok && result.success) {
                            // Successful save!
                            showToast(result.message, 'success');
                            aspirationForm.reset();
                        } else {
                            // Server-side validation errors
                            if (result.errors) {
                                Object.keys(result.errors).forEach(key => {
                                    const input = document.getElementById(key);
                                    const errorEl = document.getElementById(`error-${key}`);
                                    
                                    if (input) {
                                        input.classList.add('is-invalid');
                                    }
                                    if (errorEl) {
                                        errorEl.innerText = result.errors[key][0];
                                        errorEl.style.display = 'block';
                                    }
                                });
                                showToast('Gagal mengirim aspirasi. Silakan periksa kembali formulir Anda.', 'error');
                            } else {
                                showToast(result.message || 'Terjadi kesalahan pada sistem.', 'error');
                            }
                        }
                    } catch (error) {
                        console.error('AJAX Error:', error);
                        showToast('Gagal terhubung ke server. Silakan periksa koneksi internet Anda.', 'error');
                    } finally {
                        // Reset loading state
                        submitBtn.disabled = false;
                        btnText.innerText = 'Kirim Aspirasi';
                        btnSpinner.style.display = 'none';
                    }
                });
            }
        });
    </script>
</body>
</html>
