<?php

class App
  

{
    public $name;
    public $apellido;
    public $student;
    public $module;
    public $teacher;

    
  public function __construct($name = "Aplicación PHP")
  {
    echo "Construyendo la app <hr>";
    $this->name = $name;
    $this->module = "Desarrollo Web en Entorno Servidor";
    $this->teacher = "Rafael Cabeza";
    $this->student = "Fulano De Tal";
  }

  public function run()
  {
    if (isset($_GET['method'])) {
        $method = $_GET['method'];
      } else {
        $method = 'index';
      }
      $this->$method();
    
  }

  public function fibonaci() {
    $validacion = false;
    $listaFibo = [0,1];
    $fiboarray = [0,1];
    for($i= 2; !$validacion; $i++){   
        $fiboarray[$i] = $fiboarray[$i-1] + $fiboarray[$i-2];
            if($fiboarray[$i] > 1000000){
                $validacion = true;
            }else{
                $listaFibo[] = $fiboarray[$i];
            }   
    }  
    include('views/fibonaci.php'); 
  }

  public function exponencial(){
    

            $resultado = [];
            $base = 2;
            for($i = 2; $i<25; $i++){
                $numero = 1;
                for($x = 1; $x<=$i; $x++){
                    $numero =  $numero * $base;
                }
                $resultado[] = " Dos eleveado al ".($i)." resultado ".$numero;
            }  
    include('views/exponencial.php');  
  }

  public function primos(){
    $cuenta = 0;
    $primos = [];
            for($i = 2; $i< 10000; $i++){
                $cuenta = 0;
                for( $x = $i; $x>0; $x--){
                    if(($x<$i) && ($i%$x==0)){
                        $cuenta++;
                    }
                }
                if($cuenta <=1){
                    $primos[] = $i;                  
                }               
            }
    include('views/primos.php');
  }

  public function factorial(){
    $validacion = false;
    $factoriales = [];
    for($i = 2; !$validacion; $i++){
      $resultado = $i;
      for($x = $i-1; $x >0; $x--){
        $resultado = $resultado * $x;
      }
      if($resultado>1000000){
        $validacion = true;
      }else{
        $factoriales[] = "El factorial de ".$i." es = ".$resultado;
      }

    }
    include('views/factorial.php');
  }

  public function fizzBuzz(){
    $listaFizzBuzz = [];
    for($i = 1; $i<101; $i++){
      if($i%3 == 0){
        $numero = "fizz";
      }elseif($i%5==0){
        $numero = "buzz";
      }elseif(($i%3 == 0) &&($i%5==0)){
        $numero = "fizzbuzz";   
      }else{
        $numero = $i;
      }
      $listaFizzBuzz[] = $numero;
    }

    include('views/fizzbuzz.php');
  }

  public function anagrama1(){
    
    
    $resultado="No son anagramas";
    $palabra1 = '';
    $palabra2 = '';
    $coincidencias = 0;  
    $resultado = "";
    if(isset($_GET['palabra1'])) {
      $palabra1 = $_GET['palabra1'];
    }
    if(isset($_GET['palabra2'])){
      $palabra2 = $_GET['palabra2'];
    }
    if(strlen($palabra1) == strlen($palabra2)){
      $arr1 = str_split($palabra1);
      $arr2 = str_split($palabra2);
      $coincidencias;

      for($i = 0;$i<count($arr1);$i++){
        $repetividad = false;
        while(!$repetividad){
          for($x = 0;$x<count($arr2);$x++){
            if($arr1[$i] == $arr2[$x]){
              $coincidencias++;
              unset($arr2[$x]);
              $repetividad = true;   
            }
            //rama y amor || a
          }
        }  
      }
      if($coincidencias == count($arr1)){
        $resultado="Si son anagramas";
      }
    }
    include('views/anagrama.php');
  }

  public function index()
  {
    include('views/index.php');
    
  }

  public function login()
  {
    echo "Ahora podría mostrar un formulario de login <br>";
  }  

  public function setApellido($apellido){
    $this->apellido = $apellido;
  }


