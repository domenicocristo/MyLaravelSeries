<?php

use Illuminate\Database\Seeder;

use App\Serie;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Serie::class, 10) -> create();
    }
}
