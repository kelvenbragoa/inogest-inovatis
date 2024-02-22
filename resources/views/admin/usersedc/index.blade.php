@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.users')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('user.create')}}" class="btn btn-pill btn-primary"><i class="far fa-plus"></i>{{__('text.add')}}</a>
                    
                </div>
                <div class="card-body">
                    <table id="myTable" class="table display" >
                        <thead>
                            <tr>
                                <th style="width:40%;">{{__('text.name')}}</th>
                                <th style="width:25%">{{__('text.mobile')}}</th>
                                <th style="width:25%">{{__('text.email')}}</th>
                                <th style="width:25%">{{__('text.password')}}</th>
                                {{-- <th>{{__('text.action')}}</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usersedc as $item)
                            <tr>
                                <td>{{$item->first_name}} {{$item->last_name}}</td>
                                <td>{{$item->mobile}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->password}}</td>
                                
                                {{-- <td class="table-action">
                                    @if (auth()->user()->role_id == $item->role_id )
                                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                    @else
                                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>
                                    @endif
                                    
                                </td> --}}
                            </tr>
                            @include('admin.user.modaldelete')
                            @endforeach
                            
                        </tbody>
                        <div class="d-flex justify-content-center">
                            {!! $usersedc->links() !!}
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection