@if($errors->has($name))
    <span class="form-control-feedback"><i class="fa fa-fw fa-remove"></i></span>
    <p class="text-danger">{{{$errors->first($name)}}}</p>
@endif