@extends('layouts.default')
@section('content')
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
@endsection
