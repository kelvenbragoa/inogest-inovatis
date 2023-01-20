@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.mcscr')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('mcscr.create')}}" class="btn btn-pill btn-primary"><i class="far fa-plus"></i>{{__('text.add')}}</a>
                    
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
                                <th style="width:30%;">{{__('text.reason')}}</th>
                                <th style="width:30%">{{__('text.cause')}}</th>
                                <th style="width:30%">{{__('text.solution')}}</th>
                                <th style="width:30%">{{__('text.consequence')}}</th>
                                <th style="width:30%">{{__('text.recommendation')}}</th>
                                <th style="width:30%">Cliente</th>
                                <th class="d-none d-md-table-cell" style="width:30%">{{__('text.date')}}</th>
                                <th>{{__('text.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mcscr as $item)
                            <tr>
                                <td>{{$item->motivo}}</td>
                                <td>{{$item->causa}}</td>
                                <td>{{$item->solucao}}</td>
                                <td>{{$item->consequencia}}</td>
                                <td>{{$item->recomendacao}}</td>
                                <td>{{$item->invoice_id}}</td>
                                <td class="d-none d-md-table-cell">{{$item->created_at->format('d-m-y')}}</td>
                                <td class="table-action">
                                    <a href="{{URL::to('/mcscr/'.$item->id.'/edit')}}"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            @include('admin.mcscr.modaldelete')
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection