@extends('layout.principal')

@section('conteudo')
<div class="row">
  <div class="col-md-12">
    @if(empty($produtos))
      <div class="alert alert-danger">
        Você não tem nenhum produto cadastrado.
      </div>
    @else
      <h1>Listagem de produtos</h1>
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th class="text-center">Opções</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($produtos as $p)
          <tr class="{{ $p->quantidade <= 1 ?'danger' : '' }}">
            <td>{{ $p->nome }}</td>
            <td>{{ $p->valor }}</td>
            <td>{{ $p->descricao }}</td>
            <td>{{ $p->quantidade }}</td>
            <td class="text-center">
              <a class="btn btn-xs btn-warning" style="padding: 5px;" href="{{action('ProdutoController@editar', $p->id)}}"><i class="fa fa-edit"></i></a>
              <a class="btn btn-xs btn-danger" style="padding: 5px;" href="{{action('ProdutoController@remove', $p->id)}}"><i class="fa fa-trash-o"></i></a>
              <a class="btn btn-xs btn-primary" style="padding: 5px;" href="{{action('ProdutoController@mostra', $p->id)}}"><i class="fa fa-eye"></i></a>
          </tr>
          @endforeach
        </tbody>
      </table>
    @endif
    @if(old('nome'))
      <div class="alert alert-success">
        <strong>Sucesso!</strong> 
            O produto {{ old('nome') }} foi adicionado.
      </div>
    @endif
  </div>
</div>
@stop
