<x-site-layout title="Edit city">

    <x-form method="post" route="{{route('cities.update', $city->id)}}" title="" submit="Update">
        @method('put')


        <x-form-input name="name" type="text" label="City Title" placeholder="put city name" value="{{$city->name}}" />
        <x-form-input name="population" type="number" label="City population" placeholder="put population of city" value="{{$city->population}}"/>
        <x-form-input name="image_link" type="url" label="City image" placeholder="insert image url" value="{{$city->image_link}}"/>
        <x-form-input name="description" type="text" label="City description" placeholder="provide short description of a city" value="{{$city->description}}"/>

    </x-form>

    @if(Auth::check() && Auth::user()->is_admin)
        <x-form method="post" route="{{route('cities.destroy', $city->id)}}" title="" submit="Delete">
            @method('delete')
        </x-form>
    @endif

</x-site-layout>
