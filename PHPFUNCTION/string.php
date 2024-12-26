<!-- String Function -->

 <!-- String length -->
<?php
echo strlen("good morning");
?>

<br>
<!-- string word count  -->

<?php
echo str_word_count("good morning");
?>

<br>

<!-- string pos  -->

<?php

echo strpos("good morning","morning");
?>

<br>
<!-- Add a backslash in front of the character -->

<?php
$str=addcslashes("hello","l");
echo($str);
?>

<br>

<!-- Add a backslash in front of each double quote  -->

<?php
$str=addslashes('how are you "day" is going');
echo($str);
?>

<br>

<!-- Convert "Hello World!" to hexadecimal values: -->

<?php
$str=bin2hex("Hello");
echo $str;
?>

<br>

<!-- Remove characters from the right end of a string: -->


<?php
$str = "Hello good morning";
echo chop($str,"morning");
?>

<br>

<!-- Split the string after each character and add a "." after each split: -->

<?php
$str="hello good day";
echo chunk_split($str,4,".")
?>


<br>

<!-- Write some text to the output: -->

<?php
echo "have a good day";
?>

<br>

<!-- Reverse the string "Hello World!": -->

<?php
echo strrev("have a nice day");

?>
  
  <br>

  <!-- Convert all characters to lowercase: -->

<?php
echo strtolower("HELLO HAVE A GOOD DAY");
?>
<br>
<!-- Convert all characters to uppercase: -->

<?php
 echo strtoupper("hello have a nice day");   
?>

<br>
<!-- Calculate the MD5 hash of the string: -->

<?php
$str="have a good day";
echo md5($str);
?>

<br>
<!-- Find the position of the first occurrence of "php" inside the string: -->

<?php
echo strpos("have a good day","a");
?>

<br>

<!-- Compare two strings (case-sensitive): -->

 <?php
echo strcmp("hello how day going","hello how day going");
?>    

<br>
<!-- Find the first occurrence of "world" inside "Hello world!" and return the rest of the string: -->

<?php
echo strchr("Hello good ","good");
?>

<br>
<!-- Remove characters from both sides of a string -->


<?php 
$str="hello how day go";
echo trim($str,"he go");