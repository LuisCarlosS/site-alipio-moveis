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
            <div class="col-10">
                <h3>Novidades que chegaram para você</h3>
            </div>
        </div>
    </main>
@endsection

    