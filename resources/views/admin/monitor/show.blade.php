@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row"> 

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Monitor {{ $monitor->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/monitor') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/monitor/' . $monitor->id . '/edit') }}" title="Edit Monitor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/monitor' . '/' . $monitor->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Monitor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $monitor->id }}</td>
                                    </tr>
                                    <tr><th> Codigo </th><td> {{ $monitor->codigo }} </td></tr>
                                    <tr><th> Marca </th><td> {{ $monitor->marca }} </td></tr>
                                    <tr><th> Modelo </th><td> {{ $monitor->modelo }} </td></tr>
                                    <tr><th> Serie </th><td> {{ $monitor->serie }} </td></tr>
                                    <tr><th> Tamaño </th><td> {{ $monitor->tamaño }} </td></tr>
                                    <tr><th> Tipo </th><td> {{ $monitor->tipo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
