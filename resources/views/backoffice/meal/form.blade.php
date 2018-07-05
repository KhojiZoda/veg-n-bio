<div class="form-group">
    {{ Form::label('name', 'Nom') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('price', 'Prix (en €)') }}
    {{ Form::number('price', Input::old('name'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
  {{ Form::label('type', 'Type') }}
  <select name="type" class="form-control">
    <option value="starter">Starter</option>
    <option value="main">Main</option>
    <option value="drink">Drinks</option>
    <option value="dessert">Dessert</option>
  </select>
</div>
