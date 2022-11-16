<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <input type="{{$type}}" value="{{ old($name, $value)  }}" class="form-control" id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder}}">
</div>
