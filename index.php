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
    <div class="container-md">
        <header>
            <h1 class="text-center"><small>Vovó Benedita doces Caseiros</small></h1>
            <nav class="nav" >
                    <a class="nav-link" href="./index.php?p=produtos">Nossos Doces</a>
                    <a class="nav-link" href="./index.php?p=quem_somos">Quem Somos</a>
                    <a class="nav-link" href="./index.php?p=contato">Contato</a>
                    <a class="nav-link" href="./index.php?p=localizacao">Localização</a>
            
            </nav>
        </header>

        <main>
            
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

        <footer>
            <p class="text-center">Rony Figueredo Corrêa RA 21158105-5</p>
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
    </div>
    
</body>
</html>