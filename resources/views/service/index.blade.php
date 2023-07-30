@extends('layouts.default')
@section('content')
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Nossos Serviços</h6>
                <h1 class="mb-5">Conheça mais sobre os nossos serviços</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Mudanças Residenciais</h4>
                        <p>Nossos serviços de mudanças residenciais são negociados diretamente com o cliente, com segurança e tratamento especial.</p>
                        <a class="btn-slide mt-2" href="{{ Route('quote') }}"><i class="fa fa-arrow-right"></i><span>Conheça
                                Mais</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Mudanças para Empresas</h4>
                        <p>A nossa solução para as outras empresas, é oferecida de uma forma atenciosa. Quando se trata de Mobilia Comercial!</p>
                        <a class="btn-slide mt-2" href="{{ Route('quote') }}"><i class="fa fa-arrow-right"></i><span>Conheça
                            Mais</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Fretes</h4>
                        <p>Oferecemos Fretes para Cargas e Produtos, Mediante com a distância que será combinado.   </p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Conheça
                            Mais</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-4.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Soluções para Logisticas</h4>
                        <p>Resolvemos Problemas de Logistica, Como Entregas de Eletrodomésticos ou Outras Mobilias.</p>
                        <a class="btn-slide mt-2" href="{{ Route('quote') }}"><i class="fa fa-arrow-right"></i><span>Conheça
                            Mais</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-5.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Gestão de Almoxarifado</h4>
                        <p>Organização de Estoques e Encomendas para o Melhor Controle de Recebimento, Entrega e a Segurança.</p>
                        <a class="btn-slide mt-2" href="{{ Route('quote') }}"><i class="fa fa-arrow-right"></i><span>Conheça
                            Mais</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-6.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Embalagens para Encomendas</h4>
                        <p>Quando se trata de Embalagens, Precisa ser da Forma mais segura possível.</p>
                        <a class="btn-slide mt-2" href="{{ Route('quote') }}"><i class="fa fa-arrow-right"></i><span>Conheça
                            Mais</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
