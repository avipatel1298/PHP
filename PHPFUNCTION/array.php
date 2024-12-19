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