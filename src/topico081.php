<?php
$nomes=["Fulano","Beltrano","Sicrano", "Astrogildo"];
$total = count($nomes);
echo "Foram encontradas $total nomes no array.<br>";
echo "Primeiro valor do array: ".$nomes[0]."<br>";
echo "Último valor do array: ".$nomes[count($nomes)-1];
echo "<hr>";
for($i=0;$i<count($nomes);$i++){
	echo $nomes[$i]."<br>";
}
?>
<hr>
<?php
$uf=["SP","RJ","ES","MG"];
echo "<pre>";print_r($uf);echo "</pre>";
array_push($uf, "TO");
array_push($uf, "BA");
array_push($uf, "RN");
array_push($uf, "PR");
array_pop($uf);
echo "<pre>";print_r($uf);echo "</pre>";
sort($uf);
echo "<pre>";print_r($uf);echo "</pre>";
?>
UF <select name = "uf">
    <option>Selecione uf</option>
    <?php
        for($i=0; $i<count($uf); $i++){
            echo "<option>".$uf[$i]."</option>";
        }
    ?>
</select>
<hr>
<?php 
$estudante = [
    "id"=>1,
    "nome"=>"Bete",
    "nota"=>9.5
];

foreach ($estudante as $pos=>$valor) {
    echo "<br>$pos: $valor";
};

echo "<hr>";

$multi=[
    [10,20,30],
    [40,50,60],
    [70,80,90]
];
for($i=0; $i<3; $i++){
    for($j=0; $j<3; $j++){
        echo $multi[$i][$j]." ";
    }
    echo "<br>";
}
?>