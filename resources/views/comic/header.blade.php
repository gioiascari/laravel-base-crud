<header>
    <div class="menu">
        <div class="container">
            {{-- logo --}}
            <div class="logo">
                <img src="{{ asset('img/dc-logo.png') }}" alt="tag">
            </div>
            {{--/ logo --}}
            <ul>
                @foreach($navigation as $nav)
                    <li><a href="{{$nav['#active']}}">{{$nav['text']}}</a></li>
                @endforeach
            </ul>
            <div class="search-input">
                <input type="text" placeholder="Search &#xf002;">

              </div>
        </div>
    </div>
</header>
