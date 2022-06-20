<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alípio Móveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/8b08510799.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="container-fluid d-flex align-items-center topo">
        <div class="container d-flex align-items-center">
            <div class="col-10">
                <a href="{{ route('home') }}"><img src="{{ asset('imagens/site_logo.png') }}" alt="" class="logo"></a>
            </div>
            <div class="col-2 text-center favoritos">
                <a href="{{ route('logout') }}" class="p-2 favoritos bg-black float-end"><i class="fa-solid fa-user"></i> Sair</a>
            </div>
        </div>
    </header>

    <nav id="" class="bg-site">
        <div class="container-fluid bg-black">
            <div class="container p-2">
                <form action="" method="post">
                    @csrf
                    <div class="row align-items-center">
                        <div class="form-group text-white col-3 align-items-center">
                            <h3>Buscar Produto</h3>
                        </div>
                        <div class="form-group text-white col-4">
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do produto">
                        </div>
                        <div class="form-group text-white col-1">
                            <input type="text" name="codigo" id="codigo" class="form-control" placeholder="Código">
                        </div>
                        <div class="form-group text-white col-2">
                            <input type="text" name="tipo_produto" id="tipo_produto" class="form-control" placeholder="Categoria">
                        </div>
                        <div class="form-group text-white col-1">
                            <input type="text" name="status" id="status" class="form-control" placeholder="Status">
                        </div>
                        <div class="form-group text-white col-1">
                            <input type="submit" value="Buscar" class="btn btn-primary float-end">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>

<div class="container">
    </div>
    @if(Session::has('success') && Session::get('success') != '')
    <div class="m-2 alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    @if(Session::has('error') && Session::get('error') != '')
    <div class="m-2 alert alert-warning">
        {{ Session::get('error') }}
    </div>
    @endif

    @if($errors->any())
    <div class="m-2 alert alert-warning">
        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

    
    @yield("conteudo")

    
    <footer class="bg-site rodape mt-3">
        <div class="direitos bg-site bg-black mt-2">
            <div class="copyright text-muted text-center p-2">
                &copy; Copyright <strong>Todos os direitos reservados.</strong>
            </div>
        </div>
    </footer>
</body>
</html>