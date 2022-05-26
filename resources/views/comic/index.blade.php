<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/style.css">
    <title>Laravel Base Crud</title>
</head>
<body>


    <a href="{{ route('comic.create') }}"> Aggiungi </a>


    @foreach ($data as $item)
    <p>{{$item->id}}</p>


    <img class="w-100" src="{{ $item->thumb }}" alt="{{ $item->title }}">
        <h1>Title: {{$item->title}}</h1>

        <p>Price: {{$item->price}}$</p>
        <p>Date: {{$item->sale_date}}</p>
        <p>Type: {{$item->type}}</p>

        <a href="{{ route('comic.show' , $item->id) }}"> Show Description</a>
        <a href="{{ route('comic.edit' , $item->id) }}"> Modifca </a>
        <form action="{{ route('comic.destroy',  $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Cancella">

        </form>

    @endforeach


</body>
</html>

