@extends('Layout.default')
@section('content')

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <h2 class="font-weight-bolder text-white mb-0">Editar cadastro de Fornecedor</h2>
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
      <h5 class="card-title">Editar</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('fornecedor.update', $fornecedor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="nomeFornecedor" name="nome_fornecedor" placeholder="Fornecedor"
          value="{{ $fornecedor->nome_fornecedor }}">
          <label for="floatingInput">Fornecedor:</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="cnpj"
          value="{{ $fornecedor->cnpj }}">
          <label for="floatingPassword">CNPJ:</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Password"
          value="{{ $fornecedor->telefone }}">
          <label for="floatingPassword">Telefone:</label>
        </div>
        <button type="submit" class="btn btn-primary">
          SALVAR ALTERAÇÕES <i class="fa-solid fa-check"></i>
        </button>
      </form>
    </div>
  </div>
</div>

@endsection
