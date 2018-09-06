<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Equipe;
use Request;
//use Alert;
use RealRashid\SweetAlert\Facades\Alert;
class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes=Equipe::all();
        $titre="Liste des equipes";
        return view('Equipe.index',['equipes'=>$equipes,'titre'=>$titre]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titre="Ajouter un equipe";
        return view('Equipe.ajouter',['titre'=>$titre]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Alert::message('Success Title', 'Success Message');
         //alert('Title','Lorem Lorem Lorem', 'success');
         $input=$request::all();

        $equipe=Equipe::create($input);
        if($equipe){
        alert()->success('Post Created', 'Successfully');

        session()->flash('success','equipe bien enregistre');
        // return redirect()->route('equipe_liste');
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
