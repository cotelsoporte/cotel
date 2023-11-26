<div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
    <label for="codigo" class="control-label">{{ 'Codigo' }}</label>
    <input class="form-control" name="codigo" type="text" id="codigo" value="{{ isset($cpu->codigo) ? $cpu->codigo : ''}}" >
    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('marca') ? 'has-error' : ''}}">
    <label for="marca" class="control-label">{{ 'Marca' }}</label>
    <input class="form-control" name="marca" type="text" id="marca" value="{{ isset($cpu->marca) ? $cpu->marca : ''}}" >
    {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('modelo') ? 'has-error' : ''}}">
    <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
    <input class="form-control" name="modelo" type="text" id="modelo" value="{{ isset($cpu->modelo) ? $cpu->modelo : ''}}" >
    {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('procesador') ? 'has-error' : ''}}">
    <label for="procesador" class="control-label">{{ 'Procesador' }}</label>
    <input class="form-control" name="procesador" type="text" id="procesador" value="{{ isset($cpu->procesador) ? $cpu->procesador : ''}}" >
    {!! $errors->first('procesador', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ram') ? 'has-error' : ''}}">
    <label for="ram" class="control-label">{{ 'RAM' }}</label>
    <input class="form-control" name="ram" type="text" id="ram" value="{{ isset($cpu->ram) ? $cpu->ram : ''}}" >
    {!! $errors->first('ram', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hdd') ? 'has-error' : ''}}">
    <label for="hdd" class="control-label">{{ 'HDD' }}</label>
    <input class="form-control" name="hdd" type="text" id="hdd" value="{{ isset($cpu->hdd) ? $cpu->hdd : ''}}" >
    {!! $errors->first('hdd', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cd') ? 'has-error' : ''}}">
    <label for="cd" class="control-label">{{ 'CD' }}</label>
    <input class="form-control" name="cd" type="text" id="cd" value="{{ isset($cpu->cd) ? $cpu->cd : ''}}" >
    {!! $errors->first('cd', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dvd') ? 'has-error' : ''}}">
    <label for="dvd" class="control-label">{{ 'DVD' }}</label>
    <input class="form-control" name="dvd" type="text" id="dvd" value="{{ isset($cpu->dvd) ? $cpu->dvd : ''}}" >
    {!! $errors->first('dvd', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('floppy') ? 'has-error' : ''}}">
    <label for="floppy" class="control-label">{{ 'Floppy' }}</label>
    <input class="form-control" name="floppy" type="text" id="floppy" value="{{ isset($cpu->floppy) ? $cpu->floppy : ''}}" >
    {!! $errors->first('floppy', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('serie') ? 'has-error' : ''}}">
    <label for="serie" class="control-label">{{ 'Serie' }}</label>
    <input class="form-control" name="serie" type="text" id="serie" value="{{ isset($cpu->serie) ? $cpu->serie : ''}}" >
    {!! $errors->first('serie', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
