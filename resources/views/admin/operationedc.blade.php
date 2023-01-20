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
															
															<h4 class="card-title mb-4">Mês: {{count($turno_dia_mes)}}  </h4>
													</div>

													<div class="row">
                                                        <div class="col-sm-8">
                                                            <p style="color: @if ($turno_dia_user_ativo == null)
                                                                red
                                                            @else
                                                                green
                                                            @endif">
                                                        
                                                        @if ($turno_dia_user_ativo != null)
                                                            ({{$turno_dia_user_ativo->user->name}})
                                                        @else
                                                            (Turno não iniciado)
                                                        @endif
                                                        </p>
                                                    </div>

												    <div class="col-sm-4">
												        <a href="#" data-toggle="modal" data-target="#exampleModal">Detalhes</a>
												    </div>

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
                                                        
                                                        <h4 class="card-title mb-4">Mês: {{count($turno_noite_mes)}}  </h4>
													</div>

													<div class="row">
                                                        <div class="col-sm-8">
                                                        <p style="color: @if ($turno_noite_user_ativo == null)
                                                            red
                                                        @else
                                                            green
                                                        @endif">
                                                        
                                                        @if ($turno_noite_user_ativo != null)
                                                            ({{$turno_noite_user_ativo->user->name}})
                                                        @else
                                                            (Turno não iniciado)
                                                        @endif
                                                    </p>
                                                        
                                                    </div>

												    <div class="col-sm-4">
												        <a href="#" data-toggle="modal" data-target="#exampleModalNOITE">Detalhes</a>
												    </div>

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
												        <h5 class="card-title mb-4">Total Turnos</h5>
												        <h1> {{count($turno_dia_lp)+ count($turno_dia_pro) + count($turno_noite_lp)+ count($turno_noite_pro)}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">LP: {{count($turno_dia_lp) + count($turno_noite_lp)}} </h4>
															
															<h4 class="card-title mb-4">PRO:{{count($turno_dia_pro)+count($turno_noite_pro)}} </h4>
															
															<h4 class="card-title mb-4">Mês:{{count($turno_dia_mes) + count($turno_noite_mes) }} </h4>
													</div>

													<div class="row">
                                                        <div class="col-sm-8">
                                                        <p style="color:MediumSeaGreen"></p>
                                                    </div>

												    <div class="col-sm-4">
												       <p> <br> </p>
												    </div>

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
												        <h5 class="card-title mb-4">Total Usuários</h5>
												        <h1> {{count($todos_usuarios_lp) + count($todos_usuarios_pro)}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">LP: {{count($todos_usuarios_lp)}} </h4>
															
															<h4 class="card-title mb-4">PRO:{{count($todos_usuarios_pro)}} </h4>
															
															<h4 class="card-title mb-4">Ano:{{count($user_ano)}} </h4>
													</div>

													<div class="row">
                                                        <div class="col-sm-8">
                                                        <p style="color:MediumSeaGreen"></p>
                                                    </div>

												    <div class="col-sm-4">
												         <p> <br> </p>
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


    <div class="row">
        <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
                <div class="row">
                    @foreach ($price as $item)
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Preço atual: @if ($item->app == 'edclp') EDC MZ Ligeiros e Pesado @endif @if ($item->app == 'edcpro') EDC MZ Profissional @endif @if ($item->app == 'eds') EDS MZ @endif</h5>
                                <h1 class="mt-1 mb-3">{{$item->amount}} MT</h1>
                                <div class="mb-1">
                                   
                                      @if (auth()->user()->role_id ==1) <a href="#" data-toggle="modal" data-target="#precoGeral{{$item->id}}">Editar</a> @endif  
                                  
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    @include('admin.modals.preco_geral')
                    

                    @endforeach

                  
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
                                <h5 class="card-title mb-4">{{__('text.quote_paid')}}</h5>
                                <h1 class="mt-1 mb-3">{{count($q_1)}}</h1>
                                <div class="mb-1">
                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">{{__('text.pending_quote')}}</h5>
                                <h1 class="mt-1 mb-3">{{count($q_0)}}</h1>
                                <div class="mb-1">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">{{__('text.expenses_today')}}</h5>
                                <h1 class="mt-1 mb-3">{{$expenses}}MT</h1>
                                <div class="mb-1">
                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <!--GERAL-->
    	<div class="row">
						<div class="col-12 col-md-6 col-xxl-6 d-flex order-6 order-xxl-2">
						<div class="card flex-fill w-100">
								<div class="card-header">
									<h5 class="card-title mb-0">Registros Diario</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg">
										<canvas id="chartjs-dashboard-barDiario"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6 col-xxl-6 d-flex order-6 order-xxl-2">
						<div class="card flex-fill w-100">
								<div class="card-header">
									<h5 class="card-title mb-0">Registros EDC Mensal</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg">
										<canvas id="chartjs-dashboard-barMensal"></canvas>
									</div>
								</div>
							</div>
						</div>
			</div>

    <!--LIGEIROS E PESADO -->

        <div class="row">
            <div class="col-12 col-md-6 col-xxl-6 d-flex order-6 order-xxl-2">
            <div class="card flex-fill w-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Registros Diario Ligeiros e Pesado</h5>
                    </div>
                    <div class="card-body d-flex w-100">
                        <div class="align-self-center chart chart-lg">
                            <canvas id="chartjs-dashboard-barDiarioLP"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xxl-6 d-flex order-6 order-xxl-2">
            <div class="card flex-fill w-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Registros EDC Mensal Ligeiros e Pesado</h5>
                    </div>
                    <div class="card-body d-flex w-100">
                        <div class="align-self-center chart chart-lg">
                            <canvas id="chartjs-dashboard-barMensalLP"></canvas>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!--PROFISSIONAL-->
        <div class="row">
            <div class="col-12 col-md-6 col-xxl-6 d-flex order-6 order-xxl-2">
            <div class="card flex-fill w-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Registros Diario Profissional</h5>
                    </div>
                    <div class="card-body d-flex w-100">
                        <div class="align-self-center chart chart-lg">
                            <canvas id="chartjs-dashboard-barDiarioPRO"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xxl-6 d-flex order-6 order-xxl-2">
            <div class="card flex-fill w-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Registros EDC Mensal Profissional</h5>
                    </div>
                    <div class="card-body d-flex w-100">
                        <div class="align-self-center chart chart-lg">
                            <canvas id="chartjs-dashboard-barMensalPRO"></canvas>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">{{__('text.quotation')}}</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="d-none d-xl-table-cell">{{__('text.customers')}}</th>
                            <th class="d-none d-xl-table-cell">{{__('text.service')}}</th>
                            <th>{{__('text.obs')}}</th>
                            <th class="d-none d-md-table-cell">{{__('text.date')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($q_0 as $item)
                        <tr>
                            <td>#{{$item->id}}</td>
                            <td class="d-none d-xl-table-cell">{{$item->customer->name ?? ''}}</td>
                            <td class="d-none d-xl-table-cell">{{$item->service}}</td>
                            <td class="d-none d-xl-table-cell">{{$item->obs}}</td>
                            <td class="d-none d-md-table-cell">{{$item->created_at->format('d-m-y')}}</td>
                        </tr> 
                        @endforeach
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

</div>

@include('admin.modals.turno_dia')
@include('admin.modals.turno_noite')

   
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Bar chart
        new Chart(document.getElementById("chartjs-dashboard-barDiario"), {
            type: "bar",
            data: {
                labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12","13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24","25","26","27","28","29","30","31"],
                datasets: [{
                    label: "Total",
                    backgroundColor: window.theme.primary,
                    borderColor: window.theme.primary,
                    hoverBackgroundColor: "green",
                    hoverBorderColor: window.theme.primary,
                    data: [<?php echo $dados_graficobarraDia ?>],
                    barPercentage: .9,
                    categoryPercentage: 0.8
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: true
                        },
                        stacked: false,
                        ticks: {
                            stepSize: 1
                        }
                    }],
                    xAxes: [{
                        stacked: false,
                        gridLines: {
                            color: "transparent"
                        }
                    }]
                }
            }
        });
    });
