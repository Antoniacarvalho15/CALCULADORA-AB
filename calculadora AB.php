<body>

<form action="receber.php" method="POST">
<h2>Calculadora</h2> 
<label for="nome">Digite o Primeiro Numero: </label><br>
<input type="text" id="numero1" name="numero1" required> <br>
<label for="email">Digite o Segundo Numero</label><br>
<input type="text" id="numero2" name="numero2" required><br>                                                            
<input type="text" id="numero2" name="numero2" required><br>                                                            
<label for="operacoes">Escolha a Operação</label><br>
<select id="op" name="op">
<option value="+">SOMA</option>
<option value="-">SUBTRAIR</option>
<option value="*">MULTIPLICAR</option>
<option value="/">DIVIDIR</option>
</select><br><br>
<button type="submit">Calcular</button> 
<button type="submit">Calcular</button> 
</form>
<?php
$n1 = $_POST['numero1'];
$n2 = $_POST['numero2'];
$op = $_POST['op'];
if ($op == "*")
echo "<h1>MULTIPLICAÇÃO</H1>";
echo RESULTADO DA MULTIPLICAÇÃO ".$n1 MULTIPLICAÇÃO ".$n1 * $n2."<br>";
if($op == "+")
