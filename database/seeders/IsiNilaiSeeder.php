<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsiNilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nilai = [
            [
                'mahasiswa_id' => '2041720138',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720138',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720138',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720138',
                'matakuliah_id' => 4,
                'nilai' => 'A',
            ],

            [
                'mahasiswa_id' => '2041720125',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720125',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720125',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720125',
                'matakuliah_id' => 4,
                'nilai' => 'A',
            ],
            
            [
                'mahasiswa_id' => '2041720056',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720056',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720056',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720056',
                'matakuliah_id' => 4,
                'nilai' => 'A',
            ],

            [
                'mahasiswa_id' => '2041720051',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720051',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720051',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720051',
                'matakuliah_id' => 4,
                'nilai' => 'A',
            ],

            [
                'mahasiswa_id' => '2041720038',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720038',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720038',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720038',
                'matakuliah_id' => 4,
                'nilai' => 'A',
            ],

            [
                'mahasiswa_id' => '2041720033',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720033',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720033',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720033',
                'matakuliah_id' => 4,
                'nilai' => 'A',
            ],

            [
                'mahasiswa_id' => '2041720022',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720022',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720022',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2041720022',
                'matakuliah_id' => 4,
                'nilai' => 'A',
            ]
        ];
        DB::table('mahasiswa_matakuliah')->insert($nilai);
    }
}
