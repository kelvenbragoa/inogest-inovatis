@extends('layouts_admin.master')
@section('content')

<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>{{__('text.human_resource_dashboard')}}</strong> </h3>
        </div>

        
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">{{__('text.contract_indefinite')}}</h5>
                    <h1 class="mt-1 mb-3">{{count($contract_indeterminado)}}</h1>
                    <div class="mb-1">
                        
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">{{__('text.contract_right_time')}}</h5>
                    <h1 class="mt-1 mb-3">{{count($contract_certo)}}</h1>
                    <div class="mb-1">
                        
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">{{__('text.contract_internship')}}</h5>
                    <h1 class="mt-1 mb-3">{{count($contract_estagio)}}</h1>
                    <div class="mb-1">
                        
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">{{__('text.eventual')}}</h5>
                    <h1 class="mt-1 mb-3">{{count($contract_eventual)}}</h1>
                    <div class="mb-1">
                        
                    </div>
                </div>
            </div>
            
        </div>

        
    </div>


    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">{{__('text.employees')}}</h5>
                </div>
                <table id="myTable" class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>{{__('text.surname')}}</th>
                            <th class="d-none d-xl-table-cell">{{__('text.name')}}</th>
                            <th class="d-none d-xl-table-cell">{{__('text.mobile')}}</th>
                            <th>{{__('text.position')}}</th>
                            <th class="d-none d-md-table-cell">{{__('text.date')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $item)
                        <tr>
                            <td>{{$item->surname}}</td>
                            <td class="d-none d-xl-table-cell">{{$item->name}}</td>
                            <td class="d-none d-xl-table-cell">{{$item->mobile}}</td>
                            <td class="d-none d-xl-table-cell">{{$item->position->name}}</td>
                            <td class="d-none d-md-table-cell">{{$item->date_admission}}</td>
                        </tr>
                        @endforeach
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

</div>

@endsection