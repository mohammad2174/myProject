@foreach($id as $i)
<form action="/result/{{$i->id}}" method="get">
<h1>عزیز,<span>{{ $name }}</span></h1>
<h3 style="text-align: center;">.لطفا برای مشاهده اطلاعات برروی دکمه تایید اطلاعات کلیک کنید</h3>
<button type="submit" style="text-align: center;height: 42px;background: #0c7905;border-radius: 3px;cursor: pointer;position: absolute;right: 44%;">تایید اطلاعات</button>
</form>
@endforeach