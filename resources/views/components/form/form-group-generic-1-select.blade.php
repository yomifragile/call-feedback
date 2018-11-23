<div class="form-group">
    {{ Form::label($name,$title,['class' => 'control-label','id' => $name]) }}
    {{ Form::select($name,$data,null,['class' => 'form-control']) }}
</div>
