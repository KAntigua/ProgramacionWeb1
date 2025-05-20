<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(166, 255, 178);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .calculadora {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }

        input, select {
            padding: 8px;
            margin: 10px 0;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .resultado {
            margin-top: 15px;
            font-weight: bold;
            color: green;
        }

        .error {
            margin-top: 15px;
            font-weight: bold;
            color: red;
        }

        .menu {
    margin-top: 20px;
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
    </style>
</head>
<body>
    <div class="calculadora">
        <h2>Calculadora Básica</h2>
        <form method="POST">
            <input type="number" name="num1" placeholder="Numero 1" required>
            <input type="number" name="num2" placeholder="Numero 2" required>
            
            <select name="operacion" required>
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>

            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $num1 = floatval($_POST["num1"]);
            $num2 = floatval($_POST["num2"]);
            $operacion = $_POST["operacion"];

            switch ($operacion) {
                case "sumar":
                    $resultado = $num1 + $num2;
                    echo "<div class='resultado'>Resultado: $resultado</div>";
                    break;
                case "restar":
                    $resultado = $num1 - $num2;
                    echo "<div class='resultado'>Resultado: $resultado</div>";
                    break;
                case "multiplicar":
                    $resultado = $num1 * $num2;
                    echo "<div class='resultado'>Resultado: $resultado</div>";
                    break;
                case "dividir":
                    if ($num2 == 0) {
                        echo "<div class='error'>Error: No se puede dividir entre cero.</div>";
                    } else {
                        $resultado = $num1 / $num2;
                        echo "<div class='resultado'>Resultado: $resultado</div>";
                    }
                    break;
                default:
                    echo "<div class='error'>La operación no es valida.</div>";
                    break;
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