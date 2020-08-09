<?php

namespace App\Http\Controllers;

use App\Subtipo;
use Illuminate\Http\Request;

class TipoFitosanitarioController extends Controller
{
    public function index()
    {
        return view('vistas.config.tipoFitosanitarios.index',
            [
                'tipos' => Subtipo::where('tipo', '=', 'TipoFitosanitario')->paginate(10),
            ]);
    }

    public function create()
    {
        return view('vistas.config.tipoFitosanitarios.create');
    }


    public function store(Request $request)
    {
        $tipo = new Subtipo();
        $tipo->nombre = $request['nombre'];
        $tipo->tipo = 'TipoFitosanitario';
        $tipo->save();

        return redirect('config/tipoFitosanitarios');
    }

    public function edit($id)
    {
        return view('vistas.config.tipoFitosanitarios.edit',
            [
                'tipo' => Subtipo::findOrFail($id),
            ]);
    }


    public function update(Request $request, $id)
    {
        $tipo = Subtipo::findOrFail($id);
        $tipo->nombre = $request['nombre'];
        $tipo->update();

        return redirect('config/tipoFitosanitarios');
    }


    public function destroy($id)
    {
        $tipo = Subtipo::findOrFail($id);
        $tipo->delete();

        return redirect('config/tipoFitosanitarios');
    }
}
