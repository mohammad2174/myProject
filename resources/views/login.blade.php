@extends('layouts.layouts')
@section('content')
    <form action="/signup" method="post">
        @csrf
        <div class="container">
        <div class="contain">
            <div class="col-lg-12 card">
                <div class="form-group">
                    <label for="name">نام</label>
                    @if($errors->first("name"))
                        <div class="alert alert-danger">{{$errors->first("name")}}</div>
                    @endif
                    <input type="text" class="form-control" name="name" placeholder="...نام خود را در اینجا وارد کنید">
                </div>

                <div class="form-group">
                    <label for="name">ایمیل</label>
                    @if($errors->first("email"))
                        <div class="alert alert-danger">{{$errors->first("email")}}</div>
                    @endif
                    <input type="email" class="form-control" name="email" placeholder="...ایمیل خود را در اینجا وارد کنید">
                </div>

                <div class="form-group">
                    <label for="name">کلمه عبور</label>
                    @if($errors->first("password"))
                        <div class="alert alert-danger">{{$errors->first("password")}}</div>
                    @endif
                    <input type="password" class="form-control" name="password" placeholder="...کلمه عبور خود را در اینجا وارد کنید">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info">ثبت نام در سایت</button>
                </div>

            </div>
        </div>
        </div>
    </form>
@endsection