<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            [
                'name' => 'Cyphers System',
                'description' => 'Insurance broker firm',
                'user_id' => 1,
            ],
            [
                'name' => 'Splice Digital',
                'description' => 'Software development Company ',
                'user_id' => 1,
            ]
        ];

        foreach($companies as $company){
            DB::table('companies')->insert($company);
        }

    }
}
