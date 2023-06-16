<?php

namespace App\Http\Controllers;


use App\Models\relevamiento;
use App\Models\relevamientos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelevamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index()
    {
        $relevamientos = DB::table('relevamientos')->get();
        //ruta + compact array de la tabla -- agendas migracion
        return view('relevamientofiles.index', compact('relevamientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('relevamientofiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->validate([
            'empleado'=>   ['required', 'string', 'max:100'],
            'sector'=>     ['required', 'string', 'max:30'],
            'direccionip'=>['required', 'string', 'max:20'],
            'email'=>      ['required', 'string', 'max:50'],
            'legajo'=>     ['required', 'string', 'max:100'],
            'telinterno'=> ['required', 'string', 'max:30'],
            
        ]);
        DB::table('relevamientos')->insert([
            'empleado'=>     $datos["empleado"],
            'sector'=>       $datos["sector"],
            'direccionip' => $datos["direccionip"],
            'email'=>        $datos["email"],
            'legajo' =>      $datos["legajo"],
            'telinterno'=>   $datos["telinterno"]
        ]);
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\relevamiento  $relevamiento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relevamientos = relevamiento::find($id);
        return view('relevamientofiles.mostrar', compact('relevamientos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\relevamiento  $relevamiento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relevamientos = relevamiento::find($id);
        return view('relevamientofiles.editar', compact('relevamientos'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\relevamiento  $relevamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = request()->validate([
            'empleado'=>   ['required', 'string', 'max:100'],
            'sector'=>     ['required', 'string', 'max:30'],
            'direccionip'=>['required', 'string', 'max:100'],
            'email'=>      ['required', 'string', 'max:30'],
            'legajo'=>     ['required', 'string', 'max:100'],
            'telinterno'=> ['required', 'string', 'max:100'],
        ]);
        DB::table('relevamientos')->where('id', $id)->update([
            'empleado'=>   $datos ["empleado"],
            'sector'=>     $datos ["sector"],
            'direccionip'=>$datos ["direccionip"],
            'email'=>      $datos ["email"],
            'legajo'=>     $datos ["legajo"],
            'telinterno'=> $datos ["telinterno"],
            
        ]);
        return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\relevamiento  $relevamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('relevamientos')
        ->where('id', $id)
        ->delete();
        return redirect('/index');
    }
}
