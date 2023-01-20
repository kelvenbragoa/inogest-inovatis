@extends('layouts_user.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.quotation')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('quotation.create')}}" class="btn btn-pill btn-primary"><i class="far fa-plus"></i>{{__('text.add')}}</a>
                    
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
                                <th style="width:20%;">ID</th>
                                <th style="width:25%">{{__('text.customers')}}</th>
                                <th style="width:25%">{{__('text.service')}}</th>
                                <th style="width:25%">{{__('text.obs')}}</th>
                                <th style="width:25%">{{__('text.status')}}</th>
                                <th style="width:35%">{{__('text.date')}}</th>
                                
                                
                                <th>{{__('text.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($quotations as $item)
                            <tr>
                                <td>#{{$item->id}}</td>
                                <td>{{$item->customer->name}}</td>
                                <td>{{$item->service}}</td>
                                <td>{{$item->obs}}</td>
                                <td>@if ($item->status == 0)
                                    {{__('text.pending')}}
                                @else
                                    {{__('text.paid')}}
                                @endif</td>
                                <td>{{$item->created_at->format('d-m-y')}}</td>
                                

                                
                                <td class="table-action">
                                    <!--<a href="{{URL::to('/customer/'.$item->id.'/edit')}}"><i class="align-middle" data-feather="edit-2"></i></a>-->
                                    <a href="{{URL::to('/quotation/'.$item->id)}}"><i class="align-middle" data-feather="file"></i></a>
                                    @if ($item->status == 0)
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>
                                    @endif 
                                </td>
                            </tr>
                            @include('user.customer.modaldelete')
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection