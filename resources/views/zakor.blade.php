



@foreach ($pages as $item)
    <h1>{{$item->name}}</h1>
@endforeach
<form action="zakorStore" method="POST" >
    {{ csrf_field() }}
    <input type="text" name="name">
    <input type="submit" value="send" >
</form>
