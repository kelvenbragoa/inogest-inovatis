@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.activity')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.activity')}}</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('messageSuccess'))
                    <div class="alert alert-success">
                        {{Session::get('messageSuccess')}}
                    </div>
                    @endif
                    <form method="POST" action="{{route('activity.store')}}">
                        @csrf
                        
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputCity">{{__('text.name')}}</label>
                                    <textarea type="text" class="form-control" id="name" name="name" placeholder="{{__('text.name')}}" rows="3" required></textarea>
                                
                            </div>
                    
                            <div class="row">

                            </div>
                      
                            
                        </div>
                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputAddress">{{__('text.description')}}</label>
                                <textarea type="text" class="form-control" id="description" name="description" placeholder="{{__('text.description')}}" rows="3" required></textarea>
                        
                        </div>
                        
                           
                        
                        </div>

                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputAddress">{{__('text.user')}}</label>
                            <input type="text" class="form-control" value="{{Auth::user()->name}}" placeholder="{{__('text.user')}}" readonly required/>
                            <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}" placeholder="{{__('text.user')}}" required/>
                            
                        </div>  
                        
                        </div>

                        <button type="submit" class="btn btn-primary">{{__('text.submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection