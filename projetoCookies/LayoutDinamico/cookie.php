<?php
// verifica se o botão "excluir" foi acionado
if (isset($_POST['excluir'])) {
    //define o tempo de expiração para o passado para excluir o cookie
    setcookie('user', '', time() - 3600, '/');
    $mensagem = 'Os dados foram apagados.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="script.js"></script>
    <title>Cookies</title>
</head>
<body class="bg-body-secondary">
    <div class="container text-center">
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>
            <div class="col custom-navbar">
                <nav class="navbar navbar-expand-lg custom-navbar" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">COOKIES</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-1">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>
            <div class="col bg-white"><br>
                <h3 class="text-start fs-5 custom-heading">COOKIE</h3>
                <?php
                    // vai exibir a mensagem após a exclusão, se estiver definida
                    if (isset($mensagem)) {
                        echo '<p>' . $mensagem . '</p>';
                    } elseif (isset($_COOKIE['user'])) {
                        // se o cookie ainda existir, ele vai exibir os dados
                        $userData = json_decode($_COOKIE['user']);
                        echo '<p>Nome: ' . $userData->nome . '</p>';
                        echo '<p>Senha: ' . $userData->senha . '</p>';}
                ?>
                <form method="post" action="cookie.php">
                    <div class="mb-3 text-start">
                    </div>
          
                <div class="mb-3 text-start">
                <button type="submit" name="excluir" class="btn btn-danger custom-navbar">Excluir</button>
                <a href="index.php" class="btn btn-primary custom-navbar">Voltar</a>
                </div>
                </form>
              </div>
            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div>
</body>
</html>