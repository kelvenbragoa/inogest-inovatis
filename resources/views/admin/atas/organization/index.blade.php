@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Organizacao</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                
                
                
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
                                <th style="width:10%;">ID</th>
                                <th style="width:15%">Organização</th>
                                <th style="width:15%">Número de usuários</th>
                                <th style="width:15%">Valor</th>
                                <th style="width:15%">Data de emissão</th>
                                <th style="width:25%">Data de vencimento</th>
                                <th style="width:25%">Estado</th>
                                
                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['id']}}</td>
                                    <td>{{$item['organization']['name']}}</td>
                                    <td>{{$item['number_users']}}</td>
                                    <td>{{$item['amount']}}</td>
                                    <td>{{date('d-m-Y',strtotime($item['start_date']))}}</td>
                                    <td>{{date('d-m-Y',strtotime($item['end_date']))}}</td>
                                    <td>{{$item['status']}}</td>
                                </tr>
                               
                            @endforeach
                            
                        </tbody>
                    </table>
                      
                </div>
                
            </div>
        </div>
    </div>

</div>
</div>





    
    </div>  


@endsection