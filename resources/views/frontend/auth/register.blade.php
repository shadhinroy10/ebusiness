@extends('layouts.frontend')

@section('content')

    {{--banner area start--}}

    <section class="login">
        <div class="container login_container">
            <div class="login-card">
                <h3>Registration</h3>

                <form action="{{route('user.register.submit')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <lable>Name</lable>
                        <input type="text" name="name" id="name" class="form-input">
                        @if($errors->has('name'))
                            <small style="color:red">{{$errors->first('name')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <lable>Email</lable>
                        <input type="email" name="email" id="email" class="form-input">
                        @if($errors->has('email'))
                            <small style="color:red">{{$errors->first('email')}}</small>
                        @endif

                    </div>

                    <div class="form-group">
                        <lable>Password </lable>
                        <input type="Password" name="password" id="password" class="form-input">
                        @if($errors->has('password'))
                            <small style="color:red">{{$errors->first('password')}}</small>
                        @endif
                    </div>
                    <button class="btn btn-block">login</button>
                </form>
                <p>All ready have an account <a href="{{route('user.login')}}">Login Here</a> </p>

            </div>
        </div>

    </section>


@endsection
