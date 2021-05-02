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
<header class="headerSite" style="background-color: #0078FF; height: 100vh; width: 100%">
    <div class="container">
        <div class="row py-3">
            <div class="col-12 py-5">
                <div class="loginBox mt-4 mt-lg-5 mt-md-5">
                    <h4 style="font-weight: 300" class="text-center my-3"><i class="fas fa-coffee"></i> Entar no sistema</h4>
                    <form method="post" action="{{ route('login.post') }}">
                        @csrf

                        @if($errors->all())
                            @if($errors->all()[0] == 'error')
                                <div class="alert alert-warning" role="alert">
                                    {{ $errors->all()[1] }}
                                </div>
                            @else
                                <div class="alert alert-success" role="alert">
                                    {{ $errors->all()[1] }}
                                </div>
                            @endif
                        @endif

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control form-control-sm rounded-0" id="email" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="pass">Sua senha</label>
                            <input type="password" class="form-control form-control-sm rounded-0" name="pass" id="pass">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-sm rounded-0" style="background-color: #0078FF; color: #f1f1f1;"><i class="fas fa-sign-in-alt"></i> Entar</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>

</header>
@yield('main')
</body>
</html>
