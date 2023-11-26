<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Impresora;
use Illuminate\Http\Request;
use Alert;
class ImpresoraController extends Controller
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
            $impresora = Impresora::where('codigo', 'LIKE', "%$keyword%")
                ->orWhere('marca', 'LIKE', "%$keyword%")
                ->orWhere('modelo', 'LIKE', "%$keyword%")
                ->orWhere('tipo', 'LIKE', "%$keyword%")
                ->orWhere('serie', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $impresora = Impresora::latest()->paginate($perPage);
        }

        return view('admin.impresora.index', compact('impresora'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.impresora.create');
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

        Impresora::create($requestData);
        Alert::alert()->success('Registro Guardado','Se guardo correctamente');
        return redirect('admin/impresora')->with('flash_message', 'Impresora added!');
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
        $impresora = Impresora::findOrFail($id);

        return view('admin.impresora.show', compact('impresora'));
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
        $impresora = Impresora::findOrFail($id);

        return view('admin.impresora.edit', compact('impresora'));
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

        $impresora = Impresora::findOrFail($id);
        $impresora->update($requestData);
        Alert::alert()->success('Registro Modificado','Se modifico correctamente');
        return redirect('admin/impresora')->with('flash_message', 'Impresora updated!');
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
        Impresora::destroy($id);
        Alert::alert()->warning('Registro Eliminado','Se elimino un registro correctamente');
        return redirect('admin/impresora')->with('flash_message', 'Impresora deleted!');
    }
}
