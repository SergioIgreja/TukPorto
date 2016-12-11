<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PercursoRequest;
use App\Percurso;
use Illuminate\Support\Facades\Auth;
use App\User;

class PercursoController extends Controller
{
    public function percurso($id){
    	$percurso = Percurso::find($id);
    	return view('percurso', array('percurso'=>$percurso));
    }

    public function create(){
    	return view('percurso.create');
    }

    public function index(){
    	$percursos = Percurso::all();
    	$logged_user = Auth::user();
    	$users = User::all();
    	return view('percurso.index', array('percursos'=>$percursos, 'users'=>$users, 'logged_user'=>$logged_user));
    }

    public function store(PercursoRequest $request){
    	$percurso = new Percurso();
    	$percurso->name = $request->name;
    	$percurso->idEditor = $request->idEditor;
    	$percurso->descricao = $request->descricao;
    	$percurso->save();
    	return redirect()->route('percurso.index')->with('message','Percurso adicionado!');
    }

    public function edit(Percurso $percurso){
    	return view('percurso.edit',compact('percurso'));
    }

    public function update(PercursoRequest $request, Percurso $percurso){
    	$percurso->update($request->all());
    	return redirect()->route('percurso.index')->with('message', 'Percurso alterado!');
    }

    public function destroy(Percurso $percurso){
    	$percurso->delete();
    	return redirect()->route('percurso.index')->with('message', 'Percurso eliminado!');
    }

    public function show(Percurso $percurso){
    	return view('percurso.show',compact('percurso'));
    }
}
