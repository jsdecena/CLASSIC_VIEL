@extends('layouts.front.app')

@section('content')
    <hr>
    <!-- Main content -->
    <section class="container content">
        <div class="col-md-12">@include('layouts.errors-and-messages')</div>
        <div class="col-md-4 col-md-offset-4">
            <h2>Login to your account</h2>
            <form action="{{ route('login') }}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="row">
                <div class="form-group">
                    <input class="col-md-4" type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" autofocus>
              </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <input type="password" name="password" id="password" value="" class="form-control col-md-4" placeholder="Password">
              </div>
              </div>
                <div class="row">
                    <button class="btn btn-primary btn-block" type="submit">Login now</button>
                </div>
            </form>
            <div class="row">
                <hr>
                <a href="{{route('password.request')}}">I forgot my password</a><br>
                <a href="{{route('register')}}" class="text-center">No account? Register here.</a>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
