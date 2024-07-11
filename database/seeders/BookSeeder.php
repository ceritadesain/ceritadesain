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
        'link' => 'https://www.tokopedia.com/sambernyowo/lean-ux-applying-lean-principles-to-improve-user-experience',
        'summary' => 'Buku "Lean UX" karya Jeff Gothelf menghadirkan pendekatan yang menggabungkan prinsip-prinsip Lean dan User Experience (UX) untuk mempercepat proses pengembangan produk. Konsep Lean dalam konteks ini tidak hanya mengacu pada efisiensi operasional, tetapi juga pada fokus yang kuat terhadap memahami dan memenuhi kebutuhan pengguna secara tepat. Gothelf mengilustrasikan bagaimana pendekatan ini memungkinkan tim untuk mengembangkan produk dengan responsif terhadap umpan balik pengguna lebih cepat daripada metode tradisional yang lebih lambat dan terpusat pada pengembangan berbasis spekulasi.

Selain menyoroti teknik pengembangan produk yang responsif, buku ini juga menekankan pentingnya kolaborasi tim lintas disiplin. Gothelf menyatakan bahwa ketika tim bekerja secara bersama-sama dari awal, mereka dapat menciptakan produk yang lebih baik dengan lebih efektif. Kolaborasi ini tidak hanya mencakup desainer dan pengembang, tetapi juga stakeholders bisnis, pengguna akhir, dan tim dukungan. Dengan demikian, Lean UX tidak hanya tentang merancang antarmuka pengguna yang baik, tetapi juga tentang menciptakan budaya kerja yang mendukung inovasi dan pertumbuhan kolektif.

Buku ini menegaskan pentingnya pendekatan adaptif terhadap perubahan dalam lingkungan bisnis yang cepat berubah. Gothelf mengajak pembaca untuk menerima kenyataan bahwa rencana awal sering kali berubah seiring dengan perubahan pasar dan kebutuhan pengguna. Dengan mengadopsi pendekatan Lean UX, tim dapat merespons perubahan ini dengan lebih fleksibel dan efisien, meminimalkan pemborosan dan memaksimalkan nilai yang diberikan kepada pengguna.

Lean UX juga menyoroti pentingnya untuk terus menerapkan pembelajaran dari pengguna dalam setiap iterasi produk. Gothelf menjelaskan bahwa hanya dengan menguji dan mengamati interaksi pengguna secara langsung, tim dapat mengidentifikasi apa yang benar-benar bermanfaat dan efektif bagi pengguna. Pendekatan ini tidak hanya mengurangi risiko pengembangan produk yang gagal, tetapi juga mempercepat siklus inovasi, memungkinkan perusahaan untuk merespons dan menanggapi umpan balik dengan lebih cepat.

