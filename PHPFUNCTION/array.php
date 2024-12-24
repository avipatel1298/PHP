
<!-- Change all keys in an array to uppercase: -->
<?php
$age=array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
print_r(array_change_key_case($age,CASE_UPPER));
?>

<br>
<!-- Split an array into chunks of two: -->

<?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,3));
?>
<!-- Get column of last names from a recordset: -->
<br>
<?php
// An array that represents a possible record set returned from a database
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'first_name');
print_r($last_names);
?>


<br>


<!-- Create an array by using the elements from one "keys" array and one "values" array: -->

<?php
$name=array("Peter","Ben","Joe");
$number=array("0","1","2");
$combin=array_combine($name,$number);
print_r($combin);
?>
<br>

<!-- Count all the values of an array: -->
<?php
$a=array("A","B","A","D","E","B","B","C","A","D ");
print_r(array_count_values($a));
?>
<br>

<!-- Compare the values of two arrays, and return the differences: -->

 <?php
$a1=array("a"=>"cat","b"=>"dog","c"=>"cow","d"=>"pig");
$a2=array("e"=>"cat","f"=>"dog","g"=>"cow");

$data=array_diff($a1,$a2);
print_r($data);
?>

<br>

<!-- Compare the keys and values of two arrays, and return the differences: -->

<?php
$b1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$b2=array("a"=>"red","b"=>"green","c"=>"blue");
$result=array_diff_assoc($b1,$b2);
print_r($result);
?>
<br>

<!-- NOT UNDERSTAND Compare the keys of two arrays, and return the differences: -->

<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");
$result=array_diff_key($a1,$a2);
print_r($result);
?>


<!-- NOT  Compare the keys and values of two arrays (use a user-defined function to compare the keys), and return the differences: -->


<br>

<?php
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","e"=>"yellow","h"=>"black","g"=>"brown");
$a2=array("a"=>"red","f"=>"green","c"=>"yellow","h"=>"black");

$result=array_diff_uassoc($a1,$a2,"myfunction");
print_r($result);
?>

<br>
<!-- Fill an array with values: -->

<?php
$a=array_fill(1,4,"cars");
print_r($a);

?>


<!-- Fill an array with values, specifying keys: -->
  <br>


  <?php
$keys=array("0","1","2","3","4");
$a=array_fill_keys($keys,"green");
print_r($a);
?>



<!-- NOT UNDERSTAND Filter the values of an array using a callback function: -->


<?php
function test_odd($var)
  {
  return($var & 1);
  }

$odd=array(1,3,2,3,4);
print_r(array_filter($odd,"test_odd"));
?>

<BR>

<!-- Flip all keys with their associated values in an array: -->

<?php
$flip=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"black");
$result=array_flip($flip);
print_r($result);
?>
<br>
<!-- Compare the values of two arrays, and return the matches: -->

<?php
$key=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$value=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($key,$value);
print_r($result);
?>

<br>
<!-- Compare the keys and values of two arrays, and return the matches: -->


<?php
$x=array("a"=>"volvo","b"=>"bmw","c"=>"toyota","d"=>"kia");
$y=array("a"=>"volvo","b"=>"bmw","c"=>"toyota");

$result=array_intersect_assoc($x,$y);
print_r($result);
?>

<br>

<!-- Compare the keys of two arrays, and return the matches: -->

<?php
$x1=array("1"=>"black","2"=>"green","3"=>"purple");
$y1=array("1"=>"black","3"=>"blue","4"=>"purple");

$result=array_intersect_key($x1,$y1);
print_r($result);
?>

<br>

<!-- Check if the key "Volvo" exists in an array: -->

  <?php
$cars=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("BMW",$cars))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?>

<!-- Return an array containing the keys: -->

<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));
?>
<br>
<!-- Merge two arrays into one array: -->

<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
?>

<br>

<!-- Merge two arrays into one array: -->

<?php
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge_recursive($a1,$a2));
?>

<br>
<!-- Return a sorted array in ascending order: -->

