@extends('app')

@section('main')
<div class="flex-form">

    <div class="style-form">
        <h1>Edit Me</h1>
        <form action="{{ route('comic.update',  $comic->id) }}" method="POST">
            @csrf

            @method('PUT')

            <label for="title">Title</label>
            <input type="text" name='title' value="{{$comic->title}}">

            <label for="series">Series</label>
            <input type="text" name='series' value="{{$comic->series}}">

            <label for="description">Desc</label>
            <input type="text" name='description' value="{{$comic->description}}">

            <label for="title">Thumb</label>
            <input type="text" name='thumb' value="{{$comic->thumb}}">

            <label for="price">Price</label>
            <input type="text" name='price'value="{{$comic->price}}">

            <label for="sale_date">On Sale</label>
            <input type="date" name="sale_date" value="{{$comic->sale_date}}">

            <label for="type">Type</label>
            <input type="text" name='type' value="{{$comic->sale_date}}">

            <div class="invia">
            <input type="submit" value="invia">
            </div class="invia">

        </form>
    </div>
</div>

@endsection
