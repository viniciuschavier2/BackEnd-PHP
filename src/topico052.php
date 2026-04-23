<?php
    $idade = 17;

    if($idade >= 18) {
        echo "Você é maior de idade.";
    } else {
        echo "Você é menor de idade.";
    }
?>
<hr>
<?php
    $semaforo = "vermelho";

    if($semaforo == "vermelho"){
        echo "semaforo $semaforo: Pare";
    } else if($semaforo == "amarelo"){
        echo "semaforo $semaforo: Atenção";
    } else if($semaforo == "verde"){
        echo "semaforo $semaforo: Siga";
    } else {
        echo "Cor desconhecida";
    }

    echo "<hr>";

    switch ($semaforo) {
    case "vermelho":
        echo "semaforo $semaforo: Pare";
        break;
    case "amarelo":
        echo "semaforo $semaforo: Atenção";
        break;
    case "verde":
        echo "semaforo $semaforo: Siga";
        break;
    default:
        echo "Cor desconhecida";
    }

    echo "<hr>";

    $diaSemana = date('w');

    switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
    }

    echo "<hr>";
    date_default_timezone_set('America/Sao_Paulo');
    echo date('d/m/Y H:i:s');
?>

<hr>

<?php
    $nome = "u";
    echo "nome = $nome";
    echo "<br>MD5 = ".md5($nome);
    $hash = password_hash($nome, PASSWORD_DEFAULT);
    echo "<br>Hash = $hash";
?>