<html>

<head>
<meta charset="UTF-8">
<title>Exemplo PHP</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "44.204.26.95";
$username = "root";
$password = "capivara12345";
$database = "meubanco";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(100, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$valor_rand3 = strtoupper(substr(str_shuffle('ABCADEOFGAHAEIOSCPRMNEIJICELMORAEIONMIAOPSORQAEIOREOSTNPSLUVWACXMSOIYZ'),>
$host_name = gethostname();

$query = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES ('$valor_rand1' , '$valor_rand3', '$valor_rand3', '$valor_rand2', '$valor_rand3', $host_name)";

if ($link->query($query) === TRUE) {
  echo "<br>New record successfully added to the " . $database . " database.<br>";
  echo "<br> Entry added:<br>";
  echo "AlunoID: " . $valor_rand1 . "<br>";
  echo "Nome completo: " . $valor_rand3 . "<br>";
  echo "Endereco: " . $valor_rand2 . "<br>";
  echo "Cidade: " . $valor_rand3 . "<br>";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>
