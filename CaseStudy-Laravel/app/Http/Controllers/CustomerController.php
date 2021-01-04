<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CustomerRepo\CustomerRepository;
use App\Http\Repositories\CustomerRepo\CustomerRepositoryInterface;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $customerRepository;
    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }
    public function index()
    {
        $customers = $this->customerRepository->getAll();
        return view('admin.customer.list',compact('customers'));
    }
    public function showCreate(){
        return view('admin.customer.create');
    }
    public function store(CustomerRequest $request)
    {
        $this->customerRepository->create($request);
        return redirect()->route('customer.list')->with('add','Thêm mới thành công');
    }
    public function edit($id)
    {
        $customer = $this->customerRepository->findById($id);
        return view('admin.customer.edit',compact('customer'));
    }
    public function update(CustomerRequest $request, $id)
    {
        $customer = $this->customerRepository->findById($id);
        $this->customerRepository->update($request, $customer);
        return redirect()->route('customer.list')->with('update','Cập nhật thành công');
    }
    public function delete($id)
    {
        $this->customerRepository->delete($id);
        return redirect()->route('customer.list')->with('delete','Xóa thành công');
    }
}
