@extends('layouts_admin.master')
@section('content')

<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>{{__('text.analytics_dashboard')}} {{__('text.operationeds')}}</strong></h3>
        </div>

        
    </div>
    
    <h3><strong>12 Classe</strong></h3>
    <div class="row">
        <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
                <div class="row">

                   

                   <!--BIOLOGIA-->


                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Biologia</h5>
												        <h1> {{$bioDia}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês:  {{$bioMes}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$bioTotal}} </h4>
															
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
                    <!--PORTUGUES-->


                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Português</h5>
												        <h1> {{$portDia}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês:  {{$portMes}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$portTotal}} </h4>
															
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
                    
                    <!--GEOGRAFIA-->
                    
                     <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Geografia</h5>
												        <h1> {{$geoDia}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$geoMes}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$geoTotal}} </h4>
															
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
                    
                    
                    <!--FILOSOFIA-->
                     <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Filosofia</h5>
												        <h1> {{$filoDia}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$filoMes}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$filoTotal}} </h4>
															
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
                    
                    
                    <!--HISTORIA-->
                     <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje História</h5>
												        <h1> {{$histDia}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$histMes}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$histTotal}} </h4>
															
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
                    
                    
                    <!--INGLES-->
                     <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Inglês</h5>
												        <h1> {{$ingDia}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$ingMes}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$ingTotal}} </h4>
															
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
                    
                    
                    <!--MATEMATICA-->
                     <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Matemática</h5>
												        <h1> {{$matDia}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$matMes}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$matTotal}} </h4>
															
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
                    
                     <!--DESENHO-->
                      <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Desenho</h5>
												        <h1> {{$desDia}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$desMes}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$desTotal}} </h4>
															
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
<!--QUIMICA-->

 <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Quimica</h5>
												        <h1> {{$quiDia}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$quiMes}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$quiTotal}}</h4>
															
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
<!--FISICA-->

 <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Fisíca</h5>
												        <h1> {{$fisDia}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$fisMes}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$fisTotal}}</h4>
															
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


                  
     <!--FRANCES-->

 <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Francês</h5>
												        <h1> {{$fraDia}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$fraMes}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$fraTotal}}</h4>
															
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


     <h3><strong>10 Classe</strong></h3>
    <div class="row">
        <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
                <div class="row">

                   

                   <!--BIOLOGIA-->


                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Biologia</h5>
												        <h1> {{$bioDia10}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês:  {{$bioMes10}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$bioTotal10}} </h4>
															
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
                    
                    <!--PORTUGUES-->


                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Português</h5>
												        <h1> {{$portDia10}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês:  {{$portMes10}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$portTotal10}} </h4>
															
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
                    
                    <!--GEOGRAFIA-->
                    
                     <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Geografia</h5>
												        <h1> {{$geoDia10}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$geoMes10}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$geoTotal10}} </h4>
															
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
                    
                    
                    <!--FILOSOFIA-->
                     <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Filosofia</h5>
												        <h1> {{$filoDia10}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$filoMes10}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$filoTotal10}} </h4>
															
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
                    
                    
                    <!--HISTORIA-->
                     <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje História</h5>
												        <h1> {{$histDia10}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$histMes10}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$histTotal10}} </h4>
															
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
                    
                    
                    <!--INGLES-->
                     <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Inglês</h5>
												        <h1> {{$ingDia10}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$ingMes10}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$ingTotal10}} </h4>
															
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
                    
                    
                    <!--MATEMATICA-->
                     <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Matemática</h5>
												        <h1> {{$matDia10}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$matMes10}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$matTotal10}} </h4>
															
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
                    
                     <!--DESENHO-->
                      <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Desenho</h5>
												        <h1> {{$desDia10}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$desMes10}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$desTotal10}} </h4>
															
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
<!--QUIMICA-->

 <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Quimica</h5>
												        <h1> {{$quiDia10}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$quiMes10}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$quiTotal10}}</h4>
															
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
<!--FISICA-->

 <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Fisíca</h5>
												        <h1> {{$fisDia10}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$fisMes10}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$fisTotal10}}</h4>
															
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


                  
     <!--FRANCES-->

 <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
											<div class="row">

													<div class="col-sm-6">
												        <h5 class="card-title mb-4">Hoje Francês</h5>
												        <h1> {{$fraDia10}} </h1>
												    </div>
													
                                                    <div class="col-sm-6">
															<h4 class="card-title mb-4">Mês: {{$fraMes10}} </h4>
															
															<h4 class="card-title mb-4">Total: {{$fraTotal}}</h4>
															
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
    



</div>



@endsection