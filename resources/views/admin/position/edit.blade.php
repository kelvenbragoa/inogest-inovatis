@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.edit')}} {{__('text.position')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.edit')}} {{__('text.position')}}</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <form action="{{ route('position.update', $position->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.position')}}</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{__('text.position')}}" value="{{$position->name}}" required>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.department')}}</label>
                                <select type="text" class="form-control" name="department_id" id="department_id" placeholder="{{__('text.position')}}" value="{{ old('department_id') }}" required>
                                    @foreach (\App\Models\Departments::all() as $item)
                                    <option value="{{$item->id}}" @if ($item->id == $position->department_id) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputCity">{{__('text.description')}}</label>
                                <textarea class="form-control" id="description" name="description" placeholder="{{__('text.description')}}"  rows="5" required>{{$position->description}}</textarea>
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