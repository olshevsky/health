<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CareerController extends Controller
{
    private $cvFolder = 'files/cv/';
    private $cvPrefix = 'CV-';
    private $mailTo = 'cfoley@myhst.com';

    public function index()
    {
        return view('pages.career');
    }

    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'lastName' => 'nullable|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'zip' => 'nullable|regex:/\b\d{5}\b/',
            'info' => 'nullable|string',
            'cv' => 'nullable|file|mimes:pdf,doc,docx,txt'
        ]);

        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $file->move($this->cvFolder, $this->cvPrefix .now()->timestamp .'-' .$file->getClientOriginalName());
        }
        else{
            $file = null;
        }

        Mail::to($this->mailTo)
            ->send(new JobApplication($request->all(), $file));

        return redirect('/career');
    }
}
