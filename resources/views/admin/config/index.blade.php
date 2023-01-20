@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.config')}}</h1>

    <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title mb-0">{{__('text.private_info')}}</h5>
                </div>
               
                <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                    @endif
                    
                    <form method="POST" action="{{ route('config.update', $config->id)}}">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputFirstName">{{__('text.name')}}</label>
                                <input type="text" class="form-control" id="inputFirstName" name="company_name" placeholder="First name" value="{{$config->company_name}}">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputLastName">{{__('text.address')}}</label>
                                <input type="text" class="form-control" id="inputLastName" placeholder="Last name" name="company_address" value="{{$config->company_address}}">
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputCity">{{__('text.number')}}</label>
                                <input type="text" class="form-control" id="inputCity" name="company_number" value="{{$config->company_number}}">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputState">{{__('text.flat')}}</label>
                                <input type="text" class="form-control" id="inputCity" name="company_flat" value="{{$config->company_flat}}">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label" for="inputZip">{{__('text.city')}}</label>
                                <input type="text" class="form-control" id="inputCity" name="company_city" value="{{$config->company_city}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputCity">{{__('text.province')}}</label>
                                <input type="text" class="form-control" id="inputCity" name="company_province" value="{{$config->company_province}}">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputState">{{__('text.country')}}</label>
                                <input type="text" class="form-control" id="inputCity" name="company_country" value="{{$config->company_country}}">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label" for="inputZip">{{__('text.mobile')}}</label>
                                <input type="text" class="form-control" id="inputCity" name="company_mobile" value="{{$config->company_mobile}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputFirstName">{{__('text.email')}}</label>
                                <input type="text" class="form-control" id="inputFirstName" name="company_email" placeholder="First name" value="{{$config->company_email}}">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputLastName">{{__('text.website')}}</label>
                                <input type="text" class="form-control" id="inputLastName" name="company_web" placeholder="Last name" value="{{$config->company_web}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputFirstName">{{__('text.service')}}</label>
                                <textarea type="text" class="form-control" id="inputFirstName" name="company_service" placeholder="First name">{{$config->company_service}}</textarea>

                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label" for="inputFirstName">{{__('text.tax')}}(%)</label>
                                <input type="text" class="form-control" id="inputFirstName" name="company_tax" placeholder="First name" value="{{$config->company_tax}}">

                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label" for="inputFirstName">{{__('text.nuit')}}</label>
                                <input type="text" class="form-control" id="inputFirstName" name="company_nuit" placeholder="First name" value="{{$config->company_nuit}}">

                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputCity">Bank Name 1</label>
                                <input type="text" class="form-control" id="inputCity" name="company_bank_name1" value="{{$config->company_bank_name1}}">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputState">Bank Name 2</label>
                                <input type="text" class="form-control" id="inputCity" name="company_bank_name2" value="{{$config->company_bank_name2}}">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputZip">Bank Name 3</label>
                                <input type="text" class="form-control" id="inputCity" name="company_bank_name3" value="{{$config->company_bank_name3}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputCity">Bank Number 1</label>
                                <input type="text" class="form-control" id="inputCity" name="company_bank_account1" value="{{$config->company_bank_account1}}">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputState">Bank Number 2</label>
                                <input type="text" class="form-control" id="inputCity" name="company_bank_account2" value="{{$config->company_bank_account2}}">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputZip">Bank Number 3</label>
                                <input type="text" class="form-control" id="inputCity" name="company_bank_account3" value="{{$config->company_bank_account3}}">
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