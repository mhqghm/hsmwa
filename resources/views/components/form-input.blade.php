<div class="form-group has-validation">
    <label for="{{$name}}">{{$label}}</label>
    <input type="{{$type}}" value="{{ old($name, $value)  }}" class="form-control" id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder}}">
    <x-form-error name="{{$name}}" :errors="$errors"/>
</div>
