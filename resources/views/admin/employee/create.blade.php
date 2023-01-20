@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.employee')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.employee')}}</h5>
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
                    <form method="POST" action="{{route('employee.store')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">{{__('text.name')}}</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{__('text.name')}}" value="{{ old('name') }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label" for="inputEmail4">{{__('text.surname')}}</label>
                                <input type="text" class="form-control" name="surname" id="surname" placeholder="{{__('text.surname')}}" value="{{ old('surname') }}" required>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="txttelefone">{{__('text.nationality')}}</label>
                                <input type="text" class="form-control" id="nationality" name="nationality" placeholder="{{__('text.nationality')}}" value="{{ old('nationality') }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label" for="inputZip">{{__('text.date_birth')}}</label>
                                <input type="date" class="form-control" id="date_birth" name="date_birth" placeholder="{{__('text.date_birth')}}" value="{{ old('date_birth') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label" for="inputCity">{{__('text.filiation')}}</label>
                                <input type="text" class="form-control" id="filiation" name="filiation" placeholder="{{__('text.filiation')}}" value="{{ old('filiation') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputCity">{{__('text.bi')}}</label>
                                <input type="text" class="form-control" id="bi" name="bi" placeholder="{{__('text.bi')}}" value="{{ old('bi') }}" required>
                            </div>
                            <div class="mb-3 col-md-1">
                                <label class="form-label" for="inputCity">{{__('text.gender')}}</label>
                                <select type="text" class="form-control" id="gender_id" name="gender_id" placeholder="{{__('text.gender')}}" value="{{ old('gender_id') }}" required>
                                    @foreach (\App\Models\Genders::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="mb-3 col-md-1">
                                <label class="form-label" for="inputCity">{{__('text.marital_status')}}</label>
                                <select type="text" class="form-control" id="marital_status_id" name="marital_status_id" placeholder="{{__('text.marital_status')}}" value="{{ old('marital_status_id') }}" required>
                                    @foreach (\App\Models\Marital_Status::all() as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputState">{{__('text.province')}}</label>
                                <select id="province_id" name="province_id" class="form-control" value="{{ old('province_id') }}" required>
                                    @foreach (\App\Models\Provinces::all() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                    
                                   
                                </select>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label" for="inputZip">{{__('text.city')}}</label>
                              
                                <select name="city_id" class="form-control" value="{{ old('city_id') }}" required>
                                    @foreach (\App\Models\City::all() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                    
                                   
                                </select>
                            </div>
                        </div>
                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputAddress">{{__('text.address')}}</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="{{__('text.address')}}" value="{{ old('address') }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                                <label class="form-label" for="txttelefone">{{__('text.mobile')}}</label>
                                <input type="number" class="form-control" id="mobile" name="mobile" placeholder="{{__('text.mobile')}}" value="{{ old('mobile') }}" required>
                            </div>
                        </div>
                        <div class="row">
                        <div class="mb-3 col-md-6">
                                <label class="form-label" for="txttelefone">{{__('text.degree')}}</label>
                                <input type="text" class="form-control" id="actual_degree" name="actual_degree" placeholder="{{__('text.degree')}}" value="{{ old('degree') }}" required>
                        </div>
                        
                        <div class="mb-3 col-md-2">
                                <label class="form-label" for="inputZip">{{__('text.social_number')}}</label>
                                <input type="text" class="form-control" id="social_number" name="social_number" placeholder="{{__('text.social_number')}}" value="{{ old('social_number') }}" required>
                        </div>
                       
                        </div>
                        <div class="row">
                        <div class="mb-3 col-md-6">
                                <label class="form-label" for="txttelefone">{{__('text.type_contract')}}</label>
                                <select id="contract_id" name="contract_id" class="form-control" value="{{ old('contract_id') }}" required>
                                    @foreach (App\Models\Contracts::all() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                                </select>
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3 col-md-2">
                                <label class="form-label" for="txttelefone">{{__('text.salary_base')}}</label>
                                <input type="number" class="form-control" id="salary_base" name="salary_base" placeholder="{{__('text.salary_base')}}" value="{{ old('salary_base') }}" required >
                        </div>
                        <div class="mb-3 col-md-2">
                                <label class="form-label" for="txttelefone">{{__('text.subsidy')}}</label>
                                <input type="number" class="form-control" id="subsidy" name="subsidy" placeholder="{{__('text.subsidy')}}" value="{{ old('subsidy') }}" required>
                        </div>
                        
                        </div>
                        <div class="row">
                        
                        <div class="mb-3 col-md-2">
                                <label class="form-label" for="txttelefone">{{__('text.admission_date')}}</label>
                                <input type="date" class="form-control" id="hired_date" name="hired_date" placeholder="{{__('text.admission_date')}}" value="{{ old('date_admission') }}" required>
                        </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-3">
                                <label class="form-label" for="txtcidade">{{__('text.department')}}</label>
                                <select class="form-control mr-2" id="department_id" name="department_id" value="{{ old('department_id') }}">
                                   @foreach (App\Models\Departments::all() as $item)
                                       <option value="{{$item->id}}">{{$item->name}}</option>
                                   @endforeach
                                </select>
                            </div>
                        <div class="mb-3 col-md-3">
                            <label class="form-label" for="txtcidade">{{__('text.position')}}</label>
                            <select class="form-control mr-2" id="position_id" name="position_id" value="{{ old('position_id') }}">
                               @foreach (App\Models\Position::all() as $item)
                                   <option value="{{$item->id}}">{{$item->name}}</option>
                               @endforeach
                            </select>
                        </div>
                        </div>
                        {{--
                        <hr>
                        
                        
                </div>

                <div class="card-header">
                    <h5 class="card-title">{{__('text.evolution_education')}}</h5>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <table class="table table-bordered display" id="table_field">
                                <thead class=" text-primary">
                                    
                                    <th>
                                        {{__('text.date')}}
                                    </th>
                                    <th>
                                        {{__('text.description')}}
                                    </th>
                                    
                                    <th>
                                        {{__('text.action')}}
                                    </th>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td><input type="date" class="form-control" name="data_literaria[]" id="data_literaria" placeholder="{{__('text.date')}}"></td>
                                            <td><textarea type="number" class="form-control" name="desc_literaria[]" id="txtqtd" placeholder=" {{__('text.description')}}"></textarea></td>
                                            <td><input class="btn btn-warning" value="+" name="add" id="add" type="button"></td>
                                        </tr>
                                    
                                        
                                        </tbody>
                                </table>
                                </div>
                        </div>
                   
                </div>

                <div class="card-header">
                    <h5 class="card-title">{{__('text.evolution_profissional')}}</h5>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <table class="table table-bordered display" id="table_field2">
                                <thead class=" text-primary">
                                    
                                    <th>
                                        {{__('text.date')}}
                                    </th>
                                    <th>
                                        {{__('text.description')}}
                                    </th>
                                    
                                    <th>
                                        {{__('text.action')}}
                                    </th>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td><input type="date" class="form-control" name="data_profissional[]" id="data_profissional" placeholder="{{__('text.date')}}"></td>
                                            <td><textarea type="text" class="form-control" name="desc_profissional[]" id="desc_profissional" placeholder=" {{__('text.description')}}"></textarea></td>
                                            <td><input class="btn btn-warning" value="+" name="add" id="add2" type="button"></td>
                                        </tr>
                                    
                                        
                                        </tbody>
                                </table>
                                </div>
                        </div>
                   
                </div>


                <div class="card-header">
                    <h5 class="card-title">{{__('text.company_worked')}}</h5>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <table class="table table-bordered display" id="table_field3">
                                <thead class=" text-primary">
                                    
                                    <th>
                                        {{__('text.company_name')}}
                                    </th>
                                    <th>
                                        {{__('text.obs')}}
                                    </th>
                                    <th>
                                        {{__('text.years_work')}}
                                    </th>
                                    
                                    <th>
                                        {{__('text.action')}}
                                    </th>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td><input type="input" class="form-control" name="data_profissional[]" id="data_profissional" placeholder="{{__('text.company_name')}}"></td>
                                            <td><textarea type="text" class="form-control" name="desc_profissional[]" id="desc_profissional" placeholder=" {{__('text.obs')}}"></textarea></td>
                                            <td><input type="number" class="form-control" name="data_profissional[]" id="data_profissional" placeholder="{{__('text.years_work')}}"></td>
                                            <td><input class="btn btn-warning" value="+" name="add" id="add3" type="button"></td>
                                        </tr>
                                </tbody>
                                </table>
                                </div>
                        </div>
                   
                </div>--}}

                <div class="card-body">
                    <button type="submit"  class="btn btn-primary">{{__('text.submit')}}</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function(){
        var html ='<tr><td><input type="date" class="form-control" name="data_literaria[]" id="data_literaria" placeholder="Item"></td><td><textarea type="text" class="form-control" name="qtd[]" id="txtqtd" placeholder=""></textarea></td><td><input class="btn btn-danger" value="-" name="remove" id="remove" type="button"></td></tr>' ;
        var max = 30;
        var x = 1;
        
        $("#add").click(function(){
            if(x <= max){
            $("#table_field").append(html);
            x++;
            }
        });
        
        $("#table_field").on('click','#remove',function(){
            $(this).closest('tr').remove();
            x--;
        });
    })


    $(document).ready(function(){
        var html ='<tr><td><input type="date" class="form-control" name="data_profissional[]" id="data_profissional" placeholder="Item"></td><td><textarea type="text" class="form-control" name="qtd[]" id="txtqtd" placeholder=""></textarea></td><td><input class="btn btn-danger" value="-" name="remove" id="remove2" type="button"></td></tr>' ;
        var max = 30;
        var x = 1;
        
        $("#add2").click(function(){
            if(x <= max){
            $("#table_field2").append(html);
            x++;
            }
        });
        
        $("#table_field2").on('click','#remove2',function(){
            $(this).closest('tr').remove();
            x--;
        });
    })


    $(document).ready(function(){
        var html ='<tr><td><input type="input" class="form-control" name="data_profissional[]" id="data_profissional"></td><td><textarea type="text" class="form-control" name="desc_profissional[]" id="desc_profissional"></textarea></td><td><input type="number" class="form-control" name="data_profissional[]" id="data_profissional" ></td><td><input class="btn btn-danger" value="-" name="remove" id="remove3" type="button"></td></tr>' ;
        var max = 30;
        var x = 1;
        
        $("#add3").click(function(){
            if(x <= max){
            $("#table_field3").append(html);
            x++;
            }
        });
        
        $("#table_field3").on('click','#remove3',function(){
            $(this).closest('tr').remove();
            x--;
        });
    })
    
</script>

@endsection