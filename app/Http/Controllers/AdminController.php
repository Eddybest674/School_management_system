<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AdminController extends Controller
{
    public function list(){
        $data['getRecord']= User::getAdmin();
        $data['header_title'] = "Admin List";
        return view('admin.admin.list',$data);
    }

    
    public function add(){
        
        $data['header_title'] = "Add new Admin"; //for the page title
        return view('admin.admin.add',$data);
    }

    public function insert(request $request){
        
        $user = new User;
        $user->name= trim($request->name);
        $user->email= trim($request->email);
        $user->password= Hash::make($request->password);
        $user->user_type= 1;
        $user->save();

        return redirect('admin/admin/list')->with('success', 'Admin added successfully');



    }













}
