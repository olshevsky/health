<?php

namespace App\Http\Controllers;

use App\Mail\JobApplication as JobApplicationMail;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CareerController extends Controller
{
    private $cvFolder = 'files/cv/';
    private $cvPrefix = 'CV-';

    public function index()
    {
        return view('pages.career');
    }

    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            //'lastName' => 'nullable|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            //'zip' => 'nullable|regex:/\b\d{5}\b/',
            //'info' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx,txt'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $this->cvPrefix .now()->timestamp .'-' .$file->getClientOriginalName();
            $file->move($this->cvFolder, $fileName);
        }
        else{
            $file = null;
            $fileName = null;
        }

        $application = new JobApplication();
        $application->first_name = $request->get('name');
        $application->last_name = $request->get('lastName');
        $application->email = $request->get('email');
        $application->phone = $request->get('phone');
        $application->zip_code = $request->get('zip');
        $application->info = $request->get('info');
        $application->file_path = $fileName;
        $application->save();

        Mail::to(config('mail.mailto'))
            ->send(new JobApplicationMail($request->all(), $file, $fileName));
            //->queue(new JobApplication($request->all(), $file, $fileName));

        return response()->json([
            'status' => 'ok'
        ], 200);
    }
}
