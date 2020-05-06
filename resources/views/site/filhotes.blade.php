@extends('site.layout')

@section('title','Loja > Filhotes')

@section('content')
<h5 class="text-center text-muted">Ainda não tem um amiguinho? <i class="fa fa-frown-o"></i></h5> 
<h2 class="text-center"> <i class="fa fa-smile-o"></i> Bem vindo à Vitrine de filhotes <i class="fa fa-heart"></i></h2>
<div class="row" style="margin-top: 50px;">
        @foreach($animais as $animal)
        <div class="col-sm-6 col-md-2">
                <div class="thumbnail" style="border: 1px solid yellow;">
                    <img width="200" height="200"  src="{{url("storage/animais")."/".$animal->image}}" alt="{{$animal->raca}}">
                    <div class="caption">
                        <h4 class="text-center">{{$animal->raca}}</h4>
                        <h5>R$ {{number_format($animal->preco,2, ',', '.')}}</h5>
                        <p>{{$animal->descricao}}</p>
                        <p class="text-muted"><a href="{{route('loja-filhote',['id' => $animal->id ])}}" class="btn btn-primary" role="button">Comprar</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection