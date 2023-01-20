@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.edit')}} {{__('text.accountmanagement')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.edit')}} {{__('text.accountmanagement')}}</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <form action="{{ route('accountmanagement.update', $account->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                       
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.user')}}</label>
                                <input type="text" class="form-control" name="user" id="user" placeholder="{{__('text.user')}}" value="{{$account->user}}" required>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.password')}}</label>
                                <input type="text" class="form-control" name="password" id="password" placeholder="{{__('text.password')}}" value="{{$account->password}}" required>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.description')}}</label>
                                <textarea type="text" class="form-control" name="description" id="description" placeholder="{{__('text.description')}}" required>
                                    {{$account->description}}
                                </textarea>
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