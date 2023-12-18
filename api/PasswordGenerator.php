<?PHP


  if(isset($_POST['length'])){

    
     $length = intval($_POST['length']);
     $lowercase = isset($_POST['lowercase']);
     $uppercase = isset($_POST['uppercase']);
     $symbols = isset($_POST['symbols']);
     $numbers = isset($_POST['numbers']);

  

     $lowercase_chars = "abcdefghijklmnopqrstuvwxyz";
     $uppercase_chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
     $symbols_chars = "!@#$%¨&*()_+=";
     $numbers_chars = "0123456789";
     
     $password = "";
     $valid_options ="";

     if($lowercase){
      $valid_options .= $lowercase_chars;
     }
     if($uppercase){
      $valid_options .= $uppercase_chars;
     }
     if($symbols){
      $valid_options .= $symbols_chars;
     }
     if($numbers){
      $valid_options .= $numbers_chars;
     }

     for($k = 0;  $k < $length; $k++){
        $random_number = rand(0, strlen($valid_options)-1);
        $password .= $valid_options[$random_number];
     }
               
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>
</head>

<body>


    <?php if(isset($password)){ ?>
        <h4>Senha gerada</h4>
        <input type="text" readonly value="<?php echo $password ?>">
    <?php } ?> 
    
    <?php

if(!$lowercase && !$uppercase && !$symbols && !$numbers){
  echo 'Falhou em criar a senha, favor escolher um tipo de senha.';
 }
    
    
    
    ?>
    
   

   

    <form action="" method="POST">
        <p>
        <label for="">Tamanho da senha</label>
        <input type="number" min="8" required name="length" value="16">
        </p>
        <p>
        <label for="">Incluir letras minusculas</label>
        <input type="checkbox" checked value="1"  name="lowercase">
        </p>
        <p>
        <label for="">Incluir letras maiusculas</label>
        <input type="checkbox" checked value="1"  name="uppercase">
        </p>
        <p>
        <label for="">Incluir simbolos</label>
        <input type="checkbox" checked value="1"  name="symbols">
        </p>
        <p>
        <label for="">Incluir numeros</label>
        <input type="checkbox" checked value="1"  name="numbers">
        </p>
        <p>
          <button>Gerar!</button>
        </p>

    </form>


</body>

</html>