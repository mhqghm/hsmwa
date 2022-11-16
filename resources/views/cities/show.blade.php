<x-site-layout title="{{$city->name}}">


    <img src="{{$city->image_link}}" class="img-fluid">
    <div class="mb-6 flex justify-end">
        <a href="{{route('cities.edit', $city->id)}}" class="p-2 bg-green-500 text-green-50 rounded-lg">edit</a>
    </div>

    <h1 class="display-1">Population={{$city->population}}</h1>


</x-site-layout>
