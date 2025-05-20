<?php
$nombre = "Karen";
$apellido = "Antigua";
$edad = 18;
$carrera = "Desarollo de software";
$universidad = "ITLA";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tarjeta</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-color:rgb(166, 255, 178);
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .tarjeta {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }
        h2 {
            margin-top: 40px;
            text-align: center;
        }

        .tarjeta {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
            width: 300px;
            text-align: left;
        }

        .menu ul {
    list-style: none;
    padding: 0;
}

.menu li {
    display: inline;
}

.menu a {
    text-decoration: none;
    color: white;
    background-color:rgb(236, 98, 174);
    padding: 8px 16px;
    border-radius: 6px;
    transition: background-color 0.3s ease;
}

.menu a:hover {
    background-color:rgb(236, 98, 174);
}

        .tarjeta p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h2>Informacion personal</h2>
    <p><strong>Nombre:</strong> <?php echo $nombre . " " . $apellido; ?></p>
    <p><strong>Edad:</strong> <?php echo $edad; ?></p>
    <p><strong>Carrera:</strong> <?php echo $carrera; ?></p>
    <p><strong>Universidad:</strong> <?php echo $universidad; ?></p>

    <?php
    if ($edad >= 18) {
        echo "<p style='color: green;'>Eres mayor de edad!</p>";
    } else {
        echo "<p style='color: red;'>Eres menor de....</p>";
    }
    ?>

<div class="menu">
     <ul>
         <li>
            <a href="index.php">Volver al Menu</a>
         </li>

    </ul>
</body>
</html>