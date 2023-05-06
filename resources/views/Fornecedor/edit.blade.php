<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Cadastrar</title>
</head>
<body>

    <div class="row col-md-8" style="padding:100px">
        <h2>EDITAR FORNECEDOR</h2>
        <form action="{{ route('fornecedor.update', $fornecedor->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Fornecedor</label>
              <input type="text" class="form-control" name="nome_fornecedor" value="{{ $fornecedor->nome_fornecedor }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">cnpj</label>
              <input type="text" class="form-control" name="cnpj" value="{{ $fornecedor->cnpj }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">telefone</label>
                <input type="number" class="form-control" name="telefone" value="{{ $fornecedor->telefone }}">
              </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>