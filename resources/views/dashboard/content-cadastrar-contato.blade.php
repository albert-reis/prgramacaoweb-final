@extends('dashboard.layout.admin')

@section('content')
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"
        style="background-color: rgb(0, 0, 0) !important;">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#" style="background-color: crimson;">Administrativo
            Wippel</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link text-painel" href="/cadastrarusuario">
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
                            <a class="nav-link text-painel" href="/listarobra">
                                <span data-feather="list"></span>
                                Listar Contato
                            </a>
                        </li>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Cadastrar</h1>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        @if ($data)
                            <form action="{{ route('contact.update', $data->_id) }}" method="GET">
                                @csrf
                                <small>*campos obrigatórios</small>
                                <div class="form-group">
                                    <label for="district">Rua*</label>
                                    <input type="text" class="form-control" id="district" maxlength="50" name="district"
                                        placeholder="Informe a rua da empresa..." value="{{ $data->district }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="road">Bairro*</label>
                                    <input type="password" class="form-control" id="road" maxlength="50" name="road"
                                        placeholder="Insira o bairro da empresa..." value="{{ $data->road }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact">Contato*</label>
                                    <input type="number" class="form-control" id="contact" name="contact"
                                        placeholder="Informe o contato..." value="{{ $data->contact }}" required>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
                            </form>

                        @else
                            <form action="{{ route('contact.save') }}" method="GET">
                                @csrf
                                <small>*campos obrigatórios</small>
                                <div class="form-group">
                                    <label for="road">Rua*</label>
                                    <input type="text" class="form-control" id="road" maxlength="50" name="road"
                                        placeholder="Informe a rua..." required>
                                </div>
                                <div class="form-group">
                                    <label for="district">Bairro*</label>
                                    <input type="text" class="form-control" id="district" maxlength="50"
                                        name="district" placeholder="Insira o bairro..." required>
                                </div>
                                <div class="form-group">
                                    <label for="contact">Telefone*</label>
                                    <input type="number" class="form-control" id="contact" name="contact"
                                        placeholder="Informe a data da criação..." required>
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
