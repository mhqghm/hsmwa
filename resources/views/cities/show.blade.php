<x-site-layout title="{{$city->name}}">


    @if(Auth::check() && Auth::user()->is_admin)
        <div class="d-flex flex-row-reverse">
            <a class="btn btn-primary" href="{{route('cities.edit', $city->id)}}">
                Edit
            </a>
        </div>
    @endif


    <div class="d-flex justify-content-center">
        <img src="{{$city->image_link}}" class="">
    </div>

    <h1 class="display-5 mx-auto">Population={{$city->population}}</h1>

    <h1 class="display-5 mx-auto">{{$city->description}}</h1>

    <div class="list-group">
        @foreach ($city->reviews as $review)
            <p class="list-group-item list-group-item-action">

            <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">{{$review->user->email}}</h3>
            </div>
            <div>
                <h5 class="mb-1">{{$review->city_mark}}</h5>
            </div>
            <div>

                <ul>
                    @foreach ($review->categories as $category)
                        <li>
                            <h5>
                                <a href="{{route('categories.show', $category->id)}}"> {{$category->name}} </a> {{$category->pivot->mark}}
                                /5
                            </h5>
                            <p>{{$category->pivot->comment}}</p>
                        </li>
                    @endforeach
                </ul>

            </div>

            </p>

        @endforeach
    </div>


</x-site-layout>
