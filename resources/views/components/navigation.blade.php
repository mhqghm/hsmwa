<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="d-flex flex-column align-items-center">
        <p class="font-weight-bold bold my-0">City Rater</p>
        <p class="font-weight-light small del my-0">
            <del>califica a tu madre</del>
        </p>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            @foreach($menu as $item)
                {{--                <a href="" class="@if($item['active']) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif px-3 py-2 rounded-md text-sm font-medium">{{$item['title']}}</a>--}}
                <li class="nav-item @if($item['active'])active @else @endif">
                    <a class="nav-link" href="{{$item['url']}}">{{$item['title']}} </a>
                </li>
            @endforeach
            {{--            @auth--}}
            {{--                <a href="{{route('dashboard')}}" class="@if($item['active']) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif px-3 py-2 rounded-md text-sm font-medium">Home</a>--}}
            {{--            @endauth--}}


            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link" href="#">Features</a>--}}
            {{--            </li>--}}
            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link" href="#">Pricing</a>--}}
            {{--            </li>--}}
        </ul>
        <span class="navbar-text">
            TODO auth
        </span>
    </div>
</nav>


