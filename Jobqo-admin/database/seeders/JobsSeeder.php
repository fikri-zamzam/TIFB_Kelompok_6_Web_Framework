<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_categories')->insert([
        	'name' => 'Teknik Informatika',
        	'deskripsi' => 'Pekerjaan yang berhubungan dengan IT',
            'created_at'=> now()
        ]);

        DB::table('job_categories')->insert([
        	'name' => 'Sosial Masyarakat',
        	'deskripsi' => 'Pekerjaan yang berhubungan dengan hubungan masyarakat',
            'created_at'=> now()
        ]);

        // Job Position

        DB::table('job_positions')->insert([
        	'name' => 'Manager',
        	'deskripsi' => 'Orang yang mengantur Staff',
            'created_at'=> now()
        ]);

        DB::table('job_positions')->insert([
        	'name' => 'Staff',
        	'deskripsi' => 'Pekerja biasa',
            'created_at'=> now()
        ]);


        DB::table('jobs')->insert([
        	'name_job' => 'Programmer',
        	'desk_job' => 'Bisa bekerja',
            'gaji'=> 200000,
            'company_id' => 1,
            'job_category_id' => 1,
            'job_position_id' => 1,
            'job_requirement' => 'Bisa bekerja',
            'created_at'=> now()
        ]);
    }
}
