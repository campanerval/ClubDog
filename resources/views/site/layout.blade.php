<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dog Club - @yield('title')</title>
    <link rel="icon" href="{{url('resource/site/img/LogoDogClub.png')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap -->
  <link href="{{url('resource/site/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('resource/site/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <header>
                <nav class="navbar navbar-default" >
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class=" " href="{{route('loja')}}"><img class="" src="{{url('resource/site/img/LogoDogClub.png')}}" width="60" height="60" alt=""></a>
                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                      <li><a href="{{route('loja')}}">Início <span class="sr-only">(current)</span></a></li>
                      <li><a href="#sobre">Sobre nós</a></li>
                      <li><a href="#contato">Contato</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comprar <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                          <li><a href="{{route('loja-produtos')}}">Produtos</a></li>
                            <li><a href="{{route('loja-servicos')}}">Serviços</a></li>
                            <li><a href="{{route('loja-filhotes')}}">Filhotes</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
               </header>
              
    <div class="container">
        @yield('content')
    </div>
    
    <footer id="contato">
      <ul>
          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
          <li><a href="#"><i class="fa fa-snapchat-square"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
      </ul>
      <p>Avenida Padre Júlio Maria Lombaerd, nº 358 - Macapá - AP - Brasil&nbsp;&nbsp;|&nbsp;&nbsp;(96) 3220-0200&nbsp;&nbsp;|&nbsp;&nbsp;contato@dogclub.com</p>
      <p>Todos os direitos reservados | Dog Club 2020 | Elaborado por <strong>Valéria Campaner</strong></p>
      
    </footer>    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('resource/site/js/bootstrap.min.js')}}"></script>
    <script src="{{url('resource/site/js/script.js')}}"></script>
    <!-- JQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
  </body>
</html>