<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(10);
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'phone' => 'nullable|string|regex:/^[0-9]{10}$/',
        ]);
    
        Customer::create($request->only(['name', 'email', 'phone']));    
        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }
    
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'phone' => 'nullable|string|regex:/^[0-9]{10}$/',
        ]);
    
        $customer->update($request->only(['name', 'email', 'phone']));
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }
    

    public function edit($id)
    {   
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }
   

    public function destroy(Customer $customer)
    {        
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}