</script>


<script>
document.addEventListener("DOMContentLoaded", function() {
									
									new Chart(document.getElementById("chartjs-dashboard-barMensal"), {
										type: "bar",
										data: {
											labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
											datasets: [{
												label: "Total",
												backgroundColor: window.theme.primary,
												borderColor: window.theme.primary,
												hoverBackgroundColor: "green",
												hoverBorderColor: window.theme.primary,
												data: [<?php echo $dados_graficobarra ?>],
												barPercentage: .9,
												categoryPercentage: .8
											}]
										},
										options: {
											maintainAspectRatio: false,
											legend: {
												display: false
											},
											scales: {
												yAxes: [{
													gridLines: {
														display: true
													},
													stacked: false,
													ticks: {
														stepSize: 10
													}
												}],
												xAxes: [{
													stacked: false,
													gridLines: {
														color: "transparent"
													}
												}]
											}
										}
									});
								});
</script>




<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Bar chart
        new Chart(document.getElementById("chartjs-dashboard-barDiarioLP"), {
            type: "bar",
            data: {
                labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12","13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24","25","26","27","28","29","30","31"],
                datasets: [{
                    label: "Total",
                    backgroundColor: "orange",
                    borderColor: window.theme.primary,
                    hoverBackgroundColor: window.theme.primary,
                    hoverBorderColor: window.theme.primary,
                    data: [<?php echo $dados_graficobarraDiaLP ?>],
                    barPercentage: .9,
                    categoryPercentage: 0.8
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: true
                        },
                        stacked: false,
                        ticks: {
                            stepSize: 1
                        }
                    }],
                    xAxes: [{
                        stacked: false,
                        gridLines: {
                            color: "transparent"
                        }
                    }]
                }
            }
        });
    });
