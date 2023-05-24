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
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h2 class="font-weight-bolder text-white mb-0">Cadastro de Funcionário</h2>
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
          <h5 class="card-title">Cadastrar</h5>
        </div>
        <div class="card-body">
          <form action="{{route('funcionario.store')}}" method="POST">
            @csrf
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nome_funcionario" name="nome" placeholder="Fulano de tal" required>
              <label for="nome_funcionario">Funcionário:</label>
            </div>
            <div class="form-floating mb-3">
              <input type="date" class="form-control" id="nome_funcionario" name="data_nascimento" placeholder="01/01/0001" required>
              <label for="nome_funcionario">Data de nascimento:</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="cpf_funcionario" name="cpf" placeholder="00.111.222-33" required>
              <label for="cpf_funcionario">CPF:</label>
            </div>
            <div class="form-floating mb-3">
              <select id="funcao_funcionario" class="form-select" name="id_funcao">
                @foreach ($funcoes as $funcao)
                  {{-- @if ($funcoes->count() < 1)
                    <option value="" disabled>Sem funções cadastradas</option>
                  @endif --}}
                    <option value="{{$funcao->id}}"> {{$funcao->funcao}} </option>
                @endforeach
              </select>
              <label for="funcao_funcionario">Função:</label>
            </div>
            <button type="submit" class="btn btn-primary">
              SALVAR <i class="fa-solid fa-check"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
@endsection
