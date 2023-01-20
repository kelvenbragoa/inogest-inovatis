@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.employee')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('employee.create')}}" class="btn btn-pill btn-primary"><i class="far fa-plus"></i>{{__('text.add')}}</a>
                    
                </div>
                <div class="card-body">
                    @if (Session::has('messageSuccess'))
                        <div class="alert alert-success">
                            {{Session::get('messageSuccess')}}
                        </div>
                    @endif
                    <table id="myTable" class="table display" >
                        <thead>
                            <tr>
                                <th style="width:20%;">{{__('text.surname')}}</th>
                                <th style="width:20%;">{{__('text.name')}}</th>
                                <th style="width:20%">{{__('text.mobile')}}</th>
                                <th style="width:20%">{{__('text.position')}}</th>
                                <th class="d-none d-md-table-cell" style="width:30%">{{__('text.date')}}</th>
                                <th>{{__('text.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $item)
                            <tr>
                                <td>{{$item->surname}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->mobile}}</td>
                                <td>{{$item->position->name}}</td>
                                <td class="d-none d-md-table-cell">{{$item->date_admission}}</td>
                                <td class="table-action">
                                    <a href="{{URL::to('/employee/'.$item->id.'/edit')}}"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <!--<a href="{{URL::to('/employee/'.$item->id)}}"><i class="align-middle" data-feather="eye"></i></a>-->
                                    <a href="" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            @include('admin.employee.modaldelete')
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection