@extends('layouts_admin.master')
@section('content')

<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>{{__('text.analytics_dashboard')}}</strong></h3>
        </div>

        
    </div>
    <h2>Atas</h2>
   
    <div class="row">
        <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Organizações</h5>
												        <h1> {{$data['dashboard'][0]['total_organizations']}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Ativas: {{$data['dashboard'][0]['total_active_organizations']}} </h4>
															
															<h4 class="card-title mb-4">Inativas: {{$data['dashboard'][0]['total_inactive_organizations']}} </h4>
															
															
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
												        <h5 class="card-title mb-4">Usuarios</h5>
												        <h1> {{$data['dashboard'][0]['total_users']}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
                                                        {{-- <h4 class="card-title mb-4">Hoje: {{$data['dashboard'][0]['in_today']}} </h4>
															
                                                        <h4 class="card-title mb-4">Mes: {{$data['dashboard'][0]['in_month']}}</h4> --}}
                                                        
                                                       
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
												        <h5 class="card-title mb-4">Faturas</h5>
												        <h1>  {{$data['dashboard'][0]['total_invoices']}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
                                                        <h4 class="card-title mb-4">Pagas:  {{$data['dashboard'][0]['total_invoices_paid']}} </h4>
															
                                                        <h4 class="card-title mb-4">Não pagas:  {{$data['dashboard'][0]['total_invoices_not_paid']}}</h4>
                                                        
                                                       
													</div>

								</div>
							</div>
                        </div>   
                    </div>

                </div>
            </div>
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
												        <h5 class="card-title mb-4">Transações</h5>
												        <h1> {{$data['dashboard'][0]['total_transactions']}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															{{-- <h4 class="card-title mb-4">Em dia: {{$data['dashboard'][0]['aliveguest']}} </h4>
															
															<h4 class="card-title mb-4">Expiradas: {{$data['dashboard'][0]['deadguest']}} </h4> --}}
															
															
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
												        <h5 class="card-title mb-4">Reuniões criadas</h5>
												        <h1> {{$data['dashboard'][0]['total_meetings']}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
                                                        {{-- <h4 class="card-title mb-4">Hoje: {{$data['dashboard'][0]['in_today_guest']}} </h4>
															
                                                        <h4 class="card-title mb-4">Mes: {{$data['dashboard'][0]['in_month_guest']}}</h4> --}}
                                                        
                                                       
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
												        <h5 class="card-title mb-4">Tickets</h5>
												        <h1>  {{$data['dashboard'][0]['total_tickets']}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
                                                        <h4 class="card-title mb-4">Abertos:  {{$data['dashboard'][0]['tickets_opened']}} </h4>
															
                                                        <h4 class="card-title mb-4">Fechados:  {{$data['dashboard'][0]['tickets_closed']}}</h4>
                                                        
                                                       
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