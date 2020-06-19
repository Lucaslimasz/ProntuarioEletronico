<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MarcarModel;
use App\MedicoModel;
use App\PacienteModel;

class MarcarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Consultas =  MarcarModel::all();
        return view('indexConsultas', compact('Consultas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicos = MedicoModel::all();

        $pacientes = PacienteModel::all();
        return view('criarMarcar', compact('medicos', 'pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marcar = new MarcarModel;
        $marcar->nomePaciente = $request->input('nomePaciente');
        $marcar->nomeMedico = $request->input('nomeMedico');
        $marcar->dataConsulta = $request->input('dataConsulta');
        $marcar->horaConsulta = $request->input('horaConsulta');
        $marcar->causa = $request->input('causa');
        $marcar->save();

        return redirect()->route('marcar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marcar = MarcarModel::find($id);
        $pacientes = PacienteModel::all();
        $medicos = MedicoModel::all();
        return view('editMarcar', compact("marcar", "pacientes", "medicos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $marcar = MarcarModel::find($id);
        $marcar->nomePaciente = $request->input('nomePaciente');
        $marcar->nomeMedico = $request->input('nomeMedico');
        $marcar->dataConsulta = $request->input('dataConsulta');
        $marcar->horaConsulta = $request->input('horaConsulta');
        $marcar->causa = $request->input('causa');
        $marcar->save();

        return redirect()->route('marcar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marcar = MarcarModel::find($id);
        $marcar->delete();

        return redirect()->route('marcar');
    }
}
