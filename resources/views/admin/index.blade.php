
@extends('layouts_admin.master')
@section('content')

<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>{{__('text.analytics_dashboard')}}</strong></h3>
        </div>

        
    </div>
    <div class="row">
        <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
                <div class="row">

                   
                   
 <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Turno Dia</h5>
												        <h1> {{count($turno_dia_lp)+ count($turno_dia_pro)}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">LP: {{count($turno_dia_lp)}} </h4>
															
															<h4 class="card-title mb-4">PRO: {{count($turno_dia_pro)}} </h4>
															
														
													</div>

																				</div>
							</div>
                        </div>   
                    </div>

                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Turno Noite</h5>
												        <h1> {{count($turno_noite_lp)+ count($turno_noite_pro)}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
                                                        <h4 class="card-title mb-4">LP: {{count($turno_noite_lp)}} </h4>
															
                                                        <h4 class="card-title mb-4">PRO: {{count($turno_noite_pro)}} </h4>
                                                        
                                                       
													</div>

												
								</div>
							</div>
                        </div>   
                    </div>
                    
                    <a href="{{route('operationedc.index')}}">Para ver mais clique aqui</a>


                    



                 
                </div>
            </div>
        </div>        
    </div>
    
    







</div>


@endsection

