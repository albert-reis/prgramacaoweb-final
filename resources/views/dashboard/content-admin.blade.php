@extends('dashboard.layout.admin');

@section ('content')
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"
        style="background-color: rgb(0, 0, 0) !important;">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-uppercase" href="#" style="background-color: crimson;">Administrativo
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
                            <a class="nav-link text-painel" aria-current="page" href="index.html">
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
                            <a class="nav-link text-painel" href="/listarobra">
                                <span data-feather="list"></span>
                                Listar Obras
                            </a>
                        </li>
                </div>
            </nav>
        </div>
    </div>
@endsection