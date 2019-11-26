<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','User')->first();
        $role_admin = Role::where('name','Administrador')->first();
        
        $user = new User();
        $user->name = "jesus";
        $user->email = "jesus@gmail.com";
        $user->password = bcrypt('yisus');
        $user->save();
        $user->roles()->attach($role_user);
        

        $user = new User();
        $user->name = "manuel";
        $user->email = "many@gmail.com";
        $user->password = bcrypt('manuelon');
        $user->save();
        $user->roles()->attach($role_admin);


        $user = new User();
        $user->name = "ricardo";
        $user->email = "ricas@gmail.com";
        $user->password = bcrypt('ricas');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = "pedro";
        $user->email = "peter@gmail.com";
        $user->password = bcrypt('pedro');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = "yui";
        $user->email = "yuisawa@gmail.com";
        $user->password = bcrypt('yuis');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = "espencer";
        $user->email = "phineas@gmail.com";
        $user->password = bcrypt('hola');
        $user->save();
        $user->roles()->attach($role_user);

    }
}
