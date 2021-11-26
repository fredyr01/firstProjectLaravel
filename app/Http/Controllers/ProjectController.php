<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function __construct()
    {
        //* Only es para que solo se apliquen a estas funciones que se pasan
        // $this->middleware('auth')->only('create', 'edit');
        //* Si son muchas funciones es mejor usar except y se especifica
        //* a la que no se usará middlware
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $portfolio=[
        //     ['title' => 'Proyecto # 1'],
        //     ['title' => 'Proyecto # 2'],
        //     ['title' => 'Proyecto # 3'],
        //     ['title' => 'Proyecto # 4']
        // ];
        $projects = Project::latest()->paginate();

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project){
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create(){
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request){

        Project::create($request->validated()); // title, url, description

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito!');
    }

    public function edit(Project $project){
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request){
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito!');
    }

    public function destroy(Project $project){
        $project->delete();
        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito!');
    }
}
