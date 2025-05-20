<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Adivina el Número</title>
    <style>
        body {
            background-color: #c2fdd1;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 60px;
        }
        .contenedor {
            background-color: white;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px #aaa;
        }
        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            width: 80px;
        }
        button {
            padding: 10px 20px;
            margin-top: 10px;
            font-size: 16px;
        }
        .correcto {
            color: green;
            font-weight: bold;
        }
        .incorrecto {
            color: red;
            font-weight: bold;
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

<div class="contenedor">
    <h2> Adivina el Numero (1 al 5)</h2>

    <form method="post">
        <input type="number" name="numero" min="1" max="5" required>
        <br>
        <button type="submit">Probar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = intval($_POST["numero"]);
        $aleatorio = rand(1, 5);

        if ($usuario === $aleatorio) {
            echo "<p class='correcto'>Felicidades, adivinaste el numero</p>";
        } else {
            echo "<p class='incorrecto'>Perdiste, el número correcto era <strong>$aleatorio</strong>.</p>";
        }
    }
    ?>
    <div class="menu">
     <ul>
         <li>
            <a href="index.php">Volver al Menu</a>
         </li>

    </ul>
</div>

</body>
</html>