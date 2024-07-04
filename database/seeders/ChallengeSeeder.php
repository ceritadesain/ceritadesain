<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $challenge = [
            [
                'judul' => 'Optimalkan UI Aplikasi CeritaDesain',
                'preview' => 'Optimalkan UI Aplikasi CeritaDesain bertujuan untuk meningkatkan kesan visual, aksesibilitas, dan keseluruhan pengalaman pengguna aplikasi. ',
                'gambar' => 'assets/images/ceritadesain-header.png',
                'deskripsi' => 'Scenario
Anda adalah seorang UI/UX designer untuk CeritaDesain, sebuah platform forum untuk para desainer UI/UX. Tim Anda ingin meningkatkan antarmuka pengguna (UI) aplikasi CeritaDesain dengan fokus pada desain visual, aksesibilitas, dan pengalaman pengguna secara keseluruhan.

Task
Lakukan evaluasi heuristik terhadap aplikasi CeritaDesain untuk mengidentifikasi masalah UI dan area perbaikan.

Step 1: Familiarize Yourself with CeritaDesain App

Telusuri aplikasi CeritaDesain untuk memahami tata letak, desain, dan fitur-fiturnya.

Step 2: Review Heuristic Evaluation Principles

Ulas prinsip-prinsip kegunaan kunci dan heuristik, seperti 10 Heuristik Kegunaan untuk Desain Antarmuka Pengguna oleh Jakob Nielsen.

Step 3: Prepare the Heuristic Evaluation

Buat daftar periksa dari heuristik dan prinsip kegunaan yang akan dievaluasi.

Rekrut 3 hingga 5 rekan atau profesional UX dengan latar belakang yang beragam untuk berpartisipasi dalam evaluasi.

Step 4: Conduct the Heuristic Evaluation

Beri peserta instruksi yang jelas, termasuk tujuan evaluasi, heuristik, dan area aplikasi CeritaDesain yang harus dievaluasi.

Minta peserta untuk menjelajahi aplikasi CeritaDesain, mengidentifikasi masalah UI atau pelanggaran terhadap heuristik dan prinsip kegunaan.

Mendorong peserta untuk mendokumentasikan temuan mereka, termasuk tangkapan layar, catatan, dan penilaian tingkat keparahan untuk setiap isu.

Step 5: Analyze the Data

Kumpulkan evaluasi yang telah selesai dan analisis data, mengidentifikasi pola dan tren dalam masalah UI dan area perbaikan.

Prioritaskan masalah yang diidentifikasi berdasarkan dampaknya terhadap pengalaman pengguna dan kelayakan untuk menanganinya.

Step 6: Present the Findings and Recommendations

Ringkas temuan dalam sebuah presentasi, termasuk pengantar, metodologi, profil peserta, wawasan utama, dan rekomendasi untuk meningkatkan UI aplikasi CeritaDesain.

Sertakan bantuan visual, seperti tangkapan layar, diagram, dan kutipan dari peserta untuk mengilustrasikan masalah dan perbaikan yang diusulkan.

Bagikan presentasi dengan tim Anda dan diskusikan implikasi untuk meningkatkan UI dan pengalaman pengguna untuk aplikasi CeritaDesain.'
            ],
            [
                'judul' => 'Perbaiki Antarmuka Pengguna Aplikasi Belanja Online',
                'preview' => 'Perbaiki Antarmuka Pengguna Aplikasi Belanja Online bertujuan untuk meningkatkan pengalaman pengguna melalui desain visual yang menarik, kemudahan penggunaan, dan responsivitas yang baik. ',
                'gambar' => 'assets/images/sale.png',
                'deskripsi' => 'Scenario
Anda bekerja sebagai desainer UI/UX di sebuah perusahaan e-commerce terkemuka. Tim Anda ingin meningkatkan antarmuka pengguna (UI) dari aplikasi belanja online perusahaan dengan fokus pada desain visual, kemudahan penggunaan, dan responsivitas.

Task
Lakukan evaluasi heuristik terhadap aplikasi belanja online perusahaan untuk mengidentifikasi masalah UI dan area perbaikan.

Step 1: Kenali Aplikasi Belanja Online

Telusuri aplikasi belanja online perusahaan untuk memahami tata letak, desain, dan fungsionalitasnya.

Step 2: Tinjau Prinsip Evaluasi Heuristik

Pelajari prinsip-prinsip kegunaan utama dan heuristik evaluasi, seperti Heuristik Kegunaan Jakob Nielsen untuk Desain Antarmuka Pengguna.

Step 3: Persiapkan Evaluasi Heuristik

Buat daftar periksa untuk heuristik dan prinsip kegunaan yang akan dievaluasi.

Undang 3 hingga 5 rekan atau profesional UX dengan berbagai latar belakang untuk berpartisipasi dalam evaluasi.

Step 4: Lakukan Evaluasi Heuristik

Beri peserta instruksi yang jelas, termasuk tujuan evaluasi, heuristik, dan bagian-bagian aplikasi belanja online yang harus dievaluasi.

Minta peserta untuk menjelajahi aplikasi belanja online, mengidentifikasi masalah UI atau pelanggaran terhadap heuristik dan prinsip kegunaan.

Mendorong peserta untuk mendokumentasikan temuan mereka, termasuk tangkapan layar, catatan, dan penilaian tingkat keparahan untuk setiap masalah.

Step 5: Analisis Data

Kumpulkan evaluasi yang telah selesai dan analisis data, mengidentifikasi pola dan tren dalam masalah UI serta area perbaikan.

Prioritaskan masalah yang diidentifikasi berdasarkan dampaknya terhadap pengalaman pengguna dan kelayakan untuk ditangani.

Step 6: Presentasikan Temuan dan Rekomendasi

Ringkas temuan dalam presentasi, termasuk pengantar, metodologi, profil peserta, wawasan utama, dan rekomendasi untuk meningkatkan UI aplikasi belanja online perusahaan.

Sertakan bantuan visual, seperti tangkapan layar, diagram, dan kutipan dari peserta untuk mengilustrasikan masalah dan usulan perbaikan.

Bagikan presentasi dengan tim Anda dan diskusikan implikasi untuk meningkatkan UI dan pengalaman pengguna untuk aplikasi belanja online perusahaan.
'
            ],
            [
                'judul' => 'Optimalkan Antarmuka Pengguna Platform Pembelajaran Online',
                'preview' => 'Optimalkan Antarmuka Pengguna Platform Pembelajaran Online bertujuan untuk meningkatkan desain visual, kemudahan penggunaan, dan responsivitas dari platform tersebut. ',
                'gambar' => 'assets/images/learning.png',
                'deskripsi' => 'Scenario
Anda bekerja sebagai desainer UI/UX di sebuah perusahaan teknologi pendidikan terkemuka. Tim Anda bertujuan untuk meningkatkan antarmuka pengguna (UI) dari platform pembelajaran online perusahaan dengan fokus pada desain visual, kemudahan penggunaan, dan responsivitas.

Task
Lakukan evaluasi heuristik terhadap platform pembelajaran online perusahaan untuk mengidentifikasi masalah UI dan area perbaikan.

Step 1: Kenali Platform Pembelajaran Online

Telusuri platform pembelajaran online perusahaan untuk memahami tata letak, desain, dan fungsionalitasnya.

Step 2: Tinjau Prinsip Evaluasi Heuristik

Pelajari prinsip-prinsip kegunaan utama dan heuristik evaluasi, seperti Heuristik Kegunaan Jakob Nielsen untuk Desain Antarmuka Pengguna.

Step 3: Persiapkan Evaluasi Heuristik

Buat daftar periksa untuk heuristik dan prinsip kegunaan yang akan dievaluasi.

Undang 3 hingga 5 rekan atau profesional UX dengan berbagai latar belakang untuk berpartisipasi dalam evaluasi.

Step 4: Lakukan Evaluasi Heuristik

Beri peserta instruksi yang jelas, termasuk tujuan evaluasi, heuristik, dan bagian-bagian platform pembelajaran online yang harus dievaluasi.

Minta peserta untuk menjelajahi platform pembelajaran online, mengidentifikasi masalah UI atau pelanggaran terhadap heuristik dan prinsip kegunaan.

Mendorong peserta untuk mendokumentasikan temuan mereka, termasuk tangkapan layar, catatan, dan penilaian tingkat keparahan untuk setiap masalah.

Step 5: Analisis Data

Kumpulkan evaluasi yang telah selesai dan analisis data, mengidentifikasi pola dan tren dalam masalah UI serta area perbaikan.

Prioritaskan masalah yang diidentifikasi berdasarkan dampaknya terhadap pengalaman pengguna dan kelayakan untuk ditangani.

Step 6: Presentasikan Temuan dan Rekomendasi

Ringkas temuan dalam presentasi, termasuk pengantar, metodologi, profil peserta, wawasan utama, dan rekomendasi untuk meningkatkan UI platform pembelajaran online perusahaan.

Sertakan bantuan visual, seperti tangkapan layar, diagram, dan kutipan dari peserta untuk mengilustrasikan masalah dan usulan perbaikan.

Bagikan presentasi dengan tim Anda dan diskusikan implikasi untuk meningkatkan UI dan pengalaman pengguna untuk platform pembelajaran online perusahaan.'
            ],
            [
                'judul' => 'Desain Antarmuka Pengguna untuk Platform Crypto Trading',
                'preview' => 'Desain Antarmuka Pengguna untuk Platform Crypto Trading bertujuan untuk menciptakan pengalaman pengguna yang intuitif dan aman dalam perdagangan kripto. ',
                'gambar' => 'assets/images/crypto.png',
                'deskripsi' => 'Scenario
Anda bekerja sebagai desainer UI/UX di sebuah platform perdagangan crypto yang berkembang pesat. Tim Anda ingin mengembangkan antarmuka pengguna (UI) dari platform crypto trading dengan fokus pada desain visual yang intuitif, keamanan, dan pengalaman pengguna yang ditingkatkan.

Task
Lakukan evaluasi heuristik terhadap platform crypto trading untuk mengidentifikasi masalah UI dan area perbaikan.

Step 1: Kenali Platform Crypto Trading

Telusuri platform crypto trading untuk memahami tata letak, desain, dan fungsionalitasnya.

Step 2: Tinjau Prinsip Evaluasi Heuristik

Pelajari prinsip-prinsip kegunaan utama dan heuristik evaluasi, seperti Heuristik Kegunaan Jakob Nielsen untuk Desain Antarmuka Pengguna.

Step 3: Persiapkan Evaluasi Heuristik

Buat daftar periksa untuk heuristik dan prinsip kegunaan yang akan dievaluasi.

Undang 3 hingga 5 rekan atau profesional UX dengan berbagai latar belakang untuk berpartisipasi dalam evaluasi.

Step 4: Lakukan Evaluasi Heuristik

Beri peserta instruksi yang jelas, termasuk tujuan evaluasi, heuristik, dan bagian-bagian platform crypto trading yang harus dievaluasi.

Minta peserta untuk menjelajahi platform crypto trading, mengidentifikasi masalah UI atau pelanggaran terhadap heuristik dan prinsip kegunaan.

Mendorong peserta untuk mendokumentasikan temuan mereka, termasuk tangkapan layar, catatan, dan penilaian tingkat keparahan untuk setiap masalah.

Step 5: Analisis Data

Kumpulkan evaluasi yang telah selesai dan analisis data, mengidentifikasi pola dan tren dalam masalah UI serta area perbaikan.

Prioritaskan masalah yang diidentifikasi berdasarkan dampaknya terhadap pengalaman pengguna dan kelayakan untuk ditangani.

Step 6: Presentasikan Temuan dan Rekomendasi

Ringkas temuan dalam presentasi, termasuk pengantar, metodologi, profil peserta, wawasan utama, dan rekomendasi untuk meningkatkan UI platform crypto trading.

Sertakan bantuan visual, seperti tangkapan layar, diagram, dan kutipan dari peserta untuk mengilustrasikan masalah dan usulan perbaikan.

Bagikan presentasi dengan tim Anda dan diskusikan implikasi untuk meningkatkan UI dan pengalaman pengguna untuk platform crypto trading.'
            ],
            [
                'judul' => 'Perbaiki Antarmuka Pengguna Aplikasi Keuangan',
                'preview' => 'Perbaiki Antarmuka Pengguna Aplikasi Keuangan bertujuan untuk mengoptimalkan pengalaman pengguna dalam menggunakan aplikasi keuangan perusahaan. ',
                 'gambar' => 'assets/images/money.png',
                'deskripsi' => 'Scenario
Anda bekerja sebagai desainer UI/UX di sebuah perusahaan teknologi keuangan yang terkemuka. Tim Anda ingin meningkatkan antarmuka pengguna (UI) dari aplikasi keuangan perusahaan dengan fokus pada desain visual yang menarik, keamanan, dan kemudahan penggunaan.

Task
Lakukan evaluasi heuristik terhadap aplikasi keuangan untuk mengidentifikasi masalah UI dan area perbaikan.

Step 1: Kenali Aplikasi Keuangan

Telusuri aplikasi keuangan perusahaan untuk memahami tata letak, desain, dan fungsionalitasnya.

Step 2: Tinjau Prinsip Evaluasi Heuristik

Pelajari prinsip-prinsip kegunaan utama dan heuristik evaluasi, seperti Heuristik Kegunaan Jakob Nielsen untuk Desain Antarmuka Pengguna.

Step 3: Persiapkan Evaluasi Heuristik

Buat daftar periksa untuk heuristik dan prinsip kegunaan yang akan dievaluasi.

Undang 3 hingga 5 rekan atau profesional UX dengan berbagai latar belakang untuk berpartisipasi dalam evaluasi.

Step 4: Lakukan Evaluasi Heuristik

Beri peserta instruksi yang jelas, termasuk tujuan evaluasi, heuristik, dan bagian-bagian aplikasi keuangan yang harus dievaluasi.

Minta peserta untuk menjelajahi aplikasi keuangan, mengidentifikasi masalah UI atau pelanggaran terhadap heuristik dan prinsip kegunaan.

Mendorong peserta untuk mendokumentasikan temuan mereka, termasuk tangkapan layar, catatan, dan penilaian tingkat keparahan untuk setiap masalah.

Step 5: Analisis Data

Kumpulkan evaluasi yang telah selesai dan analisis data, mengidentifikasi pola dan tren dalam masalah UI serta area perbaikan.

Prioritaskan masalah yang diidentifikasi berdasarkan dampaknya terhadap pengalaman pengguna dan kelayakan untuk ditangani.

Step 6: Presentasikan Temuan dan Rekomendasi

Ringkas temuan dalam presentasi, termasuk pengantar, metodologi, profil peserta, wawasan utama, dan rekomendasi untuk meningkatkan UI aplikasi keuangan perusahaan.

Sertakan bantuan visual, seperti tangkapan layar, diagram, dan kutipan dari peserta untuk mengilustrasikan masalah dan usulan perbaikan.

Bagikan presentasi dengan tim Anda dan diskusikan implikasi untuk meningkatkan UI dan pengalaman pengguna untuk aplikasi keuangan perusahaan.'
            ],
            [
                'judul' => 'Desain Pengalaman Pengguna untuk Aplikasi Kuliner',
                'preview' => 'Desain Pengalaman Pengguna untuk Aplikasi Kuliner bertujuan untuk menciptakan pengalaman interaktif yang intuitif dan memikat bagi pengguna saat mereka menjelajahi aplikasi kuliner. ',
                 'gambar' => 'assets/images/culinary.png',
                'deskripsi' => 'Scenario
Anda bekerja sebagai desainer UI/UX di sebuah startup aplikasi kuliner. Tim Anda ingin mengembangkan pengalaman pengguna (UI/UX) dari aplikasi untuk memastikan desain yang menarik, kemudahan navigasi, dan responsivitas yang baik.

Task
Lakukan evaluasi heuristik terhadap aplikasi kuliner untuk mengidentifikasi masalah UI dan area perbaikan.

Step 1: Kenali Aplikasi Kuliner

Telusuri aplikasi kuliner untuk memahami tata letak, desain, dan fungsionalitasnya.

Step 2: Tinjau Prinsip Evaluasi Heuristik

Pelajari prinsip-prinsip kegunaan utama dan heuristik evaluasi, seperti Heuristik Kegunaan Jakob Nielsen untuk Desain Antarmuka Pengguna.

Step 3: Persiapkan Evaluasi Heuristik

Buat daftar periksa untuk heuristik dan prinsip kegunaan yang akan dievaluasi.

Undang 3 hingga 5 rekan atau profesional UX dengan berbagai latar belakang untuk berpartisipasi dalam evaluasi.

Step 4: Lakukan Evaluasi Heuristik

Beri peserta instruksi yang jelas, termasuk tujuan evaluasi, heuristik, dan bagian-bagian aplikasi kuliner yang harus dievaluasi.

Minta peserta untuk menjelajahi aplikasi kuliner, mengidentifikasi masalah UI atau pelanggaran terhadap heuristik dan prinsip kegunaan.

Mendorong peserta untuk mendokumentasikan temuan mereka, termasuk tangkapan layar, catatan, dan penilaian tingkat keparahan untuk setiap masalah.

Step 5: Analisis Data

Kumpulkan evaluasi yang telah selesai dan analisis data, mengidentifikasi pola dan tren dalam masalah UI serta area perbaikan.

Prioritaskan masalah yang diidentifikasi berdasarkan dampaknya terhadap pengalaman pengguna dan kelayakan untuk ditangani.

Step 6: Presentasikan Temuan dan Rekomendasi

Ringkas temuan dalam presentasi, termasuk pengantar, metodologi, profil peserta, wawasan utama, dan rekomendasi untuk meningkatkan UI aplikasi kuliner.

Sertakan bantuan visual, seperti tangkapan layar, diagram, dan kutipan dari peserta untuk mengilustrasikan masalah dan usulan perbaikan.

Bagikan presentasi dengan tim Anda dan diskusikan implikasi untuk meningkatkan UI dan pengalaman pengguna untuk aplikasi kuliner.'
            ],
        ];

        // Masukkan data ke dalam tabel 'kompetisis'
        DB::table('challenges')->insert($challenge);
    }
}