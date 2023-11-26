<h3>Datos del formulario</h3>
<div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
    <label for="codigo" class="control-label">{{ 'Codigo' }}</label>
    <input class="form-control" name="codigo" type="text" id="codigo" value="{{ isset($formulario->codigo) ? $formulario->codigo : ''}}" >
    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nroformulario') ? 'has-error' : ''}}">
    <label for="nroformulario" class="control-label">{{ 'Nro de Formulario' }}</label>
    <input class="form-control" name="nroformulario" type="text" id="nroformulario" value="{{ isset($formulario->nroformulario) ? $formulario->nroformulario : ''}}" >
    {!! $errors->first('nroformulario', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="date" id="fecha" value="{{ isset($formulario->fecha) ? $formulario->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detalletrabajo') ? 'has-error' : ''}}">
    <label for="detalletrabajo" class="control-label">{{ 'Detalle del Trabajo' }}</label>
    <input class="form-control" name="detalletrabajo" type="text" id="detalletrabajo" value="{{ isset($formulario->detalletrabajo) ? $formulario->detalletrabajo : ''}}" >
    {!! $errors->first('detalletrabajo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('usuario_id') ? 'has-error' : ''}}">
    <label for="usuario_id" class="control-label">{{ 'Codigo de Usuario' }}</label>

        <select class="form-control" name="usuario_id" id="usuario_id">

        @foreach($usuarios as $usuario)
            <option value="{{$usuario->id}}">{{$usuario->codigo}}</option>
            <option value="{{$usuario->id}}">{{$usuario->usuario}}</option>
        @endforeach

        </select>

    {!! $errors->first('usuario_id', '<p class="help-block">:message</p>') !!}
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
<div class="form-group {{ $errors->has('monitor_id') ? 'has-error' : ''}}">
    <label for="monitor_id" class="control-label">{{ 'Monitor Id' }}</label>

        <select class="form-control" name="monitor_id" id="monitor_id">

            @foreach($monitors as $monitor)
                <option value="{{$monitor->id}}">{{$monitor->codigo}}</option>
                <option value="{{$monitor->id}}">{{$monitor->serie}}</option>
            @endforeach

        </select>

    {!! $errors->first('monitor_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('teclado_id') ? 'has-error' : ''}}">
    <label for="teclado_id" class="control-label">{{ 'Teclado Id' }}</label>

        <select class="form-control" name="teclado_id" id="teclado_id">

            @foreach($teclados as $teclado)
                <option value="{{$teclado->id}}">{{$teclado->codigo}}</option>
                <option value="{{$teclado->id}}">{{$teclado->serie}}</option>
                <option value="{{$teclado->id}}">{{$teclado->marca}}</option>
            @endforeach

        </select>

    {!! $errors->first('teclado_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('raton_id') ? 'has-error' : ''}}">
    <label for="raton_id" class="control-label">{{ 'Raton Id' }}</label>

        <select class="form-control" name="raton_id" id="raton_id">

            @foreach($ratons as $raton)
                <option value="{{$raton->id}}">{{$raton->codigo}}</option>
                <option value="{{$raton->id}}">{{$raton->serie}}</option>
                <option value="{{$raton->id}}">{{$raton->marca}}</option>
            @endforeach

        </select>

    {!! $errors->first('raton_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('impresora_id') ? 'has-error' : ''}}">
    <label for="impresora_id" class="control-label">{{ 'Impresora Id' }}</label>

        <select class="form-control" name="impresora_id" id="impresora_id">

            @foreach($impresoras as $impresora)
                <option value="{{$impresora->id}}">{{$impresora->codigo}}</option>
                <option value="{{$impresora->id}}">{{$impresora->serie}}</option>
            @endforeach

        </select>

    {!! $errors->first('impresora_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('parlante_id') ? 'has-error' : ''}}">
    <label for="parlante_id" class="control-label">{{ 'Parlante Id' }}</label>

        <select class="form-control" name="parlante_id" id="parlante_id">

            @foreach($parlantes as $parlante)
                <option value="{{$parlante->id}}">{{$parlante->codigo}}</option>
                <option value="{{$parlante->id}}">{{$parlante->serie}}</option>
            @endforeach

        </select>

    {!! $errors->first('parlante_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('otrodispositivo_id') ? 'has-error' : ''}}">
    <label for="otrodispositivo_id" class="control-label">{{ 'Otrodispositivo Id' }}</label>

        <select class="form-control" name="otrodispositivo_id" id="otrodispositivo_id">

            @foreach($otrodispositivos as $otrodispositivo)
                <option value="{{$otrodispositivo->id}}">{{$otrodispositivo->codigo}}</option>
                <option value="{{$otrodispositivo->id}}">{{$otrodispositivo->dispositivo}}</option>
            @endforeach

        </select>

    {!! $errors->first('otrodispositivo_id', '<p class="help-block">:message</p>') !!}
</div>

<h3>Datos del nuevo usuario</h3>
<div class="form-group {{ $errors->has('codigonuevo') ? 'has-error' : ''}}">
    <label for="codigonuevo" class="control-label">{{ 'Codigo' }}</label>
    <input class="form-control" name="codigonuevo" type="text" id="codigonuevo" value="{{ isset($formulario->codigonuevo) ? $formulario->codigonuevo : ''}}" >
    {!! $errors->first('codigonuevo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($formulario->nombre) ? $formulario->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gerencia') ? 'has-error' : ''}}">
    <label for="gerencia" class="control-label">{{ 'Gerencia' }}</label>
    <input class="form-control" name="gerencia" type="text" id="gerencia" value="{{ isset($formulario->gerencia) ? $formulario->gerencia : ''}}" >
    {!! $errors->first('gerencia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('regional') ? 'has-error' : ''}}">
    <label for="regional" class="control-label">{{ 'Regional' }}</label>
    <input class="form-control" name="regional" type="text" id="regional" value="{{ isset($formulario->regional) ? $formulario->regional : ''}}" >
    {!! $errors->first('regional', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('departamento') ? 'has-error' : ''}}">
    <label for="departamento" class="control-label">{{ 'Departamento' }}</label>
    <input class="form-control" name="departamento" type="text" id="departamento" value="{{ isset($formulario->departamento) ? $formulario->departamento : ''}}" >
    {!! $errors->first('departamento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaactual') ? 'has-error' : ''}}">
    <label for="fechaactual" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fechaactual" type="date" id="fechaactual" value="{{ isset($formulario->fechaactual) ? $formulario->fechaactual : ''}}" >
    {!! $errors->first('fechaactual', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
