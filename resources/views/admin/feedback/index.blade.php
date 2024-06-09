@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">FeedBack Usuários</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('feedbackuser.create')}}" class="btn btn-pill btn-primary"><i class="far fa-plus"></i>{{__('text.add')}}</a>
                   
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
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <table id="myTable" class="table display" >
                        <thead>
                            <tr>
                                <th style="width:15%;">Registado por</th>
                                <th style="width:20%;">Nome usuário</th>
                                <th style="width:10%;">Provincia</th>
                                <th style="width:10%;">Nível satisfação</th>
                                <th style="width:15%;">Telefone Instrutor</th>
                                <th style="width:40%;">Sugestões</th>
                                <th style="width:20%;">Data</th>
                                <th>{{__('text.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feedback as $item)
                                <tr>
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->client}}</td>
                                    <td>{{$item->province->name}}</td>
                                    <td>@switch($item->satisfation)
                                        @case(1)
                                            Excelente
                                            @break
                                        @case(2)
                                            Boa
                                            @break
                                        @case(3)
                                            Má
                                            @break
                                        @default
                                            
                                    @endswitch</td>
                                    <td>{{$item->instructor_phone}}</td>
                                    <td>{{$item->suggest}}</td>
                                    <td>{{$item->created_at->format('d-m-Y H:i')}}</td>

                                    <td class="table-action">
                                         <a href="{{URL::to('/feedbackuser/'.$item->id.'/edit')}}"><i class="align-middle" data-feather="edit-2"></i></a> 
                                        <a href="" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>
                                    </td>
                                </tr>
                                @include('admin.feedback.modaldelete')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection