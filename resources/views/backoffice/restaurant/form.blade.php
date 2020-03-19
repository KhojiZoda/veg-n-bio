<div class="form-group">
    {{ Form::label('name', 'Nom du restaurant') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('address', 'Adresse du restaurant') }}
    {{ Form::text('address', Input::old('address'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('menu_id', 'Menu') }}
    <select name="menu_id" class="form-control">
      @foreach ($menus as $menu)
        <option value="{{$menu->id}}">{{$menu->name}}</option>
      @endforeach
    </select>
</div>
