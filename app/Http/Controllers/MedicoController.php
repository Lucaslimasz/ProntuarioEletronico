<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MedicoModel;

class MedicoController extends Controller
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
        $Medicos = MedicoModel::all();
        return view('indexMedico', compact('Medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('criarMedico');

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
        $medico = new MedicoModel;
        $medico->nome = $request->input('nome');
        $medico->crm = $request->input('crm');
        $medico->sexo = $request->input('sexo');
        $medico->save();

        return redirect()->route('medico');
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
        $medico = MedicoModel::find($id);
        return view('EditMedico', compact("medico"));
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
        $medico = MedicoModel::find($id);
        $medico->nome = $request->input('nome');
        $medico->crm = $request->input('crm');
        $medico->sexo = $request->input('sexo');
        $medico->save();

        return redirect()->route('medico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = MedicoModel::find($id);
        $medico->delete();

        return redirect()->route('medico');
    }
}
