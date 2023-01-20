@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.profile')}}</h1>

    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">{{__('text.profile')}}</h5>
                </div>
                <div class="card-body text-center">
                    <img src="/storage/img/sys/logoinogesticon.png" alt="" class="img-fluid rounded-circle mb-2" width="128" height="128" />
                    <h5 class="card-title mb-0">{{Auth::user()->name}}</h5>
                    <div class="text-muted mb-2">@if (Auth::user()->role_id == 1)
                        {{__('text.admin')}}
                    @else
                    {{__('text.emplooyes')}}
                    @endif </div>

                   
                </div>
                
                
                <hr class="my-0" />
                <div class="card-body">
                    <h5 class="h6 card-title">{{__('text.other_info')}}</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><span class="fas fa-globe fa-fw mr-1"></span> {{Auth::user()->mobile}}</li>
                        <li class="mb-1"><span class="fab fa-globe fa-fw mr-1"></span> {{Auth::user()->email}}</li>
                        
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xl-9">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title mb-0">{{__('text.details')}}</h5>
                </div>
                <div class="card-body h-100">
                    @if (Auth::user()->employee_id != null)
                    <div class="card">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Private info</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputFirstName">{{__('text.name')}}</label>
                                        <input type="text" class="form-control" id="inputFirstName" placeholder="First name" value="{{Auth::user()->employee->name}}" readonly>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputLastName">{{__('text.surname')}}</label>
                                        <input type="text" class="form-control" id="inputLastName" placeholder="Last name" value="{{Auth::user()->employee->surname}}" readonly>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputEmail4">{{__('text.email')}}</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{Auth::user()->email}}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputAddress">{{__('text.address')}}</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{Auth::user()->employee->address}}" readonly>
                                </div>
                                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputCity">{{__('text.city')}}</label>
                                        <input type="text" class="form-control" id="inputCity" value="{{Auth::user()->employee->city}}" readonly>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputCity">{{__('text.province')}}</label>
                                        <input type="text" class="form-control" id="inputCity" value="{{Auth::user()->employee->province}}" readonly>
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label" for="inputZip">{{__('text.mobile')}}</label>
                                        <input type="text" class="form-control" id="inputZip" value="{{Auth::user()->employee->mobile}}" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputCity">{{__('text.date_birth')}}</label>
                                        <input type="text" class="form-control" id="inputCity" value="{{Auth::user()->employee->date_birth}}" readonly>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputCity">{{__('text.nationality')}}</label>
                                        <input type="text" class="form-control" id="inputCity" value="{{Auth::user()->employee->nationality}}" readonly>
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label" for="inputZip">{{__('text.degree')}}</label>
                                        <input type="text" class="form-control" id="inputZip" value="{{Auth::user()->employee->degree}}" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputCity">{{__('text.type_contract')}}</label>
                                        <input type="text" class="form-control" id="inputCity" value="{{Auth::user()->employee->contract}}" readonly>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputCity">{{__('text.salary_base')}}</label>
                                        <input type="text" class="form-control" id="inputCity" value="{{Auth::user()->employee->salary_base}}" readonly>
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label" for="inputZip">{{__('text.subsidy')}}</label>
                                        <input type="text" class="form-control" id="inputZip" value="{{Auth::user()->employee->subsidy}}" readonly>
                                    </div>
                                </div>
                                
                            </form>

                        </div>
                    </div>
                    @else
                    <div class="d-flex align-items-start">
                        
                        <div class="flex-grow-1">
                            
                            
                            <strong>{{__('text.no_account')}}</strong><br />
                            

                        </div>
                    </div>
                    @endif
                    

                    
                    
                </div>
            </div>
        </div>
    </div>

</div>

@endsection