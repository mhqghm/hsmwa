<x-site-layout title="Welcome Class">
<table>
    <th>
        <td>Name</td>
        <td>Population</td>
        <td>Picture</td>
    </th>
    @foreach($cities as $city)
        <tr>
            <td>
                {{$city->name}}
            </td>
            <td>
                {{$city->population}}
            </td>
            <td>
                <img src="{{$city->image_link}}"  alt="Image of the city"/>
            </td>
        </tr>
    @endforeach
</table>
</x-site-layout>
