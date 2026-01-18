@extends('site.layouts.main')

@section('style',asset('css/site/home.css'))

@section('content')

        <div class="vazio">

        </div>

        <!--
            Banners
         -->
        <div id="banner" class="carousel slide" data-bs-ride="carousel" >


            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{{asset('img/banner/banner-site-1.svg')}}" class="img-banner" alt="Banner 1 do site">
                    <div class="carousel-caption">
                        <div class="container-fluid">
                            <div class="row info-banner">
                                <h1 id="ed-titulo-banner-1">Soluções jurídicas eficientes</h1>
                                <p>
                                Atuamos com seriedade e compromisso para garantir a melhor solução para o seu caso 
                                </p>
                            </div>
                            <div class="row banner-saiba-mais">
                                <a href="#sobre-nos" id="btn-saiba-mais-banner-1" class="btn-saiba-mais" >Saiba mais</a>
                            </div>
                        </div>            
                    </div>
                </div>

            </div>

        </div>

        <!--
            Sobre nós
        -->
        <div class="container-fluid" id="sobre-nos">
            <div class="row">
                <div class="col-6" id="img-sobre">
                    <img src="img/sobre-nos/sobre-nos-site.svg" alt="Imagem da seção sobre nós" >
                </div>
                <div class="col-6" id="info-sobre">
                    <!-- <h1>Sobre nós</h1> -->
                    <h2>Nosso objetivo é entregar inovação e soluções digitais sob medida. </h2>
                    <p>
                        Somos um escritório de advocacia comprometido em oferecer soluções jurídicas eficientes, com atendimento humanizado, ética e transparência. Atuamos de forma estratégica para proteger os direitos e interesses de nossos clientes, buscando sempre os melhores resultados com responsabilidade e dedicação. 
                    </p>
                    <p>
                        Nossa experiência e compromisso com resultados sólidos nos posicionam como um parceiro confiável na jornada de crescimento das empresas que atendemos.
                    </p>
                    <div id="btns-sobre">
                        <div>
                            <a id="btn-saiba-mais">Saiba mais</a>
                        </div>
                        <div>
                            <a href="#contato" class="last-btn">Entre em contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
            Saiba mais   
        -->

            <div class="container-fluid box-saiba-mais">

                <div class="row box-saiba-mais-aberto">
                    <div class="row box-fechar">
                        <i class="bi bi-x-lg"></i>
                    </div>
                    <h2>Um pouco da nossa história</h2>
                    <p>
                        Nosso escritório nasceu do sonho de oferecer uma advocacia mais próxima, humana e comprometida com resultados reais. Fundado por profissionais apaixonados pelo Direito, começamos atendendo pequenos casos com a mesma dedicação que hoje aplicamos às grandes demandas. Com o passar dos anos, conquistamos a confiança de nossos clientes por meio de um trabalho sério, transparente e estratégico. Cada vitória fortaleceu nossa reputação e nos impulsionou a crescer, sempre mantendo como prioridade a ética, o respeito e a defesa dos direitos de quem confia em nosso trabalho. Hoje, seguimos evoluindo, unindo experiência e inovação para oferecer soluções jurídicas sólidas e eficazes.
                        Ao longo dessa trajetória, ampliamos nossa atuação e investimos constantemente em atualização, tecnologia e capacitação profissional, para acompanhar as mudanças da legislação e oferecer um serviço cada vez mais eficiente. Nosso crescimento foi construído com base em relacionamentos duradouros, atenção aos detalhes e uma atuação estratégica, sempre focada em entregar soluções que realmente façam a diferença na vida de nossos clientes.
                        Mais do que resolver processos, acreditamos em construir confiança. Cada cliente é atendido de forma única, com escuta ativa, orientação clara e total comprometimento com seu caso. Essa filosofia nos permitiu consolidar uma reputação sólida no mercado jurídico, tornando nosso escritório uma referência em qualidade, seriedade e resultados.
                        Nosso escritório nasceu do sonho de oferecer uma advocacia mais próxima, humana e comprometida com resultados reais. Fundado por profissionais apaixonados pelo Direito, começamos atendendo pequenos casos com a mesma dedicação que hoje aplicamos às grandes demandas. Com o passar dos anos, conquistamos a confiança de nossos clientes por meio de um trabalho sério, transparente e estratégico. Cada vitória fortaleceu nossa reputação e nos impulsionou a crescer, sempre mantendo como prioridade a ética, o respeito e a defesa dos direitos de quem confia em nosso trabalho. Hoje, seguimos evoluindo, unindo experiência e inovação para oferecer soluções jurídicas sólidas e eficazes.
                        Ao longo dessa trajetória, ampliamos nossa atuação e investimos constantemente em atualização, tecnologia e capacitação profissional, para acompanhar as mudanças da legislação e oferecer um serviço cada vez mais eficiente. Nosso crescimento foi construído com base em relacionamentos duradouros, atenção aos detalhes e uma atuação estratégica, sempre focada em entregar soluções que realmente façam a diferença na vida de nossos clientes.
                        Mais do que resolver processos, acreditamos em construir confiança. Cada cliente é atendido de forma única, com escuta ativa, orientação clara e total comprometimento com seu caso. Essa filosofia nos permitiu consolidar uma reputação sólida no mercado jurídico, tornando nosso escritório uma referência em qualidade, seriedade e resultados.
                        
                    </p>
                </div>

            </div>      
            

        <!--
            serviços
        -->
        <div class="container-fluid" id="servicos">
            <h1>Nossos serviços</h1>
            <h2>Entenda como podemos lhe ajudar.</h2>
            <div class="" id="box-card-servicos">

                <div class="card card-servicos">
                    <div class="card-body">
                        <div class="card-servico-icon">
                            <div>
                                <i class="bi bi-clipboard2-data"></i>
                            </div>
                        </div>
                        <h5 class="card-title">Nome do serviço</h5>
                        <p class="card-text">Criamos soluções personalizadas que atendem às necessidades específicas do seu negócio.</p>
                    </div>
                </div>

                <div class="card card-servicos">
                    <div class="card-body">
                        <div class="card-servico-icon">
                            <div>
                                <i class="bi bi-clipboard2-data"></i>
                            </div>
                        </div>
                        <h5 class="card-title">Nome do serviço</h5>
                        <p class="card-text">Criamos soluções personalizadas que atendem às necessidades específicas do seu negócio.</p>
                    </div>
                </div>

                <div class="card card-servicos">
                    <div class="card-body">
                        <div class="card-servico-icon">
                            <div>
                                <i class="bi bi-clipboard2-data"></i>
                            </div>
                        </div>
                        <h5 class="card-title">Nome do serviço</h5>
                        <p class="card-text">Criamos soluções personalizadas que atendem às necessidades específicas do seu negócio.</p>
                    </div>
                </div>

            </div>
        </div>

        <!--
            call to action - contato
        -->
        <div class="container-fluid cta-contato" style="background-image: url({{asset('img/cta/cta.svg')}});"> 
            <div class="row">
                <h3>Entre em contato conosco e vamos trilhar juntos essa nova jornada!</h3>
                <a href="#contato">Entre em contato</a>
            </div>                
        </div>

        <!--
            Nosso time
        -->
        <div class="container-fluid" id="time">
            <h1>Nosso time</h1>
            <h2>Entenda como podemos lhe ajudar.</h2>
            <div class="" id="box-card-time">

                <div class="card-time">
                    <div class="card-time-body">
                        <div class="img-time">
                            <img src="{{asset('img/nosso-time/time-1.svg')}}" alt="Imagem da empresa que depõe.">
                        </div>
                        <h5 class="card-time-title">Nome</h5>
                        <p class="card-time-title">Cargo</p>
                        <div class="redes-time">
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                    </div>
                </div>

                <div class="card-time">
                    <div class="card-time-body">
                        <div class="img-time">
                            <img src="{{asset('img/nosso-time/time-2.svg')}}" alt="Imagem da empresa que depõe.">
                        </div>
                        <h5 class="card-time-title">Nome</h5>
                        <p class="card-time-title">Cargo</p>
                        <div class="redes-time">
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                    </div>
                </div>

                <div class="card-time">
                    <div class="card-time-body">
                        <div class="img-time">
                            <img src="{{asset('img/nosso-time/time-3.svg')}}" alt="Imagem da empresa que depõe.">
                        </div>
                        <h5 class="card-time-title">Nome</h5>
                        <p class="card-time-title">Cargo</p>
                        <div class="redes-time">
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                    </div>
                </div>

                <div class="card-time">
                    <div class="card-time-body">
                        <div class="img-time">
                            <img src="{{asset('img/nosso-time/time-4.svg')}}" alt="Imagem da empresa que depõe.">
                        </div>
                        <h5 class="card-time-title">Nome</h5>
                        <p class="card-time-title">Cargo</p>
                        <div class="redes-time">
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                    </div>
                </div>

            </div>
        </div>



        <!--
            Depoimentos
        -->
        <div class="container-fluid" id="depoimentos">
            <h1>Depoimentos</h1>
            <h2>Veja um pouco do que falam sobre nossos serviços!</h2>
            <div class="" id="box-card-depoimentos">

                <div class="depoimento">
                    <div class="img-empresa">
                        <img src="{{asset('img/depoimentos/depoimento-1.svg')}}" alt="Imagem da empresa que depõe.">
                    </div>
                    <p class="texto">
                        “Adorei o trabalho feito para a minha empresa. Foram muito atenciosos e profissionais em todo o momento!”
                    </p>
                    <p class="site">
                       Site: <a target="_blank" href="#">Site 1</a>
                    </p>
                    <p class="nome">
                        Depoimento 1
                    </p>
                </div>

                <div class="depoimento">
                    <div class="img-empresa">
                        <img src="{{asset('img/depoimentos/depoimento-2.svg')}}" alt="Imagem da empresa que depõe.">
                    </div>
                    <p class="texto">
                        “Adorei o trabalho feito para a minha empresa. Foram muito atenciosos e profissionais em todo o momento!”
                    </p>
                    <p class="site">
                       Site: <a target="_blank" href="#">Site 2</a>
                    </p>
                    <p class="nome">
                        Depoimento 2
                    </p>
                </div>

                <div class="depoimento">
                    <div class="img-empresa">
                        <img src="{{asset('img/depoimentos/depoimento-3.svg')}}" alt="Imagem da empresa que depõe.">
                    </div>
                    <p class="texto">
                        “Adorei o trabalho feito para a minha empresa. Foram muito atenciosos e profissionais em todo o momento!”
                    </p>
                    <p class="site">
                       Site: <a target="_blank" href="#">Site 3</a>
                    </p>
                    <p class="nome">
                        Depoimento 3
                    </p>
                </div>

                <div class="depoimento">
                    <div class="img-empresa">
                        <img src="{{asset('img/depoimentos/depoimento-4.svg')}}" alt="Imagem da empresa que depõe.">
                    </div>
                    <p class="texto">
                        “Adorei o trabalho feito para a minha empresa. Foram muito atenciosos e profissionais em todo o momento!”
                    </p>
                    <p class="site">
                       Site: <a target="_blank" href="#">Site 4</a>
                    </p>
                    <p class="nome">
                        Depoimento 4
                    </p>
                </div>


            </div>
        </div>

        <!--
            call to action - contato
        -->
        <div class="container-fluid cta-contato" style="background-image: url({{asset('img/cta/cta.svg')}});"> 
            <div class="row">
                <h3>Entre em contato conosco e vamos trilhar juntos essa nova jornada!</h3>
                <a href="#contato">Entre em contato</a>
            </div>                
        </div>

        <!--
            Contato
        -->

        <div class="container-fluid titulo-pagina" id="contato">
            <h1>Contato</h1>
            <p>O futuro, na sua empresa! Ajudamos você a entender seus dados.</p>
        </div>

        <div class="container-fluid box-links-contato">
            <div class="links-contato">
                <div>
                    <i class="bi bi-telephone"></i>
                </div>
                <a href="#" target="_blank" class="contato-icons">(91) 99999-9999</a>
            </div>
            <div class="links-contato">
                <div>
                    <i class="bi bi-envelope"></i>
                </div>
                <a href="#" target="_blank" class="contato-icons">fronteiradigitalsac@gmail.com</a>
            </div>
        </div>

        <div class="container-fluid box-form">
            <form class="row g-3" method="POST" action="/contato/enviar-contato">
                @csrf
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nome" value="{{old('nome')}}" placeholder="Seu nome" maxlength="200" id="nome" required>
                </div>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="telefone" value="{{old('telefone')}}" placeholder="Seu telefone" maxlength="14" id="input-telefone-principal" required>
                </div>
                
                <div class="col-12">
                    <input type="email" class="form-control" name="email" value="{{old('email')}}" id="email" placeholder="Seu e-mail" maxlength="200" required>
                </div>

                <div class="col-12">
                    <input type="text" class="form-control" name="assunto" value="{{old('assunto')}}" id="assunto" placeholder="Assunto" maxlength="300" required>
                </div>

                <div class="col-12">
                    <textarea type="text" class="form-control" name="mensagem" id="mensagem" placeholder="Mensagem" maxlength="500" required>{{old('mensagem')}}</textarea>
                    <input class="input-contato" type="hidden" name="origem" value="contato" readonly  required>
                </div>
                
                <div class="col-12" class="box-btn-contato">
                    <button type="submit" class="btn-contato">Enviar mensagem</button>
                </div>
            </form>
            <script src="{{asset('js/site/mascaras/telefone.js')}}" type="text/javascript"></script>
        </div>


        <!--
            Nossa localização
        -->

        <div class="container-fluid titulo-pagina">
            <h1>Nossa localização</h1>
            <p>Endereço da empresa</p>
        </div>
        
        <div class="container-fluid" id="mapa" style="width:100%; display:flex;align-items:center;justify-content:center;">

            <iframe id="mapa" width="60%" height="450px" style="border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6946355873215!2d-48.41256132602544!3d-1.3598578357088706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a461bac978377f%3A0x26ddf1658fb1c589!2sComplexo%20do%208!5e0!3m2!1spt-BR!2sbr!4v1768330971565!5m2!1spt-BR!2sbr"     
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    <script src="{{asset('js/site/expandir_sobre_nos.js')}}" type="text/javascript"></script>


    
@endsection