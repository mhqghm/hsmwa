<x-site-layout title="List of cities on this site">

    <div class="d-flex flex-row-reverse">
        <a class="btn btn-primary" href="{{route('cities.create')}}">
            Add a city
        </a>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($cities as $city)
            <div class="col">
                <div class="card my-2 h-100">
                    <img class="card-img-top vh-40" src="{{$city->image_link}}">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$city->name}}</h5>
                        <p class="card-text">Country KEk Population {{$city->population}}</p>
                        <p class="card-text">Great city sadasdasd a asdas sad @appendsdasdas</p>
                        <p class="card-text">Best for KEK 5, LOL 4 from 105 reviews</p>
                        <a href="{{route('cities.show', $city->id)}}" class="stretched-link">Details</a>
                    </div>
{{--                    <div class="card-footer">--}}
{{--                        <small class="text-muted">Last updated 3 mins ago</small>--}}
{{--                    </div>--}}
                </div>
            </div>
        @endforeach
    </div>

</x-site-layout>
