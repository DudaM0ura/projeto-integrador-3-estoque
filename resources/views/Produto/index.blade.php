@extends('Layout.default')
@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <h2 class="font-weight-bolder text-white mb-0">Produtos</h2>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Sign In</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container-fluid py-4">
    <div class="card">
      <div class="card-header">
        <div class="col ml-3">
          <a href="{{ route('produtos.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> CADASTRAR PRODUTO</a>
        </div>
        <h5 class="card-title">Todos os Produtos</h5>
        @if(session('sucesso'))
        <div class="alert alert-success" role="alert">
           <strong>{{session('sucesso')}}</strong> 
        </div>
      @endif
      </div>
      <div class="card-body">
          <table class="table table-striped" id="table">
            <thead>
              <tr>
                <th scope="col-md-2">Descrição</th>
                <th scope="col-md-2">Fornecedor</th>
                <th scope="col-md-2">Preço</th>
                <th scope="col-md-2">Validade</th>
                <th scope="col-md-2"></th>
              </tr>
            </thead>
            <tbody>
              @if ($produtos->count() <1 )
                  <span><b>Não existe produtos cadastrados</b></span>
              @endif
              @foreach ($produtos as $item)
              <tr>
                <td>{{ strtoupper($item->nome) }}</td>
                <td>{{ $item->fornecedor->nome_fornecedor}}</td>
                <td>{{ $item->preco }}</td>
                <td>{{ $item->validade }}</td>
                <td>
                  <div class="row">
                    <div class="col-md-3">
                      <a href="{{ route('produtos.edit', $item->id) }}" type="button" class="btn btn-secondary">
                        EDITAR <i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection