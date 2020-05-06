@extends('site.layout')

@section('title','Loja')

@section('content')
 <div id="myCarousel" class="carousel slide" data-ride="carousel" >  
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
      <img src="{{url('resource/site/img/bg3.png')}}" alt="Pet Shop" class="">
      </div>
    </div>
</div>
<div class="container" style="">
    <div class="row home-sobre">
        <h2>Somos de Confiança <i class="fa fa-paw"></i></h2>
        <p class="text-primary">A Club Dog atua no mercado há cinco anos, trabalhando sempre com muito profissionalismo e carinho com seu bixinho! Neste tempo conquistamos o seu carinho e principalmente dos amiguinhos de quatro patas!</p>
    </div>
    
    <div class="row amostra" style="background-color: #ffff66; border: 1px solid blue;">
        <h2>Temos de Tudo!</h2>
        <hr class="">
        <div class="col-md-4" >
            <h3><i class="fa fa-paw"></i> Produtos</h3>
            <p class="text-primary">Temos todos os produtos da linha Pet Care, muitos brinquedinhos e rações das melhores marcas, contando ainda com uma linha de qualidade e preços acessíveis.</p>
        </div>
        <div class="col-md-4">
            <h3><i class="fa fa-paw"></i> Serviços</h3>
            <p class="text-primary">Aqui na Club Dog, temos os serviços de banho e tosa, além de consultas sem agendamento com nossa veterinária. Nossa loja oferece ainda serviço de transporte para seu pet, retirando e retornando seu amigo com toda segurança.</p>
        </div>
        <div class="col-md-4">
            <h3><i class="fa fa-paw"></i> Filhotes</h3>
            <p class="text-primary">Ainda não tem um amiguinho? Aqui na Club Dog você poderá escolher o bixinho com o qual se identifica mais!! Temos gatinhos, dogs, passarinhos e peixes, todos com pedigree e cheios de energia!</p>
        </div>
        
    </div>
    
</div>
<div class="row sobre" id="sobre">
        <h2>Por que somos diferenciados?</h2>
        <div class="bloco">
            <div class="com-md-12">
                 <img src="{{url('resource/site/img/customer-service-man.png')}}" alt="Pet Shop">
            </div>
            <div class="col-md-12">
                <h3>Serviço Customizado</h3>
                <p class="text-primary">Nossos clientes contam com atendimento exclusivo e podem solicitar a realização de serviços em horários agendados, sem custo. </p>
            </div>
        </div>
        <div class="bloco">
            <div class="com-md-12">
                 <img src="{{url('resource/site/img/graduate-female.png')}}" alt="Pet Shop">
            </div>
            <div class="col-md-12">
                <h3>Profissionais Qualificados</h3>
                <p class="text-primary">Os colaboradores da Dog Club são altamente capacitados a prestar o melhor atendimento a seu pet, seguindo a todas as normas de segurança e saúde.</p>
            </div>
        </div>
        <div class="bloco">
            <div class="com-md-12">
                <img src="{{url('resource/site/img/stamp-document.png')}}" alt="Pet Shop">
            </div>
            <div class="col-md-12 mb-4">
                 <h3>Certicações de Qualidade</h3>
                 <p class="text-primary"> A Dog Club passa por reciclagens periódicas para constante melhoria dos serviços e deixamos nossas certificações no mural da loja à disposição dos clientes para conferência.</p>
            </div>
        </div>
    </div>
@endsection