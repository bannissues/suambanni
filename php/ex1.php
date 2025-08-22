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
    <form action="ex1back.php" method="post">
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

</body>
</html>