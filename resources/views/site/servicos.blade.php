@extends('site.layout')

@section('title','Loja > Serviços')

@section('content')
<h2 class="text-center"> <i class="fa fa-scissors"></i> Nossos serviços <i class="fa fa-stethoscope"></i> </h2>  
<div class="row" style="margin-top: 50px;">
        @foreach($servicos as $servico)
        <div class="col-sm-12 col-md-4" >
                <div class="thumbnail" style="border: 1px solid green;">
                    <img width="150" height="150" src="{{url("storage/servicos")."/".$servico->image}}" alt="{{$servico->nome}}">
                    <div class="caption">
                        <h3 class="text-center">{{$servico->nome}} | R$ {{number_format($servico->preco,2, ',', '.')}}</h3>                        
                        <p class="text-muted">{{$servico->descricao}}</p>
                        <p><a href="{{route('loja-servico',['id' => $servico->id ])}}" class="btn btn-primary" role="button">Agendar</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection