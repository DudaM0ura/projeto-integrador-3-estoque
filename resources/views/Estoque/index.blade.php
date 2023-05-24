@extends('Layout.default')
@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <h2 class="font-weight-bolder text-white mb-0">Estoque</h2>
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
      <div class="card-body">
          <table class="table table-striped" id="table">
            <thead>
              <tr>
                <th scope="col-md-2">#</th>
                <th scope="col-md-2">Produto</th>
                <th scope="col-md-2">Fornecedor</th>
                <th scope="col-md-2">Quantidade</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($produtosEmEstoque as $item)
              <tr>
                <td></td>
                <td>{{$item->nome}}</td>
                <td>{{$item->nome_fornecedor}}</td>
                <td class="center">{{$item->quantidade_estoque}}</td>
              </tr>
              @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection