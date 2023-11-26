<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Parlante;
use Illuminate\Http\Request;
use Alert;
class ParlanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $parlante = Parlante::where('codigo', 'LIKE', "%$keyword%")
                ->orWhere('marca', 'LIKE', "%$keyword%")
                ->orWhere('serie', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $parlante = Parlante::latest()->paginate($perPage);
        }

        return view('admin.parlante.index', compact('parlante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.parlante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        Parlante::create($requestData);
        Alert::alert()->success('Registro Guardado','Se guardo correctamente');
        return redirect('admin/parlante')->with('flash_message', 'Parlante added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $parlante = Parlante::findOrFail($id);

        return view('admin.parlante.show', compact('parlante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $parlante = Parlante::findOrFail($id);

        return view('admin.parlante.edit', compact('parlante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $parlante = Parlante::findOrFail($id);
        $parlante->update($requestData);
        Alert::alert()->success('Registro Modificado','Se modifico correctamente');
        return redirect('admin/parlante')->with('flash_message', 'Parlante updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Parlante::destroy($id);
        Alert::alert()->warning('Registro Eliminado','Se elimino un registro correctamente');
        return redirect('admin/parlante')->with('flash_message', 'Parlante deleted!');
    }
}
