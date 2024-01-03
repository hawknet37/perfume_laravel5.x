<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Toastr;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('customer_id','DESC')->paginate(10);
        return view('admin.customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
       
        $customer = new Customer();
        
            $customer->customer_phone = $data['customer_phone'];
            $customer->customer_email = $data['customer_email'];
            $customer->customer_name = $data['customer_name'];
            $customer->customer_password = $data['customer_password'];
          
            $customer->save();
			Toastr::success('Tạo khách hàng thành công','Thành công');
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers = Customer::where('customer_id',$id)->get();
        return view('admin.customers.edit',compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customers = Customer::where('customer_id',$id)->get();
        foreach($customers as $customer){
            $customer->customer_phone = $request->customer_phone;
            $customer->customer_email = $request->customer_email;
            $customer->customer_name = $request->customer_name;
            if($request->customer_password_new){
                $customer->customer_password = $request->customer_password_new;
            }
            $customer->save();
			Toastr::success('Cập nhật khách hàng thành công','Thành công');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
    	$customer->delete();
			Toastr::success('Xóa khách hàng thành công','Thành công');
        return redirect()->back();
    }
}
