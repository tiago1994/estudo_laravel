<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <title>Controle de estoque</title>
</head>
<body>
  <nav class="navbar navbar-inverse" style="border-radius: 0px;">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="/produtos">Estoque</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{action('ProdutoController@lista')}}">
            Listagem
          </a>
        </li>
        <li>
          <a href="{{action('ProdutoController@novo')}}">
            Novo
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    @yield('conteudo')
  </div>
  <footer class="footer" style="border-radius: 0px; background-color: #151515; position: absolute; bottom: 0; width: 100%;">
    <div class="container">
      <p>© Alo alo.</p>
    </div>
  </footer>
</body>
</html>