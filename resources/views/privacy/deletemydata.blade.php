@extends('layouts.master')
@section('content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title">Exclusão permanente da conta</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="https://inovatis.co.mz">Home</a></li>
                    <li class="active">Exclusão permanente da conta</li>
                </ul>    
            </div>
        </div>
    </div>
    <section class="service-page">
        <div class="container margin_60_35">
    <div class="row">
        















    
        
        <div class="col-lg-12 mb-2" id="faq">
            <h4 class="nomargin_top">Exclusão permanente da conta</h4>
            <div class='card'>
                
                <div class='card-body'>
                    
                    Na INOVATIS MZ LTD, colocamos nossos usuários em primeiro lugar na forma como desenvolvemos nossos produtos e serviços. 
                    Como usuário registrado no nosso aplicativo, você pode solicitar que sua conta seja excluída permanentemente. 
                    Este artigo é sobre o processo necessário para solicitar a exclusão permanente de uma conta de usuário. 
                    Para excluir permanentemente a sua conta preencha o formulário a seguir.

                    Solicitar que uma conta seja excluída permanentemente expressa sua intenção de remover totalmente sua conta de usuário e qualquer informação existente relevante para sua conta de usuário. 
                    Isso não pode ser desfeito e não poderemos recuperar nenhum dos seus dados no futuro. 
                    Abaixo encontre quais informações serão excluídas quando você fizer essa solicitação.

                    Observe que ao excluir permanentemente sua conta de usuário você abre mão dos seguintes benefícios:

                    <ul>
                        <li>Logar no aplicativo ou site</li>
                        <li>Acessar os aplicativos de Exame de Condução (EDC MZ)</li>
                        <li>Beneficios de descontos para produtos da INOVATIS MZ LTD</li>
                    </ul>
                    Se você não tem intenção de Logar no aplicativo ou site, Acessar os aplicativos de Exame de Condução (EDC MZ), ou receber beneficios de descontos para produtos da INOVATIS MZ LTD você pode enviar uma solicitação para que sua conta de usuário seja excluída permanentemente aqui.
                </div>
            </div>

        </div>

        <div class="col-lg-12" id="faq">
            <h4 class="nomargin_top">Formulário de Solicitação de Exclusão da conta</h4>
            <div class="card">
                <div class="card-body">
                    <p>Utilize este formulário para fazer um pedido de exclusão da sua conta. Insira seus dados e envie o formulário.</p>
                    <hr>
                    <p>Detalhes do titular dos dados <br>

                        Precisamos do seu nome e endereço de e-mail para processar sua solicitação e proteger seus dados. Utilizaremos os dados aqui recolhidos apenas para processar o seu pedido e para manter registos, conforme exigido por lei.
                        
                        Você receberá um e-mail para verificar seu endereço. Siga as instruções que você receberá para concluir o processamento da sua solicitação.</p>
                    <hr>

                    <form method="POST" action="{{URL::to('/request-data-deletion')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">Nome:</label>
                                <input type="text" class="form-control"  placeholder="Nome"  name="firstname" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">Apelido:</label>
                                <input type="text" class="form-control"  placeholder="Apelido"  name="lastname" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">Email:</label>
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">Telefone:</label>
                                <input type="text" class="form-control"  placeholder="Telefone"  name="moblile" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">Informação adicional:</label>
                                <textarea type="text" class="form-control"  placeholder="Informação adicional"  name="info" required></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submeter</button>

                    </form>
                </div>
            </div>
            </div>
        <!-- /col -->
    </div>
    <!-- /row -->
</div>
        
    </section>
@endsection