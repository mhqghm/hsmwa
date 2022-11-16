<x-site-layout title="Edit city">

    <x-form method="post" route="{{route('cities.update', $city->id)}}" title="" submit="Update">
        @method('put')


        <x-form-input name="name" type="text" label="City Title" placeholder="give a title of at least 5 characters" value="{{$city->name}}"/>
        <x-form-input name="population" type="number" label="City population" placeholder="give a title of at least 5 characters" value="{{$city->population}}"/>
        <x-form-input name="image_link" type="url" label="City image" placeholder="give a title of at least 5 characters" value="{{$city->image_link}}"/>

    </x-form>


</x-site-layout>
