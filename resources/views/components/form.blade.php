<div>
    <h2 class="text-lg font-bold mb-4">{{$title}}</h2>
    <form method="{{$method}}" action="{{$route}}">
        @csrf
        {{$slot}}
        <button type="submit" class="btn btn-primary">{{$submit}}</button>
    </form>
</div>
