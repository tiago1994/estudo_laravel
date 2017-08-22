<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB;
	use App\Produto;
	use Request;

	class ProdutoController extends Controller{
		public function lista(){
        	$produtos = Produto::all();
        	return view('produto.listagem')->with('produtos', $produtos);
		}

		public function mostra($id){
			$produto = Produto::find($id);
			$resposta = DB::select('select * from produtos WHERE id = "'.$id.'"');
			if(empty($resposta)) {
				return "Esse produto não existe";
			}
			return view('produto.detalhes')->with('p', $resposta[0]);
		}

		public function novo(){
			return view('produto.formulario');
		}

		public function adiciona(){
			/*
			$produto = new Produto();
		    $produto->nome = Request::input('nome');
		    $produto->valor = Request::input('valor');
		    $produto->descricao = Request::input('descricao');
		    $produto->quantidade = Request::input('quantidade');
		    $produto->save();
		    */
		    
			/*
		    $params = Request::all();
		    $produto = new Produto($params);
		    $produto->save();
		    */

		    Produto::create(Request::all());

			return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
		}

		public function remove($id){
			$produto = Produto::find($id);
		    $produto->delete();
		    return redirect()->action('ProdutoController@lista');
		}

		public function editar($id){
			$produto = Produto::find($id);
			$resposta = DB::select('select * from produtos WHERE id = "'.$id.'"');
			if(empty($resposta)) {
				return "Esse produto não existe";
			}
			return view('produto.formulario_editar')->with('p', $resposta[0]);
		}

		public function edita($id){
			$produto = Produto::find($id);
		    $produto->nome = Request::input('nome');
		    $produto->valor = Request::input('valor');
		    $produto->descricao = Request::input('descricao');
		    $produto->quantidade = Request::input('quantidade');
		    $produto->save();
		    return redirect()->action('ProdutoController@lista');
		}
	}