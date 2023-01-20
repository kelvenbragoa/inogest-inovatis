@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.edcusers')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.edcusers')}}</h5>
                    <h5 class="card-title" style="color: orange">{{__('message.message_create')}}</h5>

                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                   
                    <form method="POST" action="{{route('edcuseronline.store')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.mobile')}}(258850110300)*</label>
                                <input type="number" class="form-control" name="mobile" id="mobile" placeholder="{{__('text.mobile')}}(Ex: 258850110300)" value="{{ old('mobile') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.category')}}*</label>
                                <select name="categoria" class="form-control" value="{{ old('category_id') }}" required>
                                    <option value="lp">LP</option>
                                    <option value="pro">Pro</option>
                                </select>
                            </div>

                          
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.start')}}*</label>
                                <input type="text" class="form-control" name="start" id="start" placeholder="{{__('text.start')}}" value="{{ old('start') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.end')}}*</label>
                                <input type="text" class="form-control" name="end" id="end" placeholder="{{__('text.end')}}" value="{{ old('end') }}" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submeter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection