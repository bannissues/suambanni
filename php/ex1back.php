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