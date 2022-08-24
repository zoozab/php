<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $number = 3333;
    switch($number){
        case 44:
            echo "it is 44 ";
            break;
            case 33 :
                echo "it is 33";
                break;
                case 3 :
                    echo "this is the 3";
                    break;
                    default:
                    echo "there isnt the number";
                    break;
    }
    echo "<br>";
    $c = 0;
    while($c<10){
        echo "the number is $c <br>";
        $c+=1;
    }
    echo "<br>";
    for($v=0;$v<10;$v++){
        echo "the v is : $v <br>";
    }
    echo "<br>";
    $fruits = array("apple","banana","orange");
    foreach($fruits as $fruit){
        echo "the fruit is $fruit <br>";
    }
    echo "<br>";

    $x="outside";
    function convert(){
        global $x ;
        $x="inside";
    }
    echo $x;
    echo "<br>";
    convert();
    echo $x ;
    ?>
</body>
</html>