<?php
$a=array("Dog","Cat","Horse","Bear","Zebra");
array_multisort($a);
print_r($a);
?>

<br>

<!-- Return 5 elements and insert a value of "blue" to the new elements in the array: -->


<?php
$a=array("red","green");
print_r(array_pad($a,7,"blue"));
?>

<br>

<!-- Delete the last element of an array: -->

<?php
$a=array("red","green","blue");
array_pop($a);
print_r($a);
?>

<br>
<!-- Calculate and return the product of an array: -->

<?php
$a=array(25,10);
echo(array_product($a));
?>

<br>

<!-- Insert "blue" and "yellow" to the end of an array -->

<?php
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
?>

<br>
<!-- NOT UNDERSTAND Return an array of random keys: -->

<?php
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
?>
<br>
<!-- Replace the values of the first array ($a1) with the values from the second array ($a2): -->

<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));
?>
<br>

<!-- Replace the values of the first array with the values from the second array recursively: -->

<?php
$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
$a2=array("a"=>array("yellow"),"b"=>array("black"));
print_r(array_replace_recursive($a1,$a2));
?>
<br>

<!-- Return an array in the reverse order: -->

<?php
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
?>
<br>

<!-- Search an array for the value "red" and return its key: -->

  <?php
$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"black");
echo array_search("black",$a);
?>

<!-- Remove the first element (red) from an array, and return the value of the removed element: -->

<?php
$a=array("a"=>"yellow","b"=>"green","c"=>"blue");
echo array_shift($a);
print_r ($a);
?>
<br>

<!-- Start the slice from the third array element, and return the rest of the elements in the array: -->
<?php
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,3,4));
?>
<br>
<!-- Remove elements from an array and replace it with new elements: -->


<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"black","b"=>"purple");
array_splice($a1,0,2,$a2);
print_r($a1);
?>
<br>

<!-- Return the sum of all the values in the array -->

<?php
$a=array(10,45,15,35);
echo array_sum($a);
?>

<br>
<!-- Return all the values of an array (not the keys): -->

<?php
$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));
?>

<br>
<!-- Remove duplicate values from an array: -->

<?php
$a=array("a"=>"red","b"=>"green","c"=>"red","d"=>"black","e"=>"white","f"=>"black");
print_r(array_unique($a));
?>
<br>

<!-- Insert the element "blue" "white" to an array: -->
<?php
$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue","white");
print_r($a);
?>
<br>
<!-- Sort an associative array in descending order, according to the value: -->

<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);
?>

<br>
<!-- Run each array element in a user-defined function: -->

