
@extends('layouts.app')


 @section('main')

 {{-- Card top focus --}}

<div class="singleCard">
    <div class="cards-container">
        <div class="card">
            <img src="{{$comics['thumb']}}" alt="">
        </div>
     </div>
</div>
 {{--/ Card top focus --}}
 {{-- Card text focus --}}
 <div class="c-main">


    <div class="description">

        <div class="text-desc">
            <div class="title-container p-10">
                <h1>{{$comics['title']}}</h1>
             </div>
             <div class="availability">
                 <div class="text-desc ">
                    <p><span>U.S Price : </span>{{$comics['price']}}</p>
                </div>
                <div class="text-desc flex-end">
                    <span>Available</span>
                    <p>
                        <a href="/">
                            Check Availability
                        </a>

                    </p>
                </div>


             </div>
             <div class="p-top">
                <p>
                    {{$comics['description']}}
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
                {{-- title talent --}}
                <div class="talent">
                    <div class="talent-box">
                        <h1>TALENT</h1>
                    </div>
                 {{-- /title talent --}}
                 {{-- Art By  --}}
                    <div class="talent-box">
                        <div class="content">
                            <h1>Art By: </h1>
                            <div class="art">
                                @foreach ($comics['artists'] as $artist)
                                <p class="artist">{{ $artist }}</p>,
                            @endforeach
                            </div>

                        </div>
                    </div>
                 {{-- / Art By  --}}

                 {{-- Written By  --}}
                     <div class="talent-box">
                        <div class="content">
                            <h1>Written By: </h1>
                            <div class="art">
                                @foreach ($comics['writers'] as $writers)
                                <p class="artist">{{ $writers }}</p>,
                            @endforeach
                            </div>

                        </div>
                    </div>
                 {{-- / Written By  --}}
                </div>
                {{-- / Talent  --}}


                 {{-- Specs  --}}

                 <div class="talent">
                    <div class="talent-box">
                        <h1>SPECS</h1>
                    </div>
                   {{-- Series  --}}
                    <div class="talent-box">
                        <div class="content">
                            <h1>Series: </h1>
                            <div class="art">
                               <h5 class="artist">{{$comics['series']}}</h5>
                            </div>

                        </div>
                    </div>
                   {{-- / Series  --}}
                   {{-- Price   --}}
                     <div class="talent-box">
                        <div class="content">
                            <h1>U.S Price: </h1>
                            <div class="art">
                                <p class="series">{{$comics['price']}}</p>
                            </div>

                        </div>
                    </div>
                  {{-- /Price   --}}
                  {{-- Date  --}}
                  <div class="talent-box">
                        <div class="content">
                            <h1>On Sale Date: </h1>
                            <div class="art">
                                <p class="series">{{$comics['sale_date']}}</p>
                            </div>
                        </div>
                    </div>
                  {{-- / Date  --}}

                </div>
                 {{-- / Specs  --}}


            </div>
        </div>
    </div>

  </div>
  {{--/TALENT SECTION --}}

@endsection
