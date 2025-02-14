<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Revita Digital</title>
</head>
<body data-bs-theme="dark" class="h-100 d-flex align-items-center justify-content-center flex-column">
    <h1>Bem vindo a <span class="text-primary">Revista Digital</span></h1>
    <p>Escolha uma das opções para prosseguir</p>
    <div class="d-flex gap-2">
        <a class="btn btn-primary" href="{{route('login')}}">Ir para o login</a>
        <a class="btn btn-primary" href="{{route('register')}}">Ir para o registro</a>
    </div>

    <p style="position: absolute; top: 90%;">Ainda em desenvolvimento. Obrigado por sua paciência!</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>