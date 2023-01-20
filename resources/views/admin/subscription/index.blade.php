@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.subscription')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('subscription.create')}}" class="btn btn-pill btn-primary"><i class="far fa-plus"></i>{{__('text.add')}}</a>
                   
                </div>
                
                <div class="card-body">
                    @if (Session::has('messageSuccessBank'))
                        <div class="alert alert-success">
                            {{Session::get('messageSuccessBank')}}
                        </div>
                    @endif
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
                                <th style="width:20%;">{{__('text.reference')}}</th>
                                <th style="width:10%">{{__('text.amount')}}</th>
                                <th style="width:15%">{{__('text.method')}}</th>
                                <th style="width:20%">{{__('text.start_date')}}</th>
                                <th style="width:20%">{{__('text.end_date')}}</th>
                                
                                <th>{{__('text.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscription as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->reference}}</td>
                                    <td>{{number_format($item->amount)}}MT</td>
                                    <td>{{$item->method}}</td>
                                    <td>{{$item->start_date}}</td>
                                    <td>{{$item->end_date}}</td>
                                    
                                    <td class="table-action">
                                        <a href="{{URL::to('/subscription/'.$item->id)}}"><i class="align-middle" data-feather="eye"></i></a>
                                    </td>
                                </tr>
                                @include('admin.position.modaldelete')
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection