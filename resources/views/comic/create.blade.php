@extends('app')

@section('main')
<div class="flex-form">
    <div class="style-form">
        <h1>Create It!:)</h1>
        <form action="{{ route('comic.store') }}" method="POST">
            @csrf


            <label for="title">Title</label>
            <input type="text" name='title' required>

            <label for="series">Series</label>
            <input type="text" name='series' required>

            <label for="description">Desc</label>
            <input type="text" name='description' required>

            <label for="title">Thumb</label>
            <input type="text" name='thumb' required>

            <label for="price">Price</label>
            <input type="text" name='price' required>

            <label for="sale_date">On Sale</label>
            <input type="date" name="sale_date" required>

            <label for="type">Type</label>
            <input type="text" name='type' required>

            <div class="invia">
            <input type="submit" value="invia">

            </div>


        </form>
    </div>

</div>
@endsection

