<!-- Declare an int type variable and name it $intNumber and assign it a value of 1000.
Declare a char type variable and name it $charName and assign it a value of N.
Declare a boolean type variable and name it $boolVal and assign it a value of true.
Declare a float type variable and name it $floatNum and assign it a value of 10.292.
Now output these values using the echo function in PHP. The values should be separated by a comma. -->
<?php
echo "----------------------<br>";
$intNumber = 1000;
echo "$intNumber <br>";

echo "----------------------<br>";
$charName = "N";
echo $charName ."<br>";

echo "----------------------<br>";
$boolVal = 2;
if($boolVal == 2) {
  echo true."<br>";
}else{
  echo false;
}
echo "----------------------<br>";
$floatNum = "10.292";
echo "$floatNum <br>";

echo "----------------------<br>";
$num1 = 12;
$num2 = 7;

$addNum = $num1 + $num2;
echo "$num1 + $num2 =" .$addNum ."<br>";

echo "----------------------<br>";
$minusNum = $num1 - $num2;
echo "$num1 - $num2 =" .$minusNum ."<br>";

echo "----------------------<br>";
$multiplyNum = $num1 * $num2;
echo "$num1 * $num2 =" .$multiplyNum ."<br>";

echo "----------------------<br>";
$divideNum = $num1 / $num2;
echo "$num1 / $num2 =" .$divideNum ."<br>";

echo "----------------------<br>";
$remainNum = $num1 % $num2;
echo "$num1 % $num2 =" .$remainNum ."<br>";

echo "----------------------<br>";
$number = 8;
$number = $number + 2;
echo $number ."<br>";
$number = $number -4;
echo $number."<br>";
$number = $number * 5;
echo $number."<br>";
$number = $number / 3;
echo $number."<br>";
$number = $number + 1;;
echo $number."<br>";
$number = $number - 1;;
echo $number."<br>";

echo "----------------------<br>";
date('h');
date('i');
date('s');
date('a');
echo date("h:i:sa");
echo "<br>";

echo "----------------------<br>";
date_default_timezone_set("America/Vancouver");
// $month = date('F');
echo $month;
if($month == 'December') {
  echo "It's December, cold, gonna stay home, be a potato couch.";
}else{
  echo "Not December, but still nope! Stay home and be a NEETo!";
}

echo "----------------------<br>";
?>

<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Associative Array - Cities</title>
</head>
 
<body>
    <form>
    <p>Please choose a city:</p>
    <select name="city">
    
    <!-- dropdown goes here... -->
<?php
    $countries = ["Japan" => "Tokyo", "Mexico" => "Mexico City", "USA" => "New York City", "India" => "Mumbai", "Shanghai" => "Seoul"];
  foreach($countries as $country => $city) {
    echo "<option>$city</option>";
  }
  ?>

    </select>
    </form>
 
</body>
</html>