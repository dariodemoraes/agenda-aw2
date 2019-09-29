<?php
if ($_POST) {
    $dados = fopen("../data/users.txt", "a") or die("Erro ao abrir arquivo!");
    fwrite($dados, $_POST['nome'] . "/" . $_POST['prontuario'] . "/" . $_POST['email'] . "/" . $_POST['senhaAluno'] . "/" . $_POST['senhaMae'] . "\r\n");
    fclose($dados);
    header("Location: ./login.php?cad=ok");
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

        <title>semiSUAP - Cadastro</title>

        <!-- Custom fonts for this template-->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../public/stylesheets/sb-admin-2.min.css" rel="stylesheet">
        <link href="../public/stylesheets/css.css" rel="stylesheet">
        
        <script type="text/javascript" src="../public/javascripts/javascript.js"></script>

    </head>

    <body class="bg-gradient-primary">

        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Você é alunx? Crie sua conta de acesso aqui!</h1>
                                </div>
                                <form class="user" id='formulario' method='post' action='<?php $_SERVER['PHP_SELF'] ?>' enctype='multipart/form-data' >
                                    <div class="form-group">
                                        Nome: <input type="text" class="form-control form-control-user" id="nome" name="nome" placeholder="Ex.: Fulano da Silva" pattern="^[A-ZÀ-Ÿ][A-zÀ-ÿ']+\s([A-zÀ-ÿ']\s?)*[A-ZÀ-Ÿ][A-zÀ-ÿ']+$" required>
                                    </div>
                                    <div class="form-group">
                                        Prontuário: <input type="text" class="form-control form-control-user" id="prontuario" name="prontuario" placeholder="Ex.: 1650000" pattern="([0-9]{7})|([0-9]{6}?(x|X))" required>
                                    </div>

                                    <div class="form-group">
                                        Email: <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="example@poodle.com" required>
                                    </div>
                                    Senha (acesso dx <b>alunx</b>):
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="senhaAluno" name="senhaAluno" placeholder="Dica: evite padrões. Ex.: 123456" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="senhaAlunoConfirmacao" placeholder="Repita a Senha" required>
                                        </div>
                                    </div>
                                    Senha (acesso dx <b>responsável</b>*):
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="senhaMae" name="senhaMae" placeholder="Dica: evite senhas curtas. Ex.: bruna" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="senhaMaeConfirmacao" placeholder="Repita a Senha" required>
                                        </div>
                                    </div>
                                    <input type='submit' onclick="return equipararSenhas()" value='Registrar dados' class="btn btn-primary btn-user btn-block">
                                </form>
                                <hr>
                                <p>*X responsável dx alunx usará esta senha para acesso a agenda (sem todas as atribuições dx alunx).</p>
                                <!--<div class="text-center">
                                    <a class="small" href="forgot-password.php">Esqueceu a Senha?</a>
                                </div>-->
                                <div class="text-center">
                                    <a class="small" href="login.php">Já tem uma conta? Entre!</a>
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
