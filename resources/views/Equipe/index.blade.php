@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Liste de Equipe    ||  <a href="{{route('create_equipe')}}" class="pull-right"> ajouter Equipe</a> </div>
@if(session()->has('success'))

              <div class="alert alert-success" role="alert"></div>

          @endif
                <div class="panel-body">

                        
         <table class="table">
                        <head>
                         <tr>
                           <th>
                            Nom
                           </th>
                           <th>
                        Description 
                           </th>
                           


                         </tr>
                        </head>
                        <body>
                             @foreach ($equipes as $equipe)

                        
                         

                  
                           <tr>
                           <td>  {{$equipe->nom}}     </td>
                            <td>{{$equipe->description}}</td>
                           
                            <td> <a href=""><button class="btn btn-danger">Delete</button> </a><button class="btn btn-info"> show </button> <a href=""> <button class="btn btn-warning">Edit</button></div></td>
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
