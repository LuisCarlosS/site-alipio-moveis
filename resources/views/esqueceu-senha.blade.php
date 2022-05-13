@extends("layout")
@section("conteudo")
<div class="conteudo mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-12 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h4>Esqueceu a senha?</h4>
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
                            <label>Informe o email:</label><br>
                            <input type="text" name="usuario" id="usuario" class="form-control">
                        </div>
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('login-cliente') }}">Fazer login</a>
                        <input type="submit" value="Solicitar senha" class="btn btn-primary float-end">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection