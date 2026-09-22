<?php
// objetivo verficar se uma pessoa é maior de 60 anos
$idade = 48;
$cont=50;
if (($idade >=16)&&($idade <18)||($idade >=70))
{
    echo "Seu voto é Facultativo";
}
if (($idade >= 18)&&($idade <70))
{
    $cont=$cont+1;
    echo "Você é obrigado a votar!<br>";
    echo "A quantidade de votos é:",$cont,"<br";
}
else
{
    echo "Me desculpa mas você não pode votar!<br>";
}

echo "Segundo Exemplo de Condição<br>";
// Objetivo: Verificar se o saldo é suficiente para uma compra.
$saldo = 100.00;
$valorcompra = 80.00;
if (Saldo >= $Valorcompra)
{
    echo "Saldo insuficiente. Que tal guardar mais um pouco?";
}

echo "<br>Terceiro Exemplo de Condição <br>";

// Objetivo: Saudação baseada no horário do dia.
$hora = 4; // formato 24hr
if (($hora >= 6)&&($hora<=12))
{
    echo "Bom dia!";
}
elseif (($hora > 12)&&($hora<=18))
{
    echo "Boa tarde!";
}
elseif(($hora > 18)&&($hora<=24))
{
    echo "Boa noite!";
}
else
{
    echo "Boa Madrugada!";
}

echo "Quarto exemplo de condição<br>";
// Arquivo: 04_comparacao_texto.php
//Objetivo:Verificar a cor favorita do Usuário.$corFavorita = "verde"0