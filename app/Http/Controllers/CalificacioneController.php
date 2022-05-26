<?php

namespace App\Http\Controllers;

use App\Models\Calificacione;
use Illuminate\Http\Request;

/**
 * Class CalificacioneController
 * @package App\Http\Controllers
 */
class CalificacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:ver-calificacion|crear-calificacion|editar-calificaicon|borrar-calificacion', ['only' => ['index']]);
        $this->middleware('permission:crear-calificacion', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-calificacion', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-calificaiocn', ['only' => ['destroy']]);
    }
    public function index()
    {
        $calificaciones = Calificacione::paginate();

        return view('calificacione.index', compact('calificaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $calificaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $calificacione = new Calificacione();
        return view('calificacione.create', compact('calificacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Calificacione::$rules);

        $calificacione = Calificacione::create($request->all());

        return redirect()->route('calificaciones.index')
            ->with('success', 'Calificacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calificacione = Calificacione::find($id);

        return view('calificacione.show', compact('calificacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calificacione = Calificacione::find($id);

        return view('calificacione.edit', compact('calificacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Calificacione $calificacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calificacione $calificacione)
    {
        request()->validate(Calificacione::$rules);

        $calificacione->update($request->all());

        return redirect()->route('calificaciones.index')
            ->with('success', 'Calificacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $calificacione = Calificacione::find($id)->delete();

        return redirect()->route('calificaciones.index')
            ->with('success', 'Calificacione deleted successfully');
    }
}
