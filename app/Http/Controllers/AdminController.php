<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $jobApplications = JobApplication::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.applications', [
            'jobApplications' => $jobApplications
        ]);
    }
}
