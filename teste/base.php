<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <H1>Test</H1>
        <!-- Inicio do teste de php -->
        <?php 
            $cond = true;
            $array = ['Linha 1','Linha 2','Linha 3','Linha 4','Linha 5','Linha 6'];
            $txt1 = "Teste de foreach and Array";
            echo "<H2>" .$txt1. "</H2>";
            echo "<TABLE>";
            foreach( $array as $key => $value ) {
                echo "<TR>";
                echo "<TD>" .$value. "</TD>";
                echo "</TR>";
            }
            echo "</TABLE>";
        ?>
       <!-- Outro teste de php -->
       <?php if( $cond ): ?>
           <H3>Condição Verdadeira</H3>
       <?php else: ?>
           <H3>Condição Falsa</H3>
       <?php endif ?>
    </body>
</html>