  public function anagrama() {
    // Si no se han enviado las palabras, solo mostramos el formulario.
    if (!isset($_GET['palabra1']) || !isset($_GET['palabra2'])) {
        include('views/anagrama.php');
        return;  // Salimos de la función para no procesar la lógica
    }

    $palabra1 = $_GET['palabra1'];
    $palabra2 = $_GET['palabra2'];

    // Verificamos si las palabras tienen la misma longitud
    if (strlen($palabra1) !== strlen($palabra2)) {
        $resultado = "No son anagramas (las palabras tienen diferente longitud)";
        include('views/anagrama.php');
        return;
    }

    // Convertimos las palabras en arrays
    $arr1 = str_split($palabra1);
    $arr2 = str_split($palabra2);

    // Ordenamos ambos arrays para comparar de manera sencilla
    sort($arr1);
    sort($arr2);

    // Si los arrays ordenados son iguales, las palabras son anagramas
    if ($arr1 === $arr2) {
        $resultado = "Sí son anagramas";
    } else {
        $resultado = "No son anagramas";
    }

    // Mostramos el formulario nuevamente junto con el resultado
    include('views/anagrama.php');
}



public function poligonos(){
  if(!isset($_GET['alto']) || !isset($_GET['largo']) || !isset($_GET['figura'])){
    include('views/poligonos.php'); 
    return;
  }
  $alto = $_GET['alto'];
  $largo = $_GET['largo'];
  $figura = $_GET['figura'];
  

  if (!is_numeric($alto) || !is_numeric($largo) || $alto <= 0 || $largo <= 0) {
    include('views/poligonos.php');
    return; 
  }

  
  $area = 0;
  if($figura == "cuadrado"){
    $area = $alto * $alto;
  }elseif($figura == "rectangulo"){
    $area = $alto * $largo;
  }elseif($figura == "triangulo"){
    $area = ($alto * $largo) / 2;
  }else{
    return;
  }

  include('views/poligonos.php');
}

public function invertirCadenas(){
  
  if(!isset($_GET['cadena']) || empty($_GET['cadena'])) {
    include('views/invertircadenas.php'); 
    return;
  }
  $cadena = $_GET['cadena'];
  $cadenaInvertida = [];
  $cadenaArray = str_split($cadena);

    for($i = count($cadenaArray) -1;$i >= 0; $i--){
      $cadenaInvertida[]= $cadenaArray[$i];
    }
    include('views/invertircadenas.php');
  }
 
public function repeticionPalabras(){
  if(!isset($_GET['texto']) || empty($_GET['texto'])){
    include('views/repeticionpalabras.php'); 
    return;
  }

  $texto = $_GET['texto'];
  $textoArray = str_split($texto);
  $arrayDefinitivo = [];
  $palabra = "";
  $listaFinal = [];
  $listaVerificacion =["-"];

  for($i = 0; $i <count($textoArray);$i++){
    $signo = false;
    while(!$signo){
      if($textoArray[$i]=="," || $textoArray[$i]==";"||$textoArray[$i]=="."||$textoArray[$i]==" "){
        if($palabra == ""){
          $signo = true;
        }

        $arrayDefinitivo[] = $palabra;
        $palabra = "";
        $signo = true;
      }else{
        $palabra = $palabra.$textoArray[$i];
        $signo = true;
      }
      if($i == count($textoArray) -1){
        $arrayDefinitivo[] = $palabra;
        $palabra = "";
        $signo = true;

      }
    }
  }
  for($i = 0; $i <count($arrayDefinitivo);$i++){
    $cuenta = 0;
    for($x = 0; $x <count($arrayDefinitivo);$x++){
      if($arrayDefinitivo[$i] == $arrayDefinitivo[$x]){
        $cuenta = $cuenta + 1;
      }

    }
    $cuentaFinal = 0;
    foreach($listaVerificacion as $elemento){
        if($elemento == $arrayDefinitivo[$i]){
          $cuentaFinal++;
        }
    }
    if($cuentaFinal<1){
      $listaVerificacion[] = $arrayDefinitivo[$i];
      $listaFinal[$arrayDefinitivo[$i]] = $cuenta -1;
    }
  }

  include('views/repeticionpalabras.php');
}
}




