@extends('Layout.default')
@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <h2 class="font-weight-bolder text-white mb-0">Editar de Movimentação</h2>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container-fluid py-4">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Editar</h5>
      </div>
      <div class="card-body">
        <form action="{{route('movimentacao.update', $movimentacao->id)}}" method="POST">
          @csrf
          @method('PUT')
          <select class="form-select mb-3" aria-label="Default select example" name="id_operacao">
            <option selected value="{{$movimentacao->id_operacao}}">{{$movimentacao->operacao->operacao}}</option>
            @foreach ($operacoes as $op)
                <option value="{{$op->id}}">{{$op->operacao}}</option>
            @endforeach
          </select>
          <select class="form-select mb-3" aria-label="Default select example" name="id_produto">
            <option selected value="{{$movimentacao->id_produto}}">{{$movimentacao->produtos->nome}}</option>
            @foreach ($produtos as $item)
              <option value="{{$item->id}}">{{$item->nome}}</option>
            @endforeach
          </select>
          <select class="form-select mb-3" aria-label="Default select example" name="id_fornecedor">
            <option selected value="{{$movimentacao->id_fornecedor}}">{{$movimentacao->produtos->fornecedor->nome_fornecedor}}</option>
            @foreach ($fornecedores as $forn)
              <option value="{{$forn->id}}">{{$forn->nome_fornecedor}}</option>
            @endforeach
          </select>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="quantidade" value="{{$movimentacao->quantidade}}">
            <label for="floatingPassword">Quantidade:</label>
          </div>
          <button type="submit" class="btn btn-primary">
            SALVAR <i class="fa-solid fa-check"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
@endsection