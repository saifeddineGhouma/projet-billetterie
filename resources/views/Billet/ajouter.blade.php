@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if(session()->has('success'))

              <div class="alert alert-info" role="alert">{{session()->get('success')}}</div>

          @endif
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('store_billet',$match->id) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('equipe_A') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Zone </label>

                            <div class="col-md-6">
                                <select class="form-control selectpicker" name="zone_id">
                                           
                                         @foreach($zones as $zon)
                                          <option value="{{$zon->id}}">{{$zon->description}}</option>
                                          @endforeach
                                        </select>


                               
                            </div>
                        </div>


                           <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                            <label for="code" class="col-md-4 control-label">numero</label>

                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control" name="numero" value="{{ old('numero') }}" required>

                            </div>
                        </div>


                           <div class="form-group{{ $errors->has('chaisser_num') ? ' has-error' : '' }}">
                            <label for="chaisser_num" class="col-md-4 control-label">chaisser_num</label>

                            <div class="col-md-6">
                                <input id="chaisser_num" type="text" class="form-control" name="chaisser_num" value="{{ old('chaisser_num') }}" required>

                            </div>
                        </div>


                           <div class="form-group{{ $errors->has('port_num') ? ' has-error' : '' }}">
                            <label for="code" class="col-md-4 control-label">port_num</label>

                            <div class="col-md-6">
                                <input id="port_num" type="text" class="form-control" name="port_num" value="{{ old('port_num') }}" required>

                            </div>
                        </div>

                         

                          
                       

                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
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
@endsection
