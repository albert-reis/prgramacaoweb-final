@extends('dashboard.layout.admin')

@section('content')
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"
        style="background-color: rgb(0, 0, 0) !important;">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#" style="background-color: crimson;">Administrativo
            Wippel</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-painel" aria-current="page" href="/">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-painel" href="/cadastrarobra">
                                <span class="text-painel" data-feather="plus-circle"></span>
                                Cadastrar Obras
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-painel" href="/cadastrarusuario">
                                <span data-feather="plus-circle"></span>
                                Cadastrar Usuários
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-painel" href="/listarusuario">
                                <span data-feather="list"></span>
                                Listar Usuários
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-painel-select" href="/listarobra">
                                <span data-feather="list"></span>
                                Listar Obras
                            </a>
                        </li>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Usuários administrativos</h1>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm data-table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Título</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Imagem</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <!-- As linhas de dados da tabela são gerados no arquivo main.js (função loadItemsTable()) -->
                        <tbody>
                            <?php foreach($obras as $obra) { ?>
                            <tr>
                                <td>{{ $obra->_id }}</td>
                                <td>{{ $obra->title }}</td>
                                <td>{{ $obra->description }}</td>
                                <td>{{ $obra->image }}</td>
                                <!--<td><img src="{{ $obra->image }}" alt=""></td>-->
                                <td>
                                    <a href="{{ route('obra.form', $obra->_id) }}" class="btn btn-warning btn-sm">Atualizar</a>
                                    <a href="{{ route('obra.delete', $obra->_id) }}" class="btn btn-danger btn-sm">Deletar</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection