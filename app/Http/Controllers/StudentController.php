<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['estudiantes'] = Student::orderBy('id','desc')->paginate(2);
        return view('estudiante.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // yo lo 
        $request->validate([
            'nombre' => 'required',
            'apellido' =>  'required',
            'telefono' =>   'required',
            'descripcion' => 'required',
        ]);

        Student::create($request->all());

        return Redirect::to('estudiante')->with('success','Pructo creado exselente. ;)');
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
        $where = array('id' => $id);
        $data['student_info'] = Student::where($where)->first();
 
        return view('estudiante.edit', $data);
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
            $request->validate([
            'nombre' => 'required',
            'apellido' =>  'required',
            'telefono' =>   'required',
            'descripcion' => 'required',
        ]);
         
        $update = ['nombre' => $request->nombre, 'descripcion' => $request->descripcion];
        Student::where('id',$id)->update($update);
   
        return Redirect::to('estudiante')->with('success','Estudiaente actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('id',$id)->delete();
        return Redirect::to('estudiante')->with('success','estudienate eliminado satisfactoriamente');
    
    }
}
