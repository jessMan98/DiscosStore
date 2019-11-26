<?php

use Illuminate\Database\Seeder;

class DiscograficasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Discografica::class,20)->create();
        App\Discografica::create(['nDisquera'=>'Columbia Records']);
        App\Discografica::create(['nDisquera'=>'RCA Records']);
	    App\Discografica::create(['nDisquera'=>'MCA Records']);
	    App\Discografica::create(['nDisquera'=>'PolyGram']);
	    App\Discografica::create(['nDisquera'=>'EMI Music']);
	    App\Discografica::create(['nDisquera'=>'Epic Records']);
	    App\Discografica::create(['nDisquera'=>'Island Records']);
	    App\Discografica::create(['nDisquera'=>'Sony Music']);
        App\Discografica::create(['nDisquera'=>'Universal Music Group']);
        App\Discografica::create(['nDisquera'=>'DEL Records']);
    }
}
