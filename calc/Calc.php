<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABUADA</title>
    <link href=css/Calc.css rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type="text/css">
        body {
            background-image: url(https://miro.medium.com/v2/resize:fit:1358/0*AU3rmB08Vntf33Is);
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;  
        }
        .insercao_valor {
            color: azure;
        }
        .resultado {
            color: azure;
            text-align: center;
        }
        .tome {
            margin-top: 20%;
            margin-right: 20%;
            margin-left: 20%;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
                </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    </nav>
    <div class="tome">
    <div class="insercao_valor";>
        <h1>Insira o valor:</h1>
        <form class="calculo" method="POST">
            <label for="insira_valor" class="form-label"></label>
            <input type="number" name="valor_inserido"><br>
            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </div>
    <div class="callout">
        <p>teste</p>
    </div>
    <div class="resultado";>
    <?php
            try{
                $valor_inserido = filter_input(INPUT_POST, "valor_inserido");
                $valor = 0;
                if ($valor_inserido != null){
                    echo "<br> Tabuada do $valor_inserido";
                    for ($i=1; $i<=10; $i++){
                        $valor = $valor + 1;
                        $resultado = $valor_inserido * $valor;
                        echo "<br> $valor_inserido X $valor = $resultado";
                    }
                }
                else {
                    echo "<br> Insira um valor.";
                }
            }catch(Exception $e){
                echo" ";
            }
    ?>
    </div>
    </div>
</body>
</html>