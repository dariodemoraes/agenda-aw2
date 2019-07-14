<?php
session_start();
if ($_POST) {
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/data/users.txt") && validarLogin($_POST['login'], $_POST['senha'])) {
      if ($_POST['lembreme']) {
        setcookie("login", $_POST['login']);
        setcookie("senha", $_POST['senha']); 
      } 
      header('Location: ./index.php');
    } else {
        $erro = 1;
    }
}
//unset($_COOKIE);

function validarLogin($login, $senha) {
    $dados = fopen($_SERVER['DOCUMENT_ROOT'] . "../data/users.txt", "r") or die("Erro ao abrir arquivo!");
    while(!feof($dados)) {
        $ponteiro = fgets($dados);
        $valores = explode("/", $ponteiro);
        if ($valores[1] == $login && $valores[3] == $senha) {
          $_SESSION["perfil"] = 'filho';
          $_SESSION['nome'] = $valores[0];
          return true;
        } 
        if ($valores[1] == $login && $valores[4] == $senha . "\r\n") {
          $_SESSION["perfil"] = 'mae';
          $_SESSION['nome'] = 'responsável de ' . $valores[0];
          return true;
        }
            
    }
    return false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>semiSUAP - Login</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../public/stylesheets/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../public/stylesheets/css.css">


</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bem vindo de volta, alunx!</h1>
                  </div>
                  <form class="user" id='formulario' method='post' action='<?php $_SERVER['PHP_SELF'] ?>' enctype='multipart/form-data'>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Prontuário" name="login" value="<?php if (!empty($_COOKIE['login'])) echo $_COOKIE['login']; ?>" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha" name="senha" value="<?php if (!empty($_COOKIE['senha'])) echo $_COOKIE['senha']; ?>" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="lembreme" name='lembreme'>
                        <label class="custom-control-label" for="lembreme">Lembre-me</label>
                      </div>
                    </div>
                    <input type='submit' value='Entrar' class="btn btn-primary btn-user btn-block">
                  </form>
                  <hr>
                  <div class="correto">
                  <?php if ($_GET['cad'] == 'ok'){ ?>
                    <p>Cadastro realizado com sucesso!</p>
                  <?php } ?>
                  </div>
                  <div class="incorreto">
                  <?php if (isset($erro) && $erro == 1) { ?>
                      <p>Por favor, entre com um prontuário e senha corretos.</p>
                  <?php } ?>
                  </div>
                  <!--<div class="text-center">
                    <a class="small" href="forgot-password.php">Esqueceu a Senha?</a>
                  </div>-->
                  <div class="text-center">
                    <a class="small" href="register.php">Criar sua conta!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../public/javascripts/sb-admin-2.min.js"></script>

</body>

</html>
