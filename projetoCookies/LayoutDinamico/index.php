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
<body backgroundColor="#fa4" class="bg-body-secondary">
    <div class="container text-center">
        <div class="row">
          <div class="col-1">
            &nbsp;
          </div>
          <div class="col custom-navbar">
            <nav class="navbar navbar-expand-lg custom-navbar" data-bs-theme="dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">LOGIN</a>
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
            <h3 class="text-start fs-5 custom-heading">SISTEMA DE LOGIN</h3>
            <!-- Adicionei um elemento para exibir a mensagem de erro -->
            <div id="error-message" class="alert alert-danger" style="display:none;">Os dados estão incorretos. Tente novamente.</div>

            <p>
              <form id="myForm">
                <div class="mb-3 text-start" align="left">
                  <label for="exampleInputEmail1" class="form-label">Nome:</label>
                  <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" value="joao">
                </div>
                <div class="mb-3 text-start" align="left">
                  <label for="exampleInputEmail1" class="form-label">Senha:</label>
                  <input type="text" class="form-control" placeholder="(xx)xxxxx-xxxx" id="telefone" name="telefone" aria-describedby="emailHelp" value="123456">
                </div>
                
                <div class="mb-3 text-start">
                  <button type="button" class="btn btn-primary custom-navbar" onclick="validateLogin()">Entrar</button>
                </div>
              </form>
            </p>
            <script>
              function validateLogin() {
                var nome = document.getElementById("nome").value;
                var senha = document.getElementById("telefone").value;

                if (nome === "joao" && senha === "123456") {
                  // Adicionei o código para definir o cookie 'user'
                  var userData = {nome: nome, senha: senha};
                  document.cookie = "user=" + JSON.stringify(userData) + "; path=/";
                  window.location.href = "cookie.php";
                } else {
                  document.getElementById("error-message").style.display = "block";
                }
              }
            </script>
          </div>
          <div class="col-1">
            &nbsp;
          </div>
        </div> 
        <br>
        <button class="buttonOn" onclick="doMode('light-mode');">Modo Claro</button>
        <button class="buttonOff" onclick="doMode('dark-mode');">Modo Escuro</button>   
    </div>
</body>
</html>