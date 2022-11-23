<x-site-layout title="List of cities on this site">


    @if(Auth::check() &&  Auth::user()->is_admin)
        <div class="d-flex flex-row-reverse">
            <a class="btn btn-primary" href="{{route('cities.create')}}">
                Add a city
            </a>
        </div>
    @endif

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($cities as $city)
            <div class="col">
                <div class="card my-2 h-100">
                    <img class="card-img-top vh-40" src="{{$city->image_link}}">
                    <div class="card-body">

                        <h5 class="card-title text-center">{{$city->name}}</h5>
                        <p class="card-text">City population {{$city->population}}</p>
                        <p class="card-text">{{$city->description}}</p>
                        <a href="{{route('cities.show', $city->id)}}" class="stretched-link">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-site-layout>
