@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Cpu {{ $cpu->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/cpu') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/cpu/' . $cpu->id . '/edit') }}" title="Edit Cpu"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/cpu' . '/' . $cpu->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Cpu" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $cpu->id }}</td>
                                    </tr>
                                    <tr><th> Codigo </th><td> {{ $cpu->codigo }} </td></tr>
                                    <tr><th> Marca </th><td> {{ $cpu->marca }} </td></tr>
                                    <tr><th> Modelo </th><td> {{ $cpu->modelo }} </td></tr>
                                    <tr><th> Procesador </th><td> {{ $cpu->procesador }} </td></tr>
                                    <tr><th> Memoria RAM </th><td> {{ $cpu->ram }} </td></tr>
                                    <tr><th> HDD </th><td> {{ $cpu->hdd }} </td></tr>
                                    <tr><th> CD </th><td> {{ $cpu->cd }} </td></tr>
                                    <tr><th> DVD </th><td> {{ $cpu->dvd }} </td></tr>
                                    <tr><th> Floppy </th><td> {{ $cpu->floppy }} </td></tr>
                                    <tr><th> Serie </th><td> {{ $cpu->serie }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
