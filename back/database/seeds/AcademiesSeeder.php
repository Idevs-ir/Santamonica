<?php

use Illuminate\Database\Seeder;

class AcademiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\academy::class , 10)->create();
    }
}
