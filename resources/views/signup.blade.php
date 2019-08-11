@extends('layouts.layouts')
@section('content')

        <div class="container">
            <div class="contain">
                <div class="col-lg-12 card">
                    <div class="form-group">
                        <label for="name">نام</label>
                        <input type="text" class="form-control name" name="name" value="{{$name}}">
                    </div>

                    <div class="form-group">
                        <label for="email">ایمیل</label>
                        <input type="email" class="form-control" name="email" value="{{$email}}">
                    </div>

                    <div class="form-group">
                        <label for="password">کلمه عبور</label>
                        <input type="text" class="form-control" name="password" value="{{$password}}">
                    </div>
                    <div class="form-group">
                    <button class="btn btn-danger" disabled>اطلاعات تایید نشده است</button>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        swal("!به منظور تایید اطلاعات ایمیلی به شما ارسال شده است");
    </script>
@endsection