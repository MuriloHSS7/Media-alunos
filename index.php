 <!DOCTYPE html>
 <html>
    <header>
        <title>Média do aluno</title>
    </header>
    <body>
        <h1>Média de alunos</h1>
         <?php
            echo"Médias exibídas: <br><br>";
            $nota1 = 7;
            $nota2 = 7;
            $nota3 = 8;
            $nota4 = 6;
            echo"Nota 1: ". $nota1. "<br>";
            echo"Nota 2: ". $nota2. "<br>";
            echo"Nota 3: ". $nota3. "<br>";
            echo"Nota 4: ". $nota4. "<br>";
            echo"<br>";
            $resultado = ($nota1 + $nota2 + $nota3 + $nota4)/4;
            echo $resultado." é a média";
            if($resultado >= 7 && $resultado != 10){
                echo" e o aluno foi aprovado!";
            } elseif ($resultado == 0){
                echo"Estude mais, voce não acertou nada.";
            } elseif ($resultado == 10){
                echo"Parabéns! Aprovado com nota máxima.";
            } else {
                echo", e aluno foi reprovado.";
            }
         ?
    </body>
 </html>