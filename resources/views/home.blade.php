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

    <nav id="" class="bg-site">
        <div class="container-fluid bg-black">
            <div class="container navbar navbar-expand-sm">
                <ul class="navbar-nav container">
                    <div class=" col-5">
                        <li class="nav-item text-white"><a href="" class="text-white">Encontre uma Loja</a></li>
                    </div>
                    <div class=" col-7">
                        <li class="nav-item chama-zap float-end">Chama no zap <i class="fa-brands fa-whatsapp"></i> <a href=""class="text-white">Santo Antônio de Lisboa: (89) 98803-0539</a> <i class="fa-brands fa-whatsapp"></i> <a href="" class="text-white">São João da Canabrava: (89) 98812-4941</a></li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container conteudo">
        <div class="row p-3">
            <div class="col-2 produtos">
                <h3>Produtos</h3>
            </div>
            <div class="col-10">
                <h3>Novidades que chegaram para você</h3>
            </div>
        </div>
    </main>

    <footer class="bg-site rodape">
        <div class="container">
            <div class="row pt-2 justify-content-center td-info">
                <div class="horario col-5 text-center row">
                    <table>
                        <thead>
                            <b>Horário de Funcionamento</b>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="row">
                                    <div class="sal col-6">
                                        <ul class="navbar-nav">
                                            <li class="nav-item"><u><strong>Santo Antônio de Lisboa</strong></u></li>
                                            <li class="nav-item"><small>Segunda a sexta - 8:00 às 18:00</small></li>
                                            <li class="nav-item"><small>Sábado - 8:00 às 12:00</small></li>
                                            <li class="nav-item"><small>Domingo - 7:00 às 12:00</small></li></li>
                                        </ul>
                                    </div>
                                    <div class="sjc col-6">
                                        <ul class="navbar-nav">
                                            <li class="nav-item"><u><strong>São João da Canabrava</strong></u></li>
                                            <li class="nav-item"><small>Segunda a sexta - 7:30 às 17:30</small></li>
                                            <li class="nav-item"><small>Domingo - 7:00 às 11:30</small></li></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <tbody>
                    </table>
                </div>
                <div class="endereco col-5 text-center row">
                    <table>
                        <thead>
                            <b>Horário de Funcionamento</b>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="row">
                                    <div class="sal col-6">
                                        <ul class="navbar-nav">
                                            <li class="nav-item"><u><strong>Santo Antônio de Lisboa</strong></u></li>
                                            <li class="nav-item"><small>Avenida José Lopes da Silva, 570 - Centro</small></li><br>
                                        </ul>
                                    </div>
                                    <div class="sjc col-6">
                                        <ul class="navbar-nav">
                                            <li class="nav-item"><u><strong>São João da Canabrava</strong></u></li>
                                            <li class="nav-item"><small>Avenida São João Batista, 441 - Centro</small></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <tbody>
                    </table>
                </div>
                <div class="col-2 column text-center">
                    <div class="redes text-center row">
                        <table>
                            <thead>
                                <b>Contatos</b>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="row">
                                        <div class="whatsapp col-6 fs-3">
                                            <i class="fa-brands fa-whatsapp-square float-end"></i>
                                        </div>
                                        <div class="instagram col-6 fs-3">
                                            <i class="fa-brands fa-instagram-square float-start"></i>
                                        </div>
                                    </td>
                                </tr>
                            <tbody>
                        </table>
                    </div>
                    <div class="pagamento text-center row mt-2">
                        <table>
                            <thead>
                                <b>Formas de pagamento</b>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="row">
                                        <div class="carne col-4 text-center">
                                            <i class="fa-solid fa-pager fs-3"></i> <b><small>Carnê</small></b>
                                        </div>
                                        <div class="cartão col-5 text-center">
                                            <i class="fa-solid fa-credit-card fs-3"></i> <b><small>Cartão</small></b>
                                        </div>
                                        <div class="pix col-3 text-center">
                                            <i class="fa-brands fa-pix fs-3"></i> <b><small> Pix </small></b>
                                        </div>
                                    </td>
                                </tr>
                            <tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="direitos bg-site bg-black mt-2">
            <div class="copyright text-muted text-center p-2">
                &copy; Copyright <strong>Todos os direitos reservados.</strong>
            </div>
        </div>
    </footer>
</body>
</html>