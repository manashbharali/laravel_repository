<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        $customers = $this->customerRepository->all();
        return $customers;
    }

    public function show($customerId)
    {
        $customer = $this->customerRepository->findById($customerId);
        return $customer;
    }

    public function search($customerName)
    {   
        $customer = $this->customerRepository->findByName($customerName);
        return $customer;
    }

    public function destroy($customerId)
    {
        $this->customerRepository->deleteById($customerId);
        return redirect('/customers');
    }
}
