@extends('layouts_user.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.invoice')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.invoice')}}</h5>
                </div>
                <div class="card-body">
                   
                    @if (count($quotation)==0)
                        <p>{{__('text.no_quote')}}</p>
                    @else
                    <form method="POST" action="{{route('invoice.store')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-8">
                                <label class="form-label" for="inputEmail4">{{__('text.quotation')}}</label>
                                <select class="form-control mr-2" id="quotation_id" name="quotation_id">
                                    @foreach ($quotation as $item)
                                    <option value="{{$item->id}}">#{{$item->id}}/{{$item->service}}</option>
                                    @endforeach
                                
                                </select>
                            </div>
                        
                            
                        
                        </div>
                       
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                    <label class="form-label" for="inputEmail4">{{__('text.p_order')}}</label>
                                    <textarea type="text" class="form-control" name="order" id="order" required></textarea>
                                </div>
                                
                            
                            </div>
                            
                        <div class="row">
                        <div class="mb-3 col-md-12">
                                <label class="form-label" for="inputEmail4">{{__('text.obs')}}</label>
                                <textarea type="text" class="form-control" name="obs" id="obs" required></textarea>
                            </div>
                            
                        
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">{{__('text.submit')}}</button>
                    </form>
                    @endif
                    
                </div>
               
            </div>
        </div>
    </div>

</div>



@endsection