<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
@extends('Layout.default')
@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <h2 class="font-weight-bolder text-white mb-0">Funcionários</h2>
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
      <div class="col ml-3">
        <a href="{{ route('funcionario.store') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Cadastrar Funcionário</a>
      </div>
      <h5 class="card-title">Todos os Fornecedores</h5>
    </div>
    <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              
              <th class="text-center" scope="col-md-2">Funcionario</th>
              <th class="text-center" scope="col-md-2">Data de nascimento</th>
              <th class="text-center" scope="col-md-2">CPF</th>
              <th class="text-center" scope="col-md-2">Função</th>
              <th class="text-center" scope="col-md-4"></th>
            </tr>
          </thead>
          @if ($funcionarios->count() <1 )
                <span><b>Não existe funcionários cadastrados</b></span>
          @endif
          <tbody>
            @foreach ($funcionarios as $funcionario)
            <tr>
              <td class="text-center">{{ strtoupper($funcionario->nome) }}</td>
              <td class="text-center">{{ $funcionario->data_nascimento }}</td>
              <td class="text-center">{{ $funcionario->cpf }}</td>
              <td class="text-center">{{ $funcionario->funcao->funcao }}</td>
              <td class="">
                <div class="row">
                  <div class="col-md-3">
                    <a href="{{ route('funcionario.edit', $funcionario->id) }}" type="button" class="btn btn-secondary">
                      EDITAR <i class="fa-solid fa-pen-to-square"></i></a>
                  </div>
                  <div class="col-md-3">
                    <form action="{{ route('funcionario.destroy', $funcionario->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">EXCLUIR <i class="fa-solid fa-trash-can"></i></button>
                    </form>
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