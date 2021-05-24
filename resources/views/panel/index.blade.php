<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ mixing('/panel/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ mixing('/panel/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mixing('/panel/assets/css/login.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sign In Panel</title>
</head>

<body>

    <div class="ajax_response"></div>

    <div class="container">

        <div class="wrapper-form-login d-flex align-items-center justify-content-center">
            <div class="row">

                <h1 class="text-center text-dash-blue mb-3">_ilenon</h1>

                <form action="{{ route('dologin') }}" id="form-login" name="login" method="POST">
                    <div class="form-group mb-3">
                        <label for="email">Usuário:</label>
                        <input type="email" name="email" id="email" class="form-control rounded-0"
                            value="ivaan.lenon@gmail.com">
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Senha:</label>
                        <input type="password" name="password" id="password" class="form-control rounded-0">
                    </div>

                    <div class="form-group d-grid gap-2">
                        <button type="submit" class="btn btn-dash-blue rounded-0">Entrar</button>
                    </div>
                </form>

            </div><!-- /.row -->
        </div><!-- /.wrapper-form-login -->

    </div>

    <script src="{{ mixing('/panel/assets/js/jquery.js') }}"></script>
    <script src="{{ mixing('/panel/assets/js/bootstrap.js') }}"></script>
    <script src="{{ mixing('/panel/assets/js/login.js') }}"></script>
</body>

</html>
