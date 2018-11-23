<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @if((env('APP_ENV') == 'local'))
        <link rel="stylesheet" href="{{ asset('css/signin.css')}}" />
    @else
        <link rel="stylesheet" href="{{ secure_asset('css/signin.css')}}" />
    @endif

    <title>Feedback - Login</title>
</head>

<body class="text-center">

    {{ Form::open(['url' => route('login'),'method' => 'POST', 'class' => 'form-signin']) }}
    {{ Html::cover_heading('Feedback Sign In') }}
    {{ Form::form_errors() }}
    {{ Form::login_form() }}
    {{ Form::close() }}

</body>
</html>
