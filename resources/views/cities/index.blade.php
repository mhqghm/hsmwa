<x-site-layout title="List of cities on this site">

    <div class="mb-6 flex justify-end">
        <a href="{{route('cities.create')}}" class="p-2 bg-green-500 text-green-50 rounded-lg">Add a city</a>
    </div>

    <table class="table table-hover" style="max-width:80%;margin-left: auto;margin-right: auto;">
        <thead>
        <tr>
            <th scope="col" width="150">Name</th>
            <th scope="col" width="250">Population</th>
            <th scope="col" width="50">Image</th>
            <th scope="col" width="100"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach ($cities as $city)
            <tr>
                <td>{{$city->name}}
                </td>
                <td>{{$city->population}}</td>
                <td><img src="{{$city->image_link}}" style="max-height: 150px;max-width: 150px;"></td>
                <td>
                    <a href="{{route('cities.show', $city->id)}}">Show</a>
                    <a href="{{route('cities.edit', $city->id)}}">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</x-site-layout>
