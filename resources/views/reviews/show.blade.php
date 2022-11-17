<x-site-layout title="Review of city {{$review->city->name}} by user {{$review->user->id}} ">

    <h1 class="display-1">Population={{$review->city_mark}}</h1>

    <div class="mb-6 flex justify-end">
        @foreach ($review->categories as $category)

            <h1 class="display-1">name {{$category->name}}</h1>
            <h1 class="display-1">mark {{$category->pivot->mark}}</h1>
            <h1 class="display-1">comment {{$category->pivot->comment}}</h1>

        @endforeach
    </div>



</x-site-layout>
