@extends('emails.layout')

@section('title', 'New e-mail from Health Insurance Results')

@section('content')
    <h1>New e-mail from Health Insurance Results job application form.</h1>
    @if ($name != '')
        <p>First name: {{ $name }}</p>
    @endif
    @if ($lastName != '')
        <p>Last name: {{ $lastName }}</p>
    @endif
    <p>E-mail: {{ $email }}</p>
    <p>Phone number: {{ $phone }}</p>
    @if ($zip != '')
        <p>Zip code: {{ $zip }}</p>
    @endif
    @if ($info != '')
        <p>
            <strong>Additional information:</strong>
        </p>
        <p>{{ $info }}</p>
    @endif
@endsection
