@extends('dashboard.layout.site');
@section('title')Sobre @endsection
@section('content')
    <nav class="site-header navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse effect topLeftBorders" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 mx-auto">
                    <a class="btn my-2 my-sm-0 nav-buttons far fa-handshake" href="#obras"> Obras</a>
                    <a class="btn my-2 my-sm-0 nav-buttons far fa-address-card" href="/"> Início</a>
                    <a class="btn my-2 my-sm-0 nav-buttons far fa-user-circle" href="/admin"> Admin</a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-8 p-lg-10 mx-auto my-5">
            <div class="jumbotron">
                <h1 class="display-4">Wippel Terraplanagem</h1>
                <p class="">Aliquam erat volutpat. Integer iaculis at urna id sagittis. Donec id eros quis velit ornare
                    sollicitudin. Integer ipsum massa, sodales eget ultricies et, cursus nec diam. Proin molestie
                    posuere justo, cursus eleifend mi. Quisque condimentum odio a purus vulputate vehicula. Aenean
                    turpis mi, ultrices nec posuere ac, efficitur vitae enim. Nullam accumsan odio sed lobortis
                    vestibulum. Morbi vel metus eget nibh scelerisque vulputate. Nam hendrerit, urna vehicula rhoncus
                    vestibulum, metus tortor sodales quam, ac tristique mauris leo eu risus. Cras iaculis, massa at
                    sagittis laoreet, mi leo efficitur turpis, tristique sodales augue eros ac lacus. Vestibulum
                    dapibus, neque a consectetur volutpat, augue lorem fringilla velit, ac accumsan odio nulla nec elit.
                    Fusce auctor sapien a sapien accumsan finibus. Duis efficitur placerat orci, in eleifend lectus
                    blandit ac. Aenean lobortis varius dui sed fringilla. Fusce viverra semper sagittis.

                    Vestibulum sit amet vestibulum diam. Vestibulum scelerisque ultrices ex. Integer elementum dui vel
                    nulla sollicitudin placerat. Nam convallis metus odio. Pellentesque varius mauris non nulla sodales
                    interdum. Nullam eleifend leo lacinia aliquam facilisis. Etiam molestie orci tristique eleifend
                    facilisis. Maecenas ornare rutrum purus, et bibendum ex interdum ut. Etiam hendrerit felis velit,
                    nec sagittis quam finibus eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                    per inceptos himenaeos. Nulla volutpat finibus neque, in convallis eros dapibus vel. Nullam et
                    mollis purus. Nam pellentesque porttitor metus.

                    Vestibulum rutrum turpis sapien, sit amet eleifend erat maximus nec. Vivamus sed condimentum neque.
                    Mauris eget sapien mattis, fermentum nibh eu, interdum felis. Vestibulum congue enim eu lectus
                    commodo, ac malesuada massa tempor. Aenean vitae efficitur nisi. Fusce vel odio a sem volutpat
                    tempus. Praesent vitae felis vitae ex cursus facilisis eget vitae eros. Mauris viverra urna erat.
                    Maecenas ante arcu, ullamcorper sit amet neque sed, ullamcorper auctor quam. Aliquam erat volutpat.
                    Quisque vitae libero mi.

                    Suspendisse tristique tempor ante, vel congue urna pulvinar at. Cras eleifend turpis sed luctus
                    consequat. Donec vitae tellus non risus volutpat lacinia. Duis molestie id nisi quis laoreet. In ac
                    diam efficitur, commodo velit quis, viverra mi. Nunc vitae neque id elit porttitor aliquet. Duis
                    dapibus aliquam sodales. Nulla pellentesque mollis maximus. In nec bibendum leo. Fusce in nulla id
                    mauris elementum congue quis a purus.

                    In aliquam pulvinar rutrum. Ut ex massa, ullamcorper id viverra sed, auctor eu lacus. Nam feugiat
                    venenatis neque eleifend fermentum. In mattis, libero nec aliquet gravida, est sapien blandit dolor,
                    et aliquet mi orci at ante. Nullam in placerat orci. Pellentesque ut condimentum lectus. Interdum et
                    malesuada fames ac ante ipsum primis in faucibus. Duis bibendum urna porta, placerat dolor at,
                    bibendum turpis. Nam vel lorem tincidunt, hendrerit mauris id, tincidunt purus. Ut pretium lacus
                    pretium nisl suscipit suscipit. Sed gravida rhoncus nisi a porttitor. Fusce tristique justo ut
                    laoreet ullamcorper. Donec consequat felis eu eros tempor, non faucibus elit eleifend.

                </p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.
                </p>
            </div>

        </div>
    </div>
@endsection