<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('salary')->insert([
        	'employee_id' => 1,
            'salary' => 10000,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('salary')->insert([
            'employee_id' => 2,
            'salary' => 20000,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('salary')->insert([
        	'employee_id' => 3,
            'salary' => 30000,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('salary')->insert([
        	'employee_id' => 4,
            'salary' => 40000,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
