# CeritaDesain

Repository ini berisi kode sumber untuk aplikasi **CeritaDesain**, sebuah platform forum online yang ramah, inklusif, dan membangun bagi para desainer UI/UX. Aplikasi ini mencakup pengembangan frontend dan backend dengan fokus pada pengalaman pengguna yang optimal serta fitur interaktif yang mendukung komunitas desain.

## Fitur Utama

- **Frontend**: Dibangun dengan teknologi web modern untuk memastikan tampilan yang responsif dan mudah digunakan.
- **Backend**: Berbasis framework **Laravel**, dilengkapi dengan sistem autentikasi, pengelolaan diskusi forum, dan manajemen pengguna.
- **Manajemen Pengguna**: Pendaftaran, login, dan pengelolaan profil pengguna.
- **Diskusi Forum**: Fitur untuk membuat postingan diskusi dan memberi tanggapan pada diskusi yang ada.
- **Media**: Pengelolaan gambar profil dan media pendukung lainnya.

## Struktur Proyek

- `frontend/`: Berisi kode untuk antarmuka pengguna (UI).
- `backend/`: Berisi kode untuk logika server, database, dan API.
- `migrations/`: Berisi migrasi database untuk memastikan struktur database selalu mutakhir.
- `controllers/`: Berisi logika untuk mengelola rute dan permintaan dari frontend.

## Teknologi yang Digunakan

- **Laravel**: Untuk backend dan API.
- **MySQL**: Database yang digunakan untuk menyimpan data pengguna, diskusi, dan lainnya.

## Cara Menggunakan

1. Clone repository ini:
   ```bash
   git clone https://github.com/username/ceritadesain.git
2. Install dependensi backend:
   ```bash
   cd backend
   composer install
4. Install dependensi frontend:
    ```bash
    cd frontend
    npm install
5. Jalankan migrasi database:
    ```bash
    php artisan migrate
6. Mulai aplikasi:
    Backend: php artisan serve
    Frontend: npm run dev

---
## Kontribusi <br>
Kami menyambut kontribusi dari siapa pun yang ingin membantu mengembangkan CeritaDesain. Silakan lakukan pull request atau diskusikan ide-ide baru melalui issues.
