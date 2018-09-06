@extends('layouts.admin')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if(session()->has('success'))

              <div class="alert alert-info" role="alert">{{session()->get('success')}}</div>

          @endif

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('store_match') }}">
                       <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_field() }}" >

                        <div class="form-group{{ $errors->has('equipe_A') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Equipe A </label>

                            <div class="col-md-6">
                                <select class="form-control selectpicker" name="equipe_A_id">
                                           
                                         @foreach($equipes as $equipe)
                                          <option value="{{$equipe->id}}">{{$equipe->nom}}</option>
                                          @endforeach
                                        </select>


                               
                            </div>
                        </div>



                          <div class="form-group{{ $errors->has('equipe_B') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Equipe B </label>

                            <div class="col-md-6">
                                   <select class="form-control selectpicker" name="equipe_B_id">
                                         
                                          @foreach($equipes as $equipe)
                                          <option value="{{$equipe->id}}">{{$equipe->nom}}</option>
                                          @endforeach
                                        </select>

                            </div>


                        </div>

                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Stade </label>

                            <div class="col-md-6">
                                   <select class="form-control selectpicker" name="stade_id">
                                          @foreach($stades as $std)
                                          <option value="{{$std->id}}">{{$std->nom}}</option>
                                          @endforeach
                                          
                                        </select>
                              
                            </div>

                            
                        </div>
                               


                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Type </label>

                            <div class="col-md-6">
                                   <select class="form-control selectpicker" name="type">
                                         
                                          <option>champion</option>
                                          <option>coupe</option>
                                        
                                         
                                        </select>
                              
                            </div>

                            
                        </div>


                           <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label for="dateMatche" class="col-md-4 control-label">Date de Match</label>

                            <div class="col-md-6">
                                <input id="dateMatche" type="date" class="form-control" name="dateMatche" value="{{ old('dateM') }}" required>

                            </div>
                        </div>


                    <div class="form-group{{ $errors->has('heureMatche') ? ' has-error' : '' }}">
                            <label for="datematche" class="col-md-4 control-label">Heure de Match</label>

                            <div class="col-md-6">
                                <input id="heureMatche" type="time" class="form-control" name="heureMatche" value="{{ old('heureMatche') }}" required>

                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('Nb_supporteur') ? ' has-error' : '' }}">
                            <label for="datematche" class="col-md-4 control-label">Nombre de Supporteur</label>

                            <div class="col-md-6">
                                <input id="Nb_supporteur" type="numbre" class="form-control" name="Nb_supporteur" value="{{ old('Nb_supporteur') }}" required>

                            </div>
                        </div>
                       

                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" id="submit" class="btn btn-primary">
                                    ajouter 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script-->



  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <script type="text/javascript">

$(function(){

  
$('#submit').click(function(e){
 e.preventDefault(e);
 //alert('etttt');

 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
 $.ajax({
         
         url: '{{route('store_match')}}',
         method: 'POST',
         data: {
                    '_token': $('input[name=_token]').val()
                    
                },
         dataType: 'json',
         success: function (data) {
          //  $('#up_vote').text(response.vote);
          alert("test");
         }
      });
});
});

  </script>
@endsection
