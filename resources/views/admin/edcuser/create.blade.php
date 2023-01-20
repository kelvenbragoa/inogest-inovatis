@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.edcusers')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.edcusers')}}</h5>
                    <h5 class="card-title" style="color: orange">{{__('message.message_create')}}</h5>

                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                   
                    <form method="POST" action="{{route('edcuser.store')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.name')}}</label>
                                <input type="text" class="form-control" name="nome" id="name" placeholder="{{__('text.name')}}" value="{{ old('nome') }}">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.mobile')}}*</label>
                                <input type="number" class="form-control" name="telefone" id="mobile" placeholder="{{__('text.mobile')}}" value="{{ old('mobile') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.category')}}*</label>
                                <select name="categoria" class="form-control" value="{{ old('category_id') }}" required>
                                    
                                    @foreach (\App\Models\EdcCategory::all() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 col-md-3">
                                <label class="form-label" for="inputEmail4">{{__('text.province')}}</label>
                                <select id="province_id" name="provincia" class="form-control" value="{{ old('province_id') }}">
                                    <option value=""></option>
                                    @foreach (\App\Models\Provinces::all() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label" for="inputEmail4">{{__('text.city')}}</label>
                                <select name="cidade" class="form-control" value="{{ old('city_id') }}">
                                    <option value=""></option>
                                    @foreach (\App\Models\City::all() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.school')}}</label>
                                <input type="text" class="form-control" name="escolaconducao" id="escolaconducao" placeholder="{{__('text.school')}}" value="{{ old('escolaconducao') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.code')}}*</label>
                                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="{{__('text.code')}}" value="{{ old('codigo') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.shift')}}*</label>
                                <select name="turno" class="form-control" value="{{ old('shift_id') }}" required>
                                    @if (time() <= strtotime("15:00:00"))
                                    @foreach (\App\Models\Shift::orderBy('id','asc')->get() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                    @else
                                    @foreach (\App\Models\Shift::orderBy('id','desc')->get() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.employee')}}</label>
                                <input type="text" class="form-control"  value="{{ Auth::user()->name }}" readonly>
                            </div>
                        </div>
                     
        
                        <button type="submit" class="btn btn-primary">Submeter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection