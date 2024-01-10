<!DOCTYPE html>
<html>
<head>
<title>Teste</title>

<!-- Latest compiled and minified CSS --> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> >

</head>
<body>

<div class="container">

    <h1>Lista de mensagens</h1>

    <hr/>

    <table class="table table-striped">
    <thead>
       <tr>
            <th>Codigo</th> 
            <th>Nome</th> 
            <th>Categoria</th>
            <th>Preco</th>
            <th>Descricao</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($qualquercoisa as $row)
        <tr>
            <th scope="row">{{ $row->Codigo }}</th>
            <td>{{ $row->Nome }}</td>
            <td>{{ $row->Categoria }}</td> 
            <td>{{ $row->Preco }}</td> 
            <td>{{ $row->Descricao }}</td> 
        </tr>
        @endforeach
       </tbody>
    </table>

</div>

</body> 
</html>