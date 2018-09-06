<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Arbitre;
use App\Stade;
use App\Equipe;
use App\Matche;
use App\Zone;
use Request;


class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches=Matche::all();
        //$zones=Zone::all();
        //dd($matches->stade->id);
        $titre="Liste  des matches";
        return view('Match.affiche',['matches'=>$matches,'titre'=>$titre]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stades= Stade::all();
     
        $equipes=Equipe::all();
         $titre="Ajouter un match";
        //dd($equipes);
        return view('Match.ajouter',['equipes'=>$equipes,'stades'=>$stades,'titre'=>$titre]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $input=$request::all();
           if($input['equipe_A_id'] != $input['equipe_B_id'] ){
        Matche::create($input);
        session()->flash('success','matche bien enregistre');
       //  return redirect()->route('match_liste');

        $response = array(
        'status' => 'success',
        'msg'    => 'Setting created successfully',
    );
        return \Response::json($response);

    }
         else{
            session()->flash('success','choisir un autre equipe');
        // return redirect()->route('create_match');
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
