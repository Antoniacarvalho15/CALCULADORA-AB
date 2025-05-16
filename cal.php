<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(255, 125, 246);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
            color: #444;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color:rgb(90, 228, 97);
        }

        h2, h3 {
            color: #333;
            text-align: center;
        }

        .resultado {
            margin-top: 20px;
            background-color: #eafaf1;
            padding: 15px;
            border: 1px solid #b2dfdb;
            border-radius: 6px;
        }
    </style>
</head>

<body>
    <form method="post">
        <h1>Calculadora</h1>

        <label for="numero1">Digite o primeiro número</label><br>
        <input type="text" id="numero1" name="numero1" required><br>

        <label for="numero2">Digite o segundo número</label><br>
        <input type="text" id="numero2" name="numero2" required><br>

        <label for="op">Escolha a operação</label><br>
        <select id="op" name="op">
            <option value="+">SOMA</option>
            <option value="-">SUBTRAIR</option>
            <option value="*">MULTIPLICAR</option>
            <option value="/">DIVIDIR</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>

   <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n1 = (float) $_POST['numero1'];
    $n2 = (float) $_POST['numero2'];
    $op = $_POST['op'];

    $resultado = '';
    $titulo = '';
    $erro = '';

    switch ($op) {
        case "+":
            $titulo = "Soma";
            $resultado = $n1 + $n2;
            break;
        case "-":
            $titulo = "Subtração";
            $resultado = $n1 - $n2;
            break;
        case "*":
            $titulo = "Multiplicação";
            $resultado = $n1 * $n2;
            break;
        case "/":
            $titulo = "Divisão";
            if ($n2 != 0) {
                $resultado = $n1 / $n2;
            } else {
                $erro = "Erro: divisão por zero.";
            }
            break;
        default:
            $erro = "Operação inválida.";
    }

    echo '<div class="resultado">';
    if ($erro) {
        echo "<p>$erro</p>";
    } else {
        echo "<h2>$titulo</h2>";
        echo "<p><strong>Número 1:</strong> $n1</p>";
        echo "<p><strong>Número 2:</strong> $n2</p>";
        echo "<p><strong>Operação:</strong> $op</p>";
        echo "<p><strong>Resultado:</strong> $resultado</p>";
    }
    echo '</div>';
}
?>

</body>
</html>