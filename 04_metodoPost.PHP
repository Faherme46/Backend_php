<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digite la siguiente info:</h1>
    <br>
    <form action="04_metodoPost.php" method="post">
        Nombre: 
        <input type="text" name="nombre" id=""/>
        <br>
        Fecha: 
        <input type="date" name="fecha" id="">
        <br>
        <input type="submit" name="" value="enviar">
    </form>
    <br>
    <h2>la informacion enviada es</h2>
    <?PHP
    print_r($_POST);



    ?>

</body>
</html>