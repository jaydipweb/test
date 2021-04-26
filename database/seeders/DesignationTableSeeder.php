<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DesignationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('designation')->insert([
        	'id' => 1,
            'name' => 'Marketing Coordinator',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('designation')->insert([
            'id' => 2,
            'name' => 'Web Designer',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('designation')->insert([
        	'id' => 3,
            'name' => 'Project Manager',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('designation')->insert([
        	'id' => 4,
            'name' => 'Account Executive',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
