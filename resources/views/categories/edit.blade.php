<x-site-layout title="Edit city">

    <x-form method="post" route="{{route('categories.update', $category->id)}}" title="" submit="Update">
        @method('put')

        <x-form-input name="name" type="text" label="Category Title" placeholder="write name of category" value="{{$category->name}}"/>

    </x-form>

    @if(Auth::check() &&  Auth::user()->is_admin)
        <x-form method="post" route="{{route('categories.destroy', $category->id)}}" title="" submit="Delete">
            @method('delete')
        </x-form>
    @endif

</x-site-layout>
