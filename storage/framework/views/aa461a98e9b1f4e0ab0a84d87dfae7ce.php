<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Revista Digital</title>
</head>
<body data-bs-theme="dark" class="w-100 h-100 d-flex flex-column align-items-center justify-content-center">
    <h1>Pagina Cadastro</h1>
    <form action="<?php echo e(route('register-user')); ?>" class="w-25 d-flex flex-column gap-2 align-items-center">

        <input type="text" id="name" name="name" placeholder="Nome:" class="w-100">

        <input type="email" id="email" name="email" placeholder="Email:" class="w-100">

        <input type="password" id="password" name="password" placeholder="Senha:" class="w-100">

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
    <p>Já tem uma conta? <a href="<?php echo e(route('login')); ?>">Fazer login</a></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html><?php /**PATH C:\Users\47814267862\Desktop\revista\resources\views/auth/register.blade.php ENDPATH**/ ?>