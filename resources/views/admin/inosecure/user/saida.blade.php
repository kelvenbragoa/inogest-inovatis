@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Saída de Usuarios</h1>

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
                                <th style="width:10%;">Cod/Requ</th>
                                <th style="width:15%">Nome</th>
                                <th style="width:15%">Operador</th>
                                <th style="width:15%">Data</th>
                                <th style="width:15%">Horas</th>
                                <th style="width:25%">Observação</th>
                                
                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['request']['requestid']}}</td>
                                    <td>{{$item['request']['user']['name']}}</td>
                                    <td>{{$item['user']['name']}}</td>
                                    <td>{{date('d-m-Y',strtotime($item['created_at']))}}</td>
                                    <td>{{date('h:m:s',strtotime($item['created_at']))}}</td>
                                    <td>{{$item['obs']}}</td>
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