<?php

if(!isset($_COOKIE["visitas"])){
    //El usuario entra por primera vez en la página
    
    setcookie("visitas", "1",time()+3600*24);
    echo "Página visitada por primera vez";
}elseif(isset($_COOKIE["visitas"]) && (!isset($_GET['reset']))){
    //El usuario ha entrado varias veces en la página
    $visitas = $_COOKIE["visitas"];
    $visitas++;
    setcookie("visitas", $visitas,time()+3600*24);
    echo"Página visitada ".$visitas." veces";
    

}elseif((isset($_COOKIE["visitas"])) && (isset($_GET['reset']))){
    if($_GET['reset']==true){
        setcookie("visitas", "0",time()-1);
        header('Location: /ejercicioMates/views/cookies.php');
   
    }
}
?>
<html>
    <head>

    </head>
    <body>
        <a href="cookies.php?reset=true">Reset</a>       
    </body>
</html>