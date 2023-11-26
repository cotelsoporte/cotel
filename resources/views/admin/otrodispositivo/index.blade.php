@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Otros Dispositivos</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/otrodispositivo/create') }}" class="btn btn-success btn-sm" title="Add New Otrodispositivo">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/otrodispositivo') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Codigo</th><th>Dispositivo</th><th>Marca</th><th>Comportamiento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($otrodispositivo as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->codigo }}</td><td>{{ $item->dispositivo }}</td><td>{{ $item->marca }}</td>
                                        <td>
                                            <a href="{{ url('/admin/otrodispositivo/' . $item->id) }}" title="View Otrodispositivo"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/otrodispositivo/' . $item->id . '/edit') }}" title="Edit Otrodispositivo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/otrodispositivo' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Otrodispositivo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=$id#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=1#">1</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=2#">2</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=3#">3</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=4#">4</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=5#">5</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=6#">6</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=7#">7</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=8#">8</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=9#">9</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=10#">10</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=11#">11</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=12#">12</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=13#">13</a></li>
    <li class="page-item"><a class="page-link" href="otrodispositivo?page=14#">14</a></li>
  </ul>
</nav> </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
