@extends('Layout.default')
@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <h2 class="font-weight-bolder text-white mb-0">Movimentação de Estoque</h2>
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
        <div class="col-2">
          <a href="{{ route('movimentacao.create') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-right-arrow-left"></i> NOVA MOVIMENTAÇÃO</a>
        </div>
        <h5 class="card-title">Movimentações</h5>
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
                <th scope="col-md-2">Operação</th>
                <th scope="col-md-2">Produto</th>
                <th scope="col-md-2">Fornecedor</th>
                <th scope="col-md-2">Quantidade</th>
                <th scope="col-md-2">Usuario Responsável</th>
                <th scope="col-md-2"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($movimentacoes as $item)
              <tr>
                <td>{{$item->operacao->operacao}}</td>
                <td>{{$item->produtos->nome}}</td>
                <td>{{$item->produtos->fornecedor->nome_fornecedor}}</td>
                <td>{{$item->quantidade}}</td>
                <td>{{$item->usuario}}</td>
                <td>
                  <div class="row">
                    <div class="col-6">
                      <a type="button" class="btn btn-secondary" href="{{route('movimentacao.edit', $item->id)}}">
                        <i class="fa-solid fa-pen-to-square"></i> EDITAR</a>
                    </div>
                    <div class="col-6">
                      <form action="{{route('movimentacao.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">
                          EXCLUIR <i class="fa-solid fa-trash-can"></i>
                        </button>
                      </form>
                    </div>
                  </div>
                    {{-- <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <a type="button" class="btn btn-secondary" href="{{route('movimentacao.edit', $item->id)}}">
                          <i class="fa-solid fa-pen-to-square"></i> EDITAR</a>
                          <form action="{{route('movimentacao.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">
                              EXCLUIR <i class="fa-solid fa-trash-can"></i>
                            </button>
                          </form>
                    </div> --}}
                </td>
              </tr>
              @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection