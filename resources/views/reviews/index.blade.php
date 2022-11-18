<x-site-layout title="Admin panel of reviews">

    <div class="d-flex flex-row-reverse">
        <a class="btn btn-primary" href="{{route('reviews.create')}}">
            Add a review
        </a>
    </div>
    <table class="table table-hover" style="max-width:80%;margin-left: auto;margin-right: auto;">
        <thead>
        <tr>
            <th scope="col" width="150">City name</th>
            <th scope="col" width="250">User password</th>
            <th scope="col" width="50">City mark</th>
            <th scope="col" width="100"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach ($reviews as $review)
            <tr>
                <td>{{$review->city->name}}
                </td>
                <td>{{$review->user->name}}</td>
                <td>{{$review->city_mark}} </td>
                <td>
                    <a href="{{route('reviews.show', $review->id)}}">Show</a>
                    <a href="{{route('reviews.edit', $review->id)}}">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</x-site-layout>
