@extends('Layout.default')
@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <h2 class="font-weight-bolder text-white mb-0">Cadastro de Produto</h2>
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
        <h5 class="card-title">Cadastrar</h5>
      </div>
      <div class="card-body">
        <form action="{{ route('produtos.store')}}" method="POST">
          <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Produto">
            <label for="floatingInput">Descrição:</label>
          </div>
          <select class="form-select mb-3" id="fornecedor" name="id_fornecedor" aria-label="Default select example">
            <option selected>Fornecedor:</option>
            @foreach ($fornecedores as $forn)
                <option value="{{$forn->id}}">{{$forn->nome_fornecedor}}</option>
            @endforeach
          </select>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="preco" name="preco" placeholder="preco">
            <label for="floatingPassword">Preço:</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="checkbox" id="semValidade" name="semValidade" value="semValidade"
              onchange="toggleValidadeInput(this)">
              <label class="form-check-label" for="flexCheckDefault">
                  Produto sem validade
              </label>
            </div>
            <div class="form-floating mb-3">
            @if(old('semValidade'))
                <input type="date" class="form-control" id="validade" name="validade" placeholder="validade" disabled>
            @else
                <input type="date" class="form-control" id="validade" name="validade" placeholder="validade">
            @endif
            <label for="floatingPassword">Validade:</label>
          </div>
          <button type="submit" class="btn btn-primary" id="salvar" onclick="salvar()">
            SALVAR <i class="fa-solid fa-check"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
  <script>
    function toggleValidadeInput(checkbox) {
        var validade = document.getElementById('validade');
        validade.disabled = checkbox.checked;
    }
  </script>
  <script type="text/javascript" src="{{asset('cadastroProduto.js')}}"></script>
  {{-- <script src="{{asset('https://code.jquery.com/jquery-3.7.0.min.js')}}" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> --}}

@endsection