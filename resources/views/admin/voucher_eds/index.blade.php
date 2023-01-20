@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Recargas</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    
                    <a href="#" data-toggle="modal" data-target="#modalExemploEds" class="btn btn-pill btn-warning"><i class="far fa-plus"></i>{{__('text.add')}} EDS</a>
                   
                   
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
                                <th style="width:5%;">ID</th>
                                <th style="width:20%;">Recarga</th>
                                <th style="width:10%">Categoria</th>
                                <th style="width:10%">Usado</th>
                                <th style="width:25%">Cliente</th>
                                <th style="width:10%">Data</th>
                                
                                {{-- <th>{{__('text.action')}}</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($voucher as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->voucher}}</td>
                                    <td> @if ($item->category == 'eds') EDS GERAL @endif</td>
                                    <td>@if ($item->status == 0) Não  @else Sim @endif</td>
                                    <td>{{$item->customer}}</td>
                                    <td>{{$item->created_at->format('d-m-Y')}}</td>
                                    
                                    {{-- <td class="table-action">
                                        <a href="{{URL::to('/voucher/'.$item->id.'/edit')}}"><i class="align-middle" data-feather="edit-2"></i></a>
                                        <a href="" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>
                                    </td> --}}
                                </tr>
                                {{-- @include('admin.voucher.modal_edit')
                                @include('admin.voucher.modaldelete') --}}
                            @endforeach
                            
                        </tbody>
                    </table>
                       
                </div>
                
            </div>
        </div>
    </div>

</div>


@include('admin.voucher_eds.modal_add_eds')



    
    </div>  
    

@endsection