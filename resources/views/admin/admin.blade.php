@extends('layouts.layouts')
@section('content')
    <form action="/email" method="get">
        @csrf
        <button type="submit" class="btn btn-primary">ارسال ایمیل به کاربران</button>
    </form>
@endsection