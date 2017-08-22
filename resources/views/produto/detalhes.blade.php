@extends('layout.principal')

@section('conteudo')
<div class="col-md-offset-3 col-md-6">
	<h1>Detalhes do produto: {{ $p->nome }} </h1>

	<ul>
	  <li>
	    <b>Valor:</b> R$ {{ $p->valor }} 
	  </li>
	  <li>
	    <b>Descrição:</b> {{ $p->descricao  or 'Nenhuma descrição'}} 
	  </li>
	  <li>
	    <b>Quantidade em estoque:</b> {{ $p->quantidade }}
	  </li>
	</ul>
</div>
@stop