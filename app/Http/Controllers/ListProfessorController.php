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
                        'image' => $professor->image,
                        'full-name' => $professor->full_name,
                        'email' => $professor->email,
                        'telefono' => $professor->telefono,
                        'puesto' => $professor->puesto,
                    ];
                }
            );
        return DataTables::of($list_professors)
            ->addColumn(
                'actions',
                '<button type="button" name="edit" id="{{ $id }}" class="edit btn btn-primary btn-sm">Edit</button>
                <button type="button" name="delete" id="{{ $id }}" class="delete btn btn-danger btn-sm">Delete</button>'
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
        $rules = array(
            'full_name'    =>  'required',            
            'email'     =>  'required',            
            'telefono'     =>  'required',
            'puesto'     =>  'required',            
            'image'         =>  'required|image|max:2048'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'full_name'        =>  $request->full_name,            
            'email'         =>  $request->email,            
            'telefono'         =>  $request->telefono,
            'puesto'         =>  $request->puesto,            
            'image'             =>  $new_name
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $rules = array(
                'full_name'    =>  'required',                
                'email'     =>  'required',                
                'telefono'     =>  'required',
                'puesto'     =>  'required',                
                'image'         =>  'image|max:2048'
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $rules = array(
                'full_name'    =>  'required',                
                'email'     =>  'required',                
                'telefono'     =>  'required',
                'puesto'     =>  'required',                
                'perfil_deseable'     =>  'required'
            );

            $error = Validator::make($request->all(), $rules);

            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
        }

        $form_data = array(
            'full_name'       =>   $request->full_name,            
            'email'        =>   $request->email,            
            'telefono'         =>  $request->telefono,
            'puesto'        =>   $request->puesto,            
            'image'            =>   $image_name
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
