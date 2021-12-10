@extends('dashboard.layout.site');
@section('title')Home @endsection
@section('content')
    <!-- <nav class="site-header sticky-top py-1">
            <div class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2 d-none d-md-inline-block nav-buttons far fa-handshake" href="#obras"> Obras</a>
                <a class="py-2 d-none d-md-inline-block nav-buttons far fa-address-card" href="sobre.html"> Sobre</a>
                <a class="py-2 d-none d-md-inline-block nav-buttons fas fa-user-circle" href="/admin"> Admin</a>
            </div>
        </nav>-->
    <nav class="site-header navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse effect topLeftBorders" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 mx-auto">
                    <a class="btn my-2 my-sm-0 nav-buttons far fa-handshake" href="#sobre"> Obras</a>
                    <a class="btn my-2 my-sm-0 nav-buttons far fa-address-card" href="#servicos"> Sobre</a>
                    <a class="btn my-2 my-sm-0 nav-buttons far fa-user-circle" href="#racas"> Admin</a>
                </ul>
            </div>
        </div>
    </nav>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light"
        style="background-color: rgb(228, 228, 228) !important;">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <img class="logo-nav" src="{{ asset('img/logo-nav.png') }}" alt="">
            <p class="lead font-weight-normal text-menu">Atendimento para todo o Brasil <i class="fas fa-check"
                    style="color: rgb(255, 255, 255);"></i></p>
            <!--<a class="btn btn-outline-secondary" href="#">Coming soon</a>-->
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" id="obras">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Brusque/SC</h2>
                <p class="lead" style="color:white;">Proin et vestibulum leo. Vivamus lacinia a mi in placerat.
                    Integer
                    congue mauris in metus bibendum, tincidunt elementum velit imperdiet. Integer augue mauris, molestie
                    eu molestie a, fermentum quis erat. Maecenas accumsan mi ipsum, eu fermentum nibh aliquet sed. Nulla
                    venenatis finibus odio, a laoreet sapien egestas ac. Maecenas viverra a urna ac volutpat. Morbi a
                    nunc a augue fermentum malesuada id non tortor..</p>
            </div>
            <div class="bg-light box-shadow mx-auto"
                style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url(img/obra.jpg) !important;">
            </div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Curitiba/PR</h2>
                <p class="lead">Proin et vestibulum leo. Vivamus lacinia a mi in placerat. Integer congue mauris
                    in
                    metus bibendum, tincidunt elementum velit imperdiet. Integer augue mauris, molestie eu molestie a,
                    fermentum quis erat. Maecenas accumsan mi ipsum, eu fermentum nibh aliquet sed. Nulla venenatis
                    finibus odio, a laoreet sapien egestas ac. Maecenas viverra a urna ac volutpat. Morbi a nunc a augue
                    fermentum malesuada id non tortor.</p>
            </div>
            <div class="bg-dark box-shadow mx-auto"
                style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url(img/obra2.jpg) !important;">
            </div>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">São Paulo/SP</h2>
                <p class="lead">Proin et vestibulum leo. Vivamus lacinia a mi in placerat. Integer congue mauris
                    in
                    metus bibendum, tincidunt elementum velit imperdiet. Integer augue mauris, molestie eu molestie a,
                    fermentum quis erat. Maecenas accumsan mi ipsum, eu fermentum nibh aliquet sed. Nulla venenatis
                    finibus odio, a laoreet sapien egestas ac. Maecenas viverra a urna ac volutpat. Morbi a nunc a augue
                    fermentum malesuada id non tortor.</p>
            </div>
            <div class="bg-dark box-shadow mx-auto"
                style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url(img/obra3.jpg) !important;">
            </div>
        </div>
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Porto Alegre/RS</h2>
                <p class="lead" style="color:white;">Proin et vestibulum leo. Vivamus lacinia a mi in placerat.
                    Integer
                    congue mauris in metus bibendum, tincidunt elementum velit imperdiet. Integer augue mauris, molestie
                    eu molestie a, fermentum quis erat. Maecenas accumsan mi ipsum, eu fermentum nibh aliquet sed. Nulla
                    venenatis finibus odio, a laoreet sapien egestas ac. Maecenas viverra a urna ac volutpat. Morbi a
                    nunc a augue fermentum malesuada id non tortor.</p>
            </div>
            <div class="bg-light box-shadow mx-auto"
                style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url(img/obra4.jpg) !important;">
            </div>
        </div>
    </div>

    <!--Vindo do Back-end-->
    <?php foreach($obras as $obra) { ?>
    <div class="bg-dark d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 text-white">
        <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">{{ $obra->title }}</h2>
                <p class="lead">{{ $obra->description }}</p>
            </div>
            <div class="box-shadow mx-auto">
                <img style=" img-custom" src="{{ asset('img/obra3.jpg') }}" alt="">
            </div>
        </div>
        <!--<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Porto Alegre/RS</h2>
                    <p class="lead" style="color:white;">Proin et vestibulum leo. Vivamus lacinia a mi in placerat.
                        Integer
                        congue mauris in metus bibendum, tincidunt elementum velit imperdiet. Integer augue mauris, molestie
                        eu molestie a, fermentum quis erat. Maecenas accumsan mi ipsum, eu fermentum nibh aliquet sed. Nulla
                        venenatis finibus odio, a laoreet sapien egestas ac. Maecenas viverra a urna ac volutpat. Morbi a
                        nunc a augue fermentum malesuada id non tortor.</p>
                </div>
                <div class="bg-light box-shadow mx-auto"
                    style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url(img/obra4.jpg) !important;">
                </div>
            </div>-->
    </div>
    <?php } ?>
@endsection
