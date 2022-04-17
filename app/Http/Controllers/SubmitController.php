<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubmitController extends Controller
{
    public function index()
    {
        return view('submit');
    }
    public function store(Request $request){
        $this->validate($request, [
            'track' => 'required|min:1|max:15',
            'name' => 'required',
            'score' => 'required|min:1',
            //use date selector'date' => 'required',
            'car' => 'required',
            //emu
            'proof' => 'required'
            //email
        ]);

        dd('store');

        //redirect

    }
}
