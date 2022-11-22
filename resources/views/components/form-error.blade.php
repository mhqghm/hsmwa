<div>
    @foreach ($errors->get($name) as $error)
        <div class="text-danger">
            {{ $error }}
        </div>
    @endforeach
</div>
