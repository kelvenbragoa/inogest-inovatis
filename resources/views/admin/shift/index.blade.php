@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.shift')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('shift.create')}}" class="btn btn-pill btn-primary"><i class="far fa-plus"></i>{{__('text.add')}}</a>
                   
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
                                <th style="width:20%;">{{__('text.employee')}}</th>
                                <th style="width:20%;">{{__('text.lp')}}</th>
                                <th style="width:20%;">{{__('text.pro')}}</th>
                                <th style="width:20%;">{{__('text.total')}}</th>
                                <th style="width:20%;">{{__('text.date')}}</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shifts as $item)
                                <tr>
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->lp}}</td>
                                    <td>{{$item->pro}}</td>
                                    <td>{{$item->pro + $item->lp}}</td>
                                    
                                    <td>{{$item->created_at}}</td>
                                   
                                    
                                  
                                </tr>
                                @include('admin.shift.modaldelete')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection