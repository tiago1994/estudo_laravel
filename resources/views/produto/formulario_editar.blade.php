@extends('layout.principal')

@section('conteudo')

<div class="col-md-offset-3 col-md-6">
  <h1>Editar {{ $p->nome }}</h1>

  <form action="/produtos/edita/{{ $p->id }}" method="POST">
    <input type="hidden" 
    name="_token" value="{{{ csrf_token() }}}" />
    <div class="form-group">
      <label>Nome</label>
      <input name="nome" class="form-control" value="{{ $p->nome }}" />
    </div>
    <div class="form-group">
      <label>Descricao</label>
      <input name="descricao" class="form-control" value="{{ $p->descricao }}" />
    </div>
    <div class="form-group">
      <label>Valor</label>
      <input name="valor" class="form-control" value="{{ $p->valor }}" />
    </div>
    <div class="form-group">
      <label>Quantidade</label>
      <input type="number" name="quantidade" class="form-control" value="{{ $p->quantidade }}" />
    </div>
    <button type="submit" 
        class="btn btn-success btn-block">Adicionar</button>
  </form>
</div>

@stop