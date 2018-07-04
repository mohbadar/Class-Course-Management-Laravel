<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create users
	$user = new User;
	$user->firstname = "Badar";
	$user->lastname =  "Hashimi";
	$user->username="badar";
	$user->password = bcrypt('Badar.123');
	$user->isActive = 1;
	$user->save();
    }
}
