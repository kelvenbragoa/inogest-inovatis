@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.accountmanagement')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('accountmanagement.create')}}" class="btn btn-pill btn-primary"><i class="far fa-plus"></i>{{__('text.add')}}</a>
                   
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
                                <th style="width:20%;">{{__('text.user')}}</th>
                                <th style="width:20%;">{{__('text.password')}}</th>
                                <th style="width:40%;">{{__('text.description')}}</th>
                               
                                
                                <th>{{__('text.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $item)
                                <tr>
                                    <td>{{$item->user}}</td>
                                    <td>{{$item->password}}</td>
                                    <td>{{$item->description}}</td>
                                   
                                    
                                    <td class="table-action">
                                        <a href="{{URL::to('/accountmanagement/'.$item->id.'/edit')}}"><i class="align-middle" data-feather="edit-2"></i></a>
                                        <a href="" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>
                                    </td>
                                </tr>
                                @include('admin.accountmanagement.modaldelete')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection