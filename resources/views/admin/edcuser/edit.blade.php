@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.edit')}} {{__('text.edcusers')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.edit')}} {{__('text.edcusers')}}</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <form action="{{ route('edcuser.update', $edcuser->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.name')}}</label>
                                <input type="text" class="form-control" name="nome" id="name" placeholder="{{__('text.name')}}" value="{{ $edcuser->nome }}">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.mobile')}}</label>
                                <input type="number" class="form-control" name="telefone" id="mobile" placeholder="{{__('text.mobile')}}" value="{{ $edcuser->telefone  }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.category')}}</label>
                                <select name="categoria" class="form-control" value="{{ old('category_id') }}" required>
                                    
                                    @foreach (\App\Models\EdcCategory::all() as $item)
                                    <option value="{{$item->id}}" @if ($item->id == $edcuser->categoria) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 col-md-3">
                                <label class="form-label" for="inputEmail4">{{__('text.province')}}</label>
                                <select id="province_id" name="provincia" class="form-control" value="{{ old('province_id') }}">
                                    <option value=""></option>
                                    @foreach (\App\Models\Provinces::all() as $item)
                                    <option value="{{$item->id}}" @if ($item->id == $edcuser->provincia) selected @endif>{{$item->name}}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label" for="inputEmail4">{{__('text.city')}}</label>
                                <select name="cidade" class="form-control" value="{{ old('city_id') }}">
                                    <option value=""></option>
                                    @foreach (\App\Models\City::all() as $item)
                                    <option value="{{$item->id}}" @if ($item->id == $edcuser->cidade) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.school')}}</label>
                                <input type="text" class="form-control" name="escolaconducao" id="escolaconducao" placeholder="{{__('text.school')}}" value="{{ $edcuser->escolaconducao  }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.code')}}</label>
                                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="{{__('text.code')}}" value="{{ $edcuser->codigo  }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.shift')}}</label>
                                <select name="turno" class="form-control" value="{{ old('shift_id') }}" required>
                                   
                                    @foreach (\App\Models\Shift::all() as $item)
                                    <option value="{{$item->id}}" @if ($item->id == $edcuser->turno) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.employee')}}</label>
                                <input type="text" class="form-control" value="{{ $edcuser->user->name  }}" readonly>
                            </div>
                        </div>

        
                        <button type="submit" class="btn btn-primary">{{__('text.submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection