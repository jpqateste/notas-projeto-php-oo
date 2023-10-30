
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KMW</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    body { background: url(./img/night-mode.jpg); background-size:cover;}
    .rtl-form { width:480px; background:#fff; padding:15px 30px; float: right; min-height: 105vh;}
    .rtl-form h1 { text-align: center; font-size: 25px; padding: 30px 0px; color: #666;}
    .rtl-form input[type="text"], input[type="password"] { margin:20px 0px 0px; }
    .rtl-form button { font-weight: 500; padding:5px 15px;}
    .btns-login button.btn { color:#fff; font-weight: 500;}
    .btn-google { background: #da573b; border:solid 1px #be5238; }
    .btn-google:hover { background: #be5238; border:solid 1px #9b4631;}
    .btn-twitter { background: #1daee3; border:solid 1px #3997ba; }
    .btn-twitter:hover { background: #3997ba; border:solid 1px #347b95; }
    .btn-facebook { background: #4c699e; border:solid 1px #47618d; }
    .btn-facebook:hover { background: #47618d; border:solid 1px #3c5173; }
    .btn-linkdin { background: #4875B4; border:solid 1px #466b99; }
    .btn-linkdin:hover { background: #466b99; border:solid 1px #3b5a7c; }
</style>
</head>
<body>
    <div class="rtl-form">
        <h1>Key Manager WEB</h1>
        <form action=""> 
            <input type="text" name="" id="name" class="form-control" placeholder="Usuário"> 
            <input type="password" name="" id="pass" class="form-control" placeholder="Senha">
            <div class="row mt-3">
                <div class="col-md-6"><label for="check"><input type="checkbox" name="" id="check" class="btn"> Lembre-se</label></div>
                <div class="col-md-6 text-right"><button class="btn btn-sm btn-primary">Entrar</button></div>
            </div>
        </form>
        <a href="" class="link">Esqueceu a senha?</a>
        <button class="btn btn-block btn-outline-primary btn-lg mt-5">Criar uma conta</button>

        <hr class="mt-5 mb-5">
        <div class="btns-login">
        <button class="btn btn-sm btn-block btn-google">Entrar com o Google</button>

    </div>
</div>
</body>
</html>