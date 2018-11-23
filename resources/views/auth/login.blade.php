<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ secure_asset('css/signin.css')}}" />
    <title>Feedback - Login</title>
</head>

<body class="text-center">

    {{ Form::open(['url' => route('login'),'method' => 'POST', 'class' => 'form-signin']) }}
    {{ Html::cover_heading('Feedback Sign In') }}


    {{ Form::form_errors() }}

    <label for="inputEmail" class="sr-only">Email address</label>
    <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>


    <label for="inputPassword" class="sr-only">Password</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

    {{ Form::close() }}

</body>
</html>
