@extends('layouts.default')
@section('content')
    <!-- Contact Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container contact-page py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Entre em contato</h6>
                    <h1 class="mb-4">Contato para qualquer consulta</h1>
                    <div class="bg-light p-4">
                        <form action="{{ Route('sendemailcontact') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" required
                                            placeholder="Seu Nome">
                                        <label for="name">Seu Nome</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" required
                                            placeholder="Seu Email">
                                        <label for="email">Seu Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Assunto">
                                        <label for="phone">Telefone</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            placeholder="Assunto">
                                        <label for="subject">Assunto</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Deixe uma mensagem aqui" name="message" id="message"
                                            style="height: 100px"></textarea>
                                        <label for="message">Mensagem</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Enviar Mensagem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.9037894924286!2d-47.95697340897822!3d-15.809026284199762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a313f23d3d62f%3A0xabdcdbf44d6d165!2sPosto%20EPTG!5e0!3m2!1spt-BR!2sbr!4v1690063162938!5m2!1spt-BR!2sbr"
                            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
