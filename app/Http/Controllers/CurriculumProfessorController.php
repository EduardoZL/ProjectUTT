<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListProfessor;
use App\CurriculumProfessor;
use Log;

class CurriculumProfessorController extends Controller
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
        return view('curriculum');
    }

    public function data($id) {
        $professor = $id;
        $professor = ListProfessor::findOrFail($id);
        $curriculum = CurriculumProfessor::where('professors_id', $id)->get();
        $professor->curriculum = $curriculum;
        return view('curriculum', compact('professor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info("Entre a store de curriculum");
        Log::info($request);
        $curriculum = CurriculumProfessor::findOrFail($request->hidden_id);
        if ($request->action == 'sec1') {
            Log::info($curriculum);
            $curriculum->fechaNacimiento = $request->fechaNacimiento;
            $curriculum->curp = $request->curp;
            $curriculum->rfc = $request->rfc;
            $curriculum->gradoAcademico = $request->gradoAcademico;
            $curriculum->save();
        }
        if ($request->action == 'sec2') {
            Log::info($curriculum);
            $curriculum->nCurso = $request->nCurso;
            $curriculum->fechaCapacitacion = $request->fechaCapacitacion;
            $curriculum->horaCapacitacion = $request->horaCapacitacion;
            $curriculum->save();
        }
        if ($request->action == 'sec3') {
            Log::info($curriculum);
            $curriculum->Enero_Abril_A = $request->Enero_Abril_A;
            $curriculum->Mayo_Agosto_A = $request->Mayo_Agosto_A;
            $curriculum->Septiembre_Diciembre_A = $request->Septiembre_Diciembre_A;
            $curriculum->Enero_Abril_T = $request->Enero_Abril_T;
            $curriculum->Mayo_Agosto_T = $request->Mayo_Agosto_T;
            $curriculum->Septiembre_Diciembre_T = $request->Septiembre_Diciembre_T;
            $curriculum->save();
        }
        if ($request->action == 'sec4') {
            Log::info($curriculum);
            $curriculum->ncuerpoAcademico = $request->ncuerpoAcademico;
            $curriculum->lineaInvestigacion = $request->lineaInvestigacion;
            $curriculum->gradoConsolidacion = $request->gradoConsolidacion;
            $curriculum->añoRegistro = $request->añoRegistro;
            $curriculum->save();
        }
        if ($request->action == 'sec5') {
            Log::info($curriculum);
            $curriculum->tipo = $request->tipo;
            $curriculum->titulo = $request->titulo;
            $curriculum->autor = $request->autor;
            $curriculum->descripcion = $request->descripcion;
            $curriculum->pais = $request->pais;
            $curriculum->añoPro = $request->añoPro;
            $curriculum->isbn = $request->isbn;
            $curriculum->issn = $request->issn;           
            $curriculum->save();
        }
        if ($request->action == 'sec6') {
            Log::info($curriculum);
            $curriculum->nombreAsignatura = $request->nombreAsignatura;
            $curriculum->programaEducativo = $request->programaEducativo;
            $curriculum->periodo = $request->periodo;
            $curriculum->save();
        }
        if ($request->action == 'sec7') {
            Log::info($curriculum);
            $curriculum->nomProyecto = $request->nomProyecto;
            $curriculum->nomEmpresa = $request->nomEmpresa;
            $curriculum->fechaInicio = $request->fechaInicio;
            $curriculum->fechaTermino = $request->fechaTermino;
            $curriculum->save();
        }
        if ($request->action == 'sec8') {
            Log::info($curriculum);
            $curriculum->tipoGestion = $request->tipoGestion;
            $curriculum->funcionEncomendada = $request->funcionEncomendada;
            $curriculum->organoBeneficiado = $request->organoBeneficiado;
            $curriculum->año = $request->año;
            $curriculum->save();
        }
        return response()->json([
            'state' => 'success', //$state
            'curriculum' => $curriculum
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
