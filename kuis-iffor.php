<?php
    // Nama : Rizki Giant & Mohamad Indra
    // Kelas : XI RPL 1

    echo "1. <br>";
    for ($x = 10; $x >=1; $x--){
        for ($y = 1; $y <= $x; $y++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";

    echo "2. <br>";
    $star=10;
	for($a=1; $a<=$star; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
    echo "<hr>";

    echo "3. <br>";
    $star=10;
	for($a=1; $a<=$star; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
    echo "<hr>";

    echo "4. <br>";
    $star=10;
	for($a=1; $a<=$star; $a++){
	for($b=$star; $b>=$a; $b-=1){
		echo "&nbsp";
	}
	for($c=1; $c<=$a; $c++){
		echo "*";
	}
	echo "<br>";
	}
	for($a=1; $a<=$star; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
    echo "<hr>";

    echo "5. <br>";
    $star=10;
	for( $a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo "&nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}
    