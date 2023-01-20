@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.invoice')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="" data-toggle="modal" data-target="#modalExemplo" class="btn btn-pill btn-primary" class="btn btn-pill btn-primary"><i class="far fa-plus"></i>{{__('text.add')}}</a>
                    
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
                                <th style="width:20%;">{{__('text.id_invoice')}}</th>
                                <th style="width:20%;">{{__('text.id_quotation')}}</th>
                                <th style="width:25%">{{__('text.customers')}}</th>
                                <th style="width:25%">{{__('text.service')}}</th>
                                <th style="width:25%">{{__('text.obs')}}</th>
                                <th style="width:35%">{{__('text.date')}}</th>
                                
                                
                                <th>{{__('text.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoice as $item)
                            <tr>
                                <td>#{{$item->id}}</td>
                                <td>#{{$item->quotation_id}}</td>
                                <td>{{$item->quotation->customer->name ?? ''}}</td>
                                <td>{{$item->quotation->service}}</td>
                                <td>{{$item->obs}}</td>
                                <td>{{$item->created_at->format('d-m-y')}}</td>
                                

                                
                                <td class="table-action">
                                    <!--<a href="{{URL::to('/customer/'.$item->id.'/edit')}}"><i class="align-middle" data-feather="edit-2"></i></a>-->
                                    <a href="{{URL::to('/invoice/'.$item->id)}}"><i class="align-middle" data-feather="file"></i></a>
                                    <!--<a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>-->
                                </td>
                            </tr>
                            @include('admin.customer.modaldelete')
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@include('admin.invoice.modal_add')

@endsection