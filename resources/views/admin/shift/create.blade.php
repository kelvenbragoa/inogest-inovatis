@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.department')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.department')}}</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <form method="POST" action="{{route('shift.store')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.employee')}}</label>
                                <input type="text" class="form-control"  value="{{ Auth::user()->name }}" readonly>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.lp')}}</label>
                                <input type="text" class="form-control" name="lp" id="lp" placeholder="{{__('text.department')}}" value="{{ count($lp) }}" readonly>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.pro')}}</label>
                                <input type="text" class="form-control" name="pro" id="pro" placeholder="{{__('text.department')}}" value="{{ count($pro) }}" readonly>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.total')}}</label>
                                <input type="text" class="form-control" name="total" id="total" placeholder="{{__('text.department')}}" value="{{ count($lp)+ count($pro) }}" readonly>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.shift')}}*</label>
                                <select name="shift_id" class="form-control" value="{{ old('shift_id') }}" required>
                                    @if (time() <= strtotime("15:00:00"))
                                    @foreach (\App\Models\Shift::orderBy('id','asc')->get() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                    @else
                                    @foreach (\App\Models\Shift::orderBy('id','desc')->get() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
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