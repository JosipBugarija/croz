<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Mujo & Haso'],
            ['name' => 'Chuck Norris'],
            ['name' => 'Škola'],
            ['name' => 'Plavuše'],
            ['name' => 'Razno'],
            ['name' => 'Perica'],
            ['name' => 'Policajci']
        ]);
    }
}