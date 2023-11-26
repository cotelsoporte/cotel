<div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
    <label for="codigo" class="control-label">{{ 'Codigo' }}</label>
    <input class="form-control" name="codigo" type="text" id="codigo" value="{{ isset($usuario->codigo) ? $usuario->codigo : ''}}" >
    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('usuario') ? 'has-error' : ''}}">
    <label for="usuario" class="control-label">{{ 'Usuario' }}</label>
    <input class="form-control" name="usuario" type="text" id="usuario" value="{{ isset($usuario->usuario) ? $usuario->usuario : ''}}" >
    {!! $errors->first('usuario', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('regional') ? 'has-error' : ''}}">
    <label for="regional" class="control-label">{{ 'Regional' }}</label>
    <input class="form-control" name="regional" type="text" id="regional" value="{{ isset($usuario->regional) ? $usuario->regional : ''}}" >
    {!! $errors->first('regional', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('piso') ? 'has-error' : ''}}">
    <label for="piso" class="control-label">{{ 'Piso' }}</label>
    <input class="form-control" name="piso" type="text" id="piso" value="{{ isset($usuario->piso) ? $usuario->piso : ''}}" >
    {!! $errors->first('piso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('departamento') ? 'has-error' : ''}}">
    <label for="departamento" class="control-label">{{ 'Departamento' }}</label>
    <input class="form-control" name="departamento" type="text" id="departamento" value="{{ isset($usuario->departamento) ? $usuario->departamento : ''}}" >
    {!! $errors->first('departamento', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
