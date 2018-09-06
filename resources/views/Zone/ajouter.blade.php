@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Zone</div>

                <div class="panel-body">
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
</div>
@endsection
