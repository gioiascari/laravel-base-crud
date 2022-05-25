<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Base Crud</title>
</head>
<body>

    @forelse ($data as $item)

        <h1>Title: {{$item['title']}}</h1>

        <p>Description: {{$item['description']}}</p>
        <a href="{{ route('comic.show', $item->id) }}"> Show</a>
        <p>Price: {{$item['price']}}$</p>
        <p>Series: {{$item['series']}}</p>
        <p>Date: {{$item['sale_date']}}</p>
        <p>Type: {{$item['type']}}</p>


    @empty
    Non ci sono risultati
    @endforelse

</body>
</html>