<?php
function walk($value,$key)
{
echo "The key $key has the value $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"walk");
?>
<br>
<!-- Run each array element in a user-defined function: -->
 
<?php
function walkrecursive($value,$key)
{
echo "The key $key has the value $value<br>";
}
$a1=array("a"=>"red","b"=>"green");
$a2=array($a1,"1"=>"blue","2"=>"yellow");
array_walk_recursive($a2,"walkrecursive");
?>
<br>
<!-- Sort an associative array in descending order, according to the value: -->

<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>

<br>

<!-- Sort an associative array in ascending order, according to the value: -->

<?php
$age=array("Ezra"=>"10","Reggie"=>"20","Basil"=>"225");
arsort($age);

foreach($age as $x=>$y)
   {
   echo "Key=" . $x . ", Value=" . $y;
   echo "<br>";
   }
?>
<br>
<!-- Create an array from variables and their values: -->

<?php
$firstname = "Rowan";
$lastname = "Arlo";
$age = "50";

$result = compact("firstname", "lastname", "age");

print_r($result);
?>
<br>
<!-- Return the number of elements in an array: -->
<?php
$cars=array("kia","tata","toyota","skoda","mahindra");
echo count($cars);
?>
<br>
<!-- Output the value of the current element in an array: -->
<?php
$people = array("Henry", "Noah", "Oliver", "William");
echo current($people) . "<br>";
?>
<br>
<!-- Output the value of the current and the last element in an array: -->
<?php
$people = array("Elijah", "Theodore", "James", "Liam");
echo current($people) . "<br>";
echo end($people);
?>

<br>
<!-- Assign the values "Cat", "Dog" and "Horse" to the variables $a, $b and $c: -->
<?php
$a = "Original";
$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse","d"=>"buffalo");
extract($my_array);
echo "\$a = $a; \$b = $b; \$c = $c; \$d = $d"; 
?>

<br>
<!-- Search for the value "Thomas" in an array and output some text: -->

  <?php
$people = array("Samuel", "Owen", "Jack", "Levi","Thomas","Santiago","Christopher");

if (in_array("Thomas", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
?>
<br>
<!-- Return the element key from the current internal pointer position: -->

<?php
$people=array("Nolan","Adrian","Ian","Ryan","Easton","Jose");
echo "The key from the current position is: " . key($people);
?>

<br>
<!-- Assign variables as if they were an array: -->
  <?php
$my_array = array("Dog","Cat","Horse");

list($a, $b, $c) = $my_array;
echo "I have several animals,  $a, $b and  $c.";
?>
<br>
<!-- Output the value of the current element in an array: -->

<?php
$people = array("Colt", " Karter", "Grant", "Avery");

echo pos($people) . "<br>";
?>
<br>
<!-- Output the value of the current, next and previous element in the array: -->

<?php
$people = array("Jorge", "Brady", "Kayson", "Aziel","Cohen","Atticus","Hendrix");
echo current($people) . "<br>";
echo next($people) . "<br>";
echo prev($people);
?>
<br>

<!-- Create an array containing a range of elements from "1" to "9": -->

<?php
$number = range(1,9);
print_r ($number);
?>
<br>
<!-- Output the value of the current and next element in an array, then reset the array's internal pointer to the first element in the array: -->


<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";

echo next($people) . "<br>";

echo reset($people);
?>
<br>
<!-- Sort the elements of the $animal array in descending alphabetical order: -->

<?php
$animal=array("Lion","Panther","Crow","Hen","Elephant","Bear","Duck","Swan","Snake");
rsort($animal);
$clength=count($animal);
for($x=0;$x<$clength;$x++)
  {
  echo $animal[$x];
  echo "<br>";
  }
?>
<br>
<!-- Return the number of elements in an array: -->

<?php
$cars=array("Volvo","BMW","Toyota","Kia","Skoda","Tata","Mahindra");
echo sizeof($cars);
?>
<br>

<!-- Sort the elements of the $cars array in ascending alphabetical order: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

foreach ($cars as $key => $val) {
    echo "cars[" . $key . "] = " . $val . "<br>";
}
?>


<!-- Sort the elements of an array by values using a user-defined comparison function (and maintains the index association): -->


<?php
function my_sort($a, $b) {
  if ($a == $b) return 0;
  return ($a < $b) ? -1 : 1;
}

$arr = array("a"=>4, "b"=>2, "c"=>8, "d"=>6);
uasort($arr, "my_sort");

foreach($arr as $key => $value) {
  echo "[" . $key . "] => " . $value;
  echo "<br>";
}
?>


<!-- Sort the elements of an array by keys using a user-defined comparison function: -->

<?php
function sort_($a, $b) {
  if ($a == $b) return 0;
  return ($a < $b) ? -1 : 1;
}

$arr = array("a"=>4, "b"=>2, "c"=>8, "d"=>6);
uksort($arr, "sort_");

foreach($arr as $key => $value) {
  echo "[" . $key . "] => " . $value;
  echo "<br>";
}
?>

<!-- Sort the elements of an array by values using a user-defined comparison function: -->

<?php
function mysort($a, $b) {
  if ($a == $b) return 0;
  return ($a < $b) ? -1 : 1;
}

$a = array(4, 2, 8, 6);
usort($a, "my sort");

foreach($a as $key => $value) {
  echo "[" . $key . "] => " . $value;
  echo "<br>";
}
?>

<?php
$x = "Hello World!";
echo strtoupper($x);
?> 


