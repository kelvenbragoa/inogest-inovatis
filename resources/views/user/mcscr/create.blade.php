@extends('layouts_user.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.mcscr')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.mcscr')}}</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('messageSuccess'))
                    <div class="alert alert-success">
                        {{Session::get('messageSuccess')}}
                    </div>
                    @endif
                    <form method="POST" action="{{route('mcscr.store')}}">
                        @csrf
                        
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputCity">{{__('text.reason')}}</label>
                                    <textarea type="text" class="form-control" id="motivo" name="motivo" placeholder="{{__('text.reason')}}" rows="3" required></textarea>
                                
                            </div>
                    
                            <div class="row">

                            </div>
                      
                            
                        </div>
                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputAddress">{{__('text.cause')}}</label>
                                <textarea type="text" class="form-control" id="causa" name="causa" placeholder="{{__('text.cause')}}" rows="3" required></textarea>
                        
                        </div>
                        
                           
                        
                        </div>

                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputAddress">{{__('text.solution')}}</label>
                            <textarea type="text" class="form-control" id="solucao" name="solucao" placeholder="{{__('text.solution')}}" rows="3" required></textarea>
                            
                        </div>
                        
                           
                        
                        </div>

                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputAddress">{{__('text.consequence')}}</label>
                            <textarea id="consequencia" name="consequencia" class="form-control" rows="3" placeholder="{{__('text.consequence')}}"></textarea>
                        </div>

                        </div>
                         <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputAddress">{{__('text.recommendation')}}</label>
                            <textarea id="recomendacao" name="recomendacao" class="form-control" rows="3" placeholder="{{__('text.recommendation')}}"></textarea>
                        </div>

                        </div>
                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputAddress">{{__('text.invoice')}}</label>
                            <select id="invoice_id" name="invoice_id" class="form-control" rows="3" placeholder="{{__('text.invoice')}}">
                                    <option value="">{{__('text.select')}}</option>
                                    @foreach (App\Models\Invoice::all() as $item)
                                   <option value="{{$item->id}}">#{{$item->id}}/{{$item->quotation->service}}</option>
                                    @endforeach
                            </select>
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