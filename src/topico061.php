<?php
    $a = 30;
    $a = 10;
    $a = 5;
    echo "<br> $a";

    $arr=[30,10,5];
    $arr[0] += 5;
    for($i=0; $i<=2; $i++){
        echo "<br>arr[$i] = ".$arr[$i];
    }

    $uf=["SP", "RJ", "MG", "ES"];
    echo "<br>".$uf[2];
    echo "<pre>";print_r($uf);echo "</pre>";

    $estudante=[
        "id"=>1,
        "ra"=>123456,
        "nome"=>"Bete",
        "curso"=>"TADS"
    ];

    echo "<br>id: ".$estudante["id"];
    echo "<br>ra: ".$estudante["ra"];
    echo "<br>nome: ".$estudante["nome"];
    echo "<br>curso: ".$estudante["curso"];
    echo "<pre>";print_r($estudante);echo"</pre>";

    $multi = [
        [10,20,30],
        [40,50,60],
        [70,80,90]
    ];

    print($multi[1][2]);

    $multi = [
        [10, "aviao", 30],
        [40, 50, "ilha"],
        ["agua", 80, "barco"]
    ];

    echo "<br>".$multi[2][0];
    echo "<br>".$multi[0][1];
    echo "<br>".$multi[1][2];
    echo "<br>".$multi[2][2];

    $bd = [
        ["id"=>1, "nome"=>"Bete","curso"=>"TADS"],
        ["id"=>2, "nome"=>"Cleide", "curso"=>"TBD"],
        ["id"=>3, "nome"=>"Beto", "curso"=>'TJD']
    ];

    echo "<br>".$bd[2]["nome"];
    echo "<br>".$bd[1]["curso"];
    echo "<br>".$bd[1]["id"];

?>