<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = DB::table('customers')->paginate(2);
        return view('customer.list', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->age = $request->input('age');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');

        if (isset($request->image)) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $customer->image = $path;
        } else {
            echo "Thư mục này không có ảnh";
        }
        $customer->save();
        return redirect()->route('customer.index');
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.show', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->input('name');
        $customer->age = $request->input('age');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');

        if (isset($request->image)) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $customer->image = $path;
        }

        $customer->save();
        return redirect()->route('customer.index');
    }

    public function delete($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.delete', compact('customer'));
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->destroy($id);
        return redirect()->route('customer.index');
    }
}
