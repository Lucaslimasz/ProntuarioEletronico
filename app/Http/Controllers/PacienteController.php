<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PacienteModel;

class PacienteController extends Controller
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
        $Pacientes = PacienteModel::all();

        return view('indexPaciente', compact('Pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // NA VIEW CRIAR PRECISAMOS CHAMAR O STORE COLOCANDO /PACIENTE
        // PARA PODER ARMAZENAR AS INFORMAÇÕES
        // CREATE É APENAS PARA CHAMAR A VIEW 
        // O STORE É PRA FAZER A PARTE BACK-END
        $paciente = new PacienteModel;
        $paciente->nome = $request->input('nome');
        $paciente->cpf = $request->input('cpf');
        $paciente->sexo = $request->input('sexo');
        $paciente->save();

        
        return redirect()->route('paciente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = PacienteModel::find($id);
        return view('edit', compact("paciente"));
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
        $paciente = PacienteModel::find($id);
        $paciente->nome = $request->input('nome');
        $paciente->cpf = $request->input('cpf');
        $paciente->sexo = $request->input('sexo');
        $paciente->save();

        return redirect()->route('paciente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = PacienteModel::find($id);
        $paciente->delete();

        return redirect()->route('paciente');
    }
}
