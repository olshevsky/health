<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function career()
    {
        return view('pages.career');
    }
    public function contact()
    {
        return view('pages.contact');
    }

    public function sendContact(Request $request)
    {
       $res = $validatedData = $request->validate([
            'name' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'zip' => 'required',
            'topic' => ''
        ]);


       var_dump($res);
       die();
    }
}
