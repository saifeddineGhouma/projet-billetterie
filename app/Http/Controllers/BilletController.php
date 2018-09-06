<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Zone;
use App\Matche;
use App\Bille;
use DB;
use PDF;
use QrCode;

class BilletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('Billet.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //$zone= Zone::all();
        $match=Matche::find($id);
        //dd($match->stade_id);
        $zone=Zone::where('stade_id',$match->stade_id)->get();
        
      // dd($zone[0]->id);
        return view('Billet.ajouter',['zones'=>$zone,'match'=>$match]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $b=new Bille();
       $bu= Bille::where('user_id',Auth::user()->id)
                ->where('match_id',$id)
                ->count();
      // dd($bu);
                $mtcheequipe=Matche::find($id);
        $b->numero=$request->numero;
        $b->zone_id=$request->zone_id;
        $zone=Zone::find($request->zone_id);
        //dd(substr ($zone->description,0,1));
        $code=substr ($zone->description,0,1).$request->numero;
         $b->code=$code;
        $b->chaisser_num=$request->chaisser_num;
        $b->port_num=$request->port_num;
        $b->user_id=Auth::user()->id;
        $b->match_id=$id;
        if($bu>= 100)
        {
session()->flash('success','vous tremine nb max de bielle pour cette match');
         return redirect()->route('create_billet',$id);
        }
        else
        {
        $b->save();
       // session()->flash('success',$b);
       // dd($b->id);
        
    // $pdf= view::make ('Billet.ticket')->with('bille',$b);
     return PDF::loadView('Billet.ticket' ,compact('b','mtcheequipe'))->download('test.pdf');
          ///return view('Billet.ticket',['b'=>$b]);

}

    }
   public function ticket()
   {
    return view('Billet.ticket');
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
