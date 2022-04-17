<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function loginAction(Request $request){
        $this->validate($request, [
            'userName' => 'required'
        ]);
        //signin here
        return redirect()->route('dashboard');
    }
}
