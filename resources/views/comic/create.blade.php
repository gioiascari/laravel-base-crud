@extends('app')

@section('main')

<form action="{{ route('comic.store') }}" method="POST">
    @csrf

    <label for="title">Title</label>
    <input type="text" name='title'>

    <label for="series">Series</label>
    <input type="text" name='series'>

    <label for="description">Desc</label>
    <input type="text" name='description'>

    <label for="title">Thumb</label>
    <input type="text" name='thumb'>

    <label for="price">Price</label>
    <input type="text" name='price'>

    <label for="sale_date">On Sale</label>
    <input type="date" name="sale_date">

    <label for="type">Type</label>
    <input type="text" name='type'>


    <input type="submit" value="invia">Invia

</form>
@endsection

