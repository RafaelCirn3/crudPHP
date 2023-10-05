<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cadastre sua amoeba</title>
</head>
<body style="background-color: #87CEEB;">
    <nav style="background-color:greenyellow;" class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=novo">Nova Amoeba</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Amoebas Registradas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("config.php");
                    switch (@$_REQUEST["page"]) {
                        case "novo":
                            include("registrar.php");
                            break;
                        case "listar":
                            include("listar.php");
                            break;
                        case "salvar":
                            include("salvar.php");
                        case "editar":
                            include("editar.php");
                        default:
                            print("<h1>Liste suas amoebas</h1>");
                            print("<h5>Aceitamos Amoebas de qualquer marca seja Play-doh, Kimeleka, Leleca e demais.</h5>");
                    }
                ?>
            </div>
        </div>
    </div>
    <div style="display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; " class="centered-image">
        <img src="./gosma.png" alt="Imagem Centralizada">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
