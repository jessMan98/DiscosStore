<?php

use Illuminate\Database\Seeder;

class FamososSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Famoso::class,20)->create();
    }
}
