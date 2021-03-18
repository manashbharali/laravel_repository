<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository
{

	public function all()
	{
		return Customer::orderBy('name')
			->where('status', 1)
			->with('user')
			->get()
			->map->format();
	}

	public function findById($customerId)
	{
		return Customer::where('id', $customerId)
			->where('status', 1)
			->with('user')
			->firstOrFail()->format();
	}

	public function findByName($customerName)
	{
		return Customer::where('name', 'like', '%'.$customerName.'%')
			->orderBy('name')
			->where('status', 1)
			->with('user')
			->get()
			->map->format();
	}

	public function deleteById($customerId){
		Customer::where('id', $customerId)->delete();
	}

}
