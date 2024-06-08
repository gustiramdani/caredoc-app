<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IllnessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = "INSERT INTO `illnesses` (`id`, `name`, `reason`, `symptom`, `treatment`, `description`, `image_name`)
        VALUES
        (1, 'Diare', 'Intoleransi terhadap makanan, seperti laktosa dan fruktosa. Alergi makanan. Efek samping dari
        obat-obatan tertentu. Infeksi bakteri, virus, atau parasit.', 'Perut kembung atau kram, Feses lembek dan cair,
        Rasa mulas, Sakit perut', 'Minum banyak cairan.Makan makanan sehat rendah serat.Mengonsumsi minuman suplemen
        probiotik.Hindari makanan yang membuat diare makin parah.Minum teh chamomile.Makan dalam porsi kecil.Minum obat
        diare', 'Diare merupakan kondisi ketika pengidapan melakukan BAB lebih sering dari biasanya. ', null),
        (2, 'Flu', 'Infeksi virus influenza yang dapat menular secara mudah, orang yang mudah terserang flu biasanya
        yang memiliki sistem imun yang lemah.', 'batuk berdahak atau kering, dehidrasi, demam, kelelahan , panas dingin,
        pilek , sakit kepala', 'Istirahat yang cukup.Banyak minum.Menjaga tubuh agar tetap hangat.Mengkonsumsi obat
        penurun demam', 'Flu merupakan penyakit yang disebabkan oleh infeksi virus influenza, penyakit ini mudah
        menular.', null),
        (3, 'Bronkitis', ' Bronkitis umumnya disebabkan oleh adanya infeksi virus yang juga menjadi penyebab seseorang
        terkena gangguan ISPA. Salah satu virus yang menyebabkan bronchitis adalah virus flu. Virus ini bisa menular
        dari percikan air liur seseorang yang terkena penyakit ini.', ' Batuk berdahak atau kering atau kronis,
        Kelelahan atau malaise, pilek, napas pendek, sakit kepala, sakit tenggorokan atau tekanan dada', ' Minum air
        putih sebanyak 8-12 gelas perhari. Menghirup uap air panas. Istirahat yang cukup. Menghindari asap rokok.
        Menggunakan masker ketika melakukan aktivitas di luar rumah supaya tidak terpapar ketika terpapar udara dingin',
        'Bronkitis adalah peradangan yang terjadi pada saluran pernafasan atau bronkus.', null),
        (4, 'Anemia (kurang darah)', 'kekurangan zat besi.', ' Perasaan tidak enak badan, Sakit kepala, Gangguan
        konsentrasi berpikir', 'Mengasup suplemen yang mengandung vitamin dan mineral terutama zat besi asam folat dan
        dianjurkan untuk transfusi darah apabila kondisi kurang darah yang berat', 'Anemia adalah kondisi ketika tubuh
        kekurangan sel darah merah tidak berfungsi dengan baik.', null),
        (5, 'Alergi Makanan', 'Efek samping dari obatt-obatan tertentu,\r\nInfeksi bakteri,\r\nRadang pada saluran
        pencernaan.', 'Gejala alergi pada tiap orang berbeda-beda ada yang ringan dan berat, Gejal bisa berupa
        bersin-bersin, Hidung berair, Mata memerah, Gatal', 'Untuk meredakan gejala alergi konsumsi lah obat antialergi
        yang disarankan oleh dokter', 'Alergi makanan adalah reaksi alergi yang muncul setelah mengonsumsi makanan
        tertentu.', null),
        (6, 'Jantung', ' Penyumbatan Peradangan.Kerusakan pada jantung dan pembuluh darah.Suplai oksigen dan nutrisi di
        otot dan jaringan di sekitar jantung berkurang', ' Nyeri dada,Sesak napas,Aliran darah terhambat', '
        Memperbanyak konsumsi lemak tak jenuh dan serat. Menghilangkan lemak menumpuk di perut dan bagian tubuh lainnya.
        Mengobati diabetes dan hipertensi. Berolahraga secara teratur. Tidak merokok. Menghindari minuman berakohol',
        'Kondisi ketika mengalami gangguan pada jantung', null),
        (7, 'Insomnia', 'Stres, Depresi, Gaya hidup tidak sehat, Pengaruh obat-obatan tertentu', 'Sulit tidur atau tidur
        tidak nyenyak, akibat insomni biasanya mudah marah dan depresi, Gejala itu dapat memicu mengantk pada siang
        hari, Mudah lelah saat aktivitas, Sulit fokus dalam beraktivitas', 'Hindari banyak makan dan minum sebelum
        tidur, Usahakan aktif disiang hari agar terhindar dari tidur siang', 'Insomnia adalah gangguan tidur yang
        membuat orang sulit tidur.', null),
        (8, 'Cacar Air', 'Disebabkan oleh virus cacar ', 'Munculnya bintik kemerahan berisi cairan dan terasa gatal
        bintik cacar biasanya akan timbul pada wajah punggung kulit kepala dada perut lengan dan kaki', ' Cacar air
        dapat sembuh dengan sendirinya', 'Cacar air merupakan infeksi yang disebabkan oleh virus VAricella zoster.',
        null),
        (9, 'Sakit Mata', ' Iritasi.Infeksi.Cedera.Peradangan pada mata,Peningkatan tekanan bola mata', ' Mata merah,
        Mata Bengkak, Terasa nyeri dan gatal', ' Kompres kantung mata. Tetes air garam steril atau larutan saline.
        Kompres hangat. Kompres dingin. Hindari kebiasaan meguce-ngucek mata', 'Sakit mata merupakan gangguan
        penglihatan yang cukup sering sering terjadi dimasyarakat.', null),
        (10, 'Sakit Pinggang', ' Cedera otot dan sendi di daerah pinggang. Akibat mengangkat benda yang berat. Melakukan
        gerakan yang berulang-ulang', ' Pinggang pegal,kaku,nyeri menjalar pada pinggang,sulit untuk bergerak dan
        berdiri tegak karena nyeri di pinggang,tungkai terasa lemah atau mati rasa', 'Tetap beraktivitas. Kompres dingin
        atau hangat. Minum obat pereda nyeri, pelemas pinggang yang nyeri', 'Sakit pinggang merupakan gejala yang timbul
        terus-menerus di bagian pinggang.', null),
        (11, 'Nyeri Haid (Dismenore)', ' Otot pada rahim berkontraksi.pasokan oksigen ke rahim berkurang sehingga timbul
        rasa nyeri', ' Kram dibagian perut,menstruasi tidak lancar,rasa sakit dan mulas pada saat menstruasi
        berlebihan', ' Memijat dan mengompres hangat area perut yang sakit. Berolahraga ringan. Melakukan
        relaksasi,mandi air hangat. Mengkonsumsi sumplemen yang mengandung vitamin E, B6, omega 3 dan magnesium',
        'Dismenore keluhan yang terjadi pada wanita yang sedang menstruasi.', null),
        (12, 'Diabetes', 'Kelebihan berat badan.Kelahiran prematur.', 'Sering merasa haus,Sering buang air kecil
        terutama di malam hari,Pandangan kabur,Sering mengalami infeksi misalnya gusi kulit vagina atau saluran kemis,',
        'Mengatur frekuensi dan menu makanan harus lebih sehat.Menjaga berat badan.Rajin berolahraga.Rutin menjalani
        pengeckan gula darah setidaknya sekali dalam setahun', 'Diabetes adalah penyakit kronis yang ditandai dengan
        tingginya kadar gula darah.', null),
        (13, 'TBC (Tuberkulosis)', ' Diakibatkan kuman Mycobacterium tuberculosis', ' Batuk yang berlangsung lama (lebih
        dari 3 minggu) biasanya berdahak dan terkadang mengeluarkan darah, Berat badan turun, Tidak nafsu makan, Nyeri
        dada', ' TBC dapat disembuhkan jika penderita patuh mengomsumsi obat sesaui drngan resep dokter. Untuk mengatasi
        penyakit ini penderita perlu minum bebrapa jenis obat untuk waktu yang cukup lama (minimal 6 bulan)', 'TBC
        adalah penyakit paru-paru yang diakibatkan kuman Mycobacterium tuberculosis', null),
        (14, 'ISPA', ' Penyebab ISPA adalah infeksi virus atau bakteri pada sakuran pernafasan walaupun lebih sering
        disebabkan ileh virus atau bakteri penyakit ISPA ', 'Infeksi saluran pernafasan yang menimbulkan batuk pilek
        disertai demam yang mudah menular dan dapat dialami oleh siapa saja terutama anak-anak dan lansia, Penderita
        sulit bernafas, Muntah-Muntah, Muncul suara bengek saat menghembuskan nafas', 'Memperbanyak istirahat dan
        konsumsi air putih untuk menencerkan dahak.Berkumur dengan air hangat.Memposisikan kepala lebih tinggi ketka
        tidur.Mengonsumsi minuman lemon hangat atau madu untuk meredakan batuk', 'ISPA adalah infeksi saluran pernafasan
        yang sangat mudah menular dan dapat dialami oleh siapa saja.', null),
        (16, 'Angina', 'Angin duduk terjadi ketika pembuluh darah jantung (koroner) mengalami penyempitan suplai oksigen
        untuk otot jantung.', ' Nyeri dada seperti ditindih, Keringan dingin, Sesak nafas', 'Angin duduk dapat ditangani
        dengan pengobatan dari dokter serta dengan menjalani pola hidup sehat. Jika ditangani dengan baik penderita
        angin duduk dapat terhindar dari kompilasi yang serius', 'Adalah nyeri dada yang muncul akibat adanya gangguan
        aliran darah ke jaringan otot jantung', null),
        (21, 'Tester', 'Tester', 'Tester', 'Tester', 'Tester', null)";

        DB::unprepared($query);
    }
}
