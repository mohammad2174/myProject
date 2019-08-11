@extends('layouts.layouts')
@section('content')

<table class="table">
    <thead>
    <tr>
        <th>نام</th>
        <th>ایمیل</th>
        <th>وضعیت ثبت نام</th>
    </tr>
    </thead>
    <tbody>
    <tr>
@foreach($user as $users)
    <td>{{$users->name}}</td>
    <td>{{$users->email}}</td>
@if($users->status ==1)
    <td style="color: green">تایید شد</td>
    @else
        <td style="color: red">تایید نشد</td>
    @endif
    @endforeach
    </tr>
    </tbody>
</table>
<form action="/" method="get">
    <div class="col-lg-9 col-md-10 col-sm-9">
<button type="submit" class="btn btn-success">بازگشت به صفحه اصلی</button>
    </div>
</form>
@endsection
