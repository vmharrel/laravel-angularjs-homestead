<?php

class UserTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('user')->delete();

		User::create(array(
			'user_name' => 'Alex',
			'email' => 'alex@zipongo.com',
			'password' => 'zipongo',
			'created_utc' => time()*1000
		));

		User::create(array(
			'user_name' => 'Barrett',
			'email' => 'barrett@zipongo.com',
			'password' => 'zipongo',
			'created_utc' => time()*1000
		));

		User::create(array(
			'user_name' => 'Joel',
			'email' => 'joel@zipongo.com',
			'password' => 'zipongo',
			'created_utc' => time()*1000
		));
		User::create(array(
			'user_name' => 'Tim',
			'email' => 'tim@zipongo.com',
			'password' => 'zipongo',
			'created_utc' => time()*1000
		));
	}

}