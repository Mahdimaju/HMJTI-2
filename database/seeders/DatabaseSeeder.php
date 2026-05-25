<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\News;
use App\Models\Event;
use App\Models\Member;
use App\Models\Academic;
use App\Models\Download;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Disable foreign keys check for fresh start
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // Truncate tables
        Profile::truncate();
        News::truncate();
        Event::truncate();
        Member::truncate();
        Academic::truncate();
        Download::truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // 1. Seed Profile HMJTI
        Profile::create([
            'sejarah' => 'Himpunan Mahasiswa Jurusan Teknologi Informasi (HMJTI) didirikan pada tanggal 12 Oktober 2012 sebagai wadah aspirasi, kreativitas, dan pengembangan potensi bagi seluruh mahasiswa di bawah naungan Jurusan Teknologi Informasi. Sejak awal terbentuknya, HMJTI telah berdedikasi menjadi motor penggerak inovasi teknologi, pembina karakter akademis, serta perantara yang dinamis antara mahasiswa dan pihak birokrasi kampus. Melalui kepemimpinan yang silih berganti, HMJTI terus bertransformasi menjadi organisasi kemahasiswaan yang solid, adaptif terhadap perkembangan teknologi terbaru, serta berkontribusi nyata dalam pengabdian masyarakat di bidang IT.',
            'visi' => 'Terwujudnya Himpunan Mahasiswa Jurusan Teknologi Informasi yang AKTIF (Aspiratif, Kolaboratif, Transparan, Inovatif, dan Fungsional) guna menciptakan iklim akademis yang unggul dan mengembangkan potensi kreativitas berbasis teknologi terapan secara global.',
            'misi' => "1. Menjadi jembatan komunikasi yang responsif dan solutif dalam menyalurkan aspirasi mahasiswa Teknologi Informasi.\n2. Mengoptimalkan kolaborasi dengan institusi, industri, alumni, dan organisasi kemahasiswaan lainnya dalam lingkup nasional maupun internasional.\n3. Menyelenggarakan kegiatan peningkatan kapasitas akademik dan non-akademik di bidang teknologi informasi guna mencetak kader berdaya saing tinggi.\n4. Menerapkan tata kelola organisasi yang transparan, profesional, berkelanjutan, dan berasaskan kekeluargaan.\n5. Meningkatkan peran aktif organisasi dalam memecahkan permasalahan sosial di masyarakat melalui pemanfaatan keilmuan teknologi.",
            'ad_art' => 'Anggaran Dasar dan Anggaran Rumah Tangga (AD/ART) HMJTI adalah pedoman konstitusional tertinggi yang mengatur tata tertib internal, kedaulatan mahasiswa, kewajiban pengurus, hak anggota, serta struktur operasional organisasi HMJTI. AD/ART ini disahkan dalam Musyawarah Mahasiswa (MUMAS) tahunan dan menjadi dasar hukum bagi setiap perancangan program kerja, penggunaan anggaran belanja organisasi, tata tertib pemilihan umum ketua himpunan, serta penyusunan divisi kepengurusan. Seluruh pengurus dan anggota wajib memahami dan menjunjung tinggi nilai-nilai yang terkandung dalam AD/ART HMJTI demi kelangsungan sinergi organisasi.'
        ]);

        // 2. Seed News HMJTI
        News::create([
            'judul' => 'HMJTI Menyelenggarakan Web Dev Bootcamp 2026 untuk Pemula',
            'konten' => 'Divisi Riset dan Teknologi HMJTI sukses menyelenggarakan program tahunan "Web Dev Bootcamp 2026: From Scratch to Deploy". Kegiatan ini berlangsung secara hybrid selama tiga hari berturut-turut dan diikuti oleh lebih dari 150 mahasiswa tingkat awal. Dalam pelatihan ini, para peserta dibimbing langsung oleh mentor berpengalaman dari alumni HMJTI yang kini bekerja sebagai Senior Developer di berbagai startup nasional. Materi bootcamp meliputi dasar HTML5, CSS Grid, Modern Javascript, hingga pengenalan framework Laravel 11. Diharapkan kegiatan ini menjadi gerbang awal bagi mahasiswa untuk mendalami bidang rekayasa perangkat lunak.',
            'kategori' => 'Workshop',
            'foto' => 'news_webdev.jpg',
            'tanggal' => '2026-05-20'
        ]);

        News::create([
            'judul' => 'Tim Hackathon HMJTI Meraih Juara 1 Tingkat Nasional di HackFest 2026',
            'konten' => 'Prestasi membanggakan kembali diraih oleh mahasiswa Jurusan Teknologi Informasi. Tim "IT-Force" yang diwakili oleh kader-kader binaan HMJTI berhasil menyabet Juara 1 pada ajang kompetisi coding bergengsi tingkat nasional "HackFest 2026". Dengan mengusung aplikasi inovasi pengelolaan sampah pintar berbasis IoT dan mobile web bernama "TrashSmart", tim ini berhasil memukau dewan juri dengan kesiapan prototype dan presentasi yang lugas. Kemenangan ini membuktikan kualitas daya saing intelektual dan kreativitas mahasiswa Teknologi Informasi dalam memecahkan masalah nyata.',
            'kategori' => 'Prestasi',
            'foto' => 'news_hackathon.jpg',
            'tanggal' => '2026-05-18'
        ]);

        News::create([
            'judul' => 'Kunjungan Industri HMJTI ke Google Indonesia Office',
            'konten' => 'Dalam rangka memperluas wawasan karir dan memperkenalkan ekosistem industri teknologi global, HMJTI menyelenggarakan Kunjungan Industri 2026 ke Kantor Google Indonesia di Jakarta. Kegiatan ini diikuti oleh 40 mahasiswa terpilih beserta perwakilan dosen pendamping. Selain diajak berkeliling melihat fasilitas kerja yang inovatif, para peserta juga mendapatkan sesi sharing eksklusif dengan software engineer Indonesia mengenai kultur kerja di Google, tren teknologi AI terkini, serta tips sukses menembus magang di perusahaan teknologi multinasional.',
            'kategori' => 'Kunjungan',
            'foto' => 'news_kunjungan.jpg',
            'tanggal' => '2026-05-10'
        ]);

        // 3. Seed Events HMJTI
        Event::create([
            'nama_event' => 'Seminar Nasional: Masa Depan Kecerdasan Buatan & Web 3.0',
            'deskripsi' => 'Daftarkan diri Anda dalam Seminar Nasional HMJTI 2026 yang akan mengupas tuntas revolusi Artificial Intelligence (AI) Generatif, integrasi Web 3.0, serta bagaimana mempersiapkan talenta digital yang kompetitif menghadapi era transformasi digital. Menghadirkan pembicara terkemuka dari praktisi industri teknologi terkemuka Indonesia.',
            'tanggal_pelaksanaan' => '2026-06-15 09:00:00',
            'lokasi' => 'Aula Utama Gedung Rektorat Lantai 3',
            'link_pendaftaran' => 'https://daftar.hmjti.org/seminar-nasional-ai'
        ]);

        Event::create([
            'nama_event' => 'HMJTI Futsal Cup & E-Sport Championship 2026',
            'deskripsi' => 'Ajang tahunan olahraga dan e-sport antar mahasiswa aktif Jurusan Teknologi Informasi. Mari tunjukkan sportivitas, kekompakan tim, dan bakat terbaik Anda dalam kompetisi futsal lapangan serta turnamen Mobile Legends. Rebut total hadiah jutaan rupiah dan piala bergilir Ketua Jurusan!',
            'tanggal_pelaksanaan' => '2026-06-28 08:00:00',
            'lokasi' => 'Gelanggang Olahraga (GOR) Kampus',
            'link_pendaftaran' => 'https://daftar.hmjti.org/hmjti-championship'
        ]);

        Event::create([
            'nama_event' => 'Musyawarah Mahasiswa (MUMAS) XIV HMJTI',
            'deskripsi' => 'Agenda tahunan tertinggi HMJTI untuk membahas evaluasi laporan pertanggungjawaban (LPJ) pengurus periode 2025/2026, amandemen AD/ART organisasi, serta pemilihan & serah terima jabatan Ketua Umum HMJTI untuk periode kepengurusan 2026/2027. Hak suara Anda menentukan masa depan HMJTI!',
            'tanggal_pelaksanaan' => '2026-08-05 13:00:00',
            'lokasi' => 'Ruang Teater Kuliah Umum',
            'link_pendaftaran' => 'https://daftar.hmjti.org/mumas-xiv'
        ]);

        // 4. Seed Members HMJTI (Periode 2025/2026)
        $periode = '2025/2026';
        Member::create([
            'nama' => 'Aditya Pratama',
            'jabatan' => 'Ketua Umum',
            'divisi' => 'Badan Pengurus Harian (BPH)',
            'foto' => 'member_aditya.jpg',
            'periode' => $periode
        ]);

        Member::create([
            'nama' => 'Salma Kirana',
            'jabatan' => 'Wakil Ketua Umum',
            'divisi' => 'Badan Pengurus Harian (BPH)',
            'foto' => 'member_salma.jpg',
            'periode' => $periode
        ]);

        Member::create([
            'nama' => 'Farhan Al-Fatih',
            'jabatan' => 'Sekretaris Umum',
            'divisi' => 'Badan Pengurus Harian (BPH)',
            'foto' => 'member_farhan.jpg',
            'periode' => $periode
        ]);

        Member::create([
            'nama' => 'Rania Az-Zahra',
            'jabatan' => 'Bendahara Umum',
            'divisi' => 'Badan Pengurus Harian (BPH)',
            'foto' => 'member_rania.jpg',
            'periode' => $periode
        ]);

        Member::create([
            'nama' => 'Dwi Saputra',
            'jabatan' => 'Koordinator Divisi',
            'divisi' => 'Riset dan Teknologi (Ristek)',
            'foto' => 'member_dwi.jpg',
            'periode' => $periode
        ]);

        Member::create([
            'nama' => 'Zahra Nabilla',
            'jabatan' => 'Anggota Divisi',
            'divisi' => 'Riset dan Teknologi (Ristek)',
            'foto' => 'member_zahra.jpg',
            'periode' => $periode
        ]);

        Member::create([
            'nama' => 'Budi Setiawan',
            'jabatan' => 'Koordinator Divisi',
            'divisi' => 'Hubungan Masyarakat (Humas)',
            'foto' => 'member_budi.jpg',
            'periode' => $periode
        ]);

        Member::create([
            'nama' => 'Clara Claudia',
            'jabatan' => 'Anggota Divisi',
            'divisi' => 'Hubungan Masyarakat (Humas)',
            'foto' => 'member_clara.jpg',
            'periode' => $periode
        ]);

        // 5. Seed Academics (Beasiswa, Magang, Project)
        Academic::create([
            'judul_informasi' => 'Pendaftaran Beasiswa Unggulan PPA Tahun 2026',
            'kategori' => 'Beasiswa',
            'file_path' => 'beasiswa_ppa_2026.pdf'
        ]);

        Academic::create([
            'judul_informasi' => 'Buku Panduan Magang Industri Bersertifikat HMJTI 2026',
            'kategori' => 'Magang',
            'file_path' => 'panduan_magang_2026.pdf'
        ]);

        Academic::create([
            'judul_informasi' => 'Kolaborasi Project Open Source Website Portal Alumni TI',
            'kategori' => 'Project',
            'file_path' => 'portal_alumni_collab.pdf'
        ]);

        // 6. Seed Downloads
        Download::create([
            'nama_file' => 'AD/ART Resmi HMJTI 2025/2026',
            'deskripsi' => 'Unduh berkas Anggaran Dasar dan Anggaran Rumah Tangga (AD/ART) resmi HMJTI periode 2025/2026 format PDF.',
            'file_path' => 'ad_art_official.pdf'
        ]);

        Download::create([
            'nama_file' => 'Formulir Pendaftaran Calon Pengurus Baru HMJTI',
            'deskripsi' => 'Unduh berkas formulir fisik untuk pendaftaran seleksi calon pengurus HMJTI baru.',
            'file_path' => 'formulir_pendaftaran.pdf'
        ]);

        Download::create([
            'nama_file' => 'Template Proposal Kegiatan Kemahasiswaan HMJTI',
            'deskripsi' => 'Unduh format standar penyusunan proposal untuk kegiatan resmi divisi di lingkungan HMJTI.',
            'file_path' => 'template_proposal.pdf'
        ]);
    }
}
