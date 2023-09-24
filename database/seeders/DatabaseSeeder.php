<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\DataIppkh;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'moh.fikryansyah@gmail.com',
            'password' => 'fikripanu2001'
        ]);

        DataIppkh::create([
            'pt' => 'PT. Pani Bersama Tambang (PT. PBT)',
            'email' => 'moh.fikryansyah@gmail.com',
            'nomor_sk' => 'SK.188/ MenLHK/Setjen/PLA.0/3/2022',
            'masa_berlaku' => '16 Tahun',     	
            'mulai' => '2022-03-04',
            'berakhir' => '2035-05-13',
            'luas' => '± 289,08',
            'verifikasi_pbnp' => 'Belum',
            'bukti_bayar' => '',
            'keterangan' => 'Komersil (Tambang)'     	
        ]);

        DataIppkh::create([
            'pt' => 'PT. PLN (Persero)',
            'email' => 'moh.fikryansyah@gmail.com',
            'nomor_sk' => 'SK.41/ MenLHK/ Setjen/LA.0/1/2022',
            'masa_berlaku' => '24 Tahun',     	
            'mulai' => '2022-01-27',
            'berakhir' => '2046-09-27',
            'luas' => '19,35',
            'verifikasi_pbnp' => 'Belum',
            'bukti_bayar' => '',
            'keterangan' => 'Komersil (Jalur SUTT Listrik)'     	
        ]);

        DataIppkh::create([
            'pt' => 'PT. PLN (Persero)',
            'email' => 'moh.fikryansyah@gmail.com',
            'nomor_sk' => 'SK.12/MenLHK/Setjen/PLA.0/1/2022',
            'masa_berlaku' => '24 Tahun',     	
            'mulai' => '2022-01-06',
            'berakhir' => '2046-09-27',
            'luas' => '± 8,82',
            'verifikasi_pbnp' => 'Belum',
            'bukti_bayar' => '',
            'keterangan' => 'Komersil (Jalur SUTT Listrik)'     	
        ]);

        DataIppkh::create([
            'pt' => 'PT. PLN (Persero)',
            'email' => 'moh.fikryansyah@gmail.com',
            'nomor_sk' => 'SK.999/MenLHK/Setjen/ PLA.0/11/2019',
            'masa_berlaku' => '27 Tahun',     	
            'mulai' => '2019-11-20',
            'berakhir' => '2046-09-27',
            'luas' => '± 3,64',
            'verifikasi_pbnp' => 'Belum',
            'bukti_bayar' => '',
            'keterangan' => 'Komersil (Jalur SUTT Listrik)'     	
        ]);

        DataIppkh::create([
            'pt' => 'PT. Gorontalo Mineral (PT. GM)',
            'email' => 'moh.fikryansyah@gmail.com',
            'nomor_sk' => 'SK.489/MenLHK/Setjen/PLA.0/ 7/2019',
            'masa_berlaku' => '30 Tahun',     	
            'mulai' => '2019-07-24',
            'berakhir' => '2049-02-26',
            'luas' => '± 992,20',
            'verifikasi_pbnp' => 'Sudah',
            'bukti_bayar' => '',
            'keterangan' => 'Komersil (Tambang)'     	
        ]);

        DataIppkh::create([
            'pt' => 'PT. Gorontalo Sejahtera Mining (PT. GSM)',
            'email' => 'moh.fikryansyah@gmail.com',
            'nomor_sk' => 'SK.302/MenLHK/Setjen/PLA.0/4/2019',
            'masa_berlaku' => '30 Tahun',     	
            'mulai' => '2019-04-24',
            'berakhir' => '2049-12-01',
            'luas' => '± 787,67',
            'verifikasi_pbnp' => 'Sudah',
            'bukti_bayar' => '',
            'keterangan' => 'Komersil (Tambang)'     	
        ]);

        DataIppkh::create([
            'pt' => 'PT. Puncak Emas Tani Sejahtera (PT. PETS)',
            'email' => 'moh.fikryansyah@gmail.com',
            'nomor_sk' => 'SK.310/ MENLHK/SETJEN/PLA.0/4/2019',
            'masa_berlaku' => '19 Tahun',     	
            'mulai' => '2019-04-29',
            'berakhir' => '2028-09-03',
            'luas' => '± 93,90',
            'verifikasi_pbnp' => 'Sudah',
            'bukti_bayar' => '',
            'keterangan' => 'Komersil (Tambang)'     	
        ]);

        DataIppkh::create([
            'pt' => 'PT. Gorontalo Sejahtera Mining (PT. GSM)',
            'email' => 'moh.fikryansyah@gmail.com',
            'nomor_sk' => '63/1/DataIppkh/ PMDN/2017',
            'masa_berlaku' => '7 Tahun',     	
            'mulai' => '2017-07-03',
            'berakhir' => '2024-08-15',
            'luas' => '± 999,90',
            'verifikasi_pbnp' => 'Belum',
            'bukti_bayar' => '',
            'keterangan' => 'Komersil (Tambang)'     	
        ]);

        DataIppkh::create([
            'pt' => 'PT. PLN (Persero)',
            'email' => 'moh.fikryansyah@gmail.com',
            'nomor_sk' => '22/1/DataIppkh-PB/PMDN/2017',
            'masa_berlaku' => '29 Tahun',     	
            'mulai' => '2017-09-25',
            'berakhir' => '2046-09-27',
            'luas' => '± 7,31',
            'verifikasi_pbnp' => 'Belum',
            'bukti_bayar' => '',
            'keterangan' => 'Komersil (Jalur SUTT Listrik)'     	
        ]);

        DataIppkh::create([
            'pt' => 'PT. Tenaga Listrik Gorontalo',
            'email' => 'moh.fikryansyah@gmail.com',
            'nomor_sk' => 'SK.12 /1/DataIppkh/PMDN/2017',
            'masa_berlaku' => '19 Tahun',     	
            'mulai' => '2017-02-14',
            'berakhir' => '2036-08-25',
            'luas' => '2,53',
            'verifikasi_pbnp' => 'Belum',
            'bukti_bayar' => '',
            'keterangan' => 'Komersil (Jalur SUTT Listrik)'     	
        ]);

        DataIppkh::create([
            'pt' => 'PT. Inti Global Laksana',
            'email' => 'moh.fikryansyah@gmail.com',
            'nomor_sk' => 'SK.628/Menhut-II/2014',
            'masa_berlaku' => '-',     	
            'mulai' => '2013-03-08',
            'berakhir' => null,
            'luas' => '124,20',
            'verifikasi_pbnp' => 'Sudah',
            'bukti_bayar' => '',
            'keterangan' => 'Komersil (Jalan Kebun)'     	
        ]);

        DataIppkh::create([
            'pt' => 'PT. Loka Indah Lestari',
            'email' => 'moh.fikryansyah@gmail.com',
            'nomor_sk' => 'SK Kepmenhut Nomor. SK. 69/Menhut-II/2013',
            'masa_berlaku' => '20 Tahun',     	
            'mulai' => '2013-01-30',
            'berakhir' => null,
            'luas' => '109,20',
            'verifikasi_pbnp' => 'Sudah',
            'bukti_bayar' => '',
            'keterangan' => 'Komersil (Jalan Kebun)'     	
        ]);

        DataIppkh::create([
            'pt' => 'PT. Sumber Energi Lestari (PT. SEL)',
            'email' => 'moh.fikryansyah@gmail.com',
            'nomor_sk' => 'SK Menhut Nomor. SK.633/Menhut-II/2010',
            'masa_berlaku' => '20 Tahun',     	
            'mulai' => '2010-11-15',
            'berakhir' => '2030-11-15',
            'luas' => '41',
            'verifikasi_pbnp' => 'Sudah',
            'bukti_bayar' => '',
            'keterangan' => 'Komersil (Pembangkit Listrik)'     	
        ]);
    }
}
