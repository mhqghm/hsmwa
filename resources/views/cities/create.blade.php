<x-site-layout title="Add city">

    <x-form method="post" route="{{route('cities.store')}}" title="" submit="Create">
        <x-form-input name="name" type="text" label="City Title" placeholder="put city name" value=""/>
        <x-form-input name="population" type="number" label="City population" placeholder="put population of city" value=""/>
        <x-form-input name="image_link" type="url" label="City image" placeholder="insert image url" value=""/>
        <x-form-input name="description" type="text" label="City description" placeholder="provide short description of a city" value=""/>

    </x-form>


</x-site-layout>
