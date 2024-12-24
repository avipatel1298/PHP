
<!-- if condition  -->
<?php
$x=10;
if($x<=10){
echo "hello";
}
?>
<br>
<!-- if else condition  -->

<?php
$x=20;

if($x>=30){
    echo "hello";
}else{
    echo "welcome";
}

?>

<br>
<!-- elseif condition -->

<?php
$x=100;
if($x>=300){
    echo "have a good day";
} elseif($x>=20) {
echo "have a nice day";
}else{
    echo "have a good night";
}

?>

<br>

<!-- Nested if  -->

<?php
$a = 13;

  if ($a > 10) {
    echo "Above 10";
    if ($a > 20) {
      echo " and also above 20";
    } else {
      echo " but not above 20";
    }
  }
?> 

<br>

<!-- while loop  -->
<?php
$a=10;
  while($a<=20){
    echo $a;
    $a++;
  }
?>
<br>    

<!-- do while loop -->
<?php
$i = 1;

do {
  echo $i;
  $i++;
} while ($i <= 10);

?>

<br>

 <!-- for loop  -->


 <?php
for($i=1;$i<=10;$i+=3){
echo $i;
}
 ?>
<br>
 <!-- for each loop  -->


 <!-- Indexed Arrays  -->
<?php

$a = array("volvo","bmw","kia","toyota","kia");

foreach($a as $b){
    echo $b."<br>";
}


// Associative Arrays



$result = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"black");

foreach($result as $c=>$d){
echo "$c : $d. <br>";
}
 
// Multidimensional Arrays

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

// break foreach array


$a=array("red","green","yellow","brown","black","purple");
foreach($a as $b){
    if($b=="brown"){
        break;
    }
    echo $b."<br>";
}

//continue foreach loop

$cars = array("volvo","bmw","kia","toyota","kia","ford","ferrari");
foreach($cars as $model){
    if($model == "bmw"){
        continue;
    }
    echo $model."<br>";
}

?>


<!-- Break statement -->


<?php

//for loop 

for($i=1; $i<=30; $i++){
    if($i==15){
      break;
    }
    echo $i."<br>";
}


//while loop

$a=1;

while($a < 20){
     
    if($a==10){
        break;
    }
  echo $a."<br>";
  $a++;
}
  
//foreach loop

$cars =array("volvo","bmw","kia","toyota","kia","ford","ferrari");

foreach($cars as $b){
    if($b=="toyota"){
     continue;
    }
  echo $b."<br>";
  $b++;
}
?>


<!-- continue statement -->


<?php
//for loop 

for($a=2;$a<=10;$a++){
    if($a==7){
        continue;
    }
    echo $a."<br>";
    $b++;
}

// while loop   

$x = 0;
 
while($x < 10) {
  $x++;
  if ($x == 4) {
    continue;
  }
  echo  $x."<br>";
}
// foreach loop

$a=array("volvo","bmw","kia","toyota","kia","ford","ferrari");

foreach($a as $b){
    if($b=="ford"){
        continue;
    }
    echo $b."<br>";
    
}

?>


