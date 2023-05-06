<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>index</title>
</head>
<body>
    <div class="col-md-8" style="padding: 100px;">
        
        <h2>FORNECEDORES:</h2>
        <a href="{{ route('fornecedor.create') }}" type="button" class="btn btn-primary" style="size:10px">
            Cadastrar
        </a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Cnpj</th>
                <th scope="col">Telefone</th>
                <th scope="col">Gerenciar</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($fornecedores as $fornecedor)
                    
                @endforeach
                <tr>
                  <th></th>
                  <td>{{ $fornecedor->nome_fornecedor }}</td>
                  <td>{{ $fornecedor->cnpj }}</td>
                  <td>{{ $fornecedor->telefone }}</td>
                  <th>
                        <a href="{{ route('fornecedor.edit', $fornecedor->id) }} type="button" class="btn btn-secondary">Editar</a>
                        <form action="{{ route('fornecedor.destroy', $fornecedor->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Excluir</button>
                        </form>
                  </th>
                </tr>
        </table>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>