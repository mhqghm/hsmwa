<x-site-layout title="Edit city">

    <x-form method="post" route="{{route('categories.update', $category->id)}}" title="" submit="Update">
        @method('put')

        <x-form-input name="name" type="text" label="Category Title" placeholder="give a title of at least 5 characters" value="{{$category->name}}"/>

    </x-form>


</x-site-layout>
