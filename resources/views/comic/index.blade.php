@extends('app')
@section('main')
<main>
    <div class="main">
        <div class="container-main">
            <div class="series-span">

                <span class="btn"> CURRENT SERIES</span>

            </div>


            <div class="cards-container">

                @foreach ($data as $item)
                <div class="cards-thumb">
                    <a href="{{ route('comic.show' , $item->id) }}">
                        <img class="w-100" src="{{ $item->thumb }}" alt="{{ $item->title }}">
                     </a>
                    <h4>Title: {{$item->title}}</h4>

                    <p>Price: {{$item->price}}$</p>
                    <p>Date: {{$item->sale_date}}</p>
                    <p>Type: {{$item->type}}</p>

                     <div class="edit-btn">
                    <a href="{{ route('comic.edit' , $item->id) }}"> Edit </a>

                     </div>

                    <form action="{{ route('comic.destroy',  $item->id) }}" method="POST" >
                        {{-- Posso utilizzare anche il metodo onsubmit nel form direttamente, ma tramite la consegna dell'esercizio utilizzo addEventListener sul file script così utilizzo il file js--}}
                        {{-- onsubmit="return confirm('Do you really want to delete the comic?');" --}}
                        @csrf
                        @method('DELETE')

                        <input type="submit" value="Delete" class="bomba">


                    </form>

                </div>

                @endforeach

            </div>
            <div class="btn-container">
                <span class="btn">
                    <a href="{{ route('comic.create') }}">
                        ADD MORE
                    </a>

                </span>
            </div>

        </div>

    </div>
</main>


@endsection













