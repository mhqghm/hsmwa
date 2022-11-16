<x-site-layout title="Add category">

    <x-form method="post" route="{{route('categories.store')}}" title="" submit="Create">
        <x-form-input name="name" type="text" label="Category Title" placeholder="give a title of at least 5 characters" value=""/>
    </x-form>


</x-site-layout>
