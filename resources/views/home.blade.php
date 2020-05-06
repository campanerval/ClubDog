@extends('adminlte::page')

@section('title', 'PetShop')

@section('content_header')
    <h1>Painel de Controle</h1>
@stop

@section('content')
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$produtos}}</h3>
            <p>Produtos Cadastrados</p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-cart"></i>
          </div>
        <a href="{{ route('produto') }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$servicos}}</h3>
            <p>Serviços Cadastrados</p>
          </div>
          <div class="icon">
            <i class="fa fa-tasks"></i>
          </div>
          <a href="{{ route('servico') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$animais}}</h3>
            <p>Animais Cadastrados</p>
          </div>
          <div class="icon">
            <i class="fa fa-paw"></i>
          </div>
          <a href="{{ route('animal') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$animais}}</h3>
            <p>Vendas realizadas</p>
          </div>
          <div class="icon">
            <i class="fa fa-money"></i>
          </div>
          <a href="{{ route('animal') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div><!-- row -->

    <!-- Avisos -->
    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Sobre o Sistema</h3>
            <div class="box-tools pull-right">
              <!-- Buttons, labels, and many other things can be placed here! -->
              <!-- Here is a label for example -->
              <span class="label label-primary">Aviso</span>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            Bem Vindo ao Painel de Administraçao do seu PetShop, aqui você poderá ver seus produtos, serviços e animais.
            Não divida o login e senha com outras pessoa!
            Este sistema e o site foram feitos em Laravel 5 e sinta-se livre para usá-lo e modifica-lo.
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <div class="col-md-6">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Cadastros</h3>
            <div class="box-tools pull-right">
              <!-- Buttons, labels, and many other things can be placed here! -->
              <!-- Here is a label for example -->
              <span class="label label-primary">Aviso</span>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
             Você pode cadastrar novos produtos, serviços e animais. Todos eles serão mostrados no seu site da sua loja.
             Use o menu lateral para navegar entre o site, ou acesse Mais Informações. Aproveite todos os recursos e boas vendas.
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>


      
      
@stop