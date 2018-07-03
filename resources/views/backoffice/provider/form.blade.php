<div class="form-group">
    {{ Form::label('name', 'Nom') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('price', 'Prix') }}
    {{ Form::number('price', Input::old('price'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('quantity', 'Quantité') }}
    {{ Form::number('quantity', Input::old('quantity'), array('class' => 'form-control')) }}
</div>
