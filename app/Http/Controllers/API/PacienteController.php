<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarPacienteRequest;
use App\Http\Requests\GuardarPacienteRequest;
use App\Http\Resources\PacienteResource;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
  
    public function index()
    {
        return PacienteResource::collection(Paciente::all());
        //                                  modelo que retorna toda la data

    }

    public function store(GuardarPacienteRequest $request)
    {
                                                            //guardar los datos en la base de datos
        //Paciente::create($request->all());//guardando el regiatro del pasiente en la base de datos
       //  return response()->json([
       //     'res'=>true,//para saber que todo esta bien
       //     'msg'=>'Paciente Guardado Correctamente'
       // ],200);

        return (new PacienteResource(Paciente::create($request->all())))
                    ->additional(['msg'=>'Paciente Guardado Correctamente']);

    }

    
    public function show(Paciente $paciente)
    {
        //para mostrar la data del paciente
       // return response()->json([
       //     'res'=> true,
       //     'paciente'=>$paciente
       // ],200);

        return new PacienteResource($paciente);
    }

    public function update(ActualizarPacienteRequest $request, Paciente $paciente)
    {
        $paciente->update($request->all());
        //return response()->json([
        //    'res'=>true,
        //    'mensaje'=>'Paciente Actualizado Correctamente'
        //],200);

        return (new PacienteResource($paciente))
                ->additional(['msg'=>'Pasiente Actualizado Correctamente'])
                ->response()
                ->setStatusCode(202);
    }

    public function destroy(Paciente $paciente)
    {
        //
        $paciente->delete();
       // return response()->json([
       //     'res'=>true,
       //     'mensaje'=>'Paciente fue Eliminado Correctamente'
       // ],200);
        return (new PacienteResource($paciente))
                 ->additional(['msg'=>'Pasiente Eliminado Correctamente']);

    }
}
