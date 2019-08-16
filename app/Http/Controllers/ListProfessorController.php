<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListProfessor;
use DataTables;
use Validator;
use Log;

class ListProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*if (request()->ajax())
        {
            return datatables()->of(ListProfessor::lastest()->get())
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }*/
        $list_professors = ListProfessor::all()
            ->map(function ($professor) {
                    return [
                        'id' => $professor->id,                        
                        'full_name' => $professor->full_name,
                        'email' => $professor->email,
                        'telefono' => $professor->telefono,
                        'puesto' => $professor->puesto,
                    ];
                }
            );
        return DataTables::of($list_professors)
            ->addColumn(
                'actions',
                '<a class="btn btn-sm btn-outline-primary" href="home/{{ $id }}/detalles" title="Ver">
                <i class="fa fa-fw fa-eye"></i> </a>
                <button type="button" name="edit" id="{{ $id }}" class="edit btn btn-primary btn-sm" title="Editar"><span class="fa fa-pencil m-1"></span></button>
                <button type="button" name="delete" id="{{ $id }}" class="delete btn btn-danger btn-sm" title="Eliminar"><span class="fa fa-trash m-1"></span></button>'
            )
            ->removeColumn('id')
            ->rawColumns(['actions'])
            ->make();
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
        Log::info($request);
        $rules = array(
            'full_name'    =>  'required',            
            'email'     =>  'required',            
            'telefono'     =>  'required',
            'puesto'     =>  'required'           
            
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
        

        //$new_name = rand() . '.' . $image->getClientOriginalExtension();
        

        $form_data = array(
            'full_name'        =>  $request->full_name,            
            'email'         =>  $request->email,            
            'telefono'         =>  $request->telefono,
            'puesto'         =>  $request->puesto          
            
        );

        ListProfessor::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
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
        if(request()->ajax())
        {
            $data = ListProfessor::findOrFail($id);
            return response()->json(['data' => $data]);
        }
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
        Log::info($id);
        Log::info($request);
        
        /* $image = $request->file('image'); */        
                
        $rules = array(
            'full_name'    =>  'required',                
            'email'     =>  'required',                
            'telefono'     =>  'required',
            'puesto'     =>  'required'                
                
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
             return response()->json(['errors' => $error->errors()->all()]);
        }        

        $form_data = array(
            'full_name'       =>   $request->full_name,            
            'email'        =>   $request->email,            
            'telefono'         =>  $request->telefono,
            'puesto'        =>   $request->puesto           
            
        );
        ListProfessor::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data is successfully update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ListProfessor::findOrFail($id);
        $data->delete();
    }
}
