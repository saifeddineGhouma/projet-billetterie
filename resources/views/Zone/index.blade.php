@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Liste de Zone     </div>

                <div class="panel-body">

                        
         <table class="table">
                        <head>
                         <tr>
                           <th>
                            Description
                           </th>
                           <th>
                        Stade
                           </th>
                           
                            <th>
                             <a href=""class="show-modal btn btn-success" data-toggle="modal" data-target="#register"  data-id="" data-body="" data-title="" >
                             <i class="glyphicon glyphicon-plus-sign"></i>

                            </a> 

                            </th>

                         </tr>
                        </head>
                        <body>
                             @foreach ($zones as $zone)

                        
                         

                  
                           <tr>
                         
                            <td>{{$zone->stade->nom}}</td>
                           <td></td>
                            <td>
                             <a href="#"class="show-modal btn btn-info" data-toggle="modal" data-target="#myModal{{$zone->id}}"  data-id="{{$zone->id}}" data-body="{{$zone->description}}" data-title="{{$zone->stade->nom}}" >
                              <i class="fa fa-eye"></i>

                            </a> 
                            <a class="btn btn-danger"> 

   <i class="glyphicon glyphicon-trash"></i>

                             </a>

<a class="btn btn-warning"> 

   <i class="glyphicon glyphicon-pencil"></i>

                             </a>
                             </div></td>
                         </tr>

 @endforeach


 @foreach ($zones as $zone)
  <div class="modal fade" id="myModal{{$zone->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">   {{$zone->description}}     </h4>
              </div>
              <div class="modal-body">
                {{$zone->stade->nom}}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
</div>

 @endforeach
                        </body>

                        

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>



<!--modal creation new zone-->


   <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <span> <h3 style="color:blue;text-align:center">Espace de creation de compte </h3></span>
      </div>
      <div class="modal-body">
         <form class="form-horizontal" method="POST" action="{{ route('store_zone') }}">
                        {{ csrf_field() }}

                           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">description</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="description" value="{{ old('description') }}" required>


                                </textarea>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                            <label for="adresse" class="col-md-4 control-label"> stade</label>

                            <div class="col-md-6">
                                      <select class="form-control selectpicker" name="stade_id" placeholder="choisir stade" value="{{ old('stade') }}" required>
                                        
                                         @foreach($stades as $std)
                                          <option value="{{$std->id}}">{{$std->nom}}</option>
                                          @endforeach

                                          
                                          
                                        </select>
                                @if ($errors->has('adresse'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                        <div class="form-group{{ $errors->has('nb_chasser') ? ' has-error' : '' }}">
                            <label for="nb_chasser" class="col-md-4 control-label"> Nombre de places</label>

                            <div class="col-md-6">
                                        
                                <input id="nb_chasser" type="Numbre" class="form-control" name="nb_chasser" value="{{ old('nb_chasser') }}" required autofocus>
 

                                          
                                          
                                @if ($errors->has('nb_chasser'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nb_chasser') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
                                </button>
                            </div>
                        </div>
                    </form>
      </div>
     
    </div>
  </div>
</div>







@endsection
