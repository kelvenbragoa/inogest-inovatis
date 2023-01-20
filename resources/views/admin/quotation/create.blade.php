@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.quotation')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.quotation')}}</h5>
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
                    <form method="POST" action="{{route('quotation.store')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-8">
                                <label class="form-label" for="inputEmail4">{{__('text.for')}}</label>
                                <select class="form-control mr-2" id="costumer_id" name="costumer_id">
                                    @foreach (App\Models\Costumers::all() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                
                                </select>
                            </div>
                        
                            
                        
                        </div>
                        <div class="row">
                        
                            <div class="mb-3 col-md-4">
                                    <label class="form-label" for="inputEmail4">{{__('text.representative')}}</label>
                                    <input type="text" class="form-control" name="representative" id="service" placeholder="{{__('text.representative')}}" required>
                                </div>
                                
                            
                            </div>
                        
                            <div class="row">
                        
                        <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">{{__('text.type_service')}}</label>
                                <input type="text" class="form-control" name="service" id="service" placeholder="{{__('text.type_service')}}" required>
                            </div>
                            
                        
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <table class="table table-bordered" id="table_field">
                                    <thead class=" text-primary">
                                        
                                        <th>
                                            {{__('text.name_item')}}
                                        </th>
                                        <th>
                                            {{__('text.quantity')}}
                                        </th>
                                        <th>
                                            {{__('text.unit_price')}}
                                        </th>
                                        <th>
                                            {{__('text.action')}}
                                        </th>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" name="item[]" id="txtitem" placeholder="{{__('text.name_item')}}" required></td>
                                                <td><input type="number" class="form-control" name="qtd[]" id="txtqtd" placeholder=" {{__('text.quantity')}}" required></td>
                                                <td><input type="number" class="form-control" name="preco[]" id="txtpreco" placeholder="{{__('text.unit_price')}}" required></td>
                                                <td><input class="btn btn-warning" value="Add" name="add" id="add" type="button"></td>
                                            </tr>
                                        
                                            
                                            </tbody>
                                    </table>
                                    </div>
                            </div>
                        <div class="row">
                        <div class="mb-3 col-md-12">
                                <label class="form-label" for="inputEmail4">{{__('text.obs')}}</label>
                                <textarea type="text" class="form-control" name="obs" id="obs"></textarea>
                            </div>
                            
                        
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">{{__('text.submit')}}</button>
                    </form>
                </div>
               
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function(){
        var html ='<tr><td><input type="text" class="form-control" name="item[]" id="txtitem" placeholder="Item" required></td><td><input type="text" class="form-control" name="qtd[]" id="txtqtd" placeholder="Quantidade" required></td><td><input type="text" class="form-control" name="preco[]" id="txtpreco" placeholder="Preço" required></td><td><input class="btn btn-danger" value="Remove" name="remove" id="remove" type="button"></td></tr>' ;
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
    
</script>

@endsection