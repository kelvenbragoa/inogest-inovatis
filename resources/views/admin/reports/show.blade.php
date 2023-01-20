@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.reports')}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                   
                    
                        <a href="#" class="btn btn-pill btn-primary"><i class="far fa-print"></i>{{__('text.print')}}</a>
                       
                 
                </div>
                
                <div class="card-body">
                   
                    <img src="/storage/img/sys/logoinogesticon.png" class="avatar img-fluid rounded mr-1"/>
                    <div class="mb-4">
                         <strong>INOVATIS MZ LTD</strong>,
                        <br /> Relatório referente á <strong>Ativações EDC</strong>.
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-muted">Data Inicio</div>
                            <strong>{{$datastart}}</strong>
                            <div class="text-muted">Data Fim</div>
                            <strong>{{$dataend}}</strong>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <div class="text-muted">Tipo de Relatório</div>
                            <strong>Ativações EDC</strong>
                        </div>
                    </div>

                    <hr class="my-4" />

                    <div class="row">
                        <p>Total Ativações: {{count($total)}}</p>
                        <p>Total Ativações Ligeiros e Pesado: {{count($totalLp)}}</p>
                        <p>Total Ativações Profissional: {{count($totalPro)}}</p>
                       
                    </div>

                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Metas</th>
                                <th>Número de dias</th>
                                <th class="text-right">Valor (MT)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mais de 80 (200MT)</td>
                                <td>
                                    {{$d1}}
                                </td>
                                <td class="text-right">
                                    {{$d1 * 200}} MT
                                </td>
                            </tr>
                            <tr>
                                <td>Mais de 100 (250MT)</td>
                                <td>
                                    {{$d2}}
                                </td>
                                <td class="text-right">
                                    {{$d2 * 250}} MT
                                </td>
                            </tr>
                            <tr>
                                <td>Mais de 150 (300MT)</td>
                                <td>
                                    {{$d3}}
                                </td>
                                <td class="text-right">
                                    {{$d3 * 300}} MT
                                </td>
                            </tr>

                            <tr>
                                <td>-</td>
                                <td>
                                    -
                                </td>
                                <td class="text-right">
                                    Total: {{$meta}} MT
                                </td>
                            </tr>
                            
                           <!-- <tr>
                                <th>&nbsp;</th>
                                <th>Subtotal </th>
                                <th class="text-right">$275.00</th>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Shipping </th>
                                <th class="text-right">$8.00</th>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Discount </th>
                                <th class="text-right">5%</th>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Total </th>
                                <th class="text-right">$268.85</th>
                            </tr>-->
                        </tbody>
                    </table>

                    <div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Browser Usage</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie2"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td>Mais de 80</td>
													<td class="text-right">{{$d1}}</td>
												</tr>
												<tr>
													<td>Mais de 100</td>
													<td class="text-right">{{$d2}}</td>
												</tr>
												<tr>
													<td>Mais de 150</td>
													<td class="text-right">{{$d3}}</td>
												</tr>
											</tbody>
										</table>
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


<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Pie chart
    new Chart(document.getElementById("chartjs-dashboard-pie2"), {
        type: "pie",
        data: {
            labels: ["Mais de 80", "Mais de 100", "Mais de 150"],
            datasets: [{
                data: [<?php echo $d1 ?>, <?php echo $d2 ?>, <?php echo $d3 ?>],
                backgroundColor: [
                    window.theme.primary,
                    window.theme.warning,
                    window.theme.danger
                ],
                borderWidth: 5
            }]
        },
        options: {
            responsive: !window.MSInputMethodContext,
            maintainAspectRatio: false,
            legend: {
                display: true
            },
            cutoutPercentage: 75
        }
    });
    });
    </script>
@endsection