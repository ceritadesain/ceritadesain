<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book = [
    [
        'judul' => 'Lean UX: Applying Lean Principles to Improve User Experience, written by Jeff Gothelf',
        'preview' => 'Buku ini membahas penerapan prinsip Lean dalam meningkatkan pengalaman pengguna dengan pendekatan yang praktis dan efektif.',
        'summary' => 'Lean UX menggabungkan konsep Lean dan UX untuk mempercepat proses pengembangan produk dengan fokus pada kebutuhan pengguna dan pengujian iteratif. Buku ini tidak hanya menyoroti teknik pengembangan produk yang responsif terhadap umpan balik pengguna, tetapi juga mempertimbangkan pentingnya kolaborasi tim lintas disiplin dan pendekatan yang adaptif terhadap perubahan. Gothelf menekankan betapa pentingnya untuk terus menerapkan pembelajaran dari pengguna dalam setiap iterasi produk, menciptakan lingkungan di mana inovasi dapat berkembang dengan cepat dan responsif terhadap pasar yang berubah dengan cepat.'
    ],
    [
        'judul' => 'The Politics of Design: A (Not So) Global Design Manual for Visual Communication" by Ruben Pater',
        'preview' => 'Buku ini mengeksplorasi aspek politik dalam desain komunikasi visual secara global, memberikan pandangan kritis tentang pengaruhnya dalam budaya dan sosial-politik.',
        'summary' => 'Ruben Pater menghadirkan panduan yang mengajak pembaca untuk mempertimbangkan implikasi politik dalam setiap keputusan desain yang diambil. Buku ini tidak hanya mengungkapkan bagaimana desain komunikasi visual dapat membentuk persepsi dan mempengaruhi opini publik, tetapi juga menyoroti tanggung jawab etis desainer dalam konteks global yang terhubung erat. Pater menelusuri bagaimana desain visual bisa menjadi alat kekuatan politik atau perlawanan, membangun pemahaman yang lebih dalam tentang kompleksitas hubungan antara desain dan kekuasaan politik dalam konteks yang semakin terhubung dan global ini.'
    ],
    [
        'judul' => 'Don\'t Make Me Think, Revisited: A Common Sense Approach to Web Usability" by Steve Krug',
        'preview' => 'Buku ini membahas prinsip-prinsip dasar dalam desain usability web dengan pendekatan yang praktis dan mudah dipahami.',
        'summary' => 'Steve Krug mengajarkan cara mendesain situs web yang intuitif dan efisien bagi pengguna dengan menghindari kerumitan yang tidak perlu. Dalam buku ini, Krug membawa pembaca melalui prinsip-prinsip dasar dari desain yang baik, menekankan pentingnya untuk membuat pengalaman pengguna sebaik mungkin dengan upaya minimal. Dia menguraikan strategi untuk menyusun informasi dan navigasi yang mudah dipahami serta teknik untuk pengujian usability yang efektif. Dengan bahasa yang jelas dan contoh yang jelas, Krug membantu pembaca memahami bagaimana membuat situs web yang tidak hanya dapat digunakan dengan mudah tetapi juga menyenangkan bagi pengguna.'
    ],
    [
        'judul' => 'The Design of Everyday Things" by Don Norman',
        'preview' => 'Buku ini membahas desain produk sehari-hari dari perspektif psikologi kognitif, menyoroti pentingnya keselarasan antara fungsi, estetika, dan interaksi pengguna.',
        'summary' => 'Don Norman menjelaskan prinsip dasar desain yang membuat produk menjadi lebih mudah digunakan dan lebih intuitif bagi pengguna sehari-hari. Dalam buku ini, Norman menggali bagaimana desain produk sehari-hari mempengaruhi interaksi kita dengan dunia di sekitar kita. Dia membahas konsep psikologi kognitif seperti model mental dan affordance, menunjukkan bagaimana desainer dapat menerapkan prinsip-prinsip ini untuk menciptakan produk yang lebih baik. Norman juga menyoroti pentingnya desain yang terhubung erat dengan pengguna, mendorong pembaca untuk mempertimbangkan pengalaman pengguna dari sudut pandang yang lebih holistik.'
    ],
    [
        'judul' => 'Seductive Interaction Design: Creating Playful, Fun, and Effective User Experiences" by Stephen P. Anderson',
        'preview' => 'Buku ini menggali konsep desain interaksi yang menggoda dan menyenangkan, dengan fokus pada menciptakan pengalaman pengguna yang efektif dan memikat.',
        'summary' => 'Stephen P. Anderson membahas strategi dan prinsip desain yang memanfaatkan aspek emosional dan psikologis untuk meningkatkan keterlibatan pengguna. Dalam buku ini, Anderson mengajak pembaca untuk menjelajahi bagaimana desain interaksi bisa menjadi lebih menarik dan memikat. Dia membahas tentang konsep-konsep seperti feedback emosional dan kebutuhan dasar manusia yang tidak terpenuhi, menunjukkan bagaimana desainer dapat memanfaatkan ini untuk menciptakan pengalaman yang lebih berkesan. Anderson juga memberikan studi kasus dan contoh praktis untuk mengilustrasikan aplikasi dari teori-teori ini dalam desain nyata.'
    ],
    [
        'judul' => 'UX for Lean Startups: Faster, Smarter User Experience Research and Design" by Laura Klein',
        'preview' => 'Buku ini membahas strategi dan metode riset serta desain pengalaman pengguna yang cerdas dan efektif untuk startup berbasis Lean.',
        'summary' => 'Laura Klein menawarkan panduan praktis untuk mengimplementasikan riset UX yang efisien dan iteratif dalam pengembangan produk startup. Dalam buku ini, Klein membahas betapa pentingnya untuk memahami kebutuhan dan keinginan pengguna sejak awal dalam pengembangan produk. Dia menguraikan metode-metode riset yang cepat dan efektif serta teknik desain yang adaptif untuk menghadapi tantangan-tantangan dalam lingkungan startup. Klein juga menekankan betapa krusialnya untuk terus menerapkan pembelajaran dari pengguna dalam setiap iterasi produk, menciptakan siklus pengembangan produk yang responsif dan efisien.'
    ]
];

        // Masukkan data ke dalam tabel 
        DB::table('books')->insert($book);
    }
}