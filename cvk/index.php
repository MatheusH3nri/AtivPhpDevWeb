
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

    <h3> Calculadora </h3>
    <form action="index.php" method="get">
      <label> Num 1 </label> <br>
      <input type="text" name="num1"> <br>
      <label> Num 2 </label> <br>
      <input type="text" name="num2"> <br> <br>
      <input type="submit" value="Enviar">
    </form>
   
    <?php
    if($_GET){
    $num1= $_GET['num1'];
    $num2= $_GET['num2'];
    echo "A soma é: ".$num1 + $num2;    
    }
    ?>

    <h3> Pessoa Idade </h3>
    <form action="index.php" method="post">
      <label> Informe o nome </label> <br>
      <input type="text" name="nome"> <br>
      <label> Informe o ano de nascimento </label> <br>
      <input type="text" name="ano_nascimento"> <br> <br>
      <input type="submit" value="Enviar">
    </form>

    <?php
    if($_POST){
    $nome= $_POST['nome'];
    $ano= $_POST['ano_nascimento'];

    $idade= 2023- $ano;
    echo "<p> Ano: $ano. Olá $nome sua idade é: $idade  </p>";

    if($idade>=18){
         echo "É de maior";
    }
    else{
      echo "É de menor";
    }

      $vetor = ['Uno', 'Camaro', 'Fusca', 'Fiesta'];
      for($i=0; $i< count($vetor); $i++){
          echo $vetor[$i]. '<br>';
      }

      echo '<br>';
      foreach($vetor as $item){
        echo $item. '<br>';
      }
      echo '<br>';

      $count=0;
      while($count <count($vetor)){
        echo $vetor[$count]. '<br>';
        $count++;
      }

      $notas =["João" =>10, "Maria" => 8, "Chica" => 5, "Chaves"=> 3, "Kiko"=> 7];

      foreach($notas as $key => $valor){
        if($valor >=6){
          echo "aprovado".$key. "Nota: ". $valor. '<br>';
        }
      }
    }
      $data_atual = date('d/m/Y');
      echo $data_atual. '<br>';
?>
  <?php  
    include "data.inc.php"; 
  ?>
  </body>
</html>