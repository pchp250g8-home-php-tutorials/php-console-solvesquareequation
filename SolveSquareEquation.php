<?php
    system("cls");
    echo("Input coefficients of square equation\r\n");
    $a = floatval(chop(fgets(STDIN)));
    $b = floatval(chop(fgets(STDIN)));
    $c = floatval(chop(fgets(STDIN)));
    printf("Try to solve the equation:%f*x ^ 2 + %f * x + %f = 0\r\n",$a, $b, $c);
    if(($a == 0) && ($b == 0) && ($c == 0))
        echo("The answer is any number\r\n");
    else if (($a == 0) && ($b == 0) && ($c != 0))
        echo("The equation has no solution");
    else if (($a == 0) && ($b != 0) && ($c != 0))   
        printf("The equation has the following solution:%f\r\n", -$c / $b);
    else
    {
        $d = $b * $b - 4 * $a * $c;
        $sign = ($d > 0) - ($d < 0);
        $nRoots = $sign + 1; 
        if($nRoots > 0)
        {
            $x1 = ( -$b - sqrt($d) ) / (2 * $a);
            $x2 = ( -$b + sqrt($d) ) / (2 * $a);
            echo("The equation has the following roots:\r\n");
            echo("x1 = " . $x1 . "\r\n");
            echo("x2 = " . $x2 . "\r\n");
        }
        else
            echo("The equation has no roots");
    }
    fgetc(STDIN);
?>