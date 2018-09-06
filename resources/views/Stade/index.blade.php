@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Liste de Stade    ||  <a href="{{route('create_stade')}}"> ajouter stade</a> </div>
@if(session()->has('success'))

              <div class="alert alert-success" role="alert">{{session()->get('success')}}</div>

          @endif
                <div class="panel-body">

                        
         <table class="table">
                        <head>
                         <tr>
                           <th>
                            Nom
                           </th>
                           <th>
                            Adresse
                           </th>
                           <th>Capital</th>
                           <th> action</th>


                         </tr>
                        </head>
                        <body>
                             @foreach ($stades as $std)

                        
                         

                  
                           <tr>
                           <td>  {{$std->nom}}     </td>
                            <td>{{$std->adresse}}</td>
                            <td> {{$std->capitale}}</td>
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
