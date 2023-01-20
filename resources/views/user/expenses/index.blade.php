@extends('layouts_user.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.expense')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="#" data-toggle="modal" data-target="#modalExemplo" class="btn btn-pill btn-primary"><i class="far fa-plus"></i>{{__('text.add')}}</a>
                    <a href="#" data-toggle="modal" data-target="#modalExemploCategory" class="btn btn-pill btn-warning"><i class="far fa-plus"></i>{{__('text.add')}} {{__('text.category')}}</a>
                   
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
                                <th style="width:40%;">{{__('text.expense')}}</th>
                                <th style="width:25%">{{__('text.description')}}</th>
                                <th style="width:25%">{{__('text.category')}}</th>
                                <th style="width:25%">{{__('text.employee')}}</th>
                                
                                <th>{{__('text.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $item)
                                <tr>
                                    <td>{{$item->value}} MT</td>
                                    <td>{{$item->reason}}</td>
                                    <td>{{$item->category->name}}</td>
                                    <td>{{$item->user->name}}</td>
                                    
                                    <td class="table-action">
                                        <a href="{{URL::to('/expenses/'.$item->id.'/edit')}}"><i class="align-middle" data-feather="edit-2"></i></a>
                                        <a href="" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>
                                    </td>
                                </tr>
                                @include('user.expenses.modal_edit')
                                @include('user.expenses.modaldelete')
                            @endforeach
                            
                        </tbody>
                    </table>
                        Total: 0 MT
                </div>
                
            </div>
        </div>
    </div>

</div>

@include('user.expenses.modal_add')



    
    </div>  
    @include('user.expenses.modal_add_category')

@endsection