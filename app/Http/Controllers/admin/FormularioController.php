<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Formulario;
use Illuminate\Http\Request;
use App\Models\Cpu;
use App\Models\Usuario;
use App\Models\Monitor;
use App\Models\Teclado;
use App\Models\Raton;
use App\Models\Impresora;
use App\Models\Parlante;
use App\Models\Otrodispositivo;
use App\Models\Programa;
use PDF;
use Alert;

class FormularioController extends Controller
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
            $formulario = Formulario::where('codigo', 'LIKE', "%$keyword%")
                ->orWhere('nroformulario', 'LIKE', "%$keyword%")
                ->orWhere('fecha', 'LIKE', "%$keyword%")
                ->orWhere('detalletrabajo', 'LIKE', "%$keyword%")
                ->orWhere('codigonuevo', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('gerencia', 'LIKE', "%$keyword%")
                ->orWhere('regional', 'LIKE', "%$keyword%")
                ->orWhere('departamento', 'LIKE', "%$keyword%")
                ->orWhere('fechaactual', 'LIKE', "%$keyword%")
                ->orWhere('usuario_id', 'LIKE', "%$keyword%")
                ->orWhere('cpu_id', 'LIKE', "%$keyword%")
                ->orWhere('monitor_id', 'LIKE', "%$keyword%")
                ->orWhere('teclado_id', 'LIKE', "%$keyword%")
                ->orWhere('raton_id', 'LIKE', "%$keyword%")
                ->orWhere('impresora_id', 'LIKE', "%$keyword%")
                ->orWhere('parlante_id', 'LIKE', "%$keyword%")
                ->orWhere('otrodispositivo_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $formulario = Formulario::latest()->paginate($perPage);
        }

        return view('admin.formulario.index', compact('formulario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $cpus=Cpu::All();
        $usuarios=Usuario::All();
        $monitors=Monitor::All();
        $teclados=Teclado::All();
        $ratons=Raton::All();
        $impresoras=Impresora::All();
        $parlantes=Parlante::All();
        $otrodispositivos=Otrodispositivo::All();
        return view('admin.formulario.create', compact('cpus', 'usuarios', 'monitors', 'teclados', 'ratons', 'impresoras', 'parlantes', 'otrodispositivos'));
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

        Formulario::create($requestData);
        Alert::alert()->success('Registro Guardado','El formulario se guardo correctamente');
        return redirect('admin/formulario')->with('flash_message', 'Formulario added!');
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
        $formulario = Formulario::findOrFail($id);

        return view('admin.formulario.show', compact('formulario'));
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
        $formulario = Formulario::findOrFail($id);
        $usuarios=Usuario::All();
        $cpus=Cpu::All();
        $monitors=Monitor::All();
        $teclados=Teclado::All();
        $ratons=Raton::All();
        $impresoras=Impresora::All();
        $parlantes=Parlante::All();
        $otrodispositivos=Otrodispositivo::All();

        return view('admin.formulario.edit', compact('formulario','usuarios', 'cpus', 'monitors', 'teclados', 'ratons', 'impresoras', 'parlantes', 'otrodispositivos'));
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

        $formulario = Formulario::findOrFail($id);
        $formulario->update($requestData);
        Alert::alert()->success('Registro Modificado','Se modifico correctamente');
        return redirect('admin/formulario')->with('flash_message', 'Formulario updated!');
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
        Formulario::destroy($id);
        Alert::alert()->warning('Formulario Eliminado','Se elimino correctamente');
        return redirect('admin/formulario')->with('flash_message', 'Formulario deleted!');
    }
    //hola pdf
    public function MostrarPdf()
    {
        $view=\View::make('vistapdf')->render();
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('hola.pdf');
    }
    //formulario
    /*public function Formularios($id)
    {
       
        $imp = Formulario::findOrFail($id);
        $us = Usuario::findOrFail($id); 
        $cpus = Cpu::findOrFail($id);
        $mon = Monitor::findOrFail($id);
        $tec = Teclado::findOrFail($id);
        $rat = Raton::findOrFail($id);
        $parl = Parlante::findOrFail($id);
        $impre = Impresora::findOrFail($id);
        $otrodisp = Otrodispositivo::findOrFail($id);
        $prog = Programa::findOrFail($id);
        $view=\View::make('formularios', compact('imp', 'us', 'cpus', 'mon', 'tec', 'rat', 'parl', 'impre', 'otrodisp', 'prog'))->render();
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('formulario.pdf');
    }*/    
    
    public function Formularios($id)
    {
        $formulariopdf = Formulario::findOrFail($id);
        $view=\View::make('formularios', compact('formulariopdf'))->render();
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('formulario.pdf');
    }
}

