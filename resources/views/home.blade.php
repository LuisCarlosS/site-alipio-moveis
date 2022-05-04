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
            <div class="col-3">
                <a href=""><img src="{{ asset('imagens/site_logo.png') }}" alt="" class="logo"></a>
            </div>
            <div class="col-6">
                <form action="" class="col-11">
                    <div class="input-group m-3">
                        <input type="text" class="form-control" placeholder="O que você está precisando?" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn text-secondary bg-white" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-1 text-center favoritos">
                <a href="" class="p-2 favoritos bg-black"><i class="fa-solid fa-heart"></i> Favoritos</a>
            </div>
            <div class="col-2 text-center favoritos">
                <a href="" class="p-2 favoritos bg-black"><i class="fa-solid fa-user"></i> Entre ou Cadastre-se</a>
            </div>
        </div>
    </header>
    <div id="header" class="bg-site">
        <div class="container-fluid bg-black">
            <nav class="container navbar navbar-expand-sm">
                <ul class="navbar-nav container">
                    <div class=" col-5">
                        <li class="nav-item text-white"><a href="" class="text-white">Encontre uma Loja</a></li>
                    </div>
                    <div class=" col-7">
                        <li class="nav-item chama-zap float-end">Chama no zap <i class="fa-brands fa-whatsapp"></i> <a href=""class="text-white">Santo Antônio de Lisboa: (89) 98803-0539</a> <i class="fa-brands fa-whatsapp"></i> <a href="" class="text-white">São João da Canabrava: (89) 98812-4941</a></li>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
    
</body>
</html>