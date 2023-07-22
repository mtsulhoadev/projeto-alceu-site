@extends('layouts.default')
@section('content')
    <!-- 404 Inicio -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Página não encontrada.</h1>
                    <p class="mb-4">Pedimos desculpas pelo ocorrido. A página que você estava procurando não existe! Tente
                        ir para o Início e retornar sua busca.</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Volte para o início</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 Fim -->
@endsection
