<?php
$nome = "Severino da Silva Brito";
$cor = "#FF0000";

echo "<div style='color: $cor;'>Augusto!</div>";

echo("Bem vindo Sr. " . $nome);
echo("<br/>");
echo(strlen($nome));
echo("<br/>");
echo(strpos($nome," "));
echo("<br/>");
echo(substr($nome,0,strpos($nome," ")));
echo("<br/>");
$nome_completo =explode(" ",$nome);
echo($nome_completo[0]);
echo($nome_completo[1]);
echo($nome_completo[2]);
echo($nome_completo[3]);
echo("<br/>");
$dados=("Nissan;Kicks;2022;KKJK655;Vermelho");
$veiculo = explode(";",$dados);
$opcao = 1;
echo($veiculo[$opcao-1]);
echo("<br/>");
echo(var_dump($veiculo));

$aluno = array(
    "nome" => "Jose Maria",
    "CPF" => "232.232.845.000",
    "Cidade" => "São Paulo",
)
?>