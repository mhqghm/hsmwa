<x-site-layout title="Add city">

    <x-form method="post" route="{{route('cities.store')}}" title="" submit="Create">
        <x-form-input name="name" type="text" label="City Title" placeholder="give a title of at least 5 characters" value=""/>
        <x-form-input name="population" type="number" label="City population" placeholder="give a title of at least 5 characters" value=""/>
        <x-form-input name="image_link" type="url" label="City image" placeholder="give a title of at least 5 characters" value=""/>
{{--        <x-form-text-area name="body" label="Actual city" placeholder="You must write something" :errors="$errors" value=""/>--}}
    </x-form>


</x-site-layout>
