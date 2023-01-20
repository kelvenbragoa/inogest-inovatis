@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Invoice</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                
                <div class="card-body m-sm-3 m-md-5">
                    <img src="/storage/img/sys/logoinogesticon.png" class="avatar img-fluid rounded mr-1"/>
                    <div class="mb-4">
                        Hello <strong>{{$config->company_name}}</strong>,
                        <br /> This is the receipt for a payment of <strong>InoGest Platform and Website</strong>.
                    </div>
                    

                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-muted">Payment No.</div>
                            <strong>741037024</strong>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <div class="text-muted">Payment Date</div>
                            <strong>{{date('d-m-Y')}}</strong>
                        </div>
                    </div>

                    <hr class="my-4" />

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="text-muted">Client</div>
                            <strong>
                                {{$config->company_name}}
                            </strong>
                            <p>
                                {{$config->company_address}} <br> {{$config->company_province}} <br> {{$config->company_country}} <br>
                                <a href="#">
                                    {{$config->company_email}}
                                </a>
                            </p>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <div class="text-muted">Payment To</div>
                            <strong>
                            INOVATIS MZ LTD
                            </strong>
                            <p>
                                 <br> Maputo <br> Mozambique <br>
                                <a href="#">
                                inovatis@inovatis.co.mz
                                </a>
                            </p>
                        </div>
                    </div>

                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Months</th>
                                <th class="text-right">Amount(MT)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>InoGest Platform and Website</td>
                                <td>
                                    <select name="" id="mySelect" class="form-control" onchange="myFunction()">
                                        <option value="1">1</option>
                                        <!--<option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>-->
                                    </select>
                                </td>
                                <td class="text-right">
                                    <input type="text" class="form" name="value" id="value" value="5000" readonly>
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

                    <br>
                    <div class="text-left">
                        <p class="mb-4">
                            <strong>Payment From:</strong> {{$start_date}}.
                        </p>
                        <p class="mb-4">
                            <strong>Payment To:</strong> {{$end_date }}.
                        </p>

                        
                    </div>
                    <div class="col-md-3 text-md-left">
                        <div class="card mb-4">
                            <select name="" id="pagamento" class="form-control" onchange="pagamento()">
                                <option value="none">Selecione o metodo de pagamento</option>
                                <option value="mpesa">Mpesa</option>
                                <option value="banco">Banco</option>
                            </select>
                        </div>

                        
                    </div>
                    <form action="{{route('subscription.store')}}" method="POST">
                    @csrf
                    <div class="col-md-3 text-md-left" id="mpesa" style="display: none">
                        <div class="card mb-4">
                            <p>Pagamento por MPESA</p>
                            <img width="100" height="100" src="/storage/img/sys/mpesa.jpg" alt="">
                            <div class="form-group">
                                <label for="">Número Telefone</label>
                                <input type="number" placeholder="Ex:258841231231" name="number" id="number">
                                <input type="hidden" name="amount" value="5000">
                                <input type="hidden" name="method" value="mpesa">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Pagar</button>
                            </div>
                        </div>
                    </div>
                    </form>

                    <div class="col-md-3 text-md-left" id="banco" style="display: none">
                        <div class="card mb-4">
                            <p>Informações da conta bancária BCI</p>
                            <img width="100" height="100" src="/storage/img/sys/bci.png" alt="">
                            <div class="form-group">
                                <p>Conta: 20648021510001</p>
                                <p>NIB: 0008 0000 0648 0215 1011 3</p>
                            </div>

                        </div>
                        <div class="card mb-4">
                            <p>Informações da conta bancária</p>
                            <img width="100" height="100" src="/storage/img/sys/bim.png" alt="">
                            <div class="form-group">
                                <p>Conta: 473143885</p>
                                <p>NIB: 0001 0000 0047 3143 8855 7</p>
                            </div>
                            
                        </div>
                        <p>Insira o a referência do recibo e o nome do banco e aguarde pela confirmação do seu pagamento.</p>
                        <form action="{{route('subscription.store')}}" method="POST">
                            @csrf
                        <div class="form-group">
                            <input type="text" name="method" class="form-control" placeholder="Banco">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ref" class="form-control" placeholder="Referencia">
                            
                                
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary" >Submeter</button>
                        </div>
                    </form>
                        
                    </div>

                    <div class="text-center">
                        <p class="text-sm">
                            <strong>Extra note:</strong> Para maior rapidez pode enviar o comprovativo do pagamento pelo banco através do número 258 840127201.
                        </p>

                        <!--<a href="#" class="btn btn-primary">
                            Print this receipt
                            </a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function myFunction() {
      var x = document.getElementById("mySelect").value;
      var value = x*5000;
      document.getElementById("value").value = value;
    }

    function pagamento() {
      var x = document.getElementById("pagamento").value;
   
      if(x =='mpesa'){
        document.getElementById("mpesa").style.display = "block";
        document.getElementById("banco").style.display = "none";
      }

      if(x =='banco'){
        document.getElementById("banco").style.display = "block";
        document.getElementById("mpesa").style.display = "none";
        
      }

      if(x =='none'){
        document.getElementById("mpesa").style.display = "none";
        document.getElementById("banco").style.display = "none";
      }

    }


    </script>
@endsection