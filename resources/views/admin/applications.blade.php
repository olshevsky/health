@extends('admin.layout')

@section('title', 'Health Insurance Results - Contact Us')

@section('content')
<div class="container-fluid bg-3 text-center" style="width: 80%;">
    <h3 class="m-b">Job Applications</h3>
    <div class="row">
        <table class="table table-hover text-left">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Zip code</th>
                    <th scope="col">Info</th>
                    <th scope="col">Download CV</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobApplications as $jobApplication)
                    <tr>
                        <td>{{ $jobApplication->created_at }}</td>
                        <td>{{ $jobApplication->first_name }}</td>
                        <td>{{ $jobApplication->last_name }}</td>
                        <td>{{ $jobApplication->email }}</td>
                        <td>{{ $jobApplication->phone }}</td>
                        <td>{{ $jobApplication->zip }}</td>
                        <td>{{ $jobApplication->info }}</td>
                        <td>
                            @if ($jobApplication->file_path !== '')
                                <a class="btn btn-primary" href="{{ url('/').'/files/cv/'.$jobApplication->file_path }}" download role="button" aria-label="Left Align">
                                    Download &nbsp;<span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $jobApplications->links() }}
    </div>
</div>
@endsection
