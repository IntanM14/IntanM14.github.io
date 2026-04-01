<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>SMK Negeri 1 Bawang Banjarnegara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="wrap">

        <!-- HEADER -->
        <div id="header">
            <h1>SKANSA NEWS</h1>
            <div style="position:absolute; right:100px;">
                <a href="logout.php" style="color:white;">Logout</a>
            </div>
        </div>

        <!-- ISI -->
        <div class="row">

            <!-- SILEBAR -->
            <div class="col-3 col-m-5">
                <div id="silebar">
                    <div id="judul_silebar">MENU</div>
                    <div id="isi_silebar">
                        <ul>
                            <li><a href="#beranda">Beranda</a></li>
                            <li><a href="#berita">Berita</a></li>
                            <li><a href="#agenda">Agenda</a></li>
                            <li><a href="#tentang">Tentang</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- KONTEN -->
            <div id="home-awal" class="content-awal">
                <h2>Selamat Datang</h2>
                <p>Silakan pilih menu di samping untuk melihat informasi.</p>
            </div>
            <div class="col-9 col-m-7">
                <div id="konten">

                    <div id="beranda" class="content">
                        <h2>Beranda</h2>
                        <p>Selamat datang di website Intan Munawaroh.</p>
                        <p>SMK Negeri 1 Bawang merupakan SMK Pusat Keunggulan (Center of Excellence).</p>
                        <p>
                            SMK Negeri 1 Bawang selalu berusaha mengembangkan pendidikan kejuruan
                            yang relevan dengan kebutuhan dunia usaha dan industri.
                        </p>
                    </div>

                    <div id="berita" class="content">
                        <h2>Berita</h2>
                        <h3>
                            PPLG SMKN 1 Bawang Selenggarakan Uji Sertifikasi Kompetensi
                            dan Uji Kompetensi Industri Tahun 2025
                        </h3>

                        <?php
                        $date = "2025-11-28";
                        echo "<p><b>Tanggal:</b> " . date("d F Y", strtotime($date)) . "</p>";
                        ?>

                        <p>Pada bulan November 2025, Kompetensi Keahlian PPLG (Pengembangan Perangkat Lunak dan Gim) SMKN 1 Bawang
                            melaksanakan rangkaian kegiatan penting dalam memastikan kesiapan peserta didik menghadapi dunia kerja.
                            Kegiatan tersebut berupa Uji Sertifikasi Kompetensi (USK) dan Uji Kompetensi Industri (UKI) yang berlangsung
                            secara terstruktur, profesional, dan melibatkan lembaga sertifikasi serta mitra industri.</p>
                        <h3>A. Pelaksanaan Uji Sertifikasi Kompetensi (USK)</h3>

                        <p>
                            USK dilaksanakan bekerja sama dengan Lembaga Sertifikasi Profesi (LSP)
                            SMKN 1 Bawang. Kegiatan ini berlangsung dalam dua hari, yakni:
                        </p>

                        <ul>
                            <li>11 November 2025 untuk konsentrasi keahlian Rekayasa Perangkat Lunak (RPL)</li>
                            <li>12 November 2025 untuk konsentrasi keahlian Pengembangan Gim (PG)</li>
                        </ul>

                        <p>
                            Pada pelaksanaan USK, para siswa mengikuti tiga tahapan penting, yaitu:
                        </p>

                        <ol>
                            <li>
                                <b>Seleksi Administrasi</b>, berupa pemeriksaan kelengkapan dokumen
                                dan portofolio.
                            </li>
                            <li>
                                <b>Tes Tertulis</b>, yang menguji pemahaman konsep dasar pemrograman,
                                alur kerja perangkat lunak, dan pengetahuan terkait industri digital.
                            </li>
                            <li>
                                <b>Tes Praktik</b>, di mana siswa diminta menunjukkan kemampuan teknis
                                sesuai kompetensi masing-masing.
                            </li>
                        </ol>

                        <p>
                            Seluruh proses berjalan dengan lancar, tertib, dan menunjukkan kesiapan
                            siswa dalam menghadapi standar uji kompetensi yang berlaku.
                        </p>
                        <h3>B. Pelaksanaan Uji Kompetensi Industri (UKI)</h3>

                        <p>Setelah melalui USK, kegiatan dilanjutkan dengan Uji Kompetensi Industri (UKI) yang
                            melibatkan penguji langsung dari perusahaan mitra. UKI dilaksanakan sebagai bentuk nyata
                            pelaksanaan link and match antara SMK dan dunia industri. Pelaksanaannya adalah sebagai berikut:</p>

                        <ol>
                            <li>
                                UKI Konsentrasi RPL – 12 November 2025
                            </li>
                        </ol>
                        <p>Penguji berasal dari PT. Traspac Makmur Sejahtera, Jakarta, yaitu:</p>
                        <ul>
                            <li> Rendi Firmansyah</li>

                            <li>Aditya Ageng Arrafi</li>
                        </ul>
                        <p>Mereka menilai kemampuan siswa dalam membuat produk perangkat lunak sesuai standar industri,
                            mulai dari perancangan, implementasi kode, hingga fungsi akhir program.</p>

                        <ol>UKI Konsentrasi PG – 13 November 2025</ol>

                        <p>Pengujian untuk konsentrasi Pengembangan Gim dilakukan oleh praktisi dari PT. Cikara Bakti Nusantara,
                            Tasikmalaya, yaitu:</p>
                        <ul>
                            <li>Wahyu M. Rizki</li>

                            <li>Muhamad Solihin Ansurulloh</li>
                        </ul>
                        <p>Siswa diminta membuat proyek gim sesuai kriteria yang ditentukan,
                            kemudian mempresentasikan hasilnya secara langsung kepada penguji.</p>

                        <h3>C. Proses Pembuatan Proyek dan Presentasi</h3>

                        <p>Pada UKI, setiap siswa wajib menghasilkan sebuah proyek mandiri sebagai bentuk demonstrasi kemampuan teknis. Proyek tersebut kemudian:</p>
                        <ul>
                            <li>dipresentasikan secara profesional,</li>

                            <li>dijelaskan alur kerja dan fitur-fiturnya,</li>

                            <li>diuji langsung oleh penguji industri untuk memastikan keaslian dan kualitasnya.</li>

                            <p>Presentasi ini menjadi pengalaman berharga bagi peserta didik, karena memberi gambaran nyata mengenai standar komunikasi profesional di dunia kerja.</p>
                        </ul>

                        <h3>D. Hasil Akhir dan Sertifikasi</h3>

                        <p>Siswa yang dinyatakan lolos uji kompetensi oleh asesor LSP maupun penguji industri akan mendapatkan sertifikat resmi sebagai bukti bahwa mereka kompeten dan memenuhi standar kerja industri.
                            Sertifikat ini menjadi nilai tambah penting ketika siswa akan melamar pekerjaan atau mengikuti program magang.</p>
                        <p> kegiatan USK dan UKI di PPLG SMKN 1 Bawang pada November 2025 merupakan wujud komitmen sekolah dalam membekali peserta didik dengan keterampilan yang relevan dan diakui dunia kerja.
                            Dengan melibatkan lembaga sertifikasi dan perusahaan industri, kegiatan ini tidak hanya menjadi penilaian kemampuan, tetapi juga menjadi pengalaman belajar yang bermakna dan memotivasi siswa
                            untuk terus berkembang menjadi tenaga kerja muda yang unggul dan profesional.</p>


                    </div>

                    <div id="agenda" class="content">
                        <h2>Agenda Kegiatan</h2>

                        <div class="agenda-item">
                            <h4>📌 Uji Sertifikasi Kompetensi</h4>
                            <p><b>Tanggal:</b> 28 November 2025</p>
                            <p><b>Tempat:</b> Laboratorium PPLG</p>
                            <p><b>Keterangan:</b> Uji kompetensi untuk siswa kelas XII.</p>
                        </div>

                        <div class="agenda-item">
                            <h4>📌 Kunjungan Industri</h4>
                            <p><b>Tanggal:</b> 10 Desember 2025</p>
                            <p><b>Tempat:</b> PT Mitra Industri</p>
                            <p><b>Keterangan:</b> Pengenalan dunia kerja.</p>
                        </div>

                        <div class="agenda-item">
                            <h4>📌 Rapat Orang Tua Siswa</h4>
                            <p><b>Tanggal:</b> 20 Desember 2025</p>
                            <p><b>Tempat:</b> Aula Sekolah</p>
                            <p><b>Keterangan:</b> Pembahasan persiapan kelulusan.</p>
                        </div>
                    </div>
                    <div id="tentang" class="content">
                        <h2>Tentang Kami</h2>
                        <h3>Visi</h3>
                        <p>
                            Terbentuknya siswa yang bertaqwa, cerdas, terampil, mandiri,
                            berbudaya lingkungan, dan mampu bersaing di tingkat internasional.
                        </p>

                        <h3>Misi</h3>
                        <ul>
                            <li>Menyiapkan lulusan yang memiliki nilai-nilai religius dan berakhlak mulia.</li>
                            <li>Menyiapkan lulusan yang memiliki sikap nasionalisme dan cinta tanah air.</li>
                            <li>Menyiapkan lulusan yang mampu mengimplementasikan ilmu pengetahuan dan teknologi secara luas di era globalisasi.</li>
                            <li>Menyiapkan lulusan yang kompeten dan tersertifikasi.</li>
                            <li>Menyiapkan lulusan yang mandiri melalui kegiatan kewirausahaan dan pengembangan diri yang terencana dan berkesinambungan.</li>
                            <li>Mewujudkan sekolah sebagai pusat wisata edukasi yang berbasis lingkungan.</li>
                            <li>Menyiapkan lulusan yang profesional dan kompetitif.</li>
                        </ul>

                        <h3>Motto</h3>
                        <p>
                            <b>SMK Negeri 1 Bawang</b> mempunyai motto yaitu <b>“SUPERIOR”</b>, yang merupakan
                            perwujudan dari:
                        </p>

                        <ul>
                            <li><b>S</b>emangat</li>
                            <li><b>U</b>nggul</li>
                            <li><b>P</b>elopor</li>
                            <li><b>E</b>ksis</li>
                            <li><b>R</b>esponsif</li>
                            <li><b>I</b>khlas</li>
                            <li><b>O</b>ptimis</li>
                            <li><b>R</b>amah</li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
        <footer class="footer">
            <div class="footer-container">

                <div class="footer-col">
                    <h3>SMK Negeri 1 Bawang</h3>
                    <p>
                        Jl. Raya Pucang No.132 Pucang, Bawang,<br>
                        Banjarnegara, Jawa Tengah 53471
                    </p>
                    <p>Telp: 0822-5770-7383</p>
                    <p>Email: 20365@pplg.sch.id</p>
                    <p class="nis">NIS: 20365</p>

                    <h4>Media Sosial</h4>
                    <ul>
                        <li><strong>Instagram:</strong> <a href="https://www.instagram.com/_im24___?igsh=MWJ3b29ydmNreTdrdg==" target="_blank">@_im24___</a></li>
                        <li><strong>Instagram:</strong> <a href="https://www.instagram.com/indungindungkepalalindunggg?igsh=bHBtNDU3NjNxYWR1" target="_blank">@indungindungkepalalindunggg</a></li>
                        <li><strong>TikTok:</strong> <a href="https://www.tiktok.com/@iim.08__?_r=1&_t=ZS-93AFl3i3lif" target="_blank">@iim.08__</a></li>
                        <li><strong>TikTok:</strong> <a href="https://www.tiktok.com/@_nataa14___?_r=1&_t=ZS-93FQBRZ8oGT" target="_blank">@_nataa14___</a></li>
                    </ul>
                </div>

                <!-- Kolom 2 -->
                <div class="footer-col">
                    <h3>Program Keahlian:</h3>
                    <ul>
                        <li>Akuntansi dan Keuangan Lembaga (AKL)</li>
                        <li>Manajemen Perkantoran dan Layanan Bisnis (MPLB)</li>
                        <li>Pemasaran (PM)</li>
                        <li>Pengembangan Perangkat Lunak dan Gim (PPLG)</li>
                        <li>Teknik Jaringan Komputer dan Telekomunikasi (TJKT)</li>
                        <li>Fashion (FS)</li>
                        <li>Agribisnis Perikanan (AP)</li>
                        <li>Teknik Elektronika (TE)</li>
                    </ul>
                </div>

            </div>

            <!-- Footer bawah -->
            <div class="footer-bottom">
                <p>SMK NEGERI 1 BAWANG</p>
            </div>
        </footer>
    </div>

</body>

</html>