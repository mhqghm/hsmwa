<x-site-layout title="Welcome To City Rater">

    <div class="row row-cols-1 row-cols-md-2 g-2">
        <div class="col">
            <p class="display-2 text-center">Latest Cities</p>
            <ul class="list-group">
                @foreach ($cities as $city)
                    <li class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{$city->name}}</h5>
                            <small class="text-muted">Population {{$city->population}}</small>
                        </div>
                        <img
                            src="{{$city->image_link}}"
                            style="height: 20vh" alt="quixote">
                        <p class="mb-1">{{$city->description}}.</p>
                        <small class="text-muted">Show</small>
                    </li>
                @endforeach
            </ul>
        </div>

        <li class="col">

            <p class="display-2 text-center">Latest Reviews</p>
            <ul class="list-group">
                @foreach ($reviews as $review)
                    <li class="list-group-item">
                        <p class="display-6">Review of city {{$review->city->name}} by {{$review->user->name}}</p>
                        <p class="fs-4 fw-semibold">City mark {{$review->city_mark}}/5</p>

                        <div class="mb-6 flex justify-end">
                            @foreach ($review->categories as $category)
                                <p>Category {{$category->name}}: {{$category->pivot->mark}}/5 </p>
                                <p>Comment: {{$category->pivot->comment}}</p>
                            @endforeach
                        </div>
                    </li>
                @endforeach
            </ul>

    </div>
    </div>

</x-site-layout>
