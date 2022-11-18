<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbriguePet;
use Session;

class AdocaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animal = AbriguePet::all(); 
        return view('animais.index',array('animal' -> $animal,'buscar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('pet.create);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal = new AbriguePet();
        $animal->animal = $request->input('animal');
        $animal->nome = $request->input('nome');
        $animal->raca = $request->input('raca');
        $animal->doenca = $request->input('animal');
        $animal->imagem = $request->input('imagem');
        if($animal->save()) {
            return redirect('animais');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animal = AbriguePet::find($id);
        return view('animais.show',array('animal' => $animal));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = AbriguePet::find($id);
        return view('animais.edit',array('animal' => $animal));
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
        $animal = AbriguePet::find();
        $animal->animal = $request->input('animal');
        $animal->nome = $request->input('nome');
        $animal->raca = $request->input('raca');
        $animal->doenca = $request->input('animal');
        $animal->imagem = $request->input('imagem');
        if($animal->save()) {
            Session::flash('mensagem','Informações alteradas com sucesso');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal = AbriguePet::find($id);
        $animal->delete();
        Session::flash('mensagem','Animal excluído');
        return redirect(url('animais'));
    }
}
