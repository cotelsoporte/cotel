@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Parlantes</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/parlante/create') }}" class="btn btn-success btn-sm" title="Add New Parlante">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/parlante') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Codigo</th><th>Marca</th><th>Serie</th><th>Comportameinto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($parlante as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->codigo }}</td><td>{{ $item->marca }}</td><td>{{ $item->serie }}</td>
                                        <td>
                                            <a href="{{ url('/admin/parlante/' . $item->id) }}" title="View Parlante"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/parlante/' . $item->id . '/edit') }}" title="Edit Parlante"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/parlante' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Parlante" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="parlante?page=$id#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=1#">1</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=2#">2</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=3#">3</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=4#">4</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=5#">5</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=6#">6</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=7#">7</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=8#">8</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=9#">9</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=10#">10</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=11#">11</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=12#">12</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=13#">13</a></li>
    <li class="page-item"><a class="page-link" href="parlante?page=14#">14</a></li>
  </ul>
</nav></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
