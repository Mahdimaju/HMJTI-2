@extends('layouts.layout')

@section('content')

    <!-- HERO SECTION -->
    <section class="hero" id="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <h3>Keluarga Besar Mahasiswa TI</h3>
                <h1>Membangun Masa Depan Dengan <span>Inovasi Teknologi</span></h1>
                <p>Selamat datang di portal resmi Himpunan Mahasiswa Jurusan Teknologi Informasi (HMJTI). Kami berkomitmen untuk menyalurkan aspirasi, memfasilitasi riset akademik, dan mempererat kolaborasi menuju talenta digital unggul secara global.</p>
                <div class="hero-cta">
                    <a href="#aspiration" class="btn btn-primary">Suarakan Aspirasi</a>
                    <a href="#profile" class="btn btn-secondary" style="color: var(--text-white); border-color: rgba(255,255,255,0.3);">Kenal Lebih Dekat</a>
                </div>
            </div>
            
            <div class="hero-image-container">
                <div class="hero-blob">
                    <div class="hero-blob-content">
                        <h2>TI</h2>
                        <p>Teknologi Informasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS BAR -->
    <div class="container">
        <div class="stats-bar">
            <div class="stat-item">
                <div class="stat-number" id="count-members">{{ $members->count() }}</div>
                <div class="stat-label">Pengurus Himpunan</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" id="count-events">{{ $events->count() }}</div>
                <div class="stat-label">Agenda Kegiatan</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" id="count-news">{{ $news->count() }}</div>
                <div class="stat-label">Berita Terbit</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" id="count-downloads">{{ $downloads->count() }}</div>
                <div class="stat-label">Berkas Publik</div>
            </div>
        </div>
    </div>

    <!-- PROFILE SECTION -->
    <section class="profile-section section-padding" id="profile">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Tentang Kami</span>
                <h2 class="section-title">Profil HMJTI</h2>
                <p style="color: var(--text-muted-light); max-width: 600px; margin: 0 auto;">Kenali visi, misi, sejarah, serta fondasi konstitusional dasar Himpunan Mahasiswa Jurusan Teknologi Informasi.</p>
            </div>
            
            <div class="profile-card">
                <div class="profile-tabs">
                    <button class="tab-btn active" onclick="switchProfileTab(event, 'sejarah')">
                        <svg viewBox="0 0 24 24"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                        Sejarah
                    </button>
                    <button class="tab-btn" onclick="switchProfileTab(event, 'visi-misi')">
                        <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.04-.42 1.99-1.07 2.25z"/></svg>
                        Visi & Misi
                    </button>
                    <button class="tab-btn" onclick="switchProfileTab(event, 'ad-art')">
                        <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                        AD / ART
                    </button>
                </div>
                
                <div class="profile-content">
                    <!-- Sejarah -->
                    <div id="sejarah" class="tab-pane active">
                        <h3 class="pane-title">
                            Sejarah Terbentuknya HMJTI
                        </h3>
                        <p class="pane-text">
                            {{ $profile->sejarah }}
                        </p>
                    </div>
                    
                    <!-- Visi Misi -->
                    <div id="visi-misi" class="tab-pane">
                        <h3 class="pane-title">Visi</h3>
                        <p class="pane-text" style="font-style: italic; border-left: 4px solid var(--primary); padding-left: 20px; margin-bottom: 30px;">
                            "{{ $profile->visi }}"
                        </p>
                        
                        <h3 class="pane-title" style="margin-top: 20px;">Misi</h3>
                        <div class="misi-list">
                            @php
                                $misis = explode("\n", $profile->misi);
                            @endphp
                            @foreach ($misis as $misi)
                                @if (trim($misi) !== '')
                                    @php
                                        // strip number prefix if seeded
                                        $cleanMisi = preg_replace('/^\d+\.\s*/', '', $misi);
                                    @endphp
                                    <div class="misi-item">
                                        <div class="misi-num">{{ $loop->iteration }}</div>
                                        <div class="misi-content">{{ $cleanMisi }}</div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- AD ART -->
                    <div id="ad-art" class="tab-pane">
                        <h3 class="pane-title">
                            Anggaran Dasar / Anggaran Rumah Tangga
                        </h3>
                        <p class="pane-text">
                            {{ $profile->ad_art }}
                        </p>
                        <a href="#academic" class="btn btn-primary" style="margin-top: 30px;">Unduh Dokumen AD/ART Lengkap</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS SECTION -->
    <section class="section-padding" id="news" style="background-color: var(--bg-light);">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Info Terkini</span>
                <h2 class="section-title">Berita & Pengumuman</h2>
                <p style="color: var(--text-muted-light); max-width: 600px; margin: 0 auto;">Dapatkan berita terbaru seputar kegiatan jurusan, prestasi mahasiswa, dan pengumuman internal organisasi.</p>
            </div>
            
            <div class="news-grid">
                @forelse($news as $item)
                    <article class="news-card">
                        <div class="news-image">
                            <span class="badge badge-primary news-category-badge">{{ $item->kategori }}</span>
                            <!-- Placeholder SVG if image file is not found -->
                            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 16H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm-4.5-9L11 14l-2.5-3L5 17h14l-4.5-7z"/></svg>
                        </div>
                        <div class="news-body">
                            <div class="news-meta">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" style="vertical-align: middle; fill: var(--text-muted-light);"><path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/></svg>
                                {{ date('d F Y', strtotime($item->tanggal)) }}
                            </div>
                            <h3 class="news-title">{{ $item->judul }}</h3>
                            <p class="news-excerpt">{{ $item->konten }}</p>
                        </div>
                    </article>
                @empty
                    <div style="grid-column: 1/-1; text-align: center; padding: 40px; color: var(--text-muted-light);">
                        Belum ada berita terbit saat ini.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- EVENTS SECTION -->
    <section class="events-section section-padding" id="events">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Kalender Himpunan</span>
                <h2 class="section-title">Event & Agenda Terdekat</h2>
                <p style="color: var(--text-muted-light); max-width: 600px; margin: 0 auto;">Ikuti dan ramaikan rangkaian agenda seru yang diselenggarakan oleh divisi-divisi HMJTI.</p>
            </div>
            
            <div class="events-list">
                @forelse($events as $event)
                    @php
                        $dt = \Carbon\Carbon::parse($event->tanggal_pelaksanaan);
                        $day = $dt->format('d');
                        $month = strtoupper($dt->translatedFormat('M'));
                    @endphp
                    <div class="event-card">
                        <div class="event-date-box">
                            <span class="event-day">{{ $day }}</span>
                            <span class="event-month">{{ $month }}</span>
                        </div>
                        
                        <div class="event-details">
                            <h3 class="event-title">{{ $event->nama_event }}</h3>
                            <p class="event-desc">{{ $event->deskripsi }}</p>
                            <div class="event-meta-info">
                                <div class="event-meta-item">
                                    <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    <span>{{ $event->lokasi }}</span>
                                </div>
                                <div class="event-meta-item">
                                    <svg viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                                    <span>{{ $dt->format('H:i') }} WIB</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="event-action">
                            @if($event->link_pendaftaran)
                                <a href="{{ $event->link_pendaftaran }}" target="_blank" class="btn btn-primary">Daftar Sekarang</a>
                            @else
                                <button class="btn btn-dark" disabled>Segera Hadir</button>
                            @endif
                        </div>
                    </div>
                @empty
                    <div style="text-align: center; padding: 40px; color: var(--text-muted-light); background-color: var(--bg-light); border-radius: var(--border-radius-md);">
                        Belum ada agenda terdekat saat ini.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- MEMBERS SECTION -->
    <section class="members-section section-padding" id="members">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Pengurus Aktif</span>
                <h2 class="section-title">Kepengurusan HMJTI</h2>
                <p style="color: var(--text-muted-light); max-width: 600px; margin: 0 auto;">Struktur kepengurusan resmi Himpunan Mahasiswa Jurusan Teknologi Informasi Periode 2025/2026.</p>
            </div>
            
            <div class="members-filter">
                <button class="filter-btn active" onclick="filterMembers('all')">Semua Pengurus</button>
                <button class="filter-btn" onclick="filterMembers('BPH')">BPH</button>
                <button class="filter-btn" onclick="filterMembers('Ristek')">Ristek</button>
                <button class="filter-btn" onclick="filterMembers('Humas')">Humas</button>
            </div>
            
            <div class="members-grid">
                @forelse($members as $member)
                    @php
                        // Determine filter class based on division
                        $divLower = strtolower($member->divisi);
                        $filterClass = 'all';
                        if (str_contains($divLower, 'bph') || str_contains($divLower, 'harian')) {
                            $filterClass = 'BPH';
                        } elseif (str_contains($divLower, 'riset') || str_contains($divLower, 'ristek') || str_contains($divLower, 'teknologi')) {
                            $filterClass = 'Ristek';
                        } elseif (str_contains($divLower, 'hubungan') || str_contains($divLower, 'humas') || str_contains($divLower, 'masyarakat')) {
                            $filterClass = 'Humas';
                        }
                    @endphp
                    <div class="member-card" data-division="{{ $filterClass }}">
                        <div class="member-avatar-wrapper">
                            <div class="member-avatar">
                                <!-- Default SVG Avatar -->
                                <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                            </div>
                        </div>
                        <h3 class="member-name">{{ $member->nama }}</h3>
                        <div class="member-role">{{ $member->jabatan }}</div>
                        <div class="member-division">{{ $member->divisi }}</div>
                    </div>
                @empty
                    <div style="grid-column: 1/-1; text-align: center; padding: 40px; color: var(--text-muted-light); background-color: var(--bg-white); border-radius: var(--border-radius-md);">
                        Informasi kepengurusan belum terbit.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- ACADEMICS & DOWNLOADS SECTION -->
    <section class="academic-section section-padding" id="academic">
        <div class="container split-layout">
            
            <!-- ACADEMIC PANEL -->
            <div class="academic-panel">
                <div class="panel-header">
                    <svg viewBox="0 0 24 24"><path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM5.89 12.55L12 15.89l6.11-3.34c.1-.05.17-.14.22-.24L12 15.44 5.67 12.3c.05.1.12.19.22.25zM12 21.89l-6.11-3.33c-.1-.05-.17-.14-.22-.24L12 21.44 18.33 18.3c.05.1.12.19.22.25l-6.55 3.34z"/></svg>
                    <h2 class="panel-title">Informasi Akademik</h2>
                </div>
                
                <div class="academic-list">
                    @forelse($academics as $acad)
                        <div class="academic-item">
                            <div class="item-info">
                                <div class="item-badge-row">
                                    <span class="badge badge-soft">{{ $acad->kategori }}</span>
                                </div>
                                <h3 class="academic-title">{{ $acad->judul_informasi }}</h3>
                            </div>
                            
                            @if($acad->file_path)
                                <a href="{{ route('academic.file', $acad->id) }}" class="item-action-btn" title="Unduh Lampiran" aria-label="Unduh lampiran akademik">
                                    <svg viewBox="0 0 24 24"><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM17 13l-5 5-5-5h3V9h4v4h3z"/></svg>
                                </a>
                            @endif
                        </div>
                    @empty
                        <div style="text-align: center; padding: 30px; color: var(--text-muted-light);">
                            Belum ada pengumuman akademik terbaru.
                        </div>
                    @endforelse
                </div>
            </div>
            
            <!-- DOWNLOADS PANEL -->
            <div class="download-panel">
                <div class="panel-header">
                    <svg viewBox="0 0 24 24"><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6c-2.21 0-4-1.79-4-4 0-2.05 1.53-3.76 3.56-3.97l1.07-.11.5-.95C8.08 7.14 9.94 6 12 6c2.62 0 4.88 1.86 5.39 4.43l.3 1.5 1.53.11c1.56.1 2.78 1.41 2.78 2.96 0 1.65-1.35 3-3 3zm-5.55-8h-2.9v3H7.5l4.5 4.5 4.5-4.5h-3.05V10z"/></svg>
                    <h2 class="panel-title">Unduhan Berkas</h2>
                </div>
                
                <div class="download-list">
                    @forelse($downloads as $dl)
                        <div class="download-item">
                            <div class="item-info">
                                <h3 class="download-title">{{ $dl->nama_file }}</h3>
                                @if($dl->deskripsi)
                                    <p class="download-desc">{{ $dl->deskripsi }}</p>
                                @endif
                            </div>
                            
                            <a href="{{ route('download.file', $dl->id) }}" class="item-action-btn" title="Unduh Berkas" aria-label="Unduh berkas">
                                <svg viewBox="0 0 24 24"><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM17 13l-5 5-5-5h3V9h4v4h3z"/></svg>
                            </a>
                        </div>
                    @empty
                        <div style="text-align: center; padding: 30px; color: var(--text-muted-light);">
                            Belum ada berkas unduhan yang tersedia.
                        </div>
                    @endforelse
                </div>
            </div>
            
        </div>
    </section>

    <!-- ASPIRATION SECTION -->
    <section class="aspiration-section section-padding" id="aspiration">
        <div class="container aspiration-layout">
            <div class="aspiration-info">
                <span class="section-subtitle" style="color: var(--primary-light);">E-Aspirasi Mahasiswa</span>
                <h2>Suara Mahasiswa, Kemajuan HMJTI</h2>
                <p>Kami percaya bahwa perubahan besar berawal dari masukan kecil. Tuliskan aspirasi, kritik konstruktif, keluhan, atau ide cemerlang Anda demi mewujudkan tata kelola HMJTI dan iklim akademik yang lebih responsif.</p>
                
                <div class="info-cards">
                    <div class="info-card">
                        <div class="info-card-icon">
                            <svg viewBox="0 0 24 24"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>
                        </div>
                        <div class="info-card-text">
                            <h4>Kerahasiaan Terjamin</h4>
                            <p>Data identitas Anda dilindungi dan hanya digunakan untuk validasi kemahasiswaan internal.</p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-card-icon">
                            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                        </div>
                        <div class="info-card-text">
                            <h4>Tanggapan Cepat</h4>
                            <p>Setiap aspirasi divalidasi dan diproses dalam rapat koordinasi mingguan pengurus.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="aspiration-form-card">
                <form id="aspiration-form" action="{{ route('aspiration.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_mahasiswa" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" placeholder="Contoh: Muhammad Rafli">
                        <div class="error-text" id="error-nama_mahasiswa"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="nim" class="form-label">Nomor Induk Mahasiswa (NIM)</label>
                        <input type="text" name="nim" id="nim" class="form-control" placeholder="Contoh: 211511001">
                        <div class="error-text" id="error-nim"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="pesan" class="form-label">Pesan Aspirasi / Saran</label>
                        <textarea name="pesan" id="pesan" class="form-control" placeholder="Tuliskan keluhan, saran, aspirasi, atau ide Anda di sini (Minimal 10 karakter)..."></textarea>
                        <div class="error-text" id="error-pesan"></div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" id="submit-btn" style="width: 100%;">
                        <span class="btn-loading-spinner" id="btn-spinner"></span>
                        <span id="btn-text">Kirim Aspirasi</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- INPAGE INTERACTION SCRIPTS -->
    <script>
        // --- PROFILE SECTION TABS TOGGLE ---
        function switchProfileTab(evt, tabId) {
            // Hide all tab panes
            const tabPanes = document.querySelectorAll('.tab-pane');
            tabPanes.forEach(pane => {
                pane.classList.remove('active');
            });

            // Deactivate all tab buttons
            const tabButtons = document.querySelectorAll('.tab-btn');
            tabButtons.forEach(btn => {
                btn.classList.remove('active');
            });

            // Show current tab pane and set button active
            document.getElementById(tabId).classList.add('active');
            evt.currentTarget.classList.add('active');
        }

        // --- KEPENGURUSAN MEMBER CARD FILTER ---
        function filterMembers(division) {
            // Deactivate all filter buttons
            const filterBtns = document.querySelectorAll('.filter-btn');
            filterBtns.forEach(btn => {
                btn.classList.remove('active');
            });

            // Activate target button
            event.currentTarget.classList.add('active');

            // Toggle cards based on target division attribute
            const cards = document.querySelectorAll('.member-card');
            cards.forEach(card => {
                const cardDiv = card.getAttribute('data-division');
                if (division === 'all' || cardDiv === division) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeIn 0.4s ease forwards';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>

@endsection
