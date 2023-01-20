@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.edcusers')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    

                  


                </div>
                
                <div class="card-body">
                    @if (Session::has('messageSuccess'))
                        <div class="alert alert-success">
                           Usuário adicionado com sucesso!
                        </div>
                    @endif
                    @if (Session::has('messageError'))
                        <div class="alert alert-danger">
                            Ocorreu um erro ao adicionar o usuário. Tente novamente!
                        </div>
                    @endif

                    
                    <table id="myTable" class="table display" >
                        <thead>
                            <tr>
                                <th style="width:5%;">ID</th>
                                <th style="width:20%;">{{__('text.name')}}</th>
                                <th style="width:20%;">{{__('text.mobile')}}</th>
                                <th style="width:20%;">{{__('text.code')}}</th>
                                <th style="width:20%;">{{__('text.category')}}</th>
                                <th style="width:20%;">{{__('text.shift')}}</th>
                                <th style="width:20%;">{{__('text.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($edcuser as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->nome}}</td>
                                    <td>{{$item->telefone}}</td>
                                    <td>{{$item->codigo}}</td>
                                    <td>{{$item->edccategory->name}}</td>
                                    <td>{{$item->shift->name}}</td>
                                   
                                    
                                    <td class="table-action">
                                        <a href="{{URL::to('/edcuser/'.$item->id.'/edit')}}"><i class="align-middle" data-feather="edit-2"></i></a>
                                        <!--<a href="" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>-->
                                    </td>
                                </tr>
                                @include('admin.edcuser.modaldelete')
                            @endforeach
                        </tbody>
                        <div class="d-flex justify-content-center">
                            {!! $edcuser->links() !!}
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection