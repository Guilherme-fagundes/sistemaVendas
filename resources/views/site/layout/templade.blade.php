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
<header class="headerSite" style="background-color: mediumseagreen">
    <div class="container">
        <div class="row py-3">
            <div class="col-12 col-sm-6">
                <h3 class="text-white " style="font-weight: 300; font-family: 'Open Sans Condensed', sans-serif;">Sistema de vendas</h3>
            </div>
            <div class="col-12 col-sm-6">
                <form method="post" action="" class="d-flex">
                    <input type="text" name="seach" placeholder="Pesquisar por produto" class="form-control form-control-sm rounded-0" style="border: none">
                    <button class="btn btn-sm rounded-0" style="background-color: white; color: #2d3748; border: none"><i class="fas fa-search"></i></button>

                </form>
            </div>
        </div>
    </div>

</header>
@yield('main')
</body>
</html>
