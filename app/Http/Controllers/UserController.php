<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Roles;
use App\Admin;
use Auth;
use Session;
use Toastr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $admin = Admin::with('roles')->orderBy('admin_id','DESC')->paginate(5);
        return view('admin.users.all_users')->with(compact('admin'));
    }
    public function impersonate($admin_id){
        $user = Admin::where('admin_id',$admin_id)->first();
        if($user){
            session()->put('impersonate',$user->admin_id);
        }
        return redirect('/users');
    }
public function impersonate_destroy(){
    session()->forget('impersonate');
    return redirect('/users');
}
    
    public function add_users(){
        return view('admin.users.add_users');
    }

    public function delete_user_roles($admin_id){
        if(Auth::id() == $admin_id){
            Toastr::error('Bạn không được xóa quyền của mình','Thất bại');

            return redirect()->back();
        }

        $admin = Admin::find($admin_id);

        if($admin){
            $admin->roles()->detach();
            $admin->delete();
        }
        Toastr::success('Xóa user thành công','Thành công');

        return redirect()->back();
        

    }
    public function assign_roles(Request $request){

        if(Auth::id() == $request->admin_id){
            Toastr::error('Bạn không được phân quyền của mình','Thất bại');

            return redirect()->back();
        }

        $user = Admin::where('admin_email',$request->admin_email)->first();
        $user->roles()->detach();

        if($request->author_role){
           $user->roles()->attach(Roles::where('name','author')->first());     
        }
        if($request->admin_role){
           $user->roles()->attach(Roles::where('name','admin')->first());     
        }
        Toastr::success('Phân quyền thành công','Thành công');

        return redirect()->back();
    }
    public function store_users(Request $request){
        $data = $request->validate([
        'admin_email' => 'required|unique:tbl_admin|max:255',
        
        'admin_name' => 'required',
        'admin_phone' => 'required|numeric|digits_between:10,10',
        'admin_password' => 'required',
       
        
    ],
    [ 
        'admin_email.required' => 'Địa chỉ Email không được để trống',
        'admin_email.unique' => 'Địa chỉ Email đã tồn tại, vui lòng chọn tên khác',

        'admin_name.required' => 'Vui lòng điền họ tên của bạn',

        
        'admin_phone.required' => 'Vui lòng điền số điện thoại',
        'admin_phone.numeric' => 'Vui lòng điền số điện thoại',
        'admin_phone.digits_between' => 'Vui lòng điền số điện thoại là 10 số',

        'admin_password.required' => 'Vui lòng điền mật khẩu',
        
       
      
    ]
);

        $admin = new Admin();
        $admin->admin_name = $data['admin_name'];
        $admin->admin_phone = $data['admin_phone'];
        $admin->admin_email = $data['admin_email'];
        $admin->admin_password = md5($data['admin_password']);
        
        $admin->save();
        $admin->roles()->attach(Roles::where('name','user')->first());
        Toastr::success('Thêm users thành công','Thành công');

        return Redirect::to('users');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}