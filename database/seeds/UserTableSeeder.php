<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' 		=> 'Admin', 
				'last_name' => 'Admin', 
				'email' 	=> 'admin@admin.com', 
				'user' 		=> 'admin',
				'password' 	=> \Hash::make('admin'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'Kings Road',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Demo', 
				'last_name' => 'User', 
				'email' 	=> 'demo@demo.com', 
				'user' 		=> 'demo',
				'password' 	=> \Hash::make('demo'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'Abbey Road',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($data);
    }
}
