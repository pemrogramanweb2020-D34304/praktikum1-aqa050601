<html>
<?php  
    $bintang = "*";
    echo "Nomor 1<br>";
    for($x = 0; $x < 5; $x++){
        for($y = $x; $y > 0; $y--){
            echo "&nbsp&nbsp";
        }
        for($z = $x; $z < 5; $z++){
            echo $bintang;
        }
        echo "<br>";
    }

    echo "<br>Nomor 2<br>";
    $a = 10;
    for($x = 0; $x < 5; $x++){
        for($y = $x; $y > 0; $y--){
            echo "&nbsp&nbsp";
        }
        for($z = $x; $z < $a; $z++){
            echo $bintang;
        }
        echo "<br>";
        $a--;
    }

    echo "<br>Nomor 3<br>";
    for($x = 5; $x >= 1; $x--){
        for($y = $x; $y < 5; $y++){
            echo "&nbsp&nbsp";
        }
        for($z = 1; $z < $x; $z++){
            echo $z;
        }
        for($r = $x; $r >= 1; $r--){
            echo $r;
        }
        echo "<br>";
    }
?> 
</html>