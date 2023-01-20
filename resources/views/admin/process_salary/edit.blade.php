@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.process_salary')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
               
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
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $item)
                            <tr>
                                <td>{{$item->surname}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->position->name}}</td>
                                <td>{{number_format($item->salary_base)}}MT</td>
                                <td class="d-none d-md-table-cell">{{number_format($item->subsidy)}}MT</td>
                                <td class="d-none d-md-table-cell">{{number_format($item->subsidy+$item->salary_base)}}MT</td>
                                
                            </tr>
                            
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="card-header">
                    <form action="{{route('salary.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id_process" value="{{$process}}">
                    <button type="submit" class="btn btn-pill btn-primary"><i class="far fa-check"></i>{{__('text.confirm')}}</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

</div>

@endsection