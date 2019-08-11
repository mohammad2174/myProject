@extends('layouts.layouts')
@section('content')
    <form action="/result/{{$id->id}}" method="get">
        <h3 style="text-align: center;">.لطفا برای مشاهده اطلاعات برروی دکمه تایید اطلاعات کلیک کنید</h3>
        <button type="submit" style="text-align: center;height: 42px;background: #0c7905;border-radius: 3px;cursor: pointer;position: absolute;right: 44%;">تایید اطلاعات</button>
    </form>
@endsection
