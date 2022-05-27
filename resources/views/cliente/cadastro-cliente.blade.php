@extends("layout")
@section("conteudo")
<div class="conteudo mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h4>Cadastrar-se como cliente</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-sm-12 col-10">
                <form action="{{ route('cliente.salvar-cliente') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-4 mt-2">
                            <label>Email:</label><br>
                            <input type="email" name="email" id="email" class="form-control" >
                        </div>
                        <div class="form-group col-4 mt-2">
                            <label>Crie uma senha:</label><br>
                            <input type="password" name="senha" id="senha" class="form-control" >
                        </div>
                        <div class="form-group col-4 mt-2">
                            <label>Confirme a senha:</label><br>
                            <input type="password" name="csenha" id="csenha" class="form-control" >
                        </div>
                        <div class="form-group col-8 mt-2">
                            <label>Nome completo:</label><br>
                            <input type="text" name="nome_completo" id="nome_completo" class="form-control" >
                        </div>
                        <div class="form-group col-4 mt-2">
                            <label>Cpf:</label><br>
                            <input type="text" name="cpf" id="cpf" class="form-control"  data-mask="999.999.999-99">
                        </div>
                        <div class="form-group col-4 mt-2">
                            <label>Celular:</label><br>
                            <input type="text" name="celular" id="celular" class="form-control"  data-mask="(99)99999-9999">
                        </div>
                        <div class="form-group col-4 mt-2">
                            <label>Cidade:</label><br>
                            <input type="text" name="cidade" id="cidade" class="form-control" >
                        </div>
                        <div class="form-group col-4 mt-2">
                            <label>Bairro/Povoado:</label><br>
                            <input type="text" name="bairro_povoado" id="bairro_povoado" class="form-control" >
                        </div>
                    </div>
                    <div class="mt-2">
                        <input type="submit" value="Salvar" class="btn btn-primary float-end">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection