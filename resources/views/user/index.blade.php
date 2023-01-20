@extends('layouts_user.master')
@section('content')

<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>{{__('text.analytics_dashboard')}}</strong></h3>
        </div>

        
    </div>
    <div class="row">
        <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">{{__('text.quote_paid')}}</h5>
                                <h1 class="mt-1 mb-3">{{count($q_1)}}</h1>
                                <div class="mb-1">
                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">{{__('text.pending_quote')}}</h5>
                                <h1 class="mt-1 mb-3">{{count($q_0)}}</h1>
                                <div class="mb-1">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">{{__('text.expenses_today')}}</h5>
                                <h1 class="mt-1 mb-3">{{$expenses}}MT</h1>
                                <div class="mb-1">
                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">{{__('text.quotation')}}</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="d-none d-xl-table-cell">{{__('text.customers')}}</th>
                            <th class="d-none d-xl-table-cell">{{__('text.service')}}</th>
                            <th>{{__('text.obs')}}</th>
                            <th class="d-none d-md-table-cell">{{__('text.date')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($q_0 as $item)
                        <tr>
                            <td>#{{$item->id}}</td>
                            <td class="d-none d-xl-table-cell">{{$item->customer->name}}</td>
                            <td class="d-none d-xl-table-cell">{{$item->service}}</td>
                            <td class="d-none d-xl-table-cell">{{$item->obs}}</td>
                            <td class="d-none d-md-table-cell">{{$item->created_at->format('d-m-y')}}</td>
                        </tr> 
                        @endforeach
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

</div>

@endsection