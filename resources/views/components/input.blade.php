<div>
    <div class="form-group">
        <label for="exampleInputName">{{$label}}</label>
        <input type="{{$type}}" class="form-control" name="{{$name}}" id="exampleInputName" aria-describedby="nameHelp">
        <span class="text-danger" >@error($name) {{$message}} @enderror</span>
    </div>
</div>