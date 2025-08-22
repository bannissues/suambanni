<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 1</title>
</head>
<body>
    <h1>student's grades</h1>

    <!--formulário com método post para calcular a média com o - tambem - método post no PHP -->
    <form action="" method="post">
        <label for="name">student's name: </label>
        <input type="text" name="name" id="name">
<br>
<h1>---------------------------------</h1>
<br>
        <label for="grade1">exam grade: </label>
        <input type="text" step="0.01" name="grade1" id="grade1">
<br>
<h1>---------------------------------</h1>
<br>
        <label for="grade2">second exam grade: </label>
        <input type="text" step="0.01" name="grade2" id="grade2">
<br>
<h1>---------------------------------</h1>
<br>
        <input type="submit" value="what's my average? "></label>
    </form>

<?php 

//verifica se o formulario foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $grade1 = $_POST["grade1"];
    $grade2 = $_POST["grade2"];

    //calcula a média
    $media = ($grade1 + $grade2) / 2;

    //exibe o resulado
    echo "<h2>resultado: </h2>";
    echo "student: <strong>$name</strong><br>";
    echo "media: <strong>$media</strong>";
}

/*
//readline espera um valor e atribui à variável
$name = readline("type your name: ");
$grade1 = readline("exam grade: ");
$grade2 = readline("second exam grade: ");

$media = ($grade1 + $grade2) / 2;
//as aspas simples mostram exatamente o que foi escrito, já as aspas normais mostram textos separados de variáveis
echo "your media is $media";
*/

?>

</body>
</html>