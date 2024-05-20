<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <title>Crack Games</title>
    
    <base href="http://localhost/CrackGames/api/">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body> 

<nav class="navbar navbar-expand-lg bg-body-tertiary"  id="navbar" data-aos="fade-down" data-aos-duration="500" data-aos-easing="ease-out">

    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">
    <img src="imagens/logo.png" alt=" Crack games" title="crack games">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contato">CRIADORES</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                JOGOS
            </a>
            <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="goldenapple">Em Busca Da Golden Apple</a></li>
                <li><a class="dropdown-item" href="#">monster-hunter</a></li>
                <li><a class="dropdown-item" href="#">euro truck</a></li>
                <li><a class="dropdown-item" href="call">ECall of Duty MWII</a></li>
                <li><a class="dropdown-item" href="cs">Counter Strike 2</a></li>
                <li><a class="dropdown-item" href="gta">GTA-V</a></li>
                <li><a class="dropdown-item" href="elder">Elder Ring</a></li>
            </ul>
            </li>
        </ul>
       <a href="login" class="btn btn-warning">
        <strong>LOGIN</strong>
       </a>
        </div>
    </div>
</nav>



<main>
        
    <?php

        if (isset($_GET["param"])) {
            $param = $_GET["param"];  
            // serapar o parametro por /
            $p = explode("/", $param);
            //print_r($p);
        }

        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? NULL;

        if ($page == "jogo") {
            $pagina = "jogo/{$jogo}.php";

        } else {
            $pagina = "paginas/{$page}.php";
        }   
        
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }

    ?>
    
    </main>

    <footer class="footer">
        <h2 class="text-footer">Contato</h2>
        <div class="links">
        <a href="https://www.instagram.com/lucas__pedrozo?igsh=ZndteTJiaTB4OTZu">
            <i class="bi bi-instagram"></i>
        </a>
        <a href="index.php">
        <i class="bi bi-github"></i>
        </a>
        <a href="https://wa.me/qr/OGED4XU6THFTB1">
        <i class="bi bi-whatsapp"></i>
        </a>
        </div>
    </footer>

    <!--codigos javascript-->

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

</body>
</html>