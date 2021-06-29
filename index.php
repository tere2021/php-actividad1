<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Actividad</title>
</head>
<body>
<?php   

    $alumnos = [
        "Nombre" =>"Maria",
        "Apellido" =>"Leguizamon",
        "Edad" =>"50",
        "Hobbie" =>"running",
        "Editor de código preferido" =>  "Visual Studio Code",
        "Sistema operativo que utiliza" => "Windows 8"
    ];
   
    foreach ($alumnos as $clave => $valor){
        echo $clave .": " . $valor . "<br>";  
    }
    
    ?>
</body>
</html>