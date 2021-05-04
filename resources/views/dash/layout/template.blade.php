<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script type="text/javascript" src="{{ url('public/assets/js/jquery.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/style.css') }}">
    <script type="text/javascript" src="{{ url('public/assets/js/scripts.js') }}"></script>
</head>
<body>
<header class="headerDash">
    <div class="container">
        <div class="row p-2">
            <div class="col-12 col-sm-6">
                <h4 class="text-white">Sistema de vendas</h4>
            </div>
            <div class="col-12 col-sm-6">
                <a href="{{ route('dash.logout') }}" class="btn btn-sm rounded-0" style="background-color: darkseagreen; color: #f1f1f1; float: right"><i class="fas fa-sign-out-alt"></i> sair</a>
            </div>

        </div>

    </div>
</header>
<section class="sessNav" style="background-color: #eeeeee">
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
                <nav class="nav">
                    <a href="{{ route('dash.index') }}" class="nav-link">Dashboard</a>
                    <a href="" class="nav-link">Produtos</a>
                    <a href="" class="nav-link">Fornecedores</a>
                    <a href="{{ route('dash.vendas') }}" class="nav-link">Vendas</a>
                    <a href="{{ route('vendas.relatorios') }}" class="nav-link">Relatórios das vendas</a>

                </nav>
            </div>

        </div>

    </div>
</section>

@yield('main')

</body>
</html>
