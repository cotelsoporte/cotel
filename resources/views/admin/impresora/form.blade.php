<div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
    <label for="codigo" class="control-label">{{ 'Codigo' }}</label>
    <input class="form-control" name="codigo" type="text" id="codigo" value="{{ isset($impresora->codigo) ? $impresora->codigo : ''}}" >
    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('marca') ? 'has-error' : ''}}">
    <label for="marca" class="control-label">{{ 'Marca' }}</label>
    <input class="form-control" name="marca" type="text" id="marca" value="{{ isset($impresora->marca) ? $impresora->marca : ''}}" >
    {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('modelo') ? 'has-error' : ''}}">
    <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
    <input class="form-control" name="modelo" type="text" id="modelo" value="{{ isset($impresora->modelo) ? $impresora->modelo : ''}}" >
    {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <input class="form-control" name="tipo" type="text" id="tipo" value="{{ isset($impresora->tipo) ? $impresora->tipo : ''}}" >
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('serie') ? 'has-error' : ''}}">
    <label for="serie" class="control-label">{{ 'Serie' }}</label>
    <input class="form-control" name="serie" type="text" id="serie" value="{{ isset($impresora->serie) ? $impresora->serie : ''}}" >
    {!! $errors->first('serie', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
