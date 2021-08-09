<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\User\Repositories\UserRepository;

class SiteController extends Controller
{
    public $userRepo;
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('site::index');
    }

    public function about(){
        return view('site::pages.about');
    }

    public function plan(){
        return view('site::pages.plan');
    }

    public function services(){
        return view('site::pages.services');
    }

    public function contact(){
        return view('site::pages.contact');
    }

    public function login(){
        return view('site::pages.login');
    }

    public function register(){
        return view('site::pages.register');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (\Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|password_confirmation|min:6',
            'coin_type' => 'required',
            'coin_address' => 'min:26|max:35|nullable'
        ]);

        $userCredential = [
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
            'coin_type' => trim($request->input('coin_type')),
            'wallet_address' => trim($request->input('wallet_address')),


        ];

        $this->userRepo->create($userCredential);

        session()->flash('message', 'Your account is created');

        return redirect()->route('login');
    }

    public function logout(){
        \Auth::logout();

        return redirect()->route('login');
    }
}
