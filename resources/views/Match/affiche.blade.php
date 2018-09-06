@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Liste de Matches    ||  <a href="{{route('create_match')}}"> ajouter Match</a> </div>
@if(session()->has('success'))

              <div class="alert alert-success" role="alert">{{session()->get('success')}}</div>

          @endif
                <div class="panel-body">

                        
         <table class="table">
                        <head>
                         <tr>
                           <th>
                            Equipe A
                           </th>
                           <th></th>
                           <th>
                        Equipe B 
                           </th>
                           <th>
                        Type Matche Au Journe 
                           </th>
                           <th>
                        stade 
                           </th>
                            <th>
                        Date Matche 
                           </th>


                         </tr>
                        </head>
                        <body>
                             @foreach ($matches as $match)

                        
                         

                  
                           <tr>
                           <td>  {{$match->equipe->nom}}</td>
                           <td>VS  </td>
                          
                           <td> {{$match->equipeB->nom}} </td>
                           <td>{{$match->type}}</td>
                            <td> {{$match->stade->nom}}  </td>
                            <td> {{$match->dateMatche}}  </td>
                           
                            <td> <a href=""><button class="btn btn-danger">Delete</button> </a>
                              <button class="btn btn-info"> show </button> 
                              <a href=""> <button class="btn btn-warning">Edit</button>
                              </td>
                         </tr>
                             @endforeach
                        </body>

                        

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
