<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <title>Calculadora da Mari</title>
        <meta charset = "UTF-8">
    </head>

    <h1>Calculadora em PHP</h1>
    <body>

      <?php

       if ($_SERVER["REQUEST_METHOD"] == "POST"){
         $x = $_POST['x'];
         $y = $_POST['y'];
         $op =$_POST['operacao'];
         $z = [];
       }

       ?>

      <form action="calcular.php" method="post">
        <table border="1">
          <tr>
              <td>Digite o primeiro valor:</td>
              <td><input name="x" type="text" /></td>
          </tr>
          <tr>
              <td>Digite o segundo valor:</td>
              <td><input name="y" type="text" /></td>
          </tr>
          <tr>
            <td>Operacao:</td>
            <td><input name="operacao" type="text" /></td>
          </tr>
        </table>
              <input value="Calcular" type="submit"/>

      </form>

      <?php

          if($op == "+"){
              $z = $x + $y;
              echo "Seu resultado é: $z";}

          else if($op == "-"){
              $z = $x - $y;
            echo "Seu resultado é: $z";}

          else if($op == "x"){
              $z = $x*$y;
            echo "Seu resultado é: $z";}

          else if($op == "/"){
              $z = $x/$y;
            echo "Seu resultado é: $z";}

          else if ($op != NULL)
            echo "Operador invalido!";
        ?>


    </body>


</html>
