@extends('layout.app')
@section('main')
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
        <form action="{{ route('comic.destroy',  $item->id) }}" method="POST" >
            {{-- Posso utilizzare anche il metodo onsubmit nel form direttamente, ma tramite la consegna dell'esercizio utilizzo addEventListener sul file script così utilizzo il file js--}}
            {{-- onsubmit="return confirm('Do you really want to delete the comic?');" --}}
            @csrf
            @method('DELETE')

            <input type="submit" value="Cancella" class="bomba">


        </form>


    @endforeach


    <script src="{{ asset('js/app.js') }}"></script>

@endsection
