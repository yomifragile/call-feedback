<div class="form-group">
    {{ Form::label($name,$title,['class' => 'control-label','id' => $name]) }}


    @if(isset($type) && $type == 'email')
        {{ Form::email($name,null,['class' => 'form-control','id' => $name]) }}
    @elseif(isset($type) && $type == 'password')
        {{ Form::password($name,['class' => 'form-control','id' => $name]) }}
    @else
        {{ Form::text($name,null,['class' => 'form-control','id' => $name]) }}
    @endif


</div>
