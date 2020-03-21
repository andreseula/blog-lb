<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Http\Requests\SaveProjectReques;
class ProjectController extends Controller
{
    public function __construct (){
        //$this->middleware('auth')->only('create','edit');
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $portfolio=[
        //     ['title'=>'Proyecto 1'],
        //     ['title'=>'Proyecto 2'],
        //     ['title'=>'Proyecto 3'],
        //     ['title'=>'Proyecto 4'],
        // ];

        //$portfolio= Project::orderBy('created_at','DESC')->get();

        //POR DEFECTO SE MUESTRAN 15 ITEMS POR PAGINA
        //$portfolio= Project::latest()->paginate(2);

        return view ('projects.index',[
            'projects'=>Project::latest()->paginate()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectReques $request)
    {
        Project::create( $request->validated() );
        return redirect()->route('projects.index')->with('status','Proyecto Creado con Exito!!!');


        //return request('title');
        //$title = request('title');
        //$description = request('description');
        //$url = request('url');
        /*$fields = request()->validate([
            'title'=>'required',
            'description'=>'required',
        ]);*/
        //Project::create($fields);
        //return request()->only('title','description','url');
        //Project::create(request()->only('title','description','url'));
        /*AGREGANDO EL REQUEST->ALL FUNCIONA DE LA MISMA MANERA QUE AGREGANDO
        LOS CAMPOS COMO SE MUESTRAN ABAJO
            title'=>request('title'),
            'description'=>request('description'),
            'url'=>request('url'),*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //RETORNA SOLO EL ID DEL PROYECTO
        //return $id;
        //RETORNA TODA LA INFO EN JSON
        //return Project::find($id);
        $projects = Project::find($id);
        return view('projects.show',[
            'projects'=>Project::findOrFail ($id)
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create',[
            'projects' => new Project
        ]);
    }

    public function edit(Project $projects)
    {
         return view('projects.edit',[
            'projects'=> $projects
        ]);
    }
    public function update(Project $projects, SaveProjectReques $request ){
        $projects->update($request->validated());
/*        'title'=>request('title'),
        'description'=>request('description'),
        'url'=>request('url'),*/

        return redirect()->route('projects.index',$projects)->with('status','Proyecto Actualizado con Exito!!!');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $projects)
    {
        //Project::destroy($id)
        $projects->delete();
        return redirect()->route('projects.index')->with('status','Proyecto Eliminado');
    }
}
