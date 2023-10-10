<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    echo "<h1>PHP supports the following data types:</h1>";
    echo "<ul>
    <li>String</li>
    <li>INterger</li>
    <li>Float (floating point number- also called double.) </li>
    <li>Boolean</li>
    <li>Array</li>
    <li>Object</li>
    <li>NULL</li>
    <li>Resource</li>
    </ul>";
    echo "<h2>PHP String</h2>";
    echo '<p>A string is a sequence of characters, like "Hello World!" <br>
    A string can be any text inside quoites. You can use single or double quotes:
    </p>';
    $x = 2.2;
    echo var_dump($x);
    echo "<br>";
    $arr = array("first", "second", "third", "fourth");
    echo var_dump($arr);
    $surya = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti perspiciatis omnis eligendi labore suscipit vitae reprehenderit, assumenda ipsa possimus voluptatem.";
    echo var_dump($surya);
    echo "<br>";
    echo str_word_count($surya);
    echo "<br>";
    echo strlen($surya);
    echo "<br>";
    echo strrev("Hello World!");
    echo "<br>";
    $txt = "hey surya bahadur gauli";
    echo strpos($txt, "surya");
    echo "<br>";
    echo str_replace("surya bahadur gauli", "kabi lohani", $txt);
    echo "<br>";
    $n = 52454;
    echo var_dump(is_int($n));
    echo "<br>";
    $b = 232.59;
    $c = (int) $b;
    echo $c;
    echo "<br>";
    echo pi();
    echo "<br>";
    echo min(1, 21, 15, 541, 5, 54165, 6546, 46, 64, 69465);
    echo "<br>";
    echo max(1, 21, 15, 541, 5, 54165, 6546, 46, 64, 69465);
    echo "<br>";
    echo rand(0, 999999999999);
    echo "<br>";
    define("car", [1, 2, 2, 3, 4, 4, 5]);
    echo car[5];
    echo "<br>";
    $first = "surya";
    $second = "bahadur";
    $third = "gauli";
    echo $first . " " . $second . " " . $third;
    echo "<br>";
    echo $first .= $second;
    echo "<br>";

    $t = date("H");
    if ($t < "20") {
        # code...
        echo $t;
        echo "<br>";
        echo "have a good day";
        echo "<br>";
    }
    $val = "red";
    switch ($val) {
        case 'red':
            echo "value is red";
            echo "<br>";
            break;
        case 'blue':
            echo "you select blue";
            echo "<br>";
            break;

        default:
            # code...
            echo "non is fav";
            echo "<br>";
            break;
    }
    $a = 1;
    while ($a <= 10) {
        echo "5 x " . $a . " = " . ($a * 5);
        echo "<br>";
        $a++;
    }
    echo "<br>";
    $x = 1;
    do {
        # code...
        echo "8 x " . $x . " = " . ($x * 8);
        echo "<br>";
        $x++;
    } while ($x <= 10);
    echo "<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "9 x " . $i . " = " . ($i * 9);
        echo "<br>";
    }
    $color = array("red", "green", "blue", "yeallow");
    foreach ($color as $key => $value) {
        echo ($key + 1) . ". " . $value . "<br>";
    }
    for ($i = 0; $i <= 10; $i++) {
        if ($i == 4) {
            continue;
        }
        echo $i . "<br>";
    }
    for ($i = 1; $i <= 100; $i++) {
        if ($i == 10) {
            break;
        }
        echo $i . "<br>";
    }
    echo "<br>";
    function addnumber(int $a, int $b)
    {
        return $a + $b;
    }
    function minh(int $minhight = 40)
    {
        echo "the hight is : $minhight <br>";
    }
    minh(100);
    echo "<br>";
    minh();
    echo "<br>";
    minh(20);
    echo "<br>";
    function add_five(&$value)
    {
        $value += 5;
    }
    $num = 2;
    add_five($num);
    echo $num;
    echo "<br>";

    $arr = array("first", "second", "third", "fourth");
    echo count($arr);
    echo "<br>";
    $arlen = count($arr);
    for ($i = 0; $i < $arlen; $i++) {
        echo ($i + 1) . ". " . $arr[$i];
        echo "<br>";
    }
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTPS_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    echo $_SERVER['GATEWAY_INTERFACE'];
    echo "<br>";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo "welcome to our new webpage ".$name;
        }
    }


    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Name: <input type="text" name="fname">
        <input type="submit">

    </form>

</body>

</html>