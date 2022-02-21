<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Social;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function create_product(){
        return view('admin.product.create_product');
    }
    public function login(){
        return view('admin.login.login');
    }
    
    public function view_user(){
        $users = DB::table('Users')
        ->join('Socials','Socials.user_id','=','Users.user_id')->paginate(10);
        return view('admin.users.view_user',compact('users'));
    }

}
