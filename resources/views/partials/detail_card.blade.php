
<div class="album-card">
        <a class="my-5" href="{{ route('single-card', ['id' => $key]) }}">
            <div class="album-image">
                <img class="thumb" src="{{$albumcover['thumb']}}" alt="{{$albumcover['title']}}">
            </div>
            <h6 class="text-white">{{$albumcover['title']}}</h6>
        </a>
        </div>