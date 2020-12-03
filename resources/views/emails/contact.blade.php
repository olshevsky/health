<div>
    <h1>New e-mail from Health Insurance Results contact form.</h1>
    @isset($name)
        <p>First name: {{ $name }}</p>
    @endisset
    @isset($lastName)
        <p>Last name: {{ $lastName }}</p>
    @endisset
    <p>E-mail: {{ $email }}</p>
    <p>Phone number: {{ $phone }}</p>
    @isset($subjects)
        <p>Subjects: </p>
        <ul>
            @foreach ($subjects as $subject)
                <li>{{ $subject }}</li>
            @endforeach
        </ul>
    @endisset
</div>
