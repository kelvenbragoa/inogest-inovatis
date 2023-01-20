@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.absences')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.absences')}}</h5>
                </div>
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
                    <form method="POST" action="{{route('absence.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                            <label class="form-label" for="txtcidade">{{__('text.employee')}}</label>
                            <select class="form-control mr-2" id="employee_id" name="employee_id" value="{{ old('employee_id') }}">
                               @foreach (App\Models\Employees::orderBy('surname','asc')->get() as $item)
                                   <option value="{{$item->id}}">{{$item->surname}},{{$item->name}}</option>
                               @endforeach
                            </select>
                        </div>
                        </div>
                       
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="txtcidade">{{__('text.reason')}}</label>
                                <textarea class="form-control mr-2" id="reason" name="reason">
                                    {{ old('reason') }}
                                </textarea>
                                 
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="txtcidade">{{__('text.is_acceptable')}}</label>
                               <input type="radio" name="is_accept" id="is_accept" checked>
                               <label class="form-label" for="txtcidade">{{__('text.is_not_acceptable')}}</label>
                               <input type="radio" name="is_accept" id="is_accept">
                                 
                            </div>
                        </div>


                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="txtcidade">{{__('text.file')}}</label>
                                <input class="form-control mr-2" id="file" name="file" type="file" value="{{ old('file') }}">
                                 
                            </div>
                        </div>


                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="txtcidade">{{__('text.date')}}</label>
                            <input class="form-control mr-2" id="date" name="date" type="date" value="{{ old('date') }}">
                             
                        </div>
                        </div>
                        <button type="submit"  class="btn btn-primary">{{__('text.submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection