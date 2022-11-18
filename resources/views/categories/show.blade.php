<x-site-layout title="{{$category->name}}">
    <div class="d-flex flex-wrap justify-content-around">
        @foreach($category->reviews as $review)
            <div class="card mb-3 mx-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$review->city->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">by {{$review->user->name}}</h6>
                    <p href="#" class="card-text">{{$review->pivot->mark}}/5</p>
                    <p href="#" class="card-text">{{$review->pivot->comment}}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-site-layout>
