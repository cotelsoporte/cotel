@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Formulario {{ $formulario->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/formulario') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/formulario/' . $formulario->id . '/edit') }}" title="Edit Formulario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <a href="{{ url('/admin/formulariopdf/' . $formulario->id) }}" title="Imp Formulario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Imprimir</button></a>
                        <form method="POST" action="{{ url('admin/formulario' . '/' . $formulario->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Formulario" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/> 
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td colspan="2">{{ $formulario->id }}</td>
                                    </tr>
                                    <h3>Datos del Formulario</h3>
                                    <tr><th> Codigo </th><td colspan="2"> {{ $formulario->codigo }} </td></tr>
                                    <tr><th> Nro de Formulario </th><td colspan="2"> {{ $formulario->nroformulario }} </td></tr>
                                    <tr><th> Fecha </th><td colspan="2"> {{ $formulario->fecha }} </td></tr>
                                    <tr><th> Detalle del Trabajo </th><td colspan="2"> {{ $formulario->detalletrabajo }} </td></tr>
                                    <tr><th> Codigo/Nombre del Usuario </th><td> {{ $formulario->usuario->codigo }} <td>{{ $formulario->usuario->usuario }}</td></td></tr>
                                    <tr><th> Codigo/Serie del Cpu </th><td> {{ $formulario->cpu->codigo }} <td>{{ $formulario->cpu->serie }}</td></td></tr>
                                    <tr><th> Codigo/Serie del Monitor </th><td> {{ $formulario->monitor->codigo }} <td>{{ $formulario->monitor->serie }}</td></td></tr>
                                    <tr><th> Codigo/Serie del Teclado </th><td> {{ $formulario->teclado->codigo }} <td>{{ $formulario->teclado->serie }}</td></td></tr>
                                    <tr><th> Codigo/Serie del Raton </th><td> {{ $formulario->raton->codigo }} <td>{{ $formulario->raton->serie }}</td></td></tr>
                                    <tr><th> Codigo/Serie de la Impresora </th><td> {{ $formulario->impresora->codigo }} <td>{{ $formulario->impresora->serie }}</td></td></tr>
                                    <tr><th> Codigo/Serie del Parlante </th><td> {{ $formulario->parlante->codigo }} <td>{{ $formulario->parlante->serie }}</td></td></tr>
                                    <tr><th> Codigo/Serie de Otro Dispositivo </th><td> {{ $formulario->otrodispositivo->codigo }} <td>{{ $formulario->otrodispositivo->serie }}</td></td></tr>
                                    <tr><th> Codigo del Nuevo Usuario </th><td colspan="2"> {{ $formulario->codigonuevo }} </td></tr>
                                    <tr><th> Nombre </th><td colspan="2"> {{ $formulario->nombre }} </td></tr>
                                    <tr><th> Gerencia </th><td colspan="2"> {{ $formulario->gerencia }} </td></tr>
                                    <tr><th> Regional </th><td colspan="2"> {{ $formulario->regional }} </td></tr>
                                    <tr><th> Departamento </th><td colspan="2"> {{ $formulario->departamento }} </td></tr>
                                    <tr><th> Fecha Actual </th><td colspan="2"> {{ $formulario->fechaactual }} </td></tr>
                                </tbody>
                                
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
