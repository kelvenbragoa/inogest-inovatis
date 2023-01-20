@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.edit')}} {{__('text.edcusers')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.edit')}} {{__('text.edcusers')}}</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <form action="{{ route('edcuseronline.update', $edcuseronline->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                           

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.mobile')}}</label>
                                <input type="number" class="form-control"  placeholder="{{__('text.mobile')}}" value="{{ $edcuseronline->mobile  }}" readonly required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.category')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('text.name')}}" value="{{ $edcuseronline->category }}" readonly>
                                
                            </div>

                           
                            
                        </div>
                       
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.code')}}</label>
                                <input type="text" class="form-control"  placeholder="{{__('text.code')}}" value="{{ $edcuseronline->reference  }}" required readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.amount')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('text.amount')}}" value="{{ $edcuseronline->amount  }}" required readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.start')}}</label>
                                <input type="text" class="form-control" value="{{ $edcuseronline->start_timestamp  }}" required readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.end')}}</label>
                                <input type="text" class="form-control"  value="{{ $edcuseronline->end_timestamp  }}" required readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.recover')}}</label>
                                <br>
                                {{__('text.active')}}<input @if ($edcuseronline->status == 1) checked @endif type="radio" name="status" value="1"  id="recipient-name">
                                {{__('text.deactive')}}<input  @if ($edcuseronline->status == 0) checked @endif type="radio" name="status" value="0"  id="recipient-name">
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