<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

        <!-- <link rel="icon" href="{{ asset('img/marca/icon-geral.png') }}" type="image/x-icon"> -->
        <link rel="icon" href="{{ asset('img/marca/icon-geral-black.png') }}">

        <!-- SEO Essencial -->
        <title>Single Page</title>
        <meta name="description" content="Empresa especializada em soluções profissionais, atendimento de qualidade e serviços completos para empresas e clientes.">
        <meta name="keywords" content="empresa, serviços, tecnologia, software, soluções empresariais, atendimento profissional, negócios">
        <meta name="author" content="Fronteira Digital">
        <meta name="robots" content="index, follow">

        <!-- Open Graph (Facebook, WhatsApp, etc) -->
        <meta property="og:title" content="Fronteira Digital | Soluções Profissionais">
        <meta property="og:description" content="Atendimento de qualidade e soluções que fazem sua empresa crescer.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.fronteiradigital.com">
        <!-- <meta property="og:image" content="https://www.fronteiradigital.com/public/img/marca/marca-seo-whatsapp.png"> -->

        <!-- SEO para Google -->
        <!-- <meta name="google-site-verification" content="drGofh66g7t7PNHIAlPmUrM0tk1YiUppxJRDheliUI4"> -->

        <style>
             @font-face {
            font-family: BeVietnamPro-light;
            src: url('{{asset('fonts/Be_Vietnam_Pro/BeVietnamPro-Light.ttf')}}')format('opentype');
            }
            @font-face {
            font-family: BeVietnamPro-regular;
            src: url('{{asset('fonts/Be_Vietnam_Pro/BeVietnamPro-Regular.ttf')}}')format('opentype');
            }
            @font-face {
            font-family: BeVietnamPro-medium;
            src: url('{{asset('fonts/Be_Vietnam_Pro/BeVietnamPro-Medium.ttf')}}')format('opentype');
            }
            @font-face {
            font-family: BeVietnamPro-semiBold;
            src: url('{{asset('fonts/Be_Vietnam_Pro/BeVietnamPro-SemiBold.ttf')}}')format('opentype');
            }
            @font-face {
            font-family: BeVietnamPro-bold;
            src: url('{{asset('fonts/Be_Vietnam_Pro/BeVietnamPro-Bold.ttf')}}')format('opentype');
            }
        </style>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="{{asset('css/site/layouts/main.css')}}" type="text/css">
        <link href="{{asset('css/site/layouts/componentes/btn_whatsapp.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/site/layouts/msg_usuario.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/site/layouts/msg_erro_form.css')}}" rel="stylesheet" type="text/css">
        <link href="@yield('style')" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/site/contato.css')}}" type="text/css">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('img/marca/marca-site.svg')}}" alt="marca">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            @if($page=='home')
                            <a class="nav-link" href="/">Início</a>
                            @else
                            <a class="nav-link" href="/">Início</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if($page=='sobre')
                            <a class="nav-link" style="color:#FFFFFF;" href="#sobre-nos">Sobre nós</a>
                            @else
                            <a class="nav-link" href="#sobre-nos">Sobre nós</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if($page=='servicos')
                            <a class="nav-link" style="color:#FFFFFF;" href="#servicos">Serviços</a>
                            @else
                            <a class="nav-link" href="#servicos">Serviços</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if($page=='contato')
                            <a class="nav-link" style="color:#FFFFFF;" href="#contato">Contato</a>
                            @else
                            <a class="nav-link" href="#contato">Contato</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @if($page=='home')
        <script>
            const larguraJanela = window.innerWidth;

            if(larguraJanela>=1200){
                let menuRolagem = document.querySelector('#navbar');

                window.addEventListener("scroll", function(){
                    menuRolagem.classList.toggle('rolagem',window.scrollY>100);
                });
            }
            
        </script>
        @endif
        
        <!-- 
            Mensagens para o usuário
        -->
        @if(session('msg'))
        <div class="alert alert-success fixed-top" id="sucesso-mensagem" role="alert">
            <p class="flex-grow-1">{{session('msg')}}</p>
            <i class="bi bi-x-lg" id="fechar-mensagem-sucesso"></i>
        </div>
        <script>
            let fecharMensgemSucesso = document.querySelector("#fechar-mensagem-sucesso");
            let sucessoMensagem = document.querySelector("#sucesso-mensagem");


            fecharMensgemSucesso.addEventListener('click', ()=>{

                sucessoMensagem.style.display = "none"

            });
        </script>
        @endif

        @if(session('msg_erro'))
        <div class="alert alert-danger fixed-top" id="sucesso-mensagem" role="alert">
            <p class="flex-grow-1">{{session('msg_erro')}}</p>
            <i class="bi bi-x-lg" id="fechar-mensagem-sucesso"></i>
        </div>
        <script>
            let fecharMensgemSucesso = document.querySelector("#fechar-mensagem-sucesso");
            let sucessoMensagem = document.querySelector("#sucesso-mensagem");


            fecharMensgemSucesso.addEventListener('click', ()=>{

                sucessoMensagem.style.display = "none"

            });
        </script>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger fixed-top" id="erro-form">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <i class="bi bi-x-lg" id="fechar-erro-form"></i>
            </div>
            <script>
            let fecharErroForm = document.querySelector("#fechar-erro-form");
            let erroForm = document.querySelector("#erro-form");

            fecharErroForm.addEventListener('click', ()=>{

                erroForm.style.display = "none"

            });
        </script>
        @endif

        @yield('content')

        @extends('site.layouts.componentes.btn_whatsapp')

        <footer class="container-fluid">

            <div class="row" id="footer-part1">
                <div class="col-4" id="footer-col1">
                    <!-- <img src="{{asset('img/marca/marca-site.svg')}}" alt="marca no rodapé"> -->
                    <p>
                        Desenvolvemos soluções jurídicas eficientes e personalizadas para a sua empresa.
                    </p>
                    <div>
                        <!-- <a class="footer-icons-redes" href="">
                            <i class="bi bi-linkedin"></i>
                        </a> -->
                        <a class="footer-icons-redes" target="_blank" href="https://www.instagram.com/psimichellegonzalez/">
                            <i class="bi bi-facebook"></i> 
                        </a>
                        <a class="footer-icons-redes" target="_blank" href="https://www.instagram.com/psimichellegonzalez/">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="col-4" id="footer-col2">
                    <h3>Endereço</h3>
                    <div class="footer-contato" id="box-icon-endereco">
                        <div>
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <a href="#footer" class="texto-icons">Cidade Nova I WE 9A, n° 01A Sala 01 Perímetro: Rua da Providência, Av. Três Corações, e - Cidade Nova, Ananindeua - PA, 67130-080</a>
                    </div>
                    <div class="footer-contato">
                        <div>
                            <i class="bi bi-envelope"></i>
                        </div>
                        <a href="#" target="_blank" class="texto-icons">exemplo@gmail.com</a>
                    </div>
                    <div class="footer-contato">
                        <div>
                            <i class="bi bi-telephone"></i>
                        </div>
                        <a href="#" target="_blank" class="texto-icons">(91) 99840-7653</a>
                    </div>
                </div>
                <div class="col-4" id="footer-col3">
                    <h3>Links</h3>
                    <div class="footer-links">
                        <div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                        <a href="/" class="">Início</a>
                    </div>
                    <div class="footer-links">
                        <div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                        <a href="#sobre-nos" class="">Sobre nós</a>
                    </div>
                    <div class="footer-links">
                        <div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                        <a href="#servicos" class="">Serviços</a>
                    </div>
                    <div class="footer-links">
                        <div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                        <a href="#contato" class="">Contato</a>
                    </div>
                    <div class="footer-links">
                        <div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                        <a href="/politica_de_privacidade" class="">Política de privacidade</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid" id="footer-linha">

            </div>
            <div class="row" id="footer-part2">
                <p><i class="bi bi-c-circle"></i> Designed by Fronteira Digital, All Rights Reserved</p>
            </div>

        </footer>

    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</html>