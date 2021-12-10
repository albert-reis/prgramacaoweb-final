@extends('dashboard.layout.admin');

@section ('content')
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
                            <a class="nav-link text-painel-select" href="/cadastrarobra">
                                <span data-feather="plus-circle"></span>
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
                            <a class="nav-link text-painel-select" href="/contact">
                                <span data-feather="plus-circle"></span>
                                Cadastrar Contato
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-painel" href="/listarusuario">
                                <span data-feather="list"></span>
                                Listar Usuários
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-painel" href="/listarobra">
                                <span data-feather="list"></span>
                                Listar Obras
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-painel" href="/listcontact">
                                <span data-feather="list"></span>
                                Listar Contato
                            </a>
                        </li>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Cadastrar Obra</h1>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        @if($data)
                        <form action="{{ route('obra.update', $data->_id) }}" method="GET">
                            @csrf
                            @method('PUT')
                            <small>*campos obrigatórios</small>
                            <div class="form-group">
                                <label for="nome">Título*</label>
                                <input type="text" class="form-control" id="nome" maxlength="50" name="title"
                                    placeholder="Informe o título da obra..." value="{{ $data->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nome">Descrição*</label>
                                <input type="text" class="form-control" id="nome" maxlength="50" name="description"
                                    placeholder="Descreva a obra..." value="{{ $data->description }}" required>
                            </div>
                            <div class="form-group">
                                <label for="file">Imagem da obra*</label>
                                <input type="file" class="form-control" id="data" name="image"
                                    placeholder="Informe a data de fabricação do item..." required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
                        </form>                         
                        @else
                        <form action="{{ route('post.save') }}" method="GET">
                            @csrf
                            <small>*campos obrigatórios</small>
                            <div class="form-group">
                                <label for="nome">Título*</label>
                                <input type="text" class="form-control" id="nome" maxlength="50" name="title"
                                    placeholder="Informe o título da obra..." required>
                            </div>
                            <div class="form-group">
                                <label for="nome">Descrição*</label>
                                <input type="text" class="form-control" id="nome" maxlength="50" name="description"
                                    placeholder="Descreva a obra..." required>
                            </div>
                            <div class="form-group">
                                <label for="file">Imagem da obra*</label>
                                <input type="file" class="form-control" id="data" name="image"
                                    placeholder="Informe a data de fabricação do item..." required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
                        </form>                                                     
                        @endif
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection