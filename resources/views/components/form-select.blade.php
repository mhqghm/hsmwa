<div class="form-group has-validation">
    <label for="{{$name}}">{{$label}}</label>
    <select class="form-select" aria-label="Default select example" id="{{$name}}" name="{{$name}}" value="{{ old($name, $value)  }}">
        <option selected>{{$placeholder}}</option>
{{--        @foreach($optinos as $option)--}}
{{--            <option value="{{$option->value}}">$option->text</option>--}}
{{--        @endforeach--}}
        {{$slot}}
    </select>
    <x-form-error name="{{$name}}"/>
</div>
