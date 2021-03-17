<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		\App\Models\User::factory(5)->create();

		\App\Models\Customer::create([
			'user_id' => 1,
			'name' => 'John Doe',
			'contact' => '9876543212',
			'address' => 'Some address xyz street',
			'status' => 1,
		]);

		\App\Models\Customer::create([
			'user_id' => 2,
			'name' => 'Sara Jane',
			'contact' => '9876543212',
			'address' => 'Some address xyz street',
			'status' => 1,
		]);

		\App\Models\Customer::create([
			'user_id' => 2,
			'name' => 'Ronn smith',
			'contact' => '9876543212',
			'address' => 'Some address xyz street',
			'status' => 1,
		]);

		\App\Models\Customer::create([
			'user_id' => 3,
			'name' => 'Sara Jane',
			'contact' => '9876543212',
			'address' => 'Some address xyz street',
			'status' => 1,
		]);

		\App\Models\Customer::create([
			'user_id' => 1,
			'name' => 'Jayden Doe',
			'contact' => '9876543212',
			'address' => 'Some address xyz street',
			'status' => 1,
		]);

		\App\Models\Customer::create([
			'user_id' => 2,
			'name' => 'Rock Jane',
			'contact' => '9876543212',
			'address' => 'Some address xyz street',
			'status' => 1,
		]);

		\App\Models\Customer::create([
			'user_id' => 2,
			'name' => 'Json smith',
			'contact' => '9876543212',
			'address' => 'Some address xyz street',
			'status' => 1,
		]);

		\App\Models\Customer::create([
			'user_id' => 3,
			'name' => 'Hunter Jane',
			'contact' => '9876543212',
			'address' => 'Some address xyz street',
			'status' => 1,
		]);
		\App\Models\Customer::create([
			'user_id' => 1,
			'name' => 'Luke Doe',
			'contact' => '9876543212',
			'address' => 'Some address xyz street',
			'status' => 1,
		]);

		\App\Models\Customer::create([
			'user_id' => 5,
			'name' => 'Lone Jane',
			'contact' => '9876543212',
			'address' => 'Some address xyz street',
			'status' => 1,
		]);

		\App\Models\Customer::create([
			'user_id' => 2,
			'name' => 'Brad smith',
			'contact' => '9876543212',
			'address' => 'Some address xyz street',
			'status' => 1,
		]);

		\App\Models\Customer::create([
			'user_id' => 4,
			'name' => 'Rony Jane',
			'contact' => '9876543212',
			'address' => 'Some address xyz street',
			'status' => 1,
		]);
	}
}
