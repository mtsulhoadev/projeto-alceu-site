@if ((Route::current()->getName()) == 'about')
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Sobre nós</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ Route('index') }}">Início</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{ Route('index') }}">Páginas</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"><a class="text-white"
                            href="{{ Route('about') }}">Sobre</a></li>
                </ol>
            </nav>
        </div>
    </div>
@endif
