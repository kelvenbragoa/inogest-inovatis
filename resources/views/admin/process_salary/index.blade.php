@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.process_salary')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="#" data-toggle="modal" data-target="#modalExemplo" class="btn btn-pill btn-primary"><i class="far fa-plus"></i>{{__('text.add')}}</a>
                   
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
                    <table id="myTable" class="table display" >
                        <thead>
                            <tr>
                                <th style="width:10%;">ID</th>
                                <th style="width:15%">{{__('text.month')}}</th>
                                <th style="width:20%">{{__('text.reference')}}</th>
                                <th style="width:20%">{{__('text.status')}}</th>
                                <th style="width:25%">{{__('text.date')}}</th>
                                
                                <th>{{__('text.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($processes as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->month}}</td>
                                    <td>{{$item->reference}}</td>
                                    <td> @if ($item->status == 0) <span class="badge bg-warning">Pendente</span> @else <span class="badge bg-success">Confirmado</span> @endif</td>
                                    <td>{{$item->created_at->format('d-m-Y')}}</td>
                                    
                                    <td class="table-action">
                                        @if ($item->status == 0)<a href="{{URL::to('/process_salary/'.$item->id.'/edit')}}" class="btn btn-info">Processar</a>
                                        <a href="" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a> 
                                        @else 
                                        <a href="{{URL::to('/process_salary/'.$item->id)}}" class="btn btn-success">Verificar</a> 
                                        @endif
                                    </td>
                                </tr>
                                @include('admin.process_salary.modaldelete')
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


@include('admin.process_salary.modal_add')
@endsection