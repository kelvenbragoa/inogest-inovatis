@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Editar Feedback</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Editar Feedback</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <form action="{{ route('feedbackuser.update', $feedback->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                       
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">Registrado por:</label>
                                <input type="text" class="form-control"  placeholder="Registrado por" value="{{ $feedback->user->name ?? '' }}" readonly>
                               
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">Nome e número do cliente:</label>
                                <input type="text" class="form-control"  placeholder="Cliente" value="{{ $feedback->client}}"  name="client" required>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">Nível de satisfação</label>
                                <select name="satisfation" class="form-control"  required>
                                    <option value="1" @if( $feedback->satisfation == 1) selected @endif >Excelente</option>
                                    <option value="2" @if( $feedback->satisfation == 2) selected @endif >Boa</option>
                                    <option value="3" @if( $feedback->satisfation == 3) selected @endif >Má</option>

                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">Província</label>
                                <select name="province_id" class="form-control"  required>
                                    @foreach (\App\Models\Provinces::orderBy('name','asc')->get() as $item)
                                        <option value="{{$item->id}}" @if($item->id == $feedback->province_id) @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">Sugestão do cliente:</label>
                                <textarea type="text" class="form-control"  placeholder="Sugestão do cliente"  name="suggest" required>{{ $feedback->suggest}}</textarea>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">Número do instrutor:</label>
                                <input type="text" class="form-control"  placeholder="Instrutor"  name="instructor_phone" value="{{ $feedback->instructor_phone}}" required>
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