<?php
		
	Route::get('/', function()
	{
		return redirect()->action('ProdutoController@lista');
	}); 
	
	Route::get('/produtos', 'ProdutoController@lista');
	Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
	Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
	Route::get('/produtos/novo', 'ProdutoController@novo');
	Route::get('/produtos/editar/{id}', 'ProdutoController@editar');
	
	Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
	Route::post('/produtos/edita/{id}', 'ProdutoController@edita');
