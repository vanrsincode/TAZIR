<?php

namespace Database\Seeders;

use App\Models\Kelola\Violasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ViolasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // ADMINISTRASI
            [
                'nama_violasi' => 'Merubah foto atau identitas KTK',
                'level_id' => 2,
                'larangan' => 'Administrasi',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menyalahgunakan KTK',
                'level_id' => 2,
                'larangan' => 'Administrasi',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Membuat Atribut dan pungutan tanpa seizin Pengasuh',
                'level_id' => 2,
                'larangan' => 'Administrasi',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menunggak pembayaran tanpa ada alasan yang jelas',
                'level_id' => 2,
                'larangan' => 'Administrasi',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Tidak memakai seragam sesuai yang ditentukan pondok dan madrasah',
                'level_id' => 2,
                'larangan' => 'Administrasi',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Memalsukan tanda tangan',
                'level_id' => 2,
                'larangan' => 'Administrasi',
                'maks' => 0
            ],

            // ORGANISASI
            [
                'nama_violasi' => 'Menjadi anggota organisasi atau mengikuti kegiatan ekstra yang tidak ada kaitan langsung dengan Pondok Pesantren dan Madrasah, kecuali mendapat izin pengasuh',
                'level_id' => 2,
                'larangan' => 'Organisasi',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menyalahgunakan izin organisasi',
                'level_id' => 2,
                'larangan' => 'Organisasi',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Tidak menjalankan tugas ketika menjadi anggota organisasi pondok pesantren seperti jamiyah, musyawaroh dan ekstrakulikuler',
                'level_id' => 2,
                'larangan' => 'Organisasi',
                'maks' => 0
            ],

            // KEAMANAN
            [
                'nama_violasi' => 'Melakukan larangan Syar’i seperti Zina, mencuri, taruhan, menggosob, mentato dan lain-lain',
                'level_id' => 3,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Membawa, Mengkonsumsi, memiliki, menyimpan, atau mengedarkan miras, narkoba dan sejenisnya',
                'level_id' => 3,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menonton Film, bermain PS, Bilyard, karambol, Remi dan sejenisnya',
                'level_id' => 3,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Mengakses jejaring sosial dan situs-situs yang berbau pornografi',
                'level_id' => 3,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Membawa, menyimpan atau menitipkan Senjata Tajam (SAJAM)',
                'level_id' => 3,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Mengganggu, berkenalan dengan anak putri atau menerimanya sebagai tamu yang bukan mahromnya',
                'level_id' => 3,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Bertengkar dan segala jenis permusuhan lainnya',
                'level_id' => 3,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Berambut gondrong, bersemir, berkuku panjang, memakai anting, gelang dan segala aksesoris sejenis',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Renang, rekreasi, melihat konser, pertunjukan bazar dan sejenisnya',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Membawa motor kecuali mendapat izin dari pengasuh',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Merokok bagi santri yang masih duduk di bangku sekolah formal',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Merokok di luar lingkungan Pondok pesantren Salafiyah Sholawat bagi santri yang masih dibawah umur 20 tahun',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Mandi atau mencuci ketika kegiatan pondok atau madrasah berlangsung',
                'level_id' => 1,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Mandi hujan di luar lingkungan Pondok',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Makan di luar pondok dan selain kantin dzuriah',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Tidur di tempat yang tidak pada semestinya',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menyalahgunakan surat izin',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Surat menyurat antar lawan jenis yang bukan mahromnya',
                'level_id' => 3,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Berada di luar lingkungan pondok tanpa izin pengasuh',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Memakai celana tiga perempat atau setinggi lutut, baju robek, dan sejenisnya',
                'level_id' => 1,
                'larangan' => 'Etika',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Memiliki, menyimpan, melihat, membaca dan mengedarkan buku atau gambar yang berbau porno di kalangan pondok',
                'level_id' => 3,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Memiliki, menyimpan, membaca dan mengedarkan novel, komik, majalah dan tabloid',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Mengikuti, mengadakan demonstrasi, unjuk rasa dan sejenisnya',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menyimpan dan membawa flasdisk, Sim Card HP dan sejenisnya',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menyimpan, membawa dan menitipkan alat-alat musik dan sejenisnya, seperti Radio, Tape Recorder, HP, dan alat elektronik lainnya',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Berada di luar lingkungan Pondok Pesantren Salafiyah Sholawat di atas pkl 22.00 WIB',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Membawa dan memiliki flasdisk di atas 4 Gb, untuk tingkatan mahasiswa',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Membawa sepeda motor bagi tingkatan tsanawiyah dan SMK kecuali ada izin dari pengasuh',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Membuka wirausaha atau bisnis untuk kepentingan pribadi',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Melakukan tindakan bullying, perundungan dan sejenisnya',
                'level_id' => 3,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Melakukan pelecehan seksual dan sejenisnya',
                'level_id' => 3,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Mengintip santri putri atau lawan jenis',
                'level_id' => 3,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menitipkan uang kepada pengurus yang telah ditunjuk oleh pengasuh bagi santri yang membawa uang lebih dari RP.50.000,-',
                'level_id' => 2,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],

            // ETIKA
            [
                'nama_violasi' => 'Bergurau atau duduk di tepi jalan dan tempat-tempat yang tidak semestinya',
                'level_id' => 2,
                'larangan' => 'Etika',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menghina atau melawan Pengasuh, pengurus dan guru',
                'level_id' => 2,
                'larangan' => 'Etika',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Mencaci atau menghina tamu',
                'level_id' => 2,
                'larangan' => 'Etika',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Mengumpat (misuh), berkata jorok dan memanggil dengan kata yang tidak pantas',
                'level_id' => 2,
                'larangan' => 'Etika',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Membuat gaduh di jadang',
                'level_id' => 2,
                'larangan' => 'Etika',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Mengotori, bermain dan gaduh di masjid',
                'level_id' => 2,
                'larangan' => 'Etika',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menggosob sendal atau barang tamu',
                'level_id' => 2,
                'larangan' => 'Etika',
                'maks' => 0
            ],

            // KEBERSIHAN, KESEHATAN, DAN FASILITAS
            [
                'nama_violasi' => 'Membuang sampah tidak pada tempatnya',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Buang air kecil / besar di selain tempat yang sudah disediakan',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Corat-coret pada dinding, lantai, lemari dll',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menempatkan sepeda motor tidak pada tempatnya',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Merusak dan memindah inventaris Pondok dan Madrasah',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Memelihara binatang',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menaiki atap dan pagar',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menelantarkan pakaian',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Membuat laporan palsu',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Merusak fasilitas',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Nongkrong/ngobrol, dan tidur di ruang tamu',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menggunakan kamar mandi tamu',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Memasukan sesuatu kedalam air yang dapat merubah warna, rasa, dan bau',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Membuang bekas peralatan mandi di dalam jeding',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Merubah dan menambah instalansi atau tegangan listrik',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Merusak instalansi listrik atau fasilitas Pondok yang berkaitan dengan listrik dan pengairan',
                'level_id' => 1,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Mencuri fasilitas Pondok',
                'level_id' => 2,
                'larangan' => 'Kebersihan, Kesehatan, Dan Fasilitas',
                'maks' => 0
            ],

            // PENDIDIKAN DAN IBADAH
            [
                'nama_violasi' => 'Membolos atau keluar dari kelas sebelum pelajaran selesai',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Tidak mengikuti jami`yah',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Tidak mengikuti musyawaroh dan segala kegiatan yang diadakan oleh pondok dan madrasah',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menghilangkan kitab pelajaran',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Menambal kitab dengan makna yang tidak semestinya',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Mencoret, menggambar, dan merusak kitab atau buku pelajaran',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Bermalas-malasan',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Tidak tepat waktu',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Membuat gaduh saat di kelas',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Pulang dari madrasah sebelum waktu yang ditentukan',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Tidur saat mengikuti kegiatan yang diadakan oleh pondok dan madrasah',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Tidak mengikuti jamaah',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Tidak memperhatikan guru',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Mengotori, mencoret-coret atau merusak kelas',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Membuka pakaian dan kopiyah ketika KBM sedang berlangsung',
                'level_id' => 1,
                'larangan' => 'Pendidikan Dan Ibadah',
                'maks' => 0
            ],
            [
                'nama_violasi' => 'Terlambat kembali dari izin',
                'level_id' => 1,
                'larangan' => 'Keamanan',
                'maks' => 0
            ],
        ];

        foreach ($data as $key => $value) {
            Violasi::create($value);
        }
    }
}
