@extends('layouts_user.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.customers')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('customer.create')}}" class="btn btn-pill btn-primary"><i class="far fa-plus"></i>{{__('text.add')}}</a>
                    
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
                                <th style="width:30%;">{{__('text.name')}}</th>
                                <th style="width:25%">{{__('text.mobile')}}</th>
                                <th style="width:25%">{{__('text.nuit')}}</th>
                                <th style="width:25%">{{__('text.address')}}</th>
                                <th style="width:30%">{{__('text.email')}}</th>
                                <th style="width:30%">{{__('text.city')}}</th>
                                <th style="width:25%">{{__('text.province')}}</th>
                                
                                <th>{{__('text.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customer as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->mobile}}</td>
                                <td>{{$item->nuit}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->city}}</td>
                                <td>{{$item->province}}</td>

                                
                                <td class="table-action">
                                    <a href="{{URL::to('/customer/'.$item->id.'/edit')}}"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>
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