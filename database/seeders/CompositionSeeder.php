<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compositions')->insert([
            'description_en' => 
            '•Lozaty® lozenges  are food supplements contain natural active ingredients (menthol and eucalyptus)
             •Lozaty® Lozenges as food supplements; ensure high safety as they are Gluten free and Aspartame free
             '
        ]);

    }
}
