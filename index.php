<?php
	include('./dados/dados.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Vovó Benedita doces caseiros</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="bg-warning" style="--bs-bg-opacity: .5;"> 
                    <!-- img src="./images/logo.png" height="150" alt="Doces Vovó Benedita" title="Doces Vovó Benedita" -->
                    <nav>
                        <ul class="nav justify-content-center text-white" >
                            <li class="nav-item">
                                <a class="nav-link active text-white" href="./index.php?p=produtos">Nossos Doces</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="./index.php?p=quem_somos">Quem Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="./index.php?p=contato">Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="./index.php?p=localizacao">Localização</a>
                            </li>
                            </ul>               
                    </nav>   
                </header>
            </div>
        </div>
        <div class="row" style="padding-top: 30px;">
            <div class="col-12">
                <main>
                    <h1 class="text-center"><small><?=$quem_somos["empresa"];?></small></h1>
                        <?php
                            $valor = @$_GET['p'];
                            switch ($valor) {
                                case "quem_somos": require_once './pages/quem_somos.php'; break;
                                case "contato": require_once './pages/contato.php'; break;
                                case "localizacao": require_once './pages/localizacao.php'; break;
                                case "produtos": require_once './pages/produtos.php'; break;
                                default: require_once './pages/produtos.php'; break;
                            }
                        ?>
                </main>
            </div>
        </div>       
        <div class="row" style="padding-top: 30px;">
            <div class="col-12 bg-warning" style="--bs-bg-opacity: .1;">
                <footer>
                    <p class="text-center">Rony Figueredo Corrêa RA 21158105-5</p>
                </footer>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
    </div>
    
</body>
</html>