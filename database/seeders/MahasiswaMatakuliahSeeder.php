<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa_matakuliah = [
            //mahasiswa nim 2041720061
            [ 'mahasiswa_id' => '2041720061', 'matakuliah_id' => 1, 'nilai' => 'A', ],
            [ 'mahasiswa_id' => '2041720061', 'matakuliah_id' => 2, 'nilai' => 'B+', ],
            [ 'mahasiswa_id' => '2041720061', 'matakuliah_id' => 3, 'nilai' => 'A', ],
            [ 'mahasiswa_id' => '2041720061', 'matakuliah_id' => 4, 'nilai' => 'A', ],
            //mahasiswa nim 2041720090
            [ 'mahasiswa_id' => '2041720090', 'matakuliah_id' => 1, 'nilai' => 'A', ],
            [ 'mahasiswa_id' => '2041720090', 'matakuliah_id' => 2, 'nilai' => 'B', ],
            [ 'mahasiswa_id' => '2041720090', 'matakuliah_id' => 3, 'nilai' => 'B+', ],
            [ 'mahasiswa_id' => '2041720090', 'matakuliah_id' => 4, 'nilai' => 'A', ],
            //mahasiswa nim 2041790082
            [ 'mahasiswa_id' => '2041790082', 'matakuliah_id' => 1, 'nilai' => 'A', ],
            [ 'mahasiswa_id' => '2041790082', 'matakuliah_id' => 2, 'nilai' => 'A', ],
            [ 'mahasiswa_id' => '2041790082', 'matakuliah_id' => 3, 'nilai' => 'B+', ],
            [ 'mahasiswa_id' => '2041790082', 'matakuliah_id' => 4, 'nilai' => 'A', ],
            //mahasiswa nim 2041720001
            [ 'mahasiswa_id' => '2041720001', 'matakuliah_id' => 1, 'nilai' => 'A', ],
            [ 'mahasiswa_id' => '2041720001', 'matakuliah_id' => 2, 'nilai' => 'A', ],
            [ 'mahasiswa_id' => '2041720001', 'matakuliah_id' => 3, 'nilai' => 'B', ],
            [ 'mahasiswa_id' => '2041720001', 'matakuliah_id' => 4, 'nilai' => 'B', ],

        ];
        DB::table('mahasiswa_matakuliah')->insert($mahasiswa_matakuliah);
    }
}
