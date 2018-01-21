<?php

use Illuminate\Database\Seeder;

class ariz extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $a = [
        	['Nama'=>'ariz', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'Bu Sri'],
        	['Nama'=>'mondi', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'Bu Sri'],
        	['Nama'=>'lagos', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'Bu Sri'],
        	['Nama'=>'sirit', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'Bu Sri'],
        	['Nama'=>'srek', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'Bu Sri'],
        	
        	];
        	DB::table('arizz')->insert($a);
    }
}
