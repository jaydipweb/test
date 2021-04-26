<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('employee')->insert([
        	'name' => 'Jaydip',
            'designation' => 1,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('employee')->insert([
            'name' => 'Jay',
            'designation' => 2,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('employee')->insert([
        	'name' => 'Deep',
            'designation' => 3,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('employee')->insert([
        	'name' => 'Raj',
            'designation' => 4,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
