<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact', [
            'subjects' => ['Health Insurance', 'Dental/Vision', 'Group Health Insurance - Business', 'Accident/Disability', 'Medicare Supplements', 'Cancer', 'Long Term Care', 'Life Insurance', 'Prescription Coverage', 'International Health Insurance']
        ]);
    }

    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'lastName' => 'nullable|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'zip' => 'nullable|regex:/\b\d{5}\b/',
            'subjects' => 'nullable|array|between:1,10'
        ]);

        Mail::to('cfoley@myhst.com')
            ->send(new Contact($request->all()));
        //->queue(new Contact($request->all()));

        return redirect('/contact');
    }
}