Secara keseluruhan, "Lean UX" oleh Jeff Gothelf adalah panduan praktis bagi para profesional desain, pengembang, dan manajer produk untuk mengadopsi pendekatan yang lebih responsif dan adaptif terhadap pengembangan produk. Dengan menggabungkan prinsip-prinsip Lean dengan fokus yang kuat pada kebutuhan pengguna dan kolaborasi tim, buku ini menginspirasi pembaca untuk mengubah cara mereka memandang dan mengelola proses inovasi, menciptakan produk yang lebih relevan dan bermanfaat bagi pasar yang terus berubah.'
    ],
    [
        'judul' => 'The Politics of Design: A (Not So) Global Design Manual for Visual Communication by Ruben Pater',
        'preview' => 'Buku ini mengeksplorasi aspek politik dalam desain komunikasi visual secara global, memberikan pandangan kritis tentang pengaruhnya dalam budaya dan sosial-politik.',
         'link' => 'https://www.tokopedia.com/kerajaanbuku/the-politics-of-design-a-not-so-global-design-manual-for-visual-co?utm_source=google&utm_medium=organic&utm_campaign=pdp-seo',
        'summary' => 'Ruben Pater dalam bukunya mengajak pembaca untuk mempertimbangkan implikasi politik yang melekat dalam setiap keputusan desain yang diambil. Ia menyoroti bahwa desain komunikasi visual tidak hanya berperan sebagai alat untuk menyampaikan informasi, tetapi juga sebagai sarana yang dapat membentuk persepsi dan mempengaruhi opini publik secara signifikan. Dengan mengilustrasikan berbagai contoh dari dunia nyata, Pater mengungkap bagaimana desain dapat digunakan untuk memperkuat atau bahkan meruntuhkan narasi politik.

Buku ini juga menyoroti tanggung jawab etis desainer dalam konteks global yang terhubung erat. Pater mengeksplorasi dilema-dilema yang dihadapi oleh desainer dalam menghadapi proyek-proyek yang memiliki dampak sosial dan politik yang luas. Ia mengajak pembaca untuk mempertimbangkan implikasi jangka panjang dari setiap keputusan desain, serta bagaimana desain visual dapat menjadi instrumen kekuatan politik atau perlawanan terhadap ketidakadilan.

Pater mendalami bagaimana desain visual bukan hanya sekadar estetika, tetapi juga sebuah kekuatan yang dapat mengubah dan membentuk pandangan masyarakat terhadap isu-isu penting. Ia menguraikan bagaimana desain memainkan peran krusial dalam menyampaikan pesan politik, menggambarkan kompleksitas hubungan antara desain dan kekuasaan politik dalam era globalisasi yang semakin terhubung ini.

Melalui pendekatannya, Pater membawa pembaca untuk memahami bahwa setiap elemen visual yang dipilih, dari warna hingga tipografi, dapat memiliki konsekuensi yang luas dalam konteks politik. Ia memberikan landasan bagi pembaca untuk merenungkan dampak dari desain mereka terhadap masyarakat dan lingkungan politik, serta menantang desainer untuk bertindak secara bertanggung jawab dalam memilih dan mengembangkan proyek-proyek desain mereka. Keseluruhan, buku ini tidak hanya mengajarkan prinsip-prinsip desain visual, tetapi juga menghadirkan perspektif yang mendalam tentang peran etis dan politis dalam praktik desain kontemporer.'
    ],
    [
        'judul' => 'Don\'t Make Me Think, Revisited: A Common Sense Approach to Web Usability by Steve Krug',
        'preview' => 'Buku ini membahas prinsip-prinsip dasar dalam desain usability web dengan pendekatan yang praktis dan mudah dipahami.',
        'link'=>'https://www.tokopedia.com/bintang-book/don-t-make-me-think-revisited-a-common-sense-approach-to-web-usability-by-steve-krug',
        'summary' => 'Steve Krug dalam bukunya mengajarkan kepada pembaca cara mendesain situs web yang intuitif dan efisien bagi pengguna dengan menghindari kerumitan yang tidak perlu. Ia menekankan prinsip dasar dari desain yang baik, yaitu membuat pengalaman pengguna sebaik mungkin dengan usaha minimal. Krug menjelaskan betapa pentingnya menyusun informasi dan navigasi situs web secara intuitif, sehingga pengguna dapat dengan mudah menemukan apa yang mereka cari tanpa kehilangan arah.

Dalam bukunya, Krug tidak hanya menguraikan prinsip-prinsip tersebut, tetapi juga memberikan strategi konkret untuk menerapkannya. Ia menyoroti teknik-teknik untuk pengujian usability yang efektif, yang membantu desainer memastikan bahwa situs web yang mereka buat dapat diakses dan digunakan dengan lancar oleh pengguna. Pendekatan Krug ditampilkan dengan bahasa yang jelas dan contoh yang konkret, sehingga memudahkan pembaca untuk memahami konsep-konsep tersebut dan mengimplementasikannya dalam praktik.

Krug juga membawa pembaca melalui proses mendesain situs web dengan fokus pada pengalaman pengguna yang menyenangkan. Ia mengilustrasikan bagaimana dengan mengurangi kompleksitas dan menyederhanakan interaksi, desainer dapat menciptakan situs web yang tidak hanya fungsional tetapi juga meningkatkan kepuasan pengguna. Pendekatannya yang praktis dan langsung membuat bukunya menjadi sumber daya berharga bagi siapa pun yang ingin meningkatkan kualitas situs web mereka dalam hal usability dan pengalaman pengguna.'
    ],
    [
        'judul' => 'The Design of Everyday Things by Don Norman',
        'preview' => 'Buku ini membahas desain produk sehari-hari dari perspektif psikologi kognitif, menyoroti pentingnya keselarasan antara fungsi, estetika, dan interaksi pengguna.',
        'link'=> 'https://www.tokopedia.com/pustaka9/the-design-of-everyday-things-don-norman-english?extParam=ivf%3Dfalse&src=topads',
        'summary' => 'Don Norman dalam bukunya menguraikan prinsip dasar desain yang bertujuan membuat produk lebih mudah digunakan dan intuitif bagi pengguna sehari-hari. Ia menyoroti bagaimana desain produk sehari-hari mempengaruhi interaksi kita dengan lingkungan sekitar, menekankan pentingnya penggunaan psikologi kognitif dalam mendesain pengalaman pengguna yang lebih baik. Konsep seperti model mental dan affordance dipaparkannya sebagai fondasi utama untuk menciptakan produk yang dapat dengan mudah dipahami dan digunakan oleh pengguna.

Norman tidak hanya membahas teori-teori ini secara teoritis, tetapi juga mengilustrasikan dengan jelas bagaimana desainer dapat menerapkannya dalam praktik. Ia memberikan contoh konkret tentang bagaimana penggunaan model mental dalam desain antarmuka pengguna dapat mengurangi kesalahan pengguna dan meningkatkan kepuasan pengguna secara keseluruhan. Dengan demikian, bukunya tidak hanya menjadi panduan teoretis, tetapi juga praktis bagi para desainer untuk menghasilkan produk yang lebih intuitif dan menyenangkan digunakan.

Selain itu, Norman menekankan pentingnya desain yang terhubung erat dengan pengguna. Ia mendorong pembaca untuk mempertimbangkan pengalaman pengguna dari sudut pandang yang lebih holistik, bukan hanya sebagai sekumpulan fitur atau tata letak yang terpisah. Dengan mengaitkan pengalaman pengguna dengan kebutuhan dan harapan pengguna sehari-hari, desainer dapat menciptakan produk yang tidak hanya fungsional, tetapi juga memberikan nilai tambah yang signifikan dalam kehidupan sehari-hari pengguna.

Secara keseluruhan, buku Don Norman ini mengajak pembaca untuk merenungkan bagaimana desain mempengaruhi cara kita berinteraksi dengan dunia sekitar. Dengan mendalaminya, pembaca dapat memperoleh pemahaman yang lebih baik tentang prinsip-prinsip desain yang dapat meningkatkan kualitas hidup melalui produk yang lebih mudah digunakan, intuitif, dan terhubung secara emosional dengan pengguna.'
    ],
    [
        'judul' => 'Seductive Interaction Design: Creating Playful, Fun, and Effective User Experiences by Stephen P. Anderson',
        'preview' => 'Buku ini menggali konsep desain interaksi yang menggoda dan menyenangkan, dengan fokus pada menciptakan pengalaman pengguna yang efektif dan memikat.',
        'link' => 'https://www.tokopedia.com/afantaofficial2/seductive-interaction-design',
        'summary' => 'Stephen P. Anderson dalam bukunya menggambarkan dengan mendalam tentang bagaimana desain dapat memanfaatkan aspek emosional dan psikologis untuk meningkatkan keterlibatan pengguna. Ia menyoroti pentingnya memahami bagaimana pengguna merespons visual dan interaksi secara emosional, yang dapat mempengaruhi pengalaman pengguna secara signifikan. Dengan memanfaatkan konsep feedback emosional, Anderson mengajak pembaca untuk menggali cara-cara untuk menghadirkan respons yang lebih dalam dan bermakna dari pengguna terhadap produk atau layanan.

Anderson juga membahas tentang kebutuhan dasar manusia yang tidak terpenuhi sebagai landasan penting dalam desain interaksi yang efektif. Ia menjelaskan bahwa dengan memahami dan memenuhi kebutuhan ini, desainer dapat menciptakan pengalaman yang lebih memuaskan dan relevan bagi pengguna. Konsep ini membuka peluang untuk mengintegrasikan elemen-elemen yang lebih emosional dan personal dalam desain, meningkatkan daya tarik dan keterlibatan pengguna secara keseluruhan.

Dalam bukunya, Anderson tidak hanya berbicara tentang teori-teori desain, tetapi juga memberikan studi kasus konkret dan contoh praktis. Hal ini membantu pembaca untuk lebih memahami bagaimana teori-teori ini dapat diaplikasikan dalam situasi nyata, memperkuat pemahaman akan dampak dan potensi strategi-strategi yang diusungnya dalam menciptakan pengalaman pengguna yang berkesan dan memikat.

Melalui pendekatannya yang mendalam terhadap desain interaksi, Anderson memberikan pandangan baru tentang bagaimana desainer dapat merancang pengalaman yang lebih manusiawi dan relevan. Ia menunjukkan bahwa dengan mempertimbangkan aspek-aspek psikologis dan emosional ini secara lebih mendalam, desainer dapat menghasilkan produk atau layanan yang tidak hanya fungsional, tetapi juga mampu menginspirasi dan membangkitkan interaksi yang berarti antara pengguna dengan produk yang mereka gunakan.

Secara keseluruhan, buku ini merupakan panduan komprehensif bagi para desainer untuk menjelajahi dan menerapkan strategi-strategi inovatif dalam desain interaksi. Dengan mengilustrasikan pentingnya feedback emosional, pemenuhan kebutuhan dasar, dan contoh praktis yang menginspirasi, Anderson mengajak pembaca untuk memperluas pandangan mereka tentang bagaimana desain dapat menjadi alat yang kuat dalam menciptakan pengalaman pengguna yang mendalam dan bermakna.'
    ],
    [
        'judul' => 'UX for Lean Startups: Faster, Smarter User Experience Research and Design by Laura Klein',
        'preview' => 'Buku ini membahas strategi dan metode riset serta desain pengalaman pengguna yang cerdas dan efektif untuk startup berbasis Lean.',
        'link'=>'https://www.tokopedia.com/baokbooks/ux-for-lean-startups-laura-klein',
        'summary' => '"UX for Lean Startups: Faster, Smarter User Experience Research and Design" by Laura Klein adalah panduan praktis yang menunjukkan bagaimana pengalaman pengguna (UX) dapat diintegrasikan dengan pendekatan Lean dalam pengembangan startup. Buku ini menekankan pentingnya melakukan riset pengguna yang cerdas dan efisien untuk memvalidasi ide-ide produk sejak dini. Klein menjelaskan bahwa dengan menerapkan metodologi Lean, startup dapat mengidentifikasi masalah yang nyata dan kebutuhan pengguna dengan cepat, serta menguji hipotesis mereka secara langsung dengan audiens target.

Pendekatan yang diusung Klein tidak hanya membahas tentang bagaimana mengumpulkan data dari pengguna, tetapi juga bagaimana menerjemahkan data tersebut menjadi keputusan desain yang tepat. Ia menyoroti pentingnya iterasi cepat dan terus-menerus dalam pengembangan produk, di mana setiap iterasi didorong oleh pembelajaran yang diperoleh dari pengguna sebelumnya. Buku ini juga menawarkan teknik-teknik praktis untuk melakukan penelitian pengguna dengan anggaran yang terbatas, termasuk wawancara, observasi, dan pengujian prototipe.

Selain itu, Klein membahas tentang integrasi UX dengan proses pengembangan Agile dan Lean Startup. Ia menjelaskan bagaimana penggunaan sprint, retrospektif, dan stand-up meeting dalam Agile dapat digabungkan dengan metodologi Lean untuk menciptakan lingkungan pengembangan yang responsif dan adaptif. Pendekatan ini memungkinkan tim untuk menghasilkan perubahan yang cepat berdasarkan umpan balik pengguna, sambil tetap mempertahankan fokus pada pengurangan pemborosan dan efisiensi.

Buku ini juga mengilustrasikan studi kasus dan contoh nyata dari berbagai startup, menunjukkan bagaimana prinsip-prinsip UX dan Lean diterapkan dalam situasi dunia nyata. Klein memberikan insight berharga tentang bagaimana startup dapat memanfaatkan riset pengguna untuk meminimalkan risiko dan mengidentifikasi peluang pasar yang baru. Dengan bahasa yang jelas dan pendekatan yang praktis, buku ini menjadi sumber daya yang berharga bagi para pengusaha, desainer, dan pengembang yang ingin mengembangkan produk dengan cara yang responsif terhadap kebutuhan pengguna dan pasar yang cepat berubah.'
    ]
];

        // Masukkan data ke dalam tabel 
        DB::table('books')->insert($book);
    }
}