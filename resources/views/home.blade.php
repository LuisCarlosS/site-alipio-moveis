@extends("layout")
@section("conteudo")
    <main class="container conteudo">
        <div class="row p-3">
            <div class="col-2 produtos">
                <h3>Produtos</h3>
                <ul>
                @if(isset($listaTipos))
                    @foreach($listaTipos as $tipo_produtos)
                        <a href=""><li>{{ $tipo_produtos->tipo }}</li></a>
                    @endforeach
                @endif
                </ul>
            </div>
            <div class="col-10 container-fluid novidades">
                <div class="titulo">
                    <h3>Novidades que chegaram para você</h3>
                </div>
                <div class="itens row ms-3 mt-4">
                    <div class="col-2">
                        <div class="card mb-3">
                            <div class="card-img p-1">
                                <img src="imagens/1075.jpg" alt="image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="d-flex flex-row align-items-end">
                                        <span>FOGÃO MÔNACO 5 BOCAS ATLAS</span>
                                    </div>
                                </h5>
                                <a href="" class="card-link">Detalhes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="card mb-3">
                            <div class="card-img p-1">
                                <img src="imagens/1075.jpg" alt="image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="d-flex flex-row align-items-end">
                                        <span>FOGÃO MÔNACO 5 BOCAS ATLAS</span>
                                    </div>
                                </h5>
                                <a href="" class="card-link">Detalhes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="card mb-3">
                            <div class="card-img p-1">
                                <img src="imagens/1075.jpg" alt="image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="d-flex flex-row align-items-end">
                                        <span>FOGÃO MÔNACO 5 BOCAS ATLAS</span>
                                    </div>
                                </h5>
                                <a href="" class="card-link">Detalhes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="card mb-3">
                            <div class="card-img p-1">
                                <img src="imagens/1075.jpg" alt="image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="d-flex flex-row align-items-end">
                                        <span>FOGÃO MÔNACO 5 BOCAS ATLAS</span>
                                    </div>
                                </h5>
                                <a href="" class="card-link">Detalhes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="card mb-3">
                            <div class="card-img p-1">
                                <img src="imagens/1075.jpg" alt="image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="d-flex flex-row align-items-end">
                                        <span>FOGÃO MÔNACO 5 BOCAS ATLAS</span>
                                    </div>
                                </h5>
                                <a href="" class="card-link">Detalhes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="card mb-3">
                            <div class="card-img p-1">
                                <img src="imagens/1075.jpg" alt="image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="d-flex flex-row align-items-end">
                                        <span>FOGÃO MÔNACO 5 BOCAS ATLAS</span>
                                    </div>
                                </h5>
                                <a href="" class="card-link">Detalhes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="card mb-3">
                            <div class="card-img p-1">
                                <img src="imagens/1075.jpg" alt="image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="d-flex flex-row align-items-end">
                                        <span>FOGÃO MÔNACO 5 BOCAS ATLAS</span>
                                    </div>
                                </h5>
                                <a href="" class="card-link">Detalhes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="card mb-3">
                            <div class="card-img p-1">
                                <img src="imagens/1075.jpg" alt="image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="d-flex flex-row align-items-end">
                                        <span>FOGÃO MÔNACO 5 BOCAS ATLAS</span>
                                    </div>
                                </h5>
                                <a href="" class="card-link">Detalhes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="card mb-3">
                            <div class="card-img p-1">
                                <img src="imagens/1075.jpg" alt="image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="d-flex flex-row align-items-end">
                                        <span>FOGÃO MÔNACO 5 BOCAS ATLAS</span>
                                    </div>
                                </h5>
                                <a href="" class="card-link">Detalhes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="card mb-3">
                            <div class="card-img p-1">
                                <img src="imagens/1075.jpg" alt="image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="d-flex flex-row align-items-end">
                                        <span>FOGÃO MÔNACO 5 BOCAS ATLAS</span>
                                    </div>
                                </h5>
                                <a href="" class="card-link">Detalhes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="card mb-3">
                            <div class="card-img p-1">
                                <img src="imagens/1075.jpg" alt="image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="d-flex flex-row align-items-end">
                                        <span>FOGÃO MÔNACO 5 BOCAS ATLAS</span>
                                    </div>
                                </h5>
                                <a href="" class="card-link">Detalhes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="card mb-3">
                            <div class="card-img p-1">
                                <img src="imagens/1075.jpg" alt="image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="d-flex flex-row align-items-end">
                                        <span>FOGÃO MÔNACO 5 BOCAS ATLAS</span>
                                    </div>
                                </h5>
                                <a href="" class="card-link">Detalhes</a>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </main>
@endsection

    