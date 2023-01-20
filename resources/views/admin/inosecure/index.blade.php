@extends('layouts_admin.master')
@section('content')

<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>{{__('text.analytics_dashboard')}}</strong></h3>
        </div>

        
    </div>
    <h2>Guias</h2>
   
    <div class="row">
        <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Guias Emitidas</h5>
												        <h1> {{$data['dashboard'][0]['total']}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Em dia: {{$data['dashboard'][0]['aliveuser']}} </h4>
															
															<h4 class="card-title mb-4">Expiradas: {{$data['dashboard'][0]['deaduser']}} </h4>
															
															
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
												        <h5 class="card-title mb-4">Entradas</h5>
												        <h1> {{$data['dashboard'][0]['total_in_user']}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
                                                        <h4 class="card-title mb-4">Hoje: {{$data['dashboard'][0]['in_today']}} </h4>
															
                                                        <h4 class="card-title mb-4">Mes: {{$data['dashboard'][0]['in_month']}}</h4>
                                                        
                                                       
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
												        <h5 class="card-title mb-4">Saídas</h5>
												        <h1>  {{$data['dashboard'][0]['total_out_user']}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
                                                        <h4 class="card-title mb-4">Hoje:  {{$data['dashboard'][0]['out_today']}} </h4>
															
                                                        <h4 class="card-title mb-4">Mes:  {{$data['dashboard'][0]['out_month']}}</h4>
                                                        
                                                       
													</div>

								</div>
							</div>
                        </div>   
                    </div>

                </div>
            </div>
        </div>        
    </div>


    <h2>Guias Convidados</h2>
    <div class="row">
        <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Guias Emitidas</h5>
												        <h1> {{$data['dashboard'][0]['total_guest']}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Em dia: {{$data['dashboard'][0]['aliveguest']}} </h4>
															
															<h4 class="card-title mb-4">Expiradas: {{$data['dashboard'][0]['deadguest']}} </h4>
															
															
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
												        <h5 class="card-title mb-4">Entradas</h5>
												        <h1> {{$data['dashboard'][0]['total_in_guest']}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
                                                        <h4 class="card-title mb-4">Hoje: {{$data['dashboard'][0]['in_today_guest']}} </h4>
															
                                                        <h4 class="card-title mb-4">Mes: {{$data['dashboard'][0]['in_month_guest']}}</h4>
                                                        
                                                       
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
												        <h5 class="card-title mb-4">Saídas</h5>
												        <h1>  {{$data['dashboard'][0]['total_out_guest']}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
                                                        <h4 class="card-title mb-4">Hoje:  {{$data['dashboard'][0]['out_today_guest']}} </h4>
															
                                                        <h4 class="card-title mb-4">Mes:  {{$data['dashboard'][0]['out_month_guest']}}</h4>
                                                        
                                                       
													</div>

								</div>
							</div>
                        </div>   
                    </div>

                </div>
            </div>
        </div>        
    </div>

</div>



   

@endsection