<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananUnggulan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanan_unggulans')->insert([
            [
                'nama_layanan' => 'Pelatihan UMKM',
                'deskripsi' => 'Pelatihan UMKM adalah program pembinaan yang dirancang khusus untuk membantu pelaku Usaha Mikro, Kecil, dan Menengah dalam mengembangkan keterampilan manajemen usaha, pemasaran, dan inovasi produk agar mampu bersaing di era modern. Pelatihan ini bertujuan memberikan bekal pengetahuan praktis dan strategi bisnis yang dapat langsung diterapkan untuk meningkatkan kinerja usaha.

Materi yang disampaikan mencakup pengelolaan keuangan yang efektif, strategi pemasaran offline dan online, branding produk, pemanfaatan media sosial, inovasi dan pengembangan produk, serta manajemen operasional yang efisien. Selain itu, peserta juga akan dibimbing untuk memahami regulasi usaha, teknik negosiasi, dan peluang pembiayaan atau permodalan yang tersedia bagi UMKM.

Pelatihan ini tidak hanya berfokus pada teori, tetapi juga dilengkapi dengan studi kasus, simulasi bisnis, dan praktik langsung agar peserta dapat mengimplementasikan ilmu yang diperoleh ke dalam usaha masing-masing. Melalui pendekatan interaktif, peserta dapat berdiskusi, berbagi pengalaman, dan membangun jejaring bisnis dengan sesama pelaku UMKM.

Dengan mengikuti Pelatihan UMKM, diharapkan peserta mampu mengelola usaha secara profesional, meningkatkan kualitas produk dan layanan, memperluas pasar, serta menciptakan strategi bisnis yang berkelanjutan. Program ini menjadi langkah strategis dalam mendorong pertumbuhan ekonomi lokal, memperkuat daya saing pelaku usaha, dan menciptakan peluang kerja yang lebih luas bagi masyarakat.

',
                'kategori_id' => 3,
                'foto_layanan' => '1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_layanan' => 'Pemasaran Produk Desa',
                'deskripsi' => 'Pemasaran Produk Desa adalah program yang dirancang untuk membantu masyarakat desa, pelaku UMKM, dan kelompok usaha lokal dalam memasarkan produk unggulan mereka secara lebih efektif, luas, dan berkelanjutan. Program ini bertujuan mengoptimalkan potensi sumber daya lokal agar mampu bersaing di pasar regional, nasional, bahkan internasional.

Dalam kegiatan ini, peserta akan dibekali pengetahuan dan keterampilan tentang strategi pemasaran modern, mulai dari analisis pasar, penentuan target konsumen, pengembangan merek (branding), hingga pemanfaatan berbagai kanal pemasaran seperti media sosial, marketplace, dan jaringan distribusi offline. Selain itu, peserta juga akan mempelajari teknik pengemasan produk yang menarik, penetapan harga yang kompetitif, serta cara membangun hubungan baik dengan pelanggan.

Program ini menekankan pentingnya kreativitas dan inovasi dalam memasarkan produk, sekaligus mengajarkan cara memanfaatkan teknologi digital untuk memperluas jangkauan promosi. Tidak hanya itu, peserta juga akan mendapatkan panduan membuat materi promosi yang efektif, mengelola interaksi pelanggan, dan mengukur keberhasilan kampanye pemasaran.

Dengan mengikuti Pemasaran Produk Desa, diharapkan para pelaku usaha desa dapat meningkatkan penjualan, memperluas pasar, dan memperkuat identitas produk lokal. Kegiatan ini menjadi langkah penting dalam mendorong kemandirian ekonomi desa, mengangkat potensi daerah, serta meningkatkan kesejahteraan masyarakat melalui produk-produk yang berkualitas dan memiliki daya saing tinggi.',
                'kategori_id' => 2,
                'foto_layanan' => '2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_layanan' => 'Layanan Simpan Pinjam',
                'deskripsi' => 'Layanan Simpan Pinjam adalah program keuangan yang bertujuan memberikan kemudahan bagi masyarakat dalam mengelola kebutuhan dana, baik untuk keperluan usaha, pendidikan, maupun kebutuhan pribadi yang mendesak. Layanan ini memungkinkan anggota atau nasabah untuk menyimpan uang dengan aman sekaligus memperoleh akses pinjaman dengan prosedur yang mudah, cepat, dan bunga yang terjangkau.

Melalui Layanan Simpan Pinjam, masyarakat didorong untuk membiasakan diri menabung secara rutin, sehingga tercipta budaya menabung yang bermanfaat untuk perencanaan keuangan jangka panjang. Di sisi lain, fasilitas pinjaman yang tersedia membantu anggota memenuhi kebutuhan modal usaha, memperluas kegiatan produktif, atau membiayai kebutuhan penting lainnya tanpa harus bergantung pada sumber pinjaman yang memberatkan.

Proses layanan biasanya mencakup pendaftaran anggota, penyetoran simpanan, pengajuan pinjaman, verifikasi kelayakan, pencairan dana, serta pengembalian pinjaman secara angsuran. Sistem ini dikelola secara transparan dan akuntabel, sehingga dapat dipercaya dan bermanfaat bagi semua pihak.

Dengan adanya Layanan Simpan Pinjam, diharapkan masyarakat dapat lebih mandiri secara finansial, memperkuat perekonomian lokal, dan meningkatkan kesejahteraan melalui akses keuangan yang inklusif, mudah, dan adil.',
                'kategori_id' => 1,
                'foto_layanan' => '3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_layanan' => 'Klinik Desa',
                'deskripsi' => 'Pelayanan kesehatan dasar untuk masyarakat dengan fasilitas yang memadai.',
                'kategori_id' => 4,
                'foto_layanan' => '1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_layanan' => 'Kursus Komputer',
                'deskripsi' => 'Kursus dasar komputer untuk generasi muda agar siap menghadapi era digital.',
                'kategori_id' => 8,
                'foto_layanan' => '2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
