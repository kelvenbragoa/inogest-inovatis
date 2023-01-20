@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.search')}} {{__('text.edcusers')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
              
                
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
                                <th style="width:20%;">{{__('text.ref')}}</th>
                                <th style="width:20%;">{{__('text.mobile')}}</th>
                                <th style="width:20%;">{{__('text.start')}}</th>
                                <th style="width:20%;">{{__('text.end')}}</th>
                                <th style="width:20%;">{{__('text.amount')}}</th>
                                <th style="width:20%;">{{__('text.category')}}</th>
                                <th style="width:20%;">{{__('text.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($edcusersearch as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->reference}}</td>
                                <td>{{$item->mobile}}</td>
                                <td>{{$item->created_at->format('d-m-Y')}}</td> 
                                <td>{{$item->created_at->addDays(30)->format('d-m-Y')}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->category}}</td>
                                <td class="table-action">
                                    <a href="{{URL::to('/edcuseronline/'.$item->id.'/edit')}}"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <!--<a href="" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>-->
                                </td>
                            </tr>
                               
                            @endforeach
                        </tbody>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection