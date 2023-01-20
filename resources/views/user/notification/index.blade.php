@extends('layouts_user.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.notification')}}</h1>

    <div class="row">
        <div class="col-12">
            <a href="/deleteall">Delete all</a>
            @forelse (Auth::user()->notifications as $item)
            <div class="card">
              
                <div class="card-body">
                    
                    <p>{{$item->data['data']}}</p>
                    <p>{{$item->created_at}}</p>
                    
                </div>
            </div>
            @empty
                <div class="card">
              
                <div class="card-body">
                    
                    <p>No data</p>
                    
                </div>
            </div>
            @endforelse
          
            
        </div>
    </div>

</div>

@endsection