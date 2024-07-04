@extends('layouts.auth')

@section('body')
    <div class="container mt-4 text-white">
        <div class="row">
            <div class="col-md-2 p-0 m-0">
                <div class="list-group position-fixed card-list  d-flex align-content-end flex-wrap ">
                    <a href="#login-signup" class="list-fixed list-group-item list-group-item-action">Login dan Signup</a>
                    <a href="#buat-diskusi-baru" class="list-fixed list-group-item list-group-item-action">Membuat Diskusi
                        Baru</a>
                    <a href="#mengelola-diskusi" class="list-fixed list-group-item list-group-item-action">Mengelola
                        Diskusi</a>
                    <a href="#memberikan-tanggapan" class="list-fixed list-group-item list-group-item-action">Memberikan
                        Tanggapan</a>
                    <a href="#diskusi-teratas" class="list-fixed list-group-item list-group-item-action">Melihat Diskusi
                        Teratas</a>
                    <a href="#profil-logout" class="list-fixed list-group-item list-group-item-action">Profil dan Logout</a>
                    <a href="#pencarian-diskusi" class=" list-fixed list-group-item list-group-item-action">Pencarian
                        Diskusi</a>
                    <a href="#kategori-diskusi" class="list-fixed list-group-item list-group-item-action">Kategori
                        Diskusi</a>
                    <a href="#halaman-utilitas" class="list-fixed list-group-item list-group-item-action">Halaman
                        Utilitas</a>
                    <a href="#lainnya" class="list-fixed list-group-item list-group-item-action">Lainnya</a>
                </div>
            </div>
            <div class="col-md-10 offset-md-2 ">
                <h1 class="text-left mb-4">Bantuan CeritaDesain</h1>
                <p>Selamat datang di halaman bantuan Komunitas CeritaDesain! Di sini, kami menyediakan panduan lengkap untuk
                    membantu kamu menggunakan platform kami dengan mudah.</p>

                <div class="card align-center mb-5">
                    <div class="card-body">
                        <h4 id="login-signup"><img src="{{ url('') }}" alt="">Login dan Signup</h4>
                        <ul>
                            <li>
                                <p>Login: Untuk masuk ke akun kamu, gunakan email dan password yang telah kamu daftarkan.
                                    Pastikan email dan password yang kamu masukkan benar untuk menghindari masalah saat
                                    login.</p>
                            </li>
                            <li>
                                <p>Signup: Untuk membuat akun baru, kamu perlu menyediakan email, password, dan username.
                                    Setelah mengisi formulir pendaftaran, kamu akan dapat mengakses semua fitur di platform
                                    kami.</p>
                            </li>
                        </ul>

                        <h4 id="buat-diskusi-baru">Membuat Diskusi Baru</h4>
                        <ul>
                            <li>
                                <p>Buat Diskusi Baru: Klik tombol "Buat Diskusi Baru" yang terletak di halaman
                                    utama atau halaman kategori.</p>
                            </li>
                            <li>
                                <p>Judul dan Kategori: Masukkan judul untuk diskusi kamu dan pilih kategori yang sesuai dari
                                    daftar yang tersedia.</p>
                            </li>
                            <li>
                                <p>Isi Diskusi: Tulis isi diskusi yang ingin kamu bahas. Pastikan untuk memberikan detail
                                    yang cukup agar user lain dapat memahami topik kamu.</p>
                            </li>
                        </ul>

                        <h4 id="mengelola-diskusi">Mengelola Diskusi</h4>
                        <ul>
                            <li>
                                <p>Edit Diskusi: Jika kamu adalah pembuat diskusi, kamu dapat mengedit konten diskusi kapan
                                    saja untuk memperbarui atau memperbaiki informasi.</p>
                            </li>
                            <li>
                                <p>Delete Diskusi: kamu juga memiliki opsi untuk menghapus diskusi jika merasa tidak relevan
                                    lagi.</p>
                            </li>
                            <li>
                                <p>Share Diskusi: kamu dapat membagikan diskusi ke media sosial atau platform lain melalui
                                    tombol share.</p>
                            </li>
                            <li>
                                <p>Highlight Biru Pada Username: Username kamu akan diberi warna biru setiap kali kamu
                                    memberikan tanggapan di
                                    diskusi yang kamu buat, sehingga user lain tahu siapa pembuat diskusi tersebut.</p>
                            </li>
                        </ul>

                        <h4 id="memberikan-tanggapan">Memberikan Tanggapan</h4>
                        <ul>
                            <li>
                                <p>Tanggapan: Setiap user dapat memberikan tanggapan atau komentar terhadap diskusi yang
                                    sedang dibahas.</p>
                            </li>
                            <li>
                                <p>Edit dan Delete Tanggapan: User yang menulis tanggapan memiliki opsi untuk mengedit atau
                                    menghapus tanggapan mereka.</p>
                            </li>
                            <li>
                                <p>Like Tanggapan: kamu dapat menyukai tanggapan yang menurut kamu bermanfaat atau menarik.
                                </p>
                            </li>
                        </ul>

                        <h4 id="diskusi-teratas">Melihat Diskusi Teratas</h4>
                        <p>Diskusi Teratas: Untuk melihat diskusi yang paling populer atau banyak dibicarakan, buka bagian
                            index diskusi dan klik pada tab "teratas".</p>

                        <h4 id="profil-logout">Profil dan Logout</h4>
                        <ul>
                            <li>
                                <p>Profil: Klik ikon avatar di navbar untuk membuka dropdown halaman profil kamu. Di halaman
                                    profil, kamu bisa melihat:</p>
                                <ul>
                                    <li>History Diskusi: Semua diskusi yang pernah kamu buat.</li>
                                    <li>History Tanggapan: Semua tanggapan yang pernah kamu berikan.</li>
                                    <li>Edit Profil: Mengubah informasi profil kamu.</li>
                                    <li>Share Profil: Membagikan profil kamu ke platform lain.</li>
                                </ul>
                            </li>
                            <li>
                                <p>Logout: Untuk keluar dari akun, klik ikon foto profil di navbar dan pilih "Logout".</p>
                            </li>
                        </ul>

                        <h4 id="pencarian-diskusi">Pencarian Diskusi</h4>
                        <p>Search: Gunakan fitur search di navbar untuk mencari diskusi berdasarkan kata kunci yang kamu
                            masukkan.</p>

                        <h4 id="kategori-diskusi">Kategori Diskusi</h4>
                        <p>Kategori: kamu dapat mengklik kategori tertentu untuk melihat daftar diskusi yang sedang
                            dibicarakan di kategori tersebut.</p>

                        <h4 id="halaman-utilitas">Halaman Utilitas</h4>
                        <ul>
                            <li>
                                <p>UI/UX Challenge: Menyediakan tantangan dan latihan untuk meningkatkan kemampuan UI/UX
                                    kamu.</p>
                            </li>
                            <li>
                                <p>Buku UI/UX: Rekomendasi buku-buku terbaik tentang UI/UX.</p>
                            </li>
                            <li>
                                <p>Podcasts: Daftar podcast yang membahas topik UI/UX.</p>
                            </li>
                            <li>
                                <p>Tentang Kami: Informasi mengenai tim dan misi dari Komunitas CeritaDesain.</p>
                            </li>
                            <li>
                                <p>Kontak: Cara untuk menghubungi kami jika kamu membutuhkan bantuan atau memiliki
                                    pertanyaan.</p>
                            </li>
                            <li>
                                <p>Bantuan: Membantu kamu dalam menggunakan CeritaDesain.</p>
                            </li>
                        </ul>

                        <h4 id="lainnya">Lainnya</h4>
                        <ul>
                            <li>
                                <p>Kebijakan Privasi: Informasi tentang bagaimana data kamu digunakan dan dilindungi.</p>
                            </li>
                            <li>
                                <p>Kode Etik: Panduan mengenai perilaku yang diharapkan dari setiap member komunitas.</p>
                            </li>
                            <li>
                                <p>Syarat dan Ketentuan: Aturan dan ketentuan penggunaan platform kami.</p>
                            </li>
                        </ul>
                    </div>
                    <p>Jika kamu memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi <a
                            href="{{ route('others.contact') }}" class="text-primary">kami</a>.
                        Selamat berdiskusi dan berbagi di Komunitas CeritaDesain!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
