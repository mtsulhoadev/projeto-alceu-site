<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="{{ Route('index') }}" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-white"><h2>Mudanças</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ Route('index') }}" class="nav-item nav-link">Início</a>
            <a href="{{ Route('about') }}" class="nav-item nav-link">Sobre</a>
            <a href="{{ Route('service') }}" class="nav-item nav-link">Serviços</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Páginas</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ Route('quote') }}" class="dropdown-item">Cotação de preços</a>
                    <a href="{{ Route('about') }}" class="dropdown-item">Diferenciais</a>
                </div>
            </div>
            <a href="{{ Route('contact') }}" class="nav-item nav-link">Contato</a>
        </div>
        <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-headphones text-primary me-3"></i>55 (61) 9 8467-7498</h4>
    </div>
</nav>