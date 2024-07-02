<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){

        /* $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        /* $curso = Curso::create([
            'name' => $request->name,
            'description'=> $request->description,
            'categoria' => $request->categoria
        ]); */

        $curso = Curso::create($request->all());
        
        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){
        //compact('curso'); // ['curso' => $curso]
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        $request->validate([
            'name' => 'required|min:3',
            'slug' => 'required|unique:cursos,slug,' . $curso->id ,
            'description' => 'required',
            'categoria' => 'required'
        ]);
        
        /* $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        $curso->update($request->all());


        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
