<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
 
class ManageUserController
{
    public function index()
    {
        $users = User::orderBy('id', 'asc')->get();
        $total = User::count();
        return view('admin.manageuser.home', compact('users', 'total'));
    }
 
    public function create()
    {
        return view('admin.manageuser.create');
    }
 
    public function save(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'usertype' => 'required',
            'password' => 'required',
        ]);
        
        $validation['password'] = bcrypt($validation['password']); // Encrypt password
        
        $data = User::create($validation);
        if ($data) {
            session()->flash('success', 'User Added Successfully');
            return redirect(route('admin/manageuser'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/manageuser/create'));
        }
    }
    
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.manageuser.update', compact('users'));
    }
 
    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $name = $request->name;
        $email = $request->email;
        $usertype = $request->usertype;
        $password = $request->password;
 
        $users->name = $name;
        $users->password = $password;
        $users->email = $email;
        $users->usertype = $usertype;
        $data = $users->save();
        if ($data) {
            session()->flash('success', 'Users Update Successfully');
            return redirect(route('admin/manageuser'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin/manageuser/update'));
        }
    }
 
    public function delete($id)
    {
        $users = User::findOrFail($id)->delete();
        if ($users) {
            session()->flash('success', 'User Deleted Successfully');
            return redirect(route('admin/manageuser'));
        } else {
            session()->flash('error', 'Product Not Delete successfully');
            return redirect(route('admin/manageuser/delete'));
        }
    }
}
