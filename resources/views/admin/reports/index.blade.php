@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.reports')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                   
                   
                </div>
                
                <div class="card-body">
                   
                    <form method="POST" action="{{route('reports.store')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">{{__('text.type')}}</label>
                                <select type="text" class="form-control" name="type" id="name" placeholder="{{__('text.edc_number')}}" required>
                                    <option value="1">{{__('text.edc_number')}}</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">{{__('text.start')}}</label>
                                <input type="date" class="form-control" name="start" id="name" placeholder="{{__('text.department')}}" value="{{ old('name') }}" required>
                               
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">{{__('text.end')}}</label>
                                <input type="date" class="form-control" name="end" id="name" placeholder="{{__('text.department')}}" value="{{ old('name') }}" required>
                                 
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