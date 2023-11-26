@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row"> 

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Teclado {{ $teclado->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/teclado') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/teclado/' . $teclado->id . '/edit') }}" title="Edit Teclado"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/teclado' . '/' . $teclado->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Teclado" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $teclado->id }}</td>
                                    </tr>
                                    <tr><th> Codigo </th><td> {{ $teclado->codigo }} </td></tr><tr><th> Marca </th><td> {{ $teclado->marca }} </td></tr><tr><th> Serie </th><td> {{ $teclado->serie }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
