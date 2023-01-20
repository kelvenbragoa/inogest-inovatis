@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.customers')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.customers')}}</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('messageSuccess'))
                    <div class="alert alert-success">
                        {{Session::get('messageSuccess')}}
                    </div>
                    @endif
                    @if (Session::has('messageError'))
                        <div class="alert alert-danger">
                            {{Session::get('messageError')}}
                        </div>
                    @endif
                    <form method="POST" action="{{route('customer.store')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">{{__('text.customers')}}</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{__('text.customers')}}" value="{{ old('name') }}" required>
                            </div>
                        <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">{{__('text.nuit')}}</label>
                                <input type="text" class="form-control" name="nuit" id="nuit" placeholder="{{__('text.nuit')}}" value="{{ old('nuit') }}" required>
                            </div>
                            
                        
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="txttelefone">{{__('text.mobile')}}</label>
                                <input type="number" class="form-control" id="mobile" name="mobile" placeholder="{{__('text.mobile')}}" value="{{ old('mobile') }}" required>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">{{__('text.email')}}</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="{{__('text.email')}}" value="{{ old('email') }}" required>
                            </div>
                            
                        
                        </div>
                    
                        
                        <div class="row">
                            <div class="mb-3 col-md-4">
                            <label class="form-label" for="inputAddress">{{__('text.address')}}</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="{{__('text.address')}}" value="{{ old('address') }}" required>
                        </div>
                        <div class="mb-3 col-md-2">
                                <label class="form-label" for="inputState">{{__('text.province')}}</label>
                                <select id="province" name="province" class="form-control" required>
                                    <option value="Cabo Delgado">Cabo Delgado</option>
                                    <option value="Gaza">Gaza</option>
                                    <option value="Inhambane">Inhambane</option>
                                    <option value="Manica">Manica</option>
                                    <option value="Maputo Cidade">Maputo Cidade</option>
                                    <option value="Maputo">Maputo</option>
                                    <option value="Nampula">Nampula</option>
                                    <option value="Niassa">Niassa</option>
                                    <option value="Sofala" selected>Sofala</option>
                                    <option value="Tete">Tete</option>
                                    <option value="Zambezia">Zambezia</option>
                                    <option value="Zambezia">Outro</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label" for="inputZip">{{__('text.city')}}</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="{{__('text.city')}}" value="{{ old('city') }}" required>
                            </div>
                            
                        </div>
                        <button type="submit"  class="btn btn-primary">{{__('text.submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection