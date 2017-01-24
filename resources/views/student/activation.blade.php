<style>
    .activate {
        background: #28d;
        border-color: transparent;
        color: #fff;
        cursor: pointer;
        box-sizing: border-box;
        display: block;
        width: 100%;
        border-width: 1px;
        border-style: solid;
        padding: 16px;
        outline: 0;
        font-family: inherit;
        font-size: 0.95em;
    }
</style>

<h1>Hello <small>{{$student->email}} </small></h1>

<p>Welcome to LMS,</p>

<p>
    Please click on the following link to complete your registration. <br />
    
    and login with the following credentials <br />
    
    Email/Username <strong>{{$student->email}}</strong> <br />
    password: <strong> "Secret"</strong> <br />
    <a class="activate" href="{{ env('APP_URL') }}/student/activation/{{$student->email}}/{{$code}}" class="btn btn-primary">Activate My Account</a>
</p>

