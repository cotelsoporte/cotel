<div class="form-group {{ $errors->has('outlook') ? 'has-error' : ''}}">
    <label for="outlook" class="control-label">{{ 'Outlook' }}</label>
    <input class="form-control" name="outlook" type="text" id="outlook" value="{{ isset($programa->outlook) ? $programa->outlook : ''}}" >
    {!! $errors->first('outlook', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('word') ? 'has-error' : ''}}">
    <label for="word" class="control-label">{{ 'Word' }}</label>
    <input class="form-control" name="word" type="text" id="word" value="{{ isset($programa->word) ? $programa->word : ''}}" >
    {!! $errors->first('word', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('exce') ? 'has-error' : ''}}">
    <label for="exce" class="control-label">{{ 'Excel' }}</label>
    <input class="form-control" name="exce" type="text" id="exce" value="{{ isset($programa->exce) ? $programa->exce : ''}}" >
    {!! $errors->first('exce', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('so') ? 'has-error' : ''}}">
    <label for="so" class="control-label">{{ 'Sistema Operativo' }}</label>
    <input class="form-control" name="so" type="text" id="so" value="{{ isset($programa->so) ? $programa->so : ''}}" >
    {!! $errors->first('so', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('antivirus') ? 'has-error' : ''}}">
    <label for="antivirus" class="control-label">{{ 'Antivirus' }}</label>
    <input class="form-control" name="antivirus" type="text" id="antivirus" value="{{ isset($programa->antivirus) ? $programa->antivirus : ''}}" >
    {!! $errors->first('antivirus', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('internet') ? 'has-error' : ''}}">
    <label for="internet" class="control-label">{{ 'Internet' }}</label>
    <input class="form-control" name="internet" type="text" id="internet" value="{{ isset($programa->internet) ? $programa->internet : ''}}" >
    {!! $errors->first('internet', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('correo') ? 'has-error' : ''}}">
    <label for="correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="correo" type="text" id="correo" value="{{ isset($programa->correo) ? $programa->correo : ''}}" >
    {!! $errors->first('correo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('otrosprogramas') ? 'has-error' : ''}}">
    <label for="otrosprogramas" class="control-label">{{ 'Otros Programas' }}</label>
    <input class="form-control" name="otrosprogramas" type="text" id="otrosprogramas" value="{{ isset($programa->otrosprogramas) ? $programa->otrosprogramas : ''}}" >
    {!! $errors->first('otrosprogramas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombreequipo') ? 'has-error' : ''}}">
    <label for="nombreequipo" class="control-label">{{ 'Nombre del Equipo' }}</label>
    <input class="form-control" name="nombreequipo" type="text" id="nombreequipo" value="{{ isset($programa->nombreequipo) ? $programa->nombreequipo : ''}}" >
    {!! $errors->first('nombreequipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('direccionip') ? 'has-error' : ''}}">
    <label for="direccionip" class="control-label">{{ 'Direccion IP' }}</label>
    <input class="form-control" name="direccionip" type="text" id="direccionip" value="{{ isset($programa->direccionip) ? $programa->direccionip : ''}}" >
    {!! $errors->first('direccionip', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cpu_id') ? 'has-error' : ''}}">
    <label for="cpu_id" class="control-label">{{ 'Codigo del Cpu' }}</label>

    <select class="form-control" name="cpu_id" id="cpu_id">

        @foreach($cpus as $cpu)
            <option value="{{$cpu->id}}">{{$cpu->codigo}}</option>
            <option value="{{$cpu->id}}">{{$cpu->serie}}</option>
        @endforeach

    </select>


    {!! $errors->first('cpu_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
