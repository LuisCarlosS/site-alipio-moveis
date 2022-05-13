@extends("layout")
@section("conteudo")
<div class="conteudo mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-12 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h4>Entrar como cliente</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-12 col-10">
                <form action="" method="post">
                    @csrf
                    <div class="column">
                        <div class="form-group col-12">
                            <label>E-mail:</label><br>
                            <input type="email" name="usuario" id="usuario" class="form-control">
                        </div>
                        <div class="form-group mb-2 col-12">
                            <label>Senha:</label>
                            <input type="password" name="senha" id="senha" class="form-control">
                        </div>
                    </div>
                    <div class="mb-4">
                        <a href="{{ route('cadastro-cliente') }}">Cadastrar-se</a> - 
                        <a href="{{ route('esqueceu-senha') }}">Esqueci a senha</a>
                        <input type="submit" value="Entrar" class="btn btn-primary float-end">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection