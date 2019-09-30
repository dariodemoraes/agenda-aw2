@extends('templates.principal')

@section('conteudo')

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
                                <form class="user" id='formulario' method='post' action="/cadastrar" enctype='multipart/form-data' >
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                    <input type="hidden" name="cad" value="ok" />
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
                                    <a class="small" href="{{action('AlunoController@logar')}}">Já tem uma conta? Entre!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@stop

