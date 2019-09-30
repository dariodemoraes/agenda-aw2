@extends('templates.principal')

@section('conteudo')

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
                  <form class="user" id='formulario' method='post' action='/validacao' enctype='multipart/form-data'>
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <input type="hidden" name="erro" value="1" />
                    <div class="form-group">
                        Prontuário: <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ex.: 1650000" name="login" value="@if (!empty($_COOKIE['login'])) {{ $_COOKIE['login'] }} @endif" required>
                    </div>
                    <div class="form-group">
                      Senha: <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="" name="senha" value="@if (!empty($_COOKIE['senha'])) {{ $_COOKIE['senha'] }} @endif" required>
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
                  @if (old('cad') == 'ok')
                    <p>Cadastro realizado com sucesso!</p>
                  @endif
                  </div>
                  <div class="incorreto">
                  @if (old('erro') == 1) 
                      <p>Por favor, entre com um prontuário e senha corretos.</p>
                  @endif
                  </div>
                  <!--<div class="text-center">
                    <a class="small" href="forgot-password.php">Esqueceu a Senha?</a>
                  </div>-->
                  <div class="text-center">
                    <a class="small" href="{{action('AlunoController@exibirCadastro')}}">Criar sua conta!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  
@stop
