<div class="form-group">
    {{ Form::label('name', 'Nom') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>
