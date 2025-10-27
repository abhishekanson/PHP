<?php
    $a=(float)$_POST["mark1"];
    $b=(float)$_POST["mark2"];
    $c=(float)$_POST["mark3"];
    $total=$a+$b+$c;
    echo "<h2>Hello " . $_POST["name"] . "</h2>";
    echo "<h3>Your marks</h3><b>English: $a<br>Computer: $b<br>Maths: $c<br>";
    echo "<br>Total marks = $total</b>";
?>