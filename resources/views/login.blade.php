@extends("layout")
@section("conteudo")
<div class="conteudo mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-12 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h4>Entrar</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-12 col-10">
                <form action="{{ route('carregarLogin') }}" method="post">
                    @csrf
                    <div class="column">
                        <div class="form-group col-12 mb-3">
                            <label>E-mail:</label><br>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label>Senha:</label>
                            <input type="password" name="senha" id="senha" class="form-control">
                        </div>
                    </div>
                    <div class="mb-4">
                        <a href="{{ route('cliente.cadastro-cliente') }}">Cadastrar-se</a> - 
                        <a href="{{ route('cliente.esqueceu-senha') }}">Esqueci a senha</a>
                        <input type="submit" value="Entrar" class="btn btn-primary float-end">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection