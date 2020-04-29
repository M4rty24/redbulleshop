<?PHP
echo "<h3>typy proměnných</h3>";
$vypnuto = false;

        echo "<br>";

echo "$vypnuto";

        echo "<br>";

echo "-1776251";

        echo "<br>";

echo "1,444";

        echo "<br>";

print " TEXTOVÝ ŘETĚZEC";

        echo "<br>";

$umrel = "pošel";

echo "Pepíček nám $umrel";

        echo "<br>";

echo "<img src='sro.png' />";

        echo "<br>";

echo "<h3>zpětné lomítko</h3>";

        echo "<br>";

echo "\\";

        echo "<br>";

echo "<h3>Operátory</h3>";

        echo "<br>";

        $a = 5;
        $b = 10;
        var_dump($a+$b);
        var_dump($a-$b);
        var_dump($a/$b);
        var_dump($a*$b);
        var_dump($a++);
        var_dump($a--);
        var_dump($a+=$b);
        var_dump($a-=$b);
        var_dump($a/=$b);
        var_dump($a==$b);
        var_dump($a!=$b);
        var_dump($a>$b);
        var_dump($a<$b);



    $martinVotypka1 = 1;
    $martinVotypka2 = 5;

if ($martinVotypka1 < $martinVotypka2) {

 echo "Votýpka Martin";

}


        echo "<br>";



if ($martinVotypka1 < $martinVotypka2) {
     echo "Martin";
    } else {
     echo "Votýpka";

    }


        echo "<br>";



if ($martinVotypka1 < 8) {

     if (4 > $martinVotypka2) {
     echo "Votýpka";
     }

    } else {
     echo "Martin";
    }

        echo "<br>";


switch ($martinVotypka1) {
     case 1:
     echo "1";
     break;

     case 2:
     echo "2";
     break;

     case 3:
     echo "3";
     break;

     case 4:
     echo "4";
     break;

     case 5:
     echo "5";
     break;

     case 6:
     echo "6";
     break;

     default:
     echo "Bohužel";
}

        echo "<br>";

$elektro["pc"]["notebooky"]["tiskárny"]["myš"]["klávesnice"]["monitor"]["reproduktory"]["televize"]["modem"]["headset"] = "Elektronika";

        echo "<br>";

$elektronika = array(
    "herni pc" => array (
    "pocitac" => array('typ' => 'stolni',
                       'CPU' => 'intel',
                       'GPU' => 'GIGABYTE',
                       'RAM' => '16GB',
                       'Zdroj' => '550W',
        ),
    "pocitac" => array('typ' => 'stolni',
                       'CPU' => 'intel',
                       'GPU' => 'MSI',
                       'RAM' => '6GB',
                       'Zdroj' => '450W'
        ),
    "pocitac" => array('typ' => 'stolni',
                       'CPU' => 'amd',
                       'GPU' => 'GIGABYTE',
                       'RAM' => '8GB',
                       'Zdroj' => '400W'
        ),
    "pocitac" => array('typ' => 'stolni',
                       'CPU' => 'amd',
                       'GPU' => 'ASUS',
                       'RAM' => '64GB',
                       'Zdroj' => '650W'
        ),
    ),

    "kancelarske pc" => array (
    "pocitac" => array('typ' => 'stolni',
                       'CPU' => 'intel',
                       'GPU' => 'MSI',
                       'RAM' => '16BG',
                       'Zdroj' => '500W'
        ),
    "pocitac" => array('typ' => 'stolni',
                       'CPU' => 'intel',
                       'GPU' => 'ASROCK',
                       'RAM' => '4GB',
                       'Zdroj' => '350W'
        ),
    "pocitac" => array('typ' => 'stolni',
                       'CPU' => 'amd',
                       'GPU' => 'SAPPHIRE',
                       'RAM' => '8GB',
                       'Zdroj' => '400W'
        ),
    ),
    "notebooky herni" => array (
    "pocitac" => array('typ' => 'notebook',
                       'CPU' => 'intel',
                       'GPU' => 'ASUS',
                       'RAM' => '32GB',
                       'Zdroj' => '650W'
        ),
    "pocitac" => array('typ' => 'notebook',
                       'CPU' => 'amd',
                       'GPU' => 'MSI',
                       'RAM' => '16GB',
                       'Zdroj' => '400W'
        ),
    "pocitac" => array('typ' => 'notebook',
                       'CPU' => 'intel',
                       'GPU' => 'ASUS',
                       'RAM' => '16GB',
                       'Zdroj' => '420W'
        ),
    ),
)
?>
