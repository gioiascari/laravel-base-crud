


@extends('app')
 @section('main')


 {{-- Card top focus --}}

<div class="singleCard">
    <div class="cards-container">
        <div class="card">
            <img src="{{$comic->thumb}}" alt="">
        </div>
     </div>
</div>
<div class="c-main">


    <div class="description">

        <div class="text-desc">
            <div class="title-container p-10">
                <h1>{{$comic->title}}</h1>
             </div>
             <div class="availability">
                 <div class="text-desc ">
                    <p><span>U.S Price : </span>{{$comic->price}}</p>
                </div>
                <div class="text-desc flex-end">
                    <span>Available</span>
                    <p>
                        <a href="{{ route('comic.index') }}">
                            Click Me :)
                        </a>

                    </p>
                </div>


             </div>
             <div class="p-top">
                <p>
                    {{$comic->description}}
                </p>
             </div>
        </div>
        <img src="{{ asset('img/adv.jpg') }}" alt="">
     </div>
 </div>
</div>
 {{--/ Card text focus --}}
  {{--TALENT SECTION --}}
  <div class="talents-container">
      <div class="c-main">
            <div class="wrapper">
                <div class="talent">
                    <div class="talent-box">
                        <h1>TALENT</h1>
                    </div>
                    <div class="talent-box">
                        <div class="content">
                            <h1>Oops there's an error ! Please try again later </h1>
                        </div>
                    </div>
                     <div class="talent-box">
                        <div class="content">
                            <h1>Oops there's an error ! Please try again later </h1>
                        </div>
                    </div>
                </div>

                 <div class="talent">
                    <div class="talent-box">
                        <h1>SPECS</h1>
                    </div>
                    <div class="talent-box">
                        <div class="content">
                            <h1>Oops there's an error ! Please try again later  </h1>

                        </div>
                    </div>
                     <div class="talent-box">
                        <div class="content">
                            <h1>Oops there's an error ! Please try again later </h1>
                        </div>
                    </div>
                  <div class="talent-box">
                        <div class="content">
                            <h1>Oops there's an error ! Please try again later  </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>

@endsection