</script>


<script>
								document.addEventListener("DOMContentLoaded", function() {
									// Bar chart
									new Chart(document.getElementById("chartjs-dashboard-barMensalLP"), {
										type: "bar",
										data: {
											labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
											datasets: [{
												label: "Total",
												backgroundColor: "orange",
												borderColor: window.theme.primary,
												hoverBackgroundColor: window.theme.primary,
												hoverBorderColor: window.theme.primary,
												data: [<?php echo $dados_graficobarraLP ?>],
												barPercentage: .9,
												categoryPercentage: .8
											}]
										},
										options: {
											maintainAspectRatio: false,
											legend: {
												display: false
											},
											scales: {
												yAxes: [{
													gridLines: {
														display: true
													},
													stacked: false,
													ticks: {
														stepSize: 10
													}
												}],
												xAxes: [{
													stacked: false,
													gridLines: {
														color: "transparent"
													}
												}]
											}
										}
									});
								});
							</script>



                            <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Bar chart
        new Chart(document.getElementById("chartjs-dashboard-barDiarioPRO"), {
            type: "bar",
            data: {
                labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12","13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24","25","26","27","28","29","30","31"],
                datasets: [{
                    label: "Total",
                    backgroundColor: "red",
                    borderColor: window.theme.primary,
                    hoverBackgroundColor: window.theme.primary,
                    hoverBorderColor: window.theme.primary,
                    data: [<?php echo $dados_graficobarraDiaPRO ?>],
                    barPercentage: .9,
                    categoryPercentage: 0.8
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: true
                        },
                        stacked: false,
                        ticks: {
                            stepSize: 1
                        }
                    }],
                    xAxes: [{
                        stacked: false,
                        gridLines: {
                            color: "transparent"
                        }
                    }]
                }
            }
        });
    });
</script>


<script>
								document.addEventListener("DOMContentLoaded", function() {
									// Bar chart
									new Chart(document.getElementById("chartjs-dashboard-barMensalPRO"), {
										type: "bar",
										data: {
											labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
											datasets: [{
												label: "Total",
												backgroundColor: "red",
												borderColor: window.theme.primary,
												hoverBackgroundColor: window.theme.primary,
												hoverBorderColor: window.theme.primary,
												data: [<?php echo $dados_graficobarraPRO ?>],
												barPercentage: .9,
												categoryPercentage: .8
											}]
										},
										options: {
											maintainAspectRatio: false,
											legend: {
												display: false
											},
											scales: {
												yAxes: [{
													gridLines: {
														display: true
													},
													stacked: false,
													ticks: {
														stepSize: 10
													}
												}],
												xAxes: [{
													stacked: false,
													gridLines: {
														color: "transparent"
													}
												}]
											}
										}
									});
								});
							</script>
@endsection