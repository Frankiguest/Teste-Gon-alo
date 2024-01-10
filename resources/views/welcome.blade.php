<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste-Gonçalo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <h1> Inserir dados </h1>
    <form action="/enviar" method="post" >
      @csrf <!--{{ csrf_field() }}-->
    <div class="mb-3">
      Código do Produto: <input name="codigo" type="text">
    </div>
    <div class="mb-3">
      Nome do Produto: <input name="nome" type="text">
    </div>
    <div class="mb-3">
      Categoria: <input name="categoria" type="text">
    </div>
    <div class="mb-3">
      Preço unitário: <input name="Preco" type="number" min=0 max=9999999>
    </div>
    <div class="mb-3">
      Descrição: <input name="descricao" type="text">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-primary">Limpar</button>
  </form>
  </body>
</html>
