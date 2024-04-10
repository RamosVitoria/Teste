<!--GET VEM DA URL-->
<!--POST VEM DO FORMULÁRIO-->
<html>
    <head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width", initial-scale="1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<title>TURMA 254</title>
<!-----------------------------ESTILO CSS CLASSE SIMEI------------------------------------------->
<style>
    *  {
        font-family: 'Times New Roman', cursive;
    }

.SIMEI{
    font-size:18px;
    font-weight:bold;
    color:gray !important;

}
</style>

    </head>
<body>
   <!--nav class="navbar  navbar-expand-lg navbar-dark bg-info fixed-top"-->
   <nav class="navbar  navbar-expand-lg navbar-dark fixed-top" style="background-color:#ffbdbd">
    <a class="navbar-brand" href= "#"><img src="img/logologo254.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
     aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="ALTERNA NAVEGAÇÃO" data-target="#GB">
        <span class="navbar-toggler-icon"></span>
</button>

    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="GB">
    <ul class="navbar-nav">
        <li class="nav-item mr-2 ml-3">
        <a class = "nav-link SIMEI" href="?pagina=home">HOME<span class  = "sr-only"></span></a>
        </li>
        <li class="nav-item mr-2 ml-3">
        <a class = "nav-link SIMEI" href="?pagina=logar">LOGAR<span class  = "sr-only"></span></a>
        </li>
        <li class="nav-item mr-2 ml-3">
        <a class = "nav-link SIMEI" href="?pagina=envio">ENVIO DE ARQUIVOS<span class  = "sr-only"></span></a>
        </li>
        <li class="nav-item dropdown mr-2 ml-3">
        <a class = "nav-link SIMEI" dropdown-toggle href="#" 
        id="NavBarDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            DISCIPLINAS</a>
        <div style="background-color:#FFFF00" class= "dropdown-menu navbar-light" aria-labelledby="NavBarDrop">
            <a class= "dropdown-item SIMEI" href="?pagina=matematica">MATEMÁTICA</a> 
            <a class= "dropdown-item SIMEI" href="?pagina=portugues">PORTUGUÊS</a> 
            <a class= "dropdown-item SIMEI" href="?pagina=geografia">GEOGRAFIA</a> 
</div>
        </li>
    </ul>
    </div>
   </nav>
  
  <?php
    if(!isset($_GET['pagina'])){
        include("views/home.php");
    }else{
        $pagina= $_GET['pagina'];
        switch ($pagina) {
            case "logar";
            include("views/logar.php");
            break;
            case "home";
            include("views/home.php");
            break;
            case "receber";
            include("views/recebe_login.php");
            break;
            case "envio";
            include("views/envio.php");
            break;
            case "matematica";
            include("views/matematica.php");
            break;
            case "portugues";
            include("views/portugues.php");
            break;
            case "geografia";
            include("views/geografia.php");
            break;
            default:
            include("views/erro.php");
    
        }
    
    }
   ?>

</body> 
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</html>