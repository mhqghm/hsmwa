<x-site-layout title="List of cities on this site">

    @if(Auth::check() && Auth::user()->is_admin)
        <div class="d-flex flex-row-reverse">
            <a class="btn btn-primary" href="{{route('categories.create')}}">
                Add a category
            </a>
        </div>
    @endif

    <table class="table table-hover" style="max-width:80%;margin-left: auto;margin-right: auto;">
        <thead>
        <tr>
            <th scope="col" width="150">Category Title</th>
            <th scope="col" width="100"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach ($categories as $category)
            <tr>
                <td>{{$category->name}}
                </td>
                <td>
                    <a href="{{route('categories.show', $category->id)}}">Show</a>
                    @if(Auth::check() &&  Auth::user()->is_admin)
                        <a href="{{route('categories.edit', $category->id)}}">Edit</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</x-site-layout>
