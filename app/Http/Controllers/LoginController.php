<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Social;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Users;
session_start();

class LoginController extends Controller
{
    public function login_facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    

    public function login_facebook_callback(){
        //lấy thông tin facebook đăng nhập
        $provider = Socialite::driver('facebook')->user();
        // echo '<pre>';
        //     print_r($provider);
        //     echo '</pre>';
        //     die();
        //kiểm tra nếu đăng nhập trước đó hay chưa
        $account = Social::where('provider','facebook')->where('provider_id',$provider->getId())->first();
        if($account){
            $account_name = Users::where('user_id',$account->user_id)->first();
            Session::put('user_name',$account_name->name);
            Session::put('user_id',$account_name->user_id);
            return redirect()->route('client.home');
        }else{
            //tạo mới tài khoản đăng nhập facebook thêm vào bảng Model Social bảng Social
            $social_login = new Social([
                'provider_id' => $provider->getId(),
                'provider' => 'facebook',
            ]);
            //kiểm tra nếu email facebook trùng với email trong bảng Users, thì đăng nhập
            $users = Users::where('email',$provider->getEmail())->first();
            if(!$users){
                //nếu không có trong bảng admini thì add dữ liệu vào bản admin
                $users = Users::create([
                    'name' => $provider->getName(),
                    'email' => $provider->getEmail(),
                    'password' => '',
                    'phone'=>'',
                    'roles'=>1,
                    'address'=>'',
                ]);
            }
            $social_login->login()->associate($users);
            $social_login->save();
            $account_name = Users::where('user_id',$social_login->user_id)->first();
            Session::put('user_name',$account_name->name);
            Session::put('user_id',$account_name->user_id);
            return redirect()->route('client.home');
        }

    }

    public function login_google(){
        return Socialite::driver('google')->redirect();
    }

    public function login_google_callback(){
        $users = Socialite::driver('google')->user(); 
        return $this->findOrCreateUser($users,'google');

    }

    public function findOrCreateUser($users,$provider){
        $authUser = Social::where('provider_id', $users->id)->first();
        // echo '<pre>';
        //     print_r($authUser);
        //     echo '</pre>';
        //     die();
        if($authUser){
            $account_name = Users::where('user_id',$authUser->user_id)->first();
            Session::put('user_name',$account_name->name);
            Session::put('user_id',$account_name->user_id);
            return redirect()->route('client.home');
        }else{
            $social = new Social([
                'provider_id' => $users->id,
                'provider' => strtoupper($provider)
            ]);
            $check = Users::where('email',$users->email)->first();
                if(!$check){
                    $check = Users::create([
                        'name' => $users->name,
                        'email' => $users->email,
                        'password' => '',
                        'phone' => '',
                        'roles'=>1,
                        'address'=>'',
                    ]);
                }
            $social->login()->associate($check);
            $social->save();
            $account_name = Users::where('user_id',$social->user_id)->first();
            Session::put('user_name',$account_name->name);
            Session::put('user_id',$account_name->user_id);
            return redirect()->route('client.home');
        }
    }




    public function logout(){
        Session::flush();
        return redirect()->route('client.home');
    }
}
