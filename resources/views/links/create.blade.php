@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Izveidot jaunu saiti</h2>
                    <form action="/dashboard/links/new" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name" style="width: 100%;">Saites nosaukums</label>
                                    <input type="text" id="name" name="name" class="form-controller{{ $errors->first('name') ? ' is-invalid' : ''}}" placeholder="Mana linka nosaukums" style="width: 100%;" value="{{ old('name') }}">
                                    @if($errors->first('name'))
                                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name" style="width: 100%;">URL</label>
                                    <input type="text" id="link" name="link" class="form-controller{{ $errors->first('link') ? ' is-invalid' : ''}}" placeholder="http://manasaite.lv" style="width: 100%;" value="{{ old('link') }}">
                                    @if($errors->first('link'))
                                        <div class="invalid-feedback">{{ $errors->first('link') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-12">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Saglabāt saiti</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
