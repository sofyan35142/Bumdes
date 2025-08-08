<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kegiatanseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kegiatans')->insert([
            [
                'Judul_Kegiatan' => 'Pelatihan Digital Marketing',
                'tanggal_kegiatan' => '2025-08-06',
                'kategori_id' => 3,
                'deskripsi_kegiatan' => 'Pelatihan Digital Marketing adalah program komprehensif yang dirancang untuk membekali peserta dengan pengetahuan, keterampilan, dan strategi praktis dalam memanfaatkan teknologi digital untuk kegiatan pemasaran. Di era serba online saat ini, kemampuan mengelola kampanye pemasaran digital menjadi keunggulan kompetitif yang sangat penting bagi individu maupun bisnis.

Dalam pelatihan ini, peserta akan mempelajari konsep dasar hingga teknik lanjutan Digital Marketing, mulai dari memahami perilaku konsumen di dunia digital, merancang strategi pemasaran yang efektif, hingga mengoptimalkan penggunaan berbagai kanal digital seperti media sosial (Instagram, Facebook, TikTok, LinkedIn), mesin pencari (SEO & SEM), email marketing, dan iklan berbayar (Google Ads & Social Media Ads).

Selain teori, pelatihan ini juga memberikan sesi praktik langsung yang akan membimbing peserta membuat konten kreatif, menyusun kalender kampanye, mengukur performa melalui data analitik, dan melakukan penyesuaian strategi berdasarkan hasil yang diperoleh.

Program ini sangat relevan bagi pelaku UMKM, wirausahawan, mahasiswa, tenaga pemasaran, maupun siapa saja yang ingin meningkatkan kemampuan promosi secara efektif, hemat biaya, dan tepat sasaran. Dengan mengikuti pelatihan ini, peserta diharapkan mampu merancang serta menjalankan strategi pemasaran digital yang profesional, kreatif, dan berorientasi pada hasil, sehingga dapat bersaing di tengah pesatnya perkembangan teknologi dan persaingan pasar.',
                'foto_kegiatan' => '1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Judul_Kegiatan' => 'Bazar Produk Unggulan Desa',
                'tanggal_kegiatan' => '2025-08-06',
                'kategori_id' => 1,
                'deskripsi_kegiatan' => 'Bazar Produk Unggulan Desa adalah kegiatan yang bertujuan untuk memperkenalkan dan memasarkan berbagai produk terbaik yang dihasilkan oleh masyarakat desa. Acara ini menjadi ajang promosi, jual beli, dan temu bisnis antara pelaku usaha lokal dengan konsumen, sekaligus menjadi wadah untuk memperluas jaringan pemasaran hingga ke tingkat yang lebih luas.

Dalam bazar ini, peserta akan menemukan beragam produk unggulan mulai dari hasil pertanian segar, olahan makanan dan minuman khas, kerajinan tangan, produk kreatif, hingga inovasi desa yang memiliki nilai jual tinggi. Setiap produk yang dipamerkan merupakan hasil karya dan inovasi masyarakat desa yang mengutamakan kualitas, keunikan, serta kearifan lokal.

Kegiatan ini juga diharapkan dapat menjadi sarana edukasi bagi masyarakat untuk mengenal potensi desa, mengapresiasi produk lokal, dan meningkatkan kesadaran akan pentingnya mendukung ekonomi kerakyatan. Melalui bazar ini, para pelaku UMKM desa akan memperoleh kesempatan untuk belajar strategi pemasaran, membangun merek, serta mendapatkan masukan langsung dari konsumen.

Dengan semangat kebersamaan dan gotong royong, Bazar Produk Unggulan Desa menjadi momentum penting untuk memajukan perekonomian desa, memperkuat identitas budaya, dan mendorong kemandirian masyarakat melalui produk yang berkualitas dan bernilai saing tinggi.',
                'foto_kegiatan' => '2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Judul_Kegiatan' => 'Sosialisasi Kesehatan Ibu & Anak',
                'tanggal_kegiatan' => '2025-08-06',
                'kategori_id' => 4,
                'deskripsi_kegiatan' => 'Penyuluhan kesehatan dasar untuk ibu dan anak dengan menghadirkan tenaga medis.',
                'foto_kegiatan' => '3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Judul_Kegiatan' => 'Pelatihan Pengolahan Hasil Tani',
                'tanggal_kegiatan' => '2025-08-06',
                'kategori_id' => 2,
                'deskripsi_kegiatan' => 'Pelatihan Pengolahan Hasil Tani adalah program pembelajaran yang dirancang untuk meningkatkan keterampilan petani, pelaku UMKM, dan masyarakat desa dalam mengolah hasil pertanian menjadi produk yang memiliki nilai tambah tinggi. Pelatihan ini bertujuan membantu peserta memanfaatkan potensi hasil tani secara maksimal, sehingga tidak hanya dijual dalam bentuk bahan mentah, tetapi diolah menjadi produk bernilai ekonomis dan memiliki daya saing di pasar.

Materi pelatihan mencakup pengenalan berbagai metode pengolahan hasil pertanian, teknik pengemasan yang menarik, prinsip menjaga kualitas dan higienitas produk, serta strategi pemasaran yang efektif. Peserta juga akan mempelajari cara memanfaatkan teknologi sederhana maupun modern untuk meningkatkan efisiensi dan kualitas produk, seperti pengolahan hasil sayuran, buah, biji-bijian, hingga produk olahan berbasis tanaman herbal.

Tidak hanya teori, pelatihan ini juga dilengkapi dengan sesi praktik langsung yang memungkinkan peserta mencoba sendiri proses pengolahan, mulai dari persiapan bahan baku, teknik pengolahan, pengemasan, hingga perhitungan harga jual yang menguntungkan.

Dengan mengikuti Pelatihan Pengolahan Hasil Tani, diharapkan peserta mampu menciptakan produk inovatif, memperluas peluang pasar, meningkatkan pendapatan, serta berkontribusi dalam penguatan ekonomi desa. Program ini juga menjadi langkah strategis dalam mengurangi ketergantungan pada penjualan hasil pertanian mentah dan mendorong kemandirian masyarakat dalam mengembangkan usaha berbasis potensi lokal.',
                'foto_kegiatan' => '1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Judul_Kegiatan' => 'Kursus Desain Grafis Dasar',
                'tanggal_kegiatan' => '2025-08-06',
                'kategori_id' => 5,
                'deskripsi_kegiatan' => 'Pelatihan desain grafis dengan software dasar untuk menunjang kreativitas pemuda.',
                'foto_kegiatan' => '2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
