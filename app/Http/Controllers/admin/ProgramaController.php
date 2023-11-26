<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Programa;
use Illuminate\Http\Request;
use App\Models\Cpu;
use Alert;
class ProgramaController extends Controller
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
            $programa = Programa::where('outlook', 'LIKE', "%$keyword%")
                ->orWhere('word', 'LIKE', "%$keyword%")
                ->orWhere('exce', 'LIKE', "%$keyword%")
                ->orWhere('so', 'LIKE', "%$keyword%")
                ->orWhere('antivirus', 'LIKE', "%$keyword%")
                ->orWhere('internet', 'LIKE', "%$keyword%")
                ->orWhere('correo', 'LIKE', "%$keyword%")
                ->orWhere('otrosprogramas', 'LIKE', "%$keyword%")
                ->orWhere('nombreequipo', 'LIKE', "%$keyword%")
                ->orWhere('direccionip', 'LIKE', "%$keyword%")
                ->orWhere('cpu_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $programa = Programa::latest()->paginate($perPage);
        }

        return view('admin.programa.index', compact('programa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $cpus=Cpu::All();
        return view('admin.programa.create', compact('cpus'));
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

        Programa::create($requestData);
        Alert::alert()->success('Registro Guardado','Se guardo correctamente');
        return redirect('admin/programa')->with('flash_message', 'Programa added!');
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
        $programa = Programa::findOrFail($id);

        return view('admin.programa.show', compact('programa'));
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
        $programa = Programa::findOrFail($id);
        $cpus=Cpu::All();

        return view('admin.programa.edit', compact('programa', 'cpus'));
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

        $programa = Programa::findOrFail($id);
        $programa->update($requestData);
        Alert::alert()->success('Registro Modificado','Se modifico correctamente');
        return redirect('admin/programa')->with('flash_message', 'Programa updated!');
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
        Programa::destroy($id);
        Alert::alert()->warning('Registro Eliminado','Se elimino un registro correctamente');
        return redirect('admin/programa')->with('flash_message', 'Programa deleted!');
    }
}
