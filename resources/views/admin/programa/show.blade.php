@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row"> 

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Programa {{ $programa->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/programa') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/programa/' . $programa->id . '/edit') }}" title="Edit Programa"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/programa' . '/' . $programa->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Programa" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $programa->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Outlook </th><td> {{ $programa->outlook }} </td>
                                    </tr>
                                    <tr>
                                        <th> Word </th><td> {{ $programa->word }} </td>
                                    </tr>
                                    <tr>
                                        <th> Excel </th><td> {{ $programa->exce }} </td>
                                    </tr>
                                    <tr>
                                        <th> Sistema Operativo </th><td> {{ $programa->so }} </td>
                                    </tr>
                                    <tr>
                                        <th> Antivirus </th><td> {{ $programa->antivirus }} </td>
                                    </tr>
                                    <tr>
                                        <th> Internet </th><td> {{ $programa->internet }} </td>
                                    </tr>
                                    <tr>
                                        <th> Correo </th><td> {{ $programa->correo }} </td>
                                    </tr>
                                    <tr>
                                        <th> Otros Programas </th><td> {{ $programa->otrosprogramas }} </td>
                                    </tr>
                                    <tr>
                                        <th> Nombre del Equipo </th><td> {{ $programa->nombreequipo }} </td>
                                    </tr>
                                    <tr>
                                        <th> Direccion IP </th><td> {{ $programa->direccionip }} </td>
                                    </tr>
                                    <tr>
                                        <th> Codigo del Cpu </th><td> {{ $programa->cpu->codigo }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
