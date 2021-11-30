<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OverviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('overviews')->insert([
            'description' => 
            'Lozaty® refreshing lozenges are food supplements used for immediate relief of sore throat and/ or nasal congestion associated with respiratory conditions such as:

                Common Cold
                Tonsillitis
                Pharyngitis
                Nasal Sinusitis
             '
        ]);
    }
}
