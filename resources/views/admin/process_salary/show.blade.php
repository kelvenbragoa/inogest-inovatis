@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.salary')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="#" data-toggle="modal" data-target="#modalExemplo" class="btn btn-pill btn-primary"><i class="far fa-file"></i>{{__('text.general')}}</a>
                   
                </div>
                <div class="card-body">
                    
                    <table id="myTable" class="table display" >
                        <thead>
                            <tr>
                                <th style="width:20%;">{{__('text.surname')}}</th>
                                <th style="width:20%;">{{__('text.name')}}</th>
                                <th style="width:20%">{{__('text.position')}}</th>
                                <th style="width:20%">{{__('text.salary_base')}}</th>
                                <th class="d-none d-md-table-cell" style="width:30%">{{__('text.subsidy')}}</th>
                                <th class="d-none d-md-table-cell" style="width:30%">{{__('text.total')}}</th>
                                <th>{{__('text.action')}}</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($salaries as $item)
                            <tr>
                                <td>{{$item->employee->surname}}</td>
                                <td>{{$item->employee->name}}</td>
                                <td>{{$item->employee->position->name}}</td>
                                <td>{{number_format($item->employee->salary_base)}}MT</td>
                                <td class="d-none d-md-table-cell">{{number_format($item->employee->subsidy)}}MT</td>
                                <td class="d-none d-md-table-cell">{{number_format($item->employee->subsidy+$item->employee->salary_base)}}MT</td>
                                <td class="table-action">
                                    <a href="{{URL::to('/salary/'.$item->id)}}" target="_blank"><i class="align-middle" data-feather="eye"></i></a>
                                    
                                </td>
                                
                            </tr>
                            
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="card-header">
                    
                    
                </div>
            </div>
        </div>
    </div>

</div>

@endsection