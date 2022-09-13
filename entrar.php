<html>
    <head>
        <title>Login do Usuário</title>
            <link rel="icon" type="image/x-icon" href="img/youtubeazul.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            .box-login{
                width: 70%;
                margin: auto;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container ">

            <form action="valida_entrada.php" method="post">
                <div class="box-login bg-black text-light">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><b>Email</b></label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><b>Senha</b></label>
                        <input type="password" name="senha"class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 row">
                        <button type="submit" class="btn btn-primary col mx-3" href="index.php"><b>ENTRAR</b></button>
                    </div>
                </div>
            </form>


        </div>

    </body>
</html>
