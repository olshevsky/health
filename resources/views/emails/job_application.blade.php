<div>
    <h1>New e-mail from Health Insurance Results job application form.</h1>
    @isset($name)
        <p>First name: {{ $name }}</p>
    @endisset
    @isset($lastName)
        <p>Last name: {{ $lastName }}</p>
    @endisset
    <p>E-mail: {{ $email }}</p>
    <p>Phone number: {{ $phone }}</p>
    @isset($info)
        <p>Additional information:</p>
        <p>{{ $info }}</p>
    @endisset
</div>
