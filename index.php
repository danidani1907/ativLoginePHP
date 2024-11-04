<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ingresso</title>
  
</head>
<body>
<body>
    <form class = "borda" method="POST">
        <label for="Nome">

        <p class = "p">Garanta seu Ingresso<p>
            <span>Nome</span>
        <br>
            <input type="text" id="Nome" name="Nome">
        </label>
        <br>
        <label for="email">
            <span>Email</span>
            <br>
            <input type="email" id="email" name="email">
        </label>
       
        </label>
        <br>
        <label for="tipo de ingresso">
            <span>Tipo de ingresso</span>
            <br>
    
            </select>
            <input type="radio" name=valor" id="">100,00R$
    <br>
<input type="radio" name="Remoto" id="">50,00 R$
    <br>
    <input type="radio" name="Hibrido" id="">20,00 R$
    <br>


   
        </label>
 


        <label for="idade">Digite sua idade:</label>
        <input type="number" name="idade" id="idade" required>
        <input type="submit" value="Verificar">
    <br>
        <input class= "enviar"  type="submit" value="login">
        </form>
        <br>
       
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST['idade'];

        if ($idade < 18) {
            echo "<p> voce é menor idade peça autorização para um responsavel</p>";

        } else {
                echo "<p> bem vindo</p>";
        }
    }

?>


</body>
</html>