@extends('site.layout')

@section('title','Loja > Produtos')

@section('content')
<h2 class="text-center"> <i class="fa fa-shopping-cart"></i> Loja Virtual</h2>
<div class="row" style="margin-top: 50px;">
    @foreach($produtos as $produto)
    <div class="col-sm-12 col-md-4">
            <div class="thumbnail" style="border: 1px solid blue;">
                <img width="100" height="120" src="{{url("storage/produtos")."/".$produto->image}}" alt="{{$produto->nome}}">
                <div class="caption">
                    <h4>{{$produto->nome}}</h4>
                    <h5>R$ {{number_format($produto->preco,2, ',', '.')}}</h5>
                    <p class="text-muted">{{$produto->descricao}}</p>
                <p><a href="{{route('loja-produto',['id' => $produto->id ])}}" class="btn btn-primary" role="button">Comprar</a></p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection