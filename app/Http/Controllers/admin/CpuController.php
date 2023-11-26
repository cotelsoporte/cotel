<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Cpu;
use Illuminate\Http\Request;
use Alert;
class CpuController extends Controller
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
            $cpu = Cpu::where('codigo', 'LIKE', "%$keyword%")
                ->orWhere('marca', 'LIKE', "%$keyword%")
                ->orWhere('modelo', 'LIKE', "%$keyword%")
                ->orWhere('procesador', 'LIKE', "%$keyword%")
                ->orWhere('ram', 'LIKE', "%$keyword%")
                ->orWhere('hdd', 'LIKE', "%$keyword%")
                ->orWhere('cd', 'LIKE', "%$keyword%")
                ->orWhere('dvd', 'LIKE', "%$keyword%")
                ->orWhere('floppy', 'LIKE', "%$keyword%")
                ->orWhere('serie', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cpu = Cpu::latest()->paginate($perPage);
        }

        return view('admin.cpu.index', compact('cpu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.cpu.create');
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

        Cpu::create($requestData);
        Alert::alert()->success('Registro Guardado','Se guardo correctamente');
        return redirect('admin/cpu')->with('flash_message', 'Cpu added!');
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
        $cpu = Cpu::findOrFail($id);

        return view('admin.cpu.show', compact('cpu'));
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
        $cpu = Cpu::findOrFail($id);

        return view('admin.cpu.edit', compact('cpu'));
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

        $cpu = Cpu::findOrFail($id);
        $cpu->update($requestData);
        Alert::alert()->success('Registro Modificado','Se modifico correctamente');
        return redirect('admin/cpu')->with('flash_message', 'Cpu updated!');
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
        Cpu::destroy($id);
        Alert::alert()->warning('Registro Eliminado','Se elimino un registro correctamente');
        return redirect('admin/cpu')->with('flash_message', 'Cpu deleted!');
    }
}
