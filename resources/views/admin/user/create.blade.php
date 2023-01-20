@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.users')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.users')}}</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('messageSuccess'))
                    <div class="alert alert-success">
                        {{Session::get('messageSuccess')}}
                    </div>
                    @endif
                    <form method="POST" action="{{route('user.store')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.name')}}</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{__('text.name')}}" required>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.mobile')}}</label>
                                <input type="number" class="form-control" name="mobile" id="mobile" placeholder="{{__('text.mobile')}}" required>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.email')}}</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="{{__('text.email')}}" required>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputCity">{{__('text.password')}}</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="{{__('text.password')}}" required>
                            </div>
                            
                        </div>
                        <input type="hidden" class="form-control" id="role_id" name="role_id" value="2" required>
                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="txtcidade">Funcionário</label>
                            <select class="form-control mr-2" id="employee_id" name="employee_id">
                                @foreach ( App\Models\Employees::all() as $item)
                                    <option value="{{$item->id}}"> {{$item->name}} {{$item->surname}}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        <button type="submit"  class="btn btn-primary">Submeter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection