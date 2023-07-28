@extends('layouts.default')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/truck/background.gif" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Soluções em Mudanças e Logistica</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">A melhor para resolver seu <span
                                        class="text-primary">Problema</span> Logistico</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Sempre com foco no bem estar e conforto
                                    dos nossos clientes, com segurança e organização nas logisticas. </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Conheça Mais
                                </a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Cotação de preços
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/truck/background-2.gif" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Soluções em Mudanças e Logistica</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">A melhor para resolver seu <span
                                        class="text-primary">Problema</span> Logistico</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Sempre com foco no bem estar e conforto
                                    dos nossos clientes, com segurança e organização nas logisticas. </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Conheça Mais
                                </a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Cotação de preços
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


  <!-- About Start -->
  <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">Sobre nós</h6>
                    <h1 class="mb-5">Mudanças e soluções logisticas</h1>
                    <p class="mb-5">Nós temos o foco em solucionar problemas de logisticas e garantir a segurança no
                        transporte e nas mudanças!</p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                            <h5>Transporte em todo o território nacional.</h5>
                            <p class="m-0">Entregas em todo o Brasil.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                            <h5>Mudanças e transportes fácil e ágil</h5>
                            <p class="m-0">Transportando o seu sonho com agilidade e segurança.</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary py-3 px-5">Conheça mais!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Algumas métricas</h6>
                    <h1 class="mb-5">#1 Para planejar toda a sua logistica!</h1>
                    <p class="mb-5">Oferecendo soluções logisticas e mudanças residenciais e empresariais. Garatindo
                        sempre ágilidade e segurança nas entregas! Com atendimento humano e atencioso com todos os nossos
                        clientes.</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Para qualquer dúvida contate-nos!</h6>
                            <h3 class="text-primary m-0">55 (61) 9 8467-7498</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="bg-primary p-4 mb-4 wow fadeIn" data-wow-delay="0.1s">
                                <i class="fa fa-users fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">+100</h2>
                                <p class="text-white mb-0">Clientes satisfeitos!</p>
                            </div>
                            <div class="bg-secondary p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-ship fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">+100</h2>
                                <p class="text-white mb-0">Entregas e mudanças concluidas!</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-success p-4 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-star fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">100</h2>
                                <p class="text-white mb-0">Avaliações de parceiros e clientes!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


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
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Conheça
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
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Conheça
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
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Conheça
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
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Conheça
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
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Conheça
                            Mais</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Outras Curiosidades!</h6>
                    <h1 class="mb-5">Trabalhamos com Soluções Logisticas e Mudanças desde 1999</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Atendendo e Expandindo Sempre</h5>
                            <p class="mb-0">Com Foco Sempre no Bem Estar do Cliente,
                                Zelando Pela Segurança e o Bom Tratamento.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-shipping-fast text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Serviços Em Tempo Recorde!</h5>
                            <p class="mb-0">Nossos Serviços Desde do Suporte Até a Entrega da Forma Mais Rápida Possível.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-headphones text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Suporte 24/7 Pelos Nossos Canais de Atendimento.</h5>
                            <p class="mb-0">Ótimos Canais de Atendimento e Suporte Com o Cliente
                             Trabalhamos Com As Plataformas Seguras e Confiáveis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/feature.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">COTAÇÃO DE PREÇOS</h6>
                    <h1 class="mb-5">Faça uma Cotação Sem Compromissos!</h1>
                    <p class="mb-5">Preencha com os Dados e Informações da Entrega ou Serviço Desejado.
                        Entraremos em contato o mais breve possível!</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Entre em Contato Conosco!</h6>
                            <h3 class="text-primary m-0">55 (61) 9 8467-7498</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Seu Nome"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Seu E-Mail"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Número de Telefone"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Selecione o Serviço</option>
                                        <option value="1">Mudança Residencial</option>
                                        <option value="2">Mudança Comercial</option>
                                        <option value="3">Fretes ou Soluções Logisticas</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Observações"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Enviar!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-0">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg"
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg"
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg"
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-4.jpg"
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
