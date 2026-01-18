@section('style',asset('css/site/404.css'))

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        
        <title>Fronteira Digital</title>

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
        <link rel="stylesheet" href="{{asset('css/site/404.css')}}" type="text/css">
    </head>
    <body>
        <div class="container-fluid">

            <div class="row box-img">
                <img src="{{asset('img/404/404.svg')}}" alt="Página não encontrada.">
            </div>
            <div class="row texto">
                <h1>404</h1>
                <h2>Page not found</h2>
                <p>A página que você buscou não foi encontrada!</p>
            </div>
            <div class="col-12 btn">
                <a href="/">Voltar para a Home</a>
            </div>

        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>

    </body>
</html>

