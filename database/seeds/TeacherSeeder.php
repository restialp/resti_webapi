<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Teacher::create([
        	'nama'=>'resti',
        	'jk'=>'P',
        	'alamat'=>'sindang'
        ]);
          \App\Teacher::create([
        	'nama'=>'amelia',
        	'jk'=>'P',
        	'alamat'=>'maja'
        ]);
    }
}
