@extends("admin.layoutadmin")
@section("conteudo")
    <main class="container conteudo">
        <div class="row pt-4">
            <div class="col-3 pe-4 produtos">
                <h4 class="mb-3">Cadastrar tipo de produto</h4>
                <form action="{{ route('produto.salvar-tipo') }}" method="post">
                    @csrf
                    <div class="column">
                        <div class="form-group">
                            <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Tipo de produto">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Salvar" class="btn btn-primary mt-3 float-end">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-9 ps-4">
                <h3 class="mb-3">Dados do produto</h3>
                <form action="{{ route('produto.salvar-produto') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group mb-2 col-9">
                            <label>Nome:</label><br>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                        <div class="form-group mb-2 col-3">
                            <label>Código:</label><br>
                            <input type="text" name="codigo" id="codigo" class="form-control">
                        </div>
                        <div class="form-group mb-2 col-4">
                            <label>Foto 1:</label><br>
                            <input type="file" name="foto1" id="foto1" class="form-control">
                        </div>
                        <div class="form-group mb-2 col-4">
                            <label>Foto 2:</label><br>
                            <input type="file" name="foto2" id="foto2" class="form-control">
                        </div>
                        <div class="form-group mb-2 col-4">
                            <label>Foto 3:</label><br>
                            <input type="file" name="foto3" id="foto3" class="form-control">
                        </div>
                        <div class="form-group mb-2 col-4">
                            <label>Foto 4:</label><br>
                            <input type="file" name="foto4" id="foto4" class="form-control">
                        </div>
                        <div class="form-group mb-2 col-4">
                            <label>Foto 5:</label><br>
                            <input type="file" name="foto5" id="foto5" class="form-control">
                        </div>
                        <div class="form-group mb-2 col-4">
                            <label>Foto 6:</label><br>
                            <input type="file" name="foto6" id="foto6" class="form-control">
                        </div>
                        <div class="form-group mb-2 col-12">
                            <label>Descrição:</label><br>
                            <textarea name="descricao" id="descricao" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-2 col-3">
                            <label>Marca:</label><br>
                            <input type="text" name="marca" id="marca" class="form-control">
                        </div>
                        <div class="form-group mb-2 col-3">
                            <label>Categoria:</label><br>
                            <select name="tipo_produto_id" id="tipo_produto_id" class="form-control">
                                <option value=""></option>
                                @if(isset($listaTipos))
                                    @foreach($listaTipos as $tipo_produtos)
                                    <option value="{{ $tipo_produtos->id }}">{{ $tipo_produtos->tipo }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group mb-3 col-3">
                            <label>Status:</label><br>
                            <select name="status" id="status" class="form-control">
                                <option value=""></option>
                                <option value="publico">Público</option>
                                <option value="rascunho">Rascunho</option>
                            </select>
                        </div>
                        <div class="form-group mb-2 col-3">
                            <label>Data da postagem:</label><br>
                            <input type="date" name="dt_postagem" id="dt_postagem" class="form-control">
                        </div>
                    </div>
                    <input type="submit" value="Salvar" class="btn btn-primary float-end">
                </form>
            </div>
        </div>
    </main>
@endsection