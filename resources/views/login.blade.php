@extends('layouts.layouts')
@section('content')
    <form action="/signup" method="post">
        @csrf
        <div class="container">
        <div class="contain">
            <div class="col-lg-12 card">
                <div class="form-group">
                    <label for="name">نام</label>
                    <input type="text" class="form-control" name="name" placeholder="...نام خود را در اینجا وارد کنید">
                </div>

                <div class="form-group">
                    <label for="name">ایمیل</label>
                    <input type="email" class="form-control" name="email" placeholder="...ایمیل خود را در اینجا وارد کنید">
                </div>

                <div class="form-group">
                    <label for="name">کلمه عبور</label>
                    <input type="password" class="form-control" name="password" placeholder="...کلمه عبور خود را در اینجا وارد کنید">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info">ثبت نام در سایت</button>
                </div>
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>
    </div>
    @endif
            </div>
        </div>
        </div>
    </form>
@endsection