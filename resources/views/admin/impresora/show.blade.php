@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Impresora {{ $impresora->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/impresora') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/impresora/' . $impresora->id . '/edit') }}" title="Edit Impresora"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/impresora' . '/' . $impresora->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Impresora" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $impresora->id }}</td>
                                    </tr>
                                    <tr><th> Codigo </th><td> {{ $impresora->codigo }} </td></tr>
                                    <tr><th> Marca </th><td> {{ $impresora->marca }} </td></tr>
                                    <tr><th> Modelo </th><td> {{ $impresora->modelo }} </td></tr>
                                    <tr><th> Tipo </th><td> {{ $impresora->tipo }} </td></tr>
                                    <tr><th> Serie </th><td> {{ $impresora->serie }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
