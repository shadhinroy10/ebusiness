@extends('layouts.frontend')

@section('content')

{{--banner area start--}}

<section class="login">
    <div class="container login_container">
        <div class="login-card">
            <h3>Login</h3>

            @if(Session::has('error'))
                <p style="color:red" class="text-center">{{Session::get('error')}}</p>
            @endif

            <form method="post" action="{{route('user.login.submit')}}" >
                @csrf
                <div class="form-group">
                    <lable>Email</lable>
                    <input type="email" name="email" id="email" class="form-input">
                </div>

                <div class="form-group">
                    <lable>Password </lable>
                    <input type="password" name="password" id="password" class="form-input">
                </div>
                <button class="btn btn-block">Login</button>
            </form>
            <p>Don't you have any account? <a href="{{route('user.register')}}">Register Here</a> </p>

        </div>
    </div>

</section>


{{--product area end--}}

@endsection
