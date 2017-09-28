<?php

  $obj = new main();

    class main {

        public function __construct() {
	      
        $str = "program  started<br>";
	echo "$str";
	echo '<h3>String Functions<h3>';
	stringFunctions::otherfunctions();
	echo '<h3>Array Functions<h3>';
	arrayFunctions::otherfunctions();
	}
	public function __destruct() {
	$str = "program completed<br>";
        echo "$str";
    	}
	      }
	class stringFunctions {
	static public function printThis($str) {
	print($str);
	}
	static public function printline() {
	$str='<hr><br>';
   	print($str);
       	 }
   	static public function otherfunctions(){
        $str1 = "Sample  string";
  	$str='<h3>Length of string<h3><br>';
	stringFunctions::printThis($str);
	$len=strlen($str1);
	stringFunctions::printThis($len);
	stringFunctions::printline();								
	$str='<h3>Making all first letters of word to Uppercase<h3><br>';
	stringFunctions::printThis($str);
	$len=ucwords($str1);
	stringFunctions::printThis($len);
	stringFunctions::printline();
	$str='<h3>Randomly shuffle a string<h3><br>';
	stringFunctions::printThis($str);
	$len=str_shuffle($str);
	stringFunctions::printThis($len);
	stringFunctions::printline();
	$str='<h3> MD5 Hash of a string<h3><br>';
	stringFunctions::printThis($str);
	$len=md5($str1);
	stringFunctions::printThis($len);
	stringFunctions::printline();
	$str='<h3> convert to lowercase<h3><br>';
	stringFunctions::printThis($str);
	$len=strtolower($str1);
	stringFunctions::printThis($len);
	stringFunctions::printline();
	$str='<h3>Repeat function<h3><br>';
	stringFunctions::printThis($str);
	$len=str_repeat($str1,3);
	stringFunctions::printThis($len);
	stringFunctions::printline();
	$str='<h3>To compare string<h3><br>';
	$str2='Hello';
	stringFunctions::printThis($str);
	$len=strcmp($str1,$str2);
	stringFunctions::printThis($len);
	stringFunctions::printline();
	$str='<h3>To replace string<h3><br>';
	stringFunctions::printThis($str);
	$len=str_replace("Sample","Modified",$str1);
	stringFunctions::printThis($len);
	stringFunctions::printline();
	$str='<h3>Reversing a string<h3><br>';
        stringFunctions::printThis($str);
        $len=strrev($str1);
        stringFunctions::printThis($len);
        stringFunctions::printline();
	$str='<h3>String Comparison using natural algorithm<h3><br>';
        stringFunctions::printThis($str);
        $len=strnatcmp($str1,$str2);
        stringFunctions::printThis($len);
        stringFunctions::printline();
	$str='<h3>String to Uppercase<h3><br>';
        stringFunctions::printThis($str);
        $len=strtoupper($str1);
        stringFunctions::printThis($len);
        stringFunctions::printline();
	$str='<h3> Generating sha1 code<h3><br>';
        stringFunctions::printThis($str);
        $len=sha1($str1);
        stringFunctions::printThis($len);
        stringFunctions::printline();
	}
	}
class arrayFunctions
{
static public function printArray($array) {
	  print_r ($array);
	  }
static public function printline() {
$str='<hr><br>';
print($str);
	}
static public function otherfunctions(){
$array = array(1,2,6,3,9,0,5);
arrayFunctions::printArray($array);
/*$array1='<h3>Reverse an array<h3><br>';
arrayFunctions::printArray($array1);
arrayFunctions::printArray(array_reverse($array));
arrayFunctions::printline();
$array1='<h3>Shift an element in an array<h3><br>';
arrayFunctions::printArray($array1);
arrayFunctions::printArray(array_shift($array));
arrayFunctions::printArray($array);
arrayFunctions::printline();
$array1='<h3>Sum of elements in an array<h3><br>';
arrayFunctions::printArray($array1);
arrayFunctions::printArray(array_sum($array));
arrayFunctions::printline();*/
$array1='<h3>Return values in an array<h3><br>';
arrayFunctions::printArray($array1);
arrayFunctions::printArray(array_values($array));
arrayFunctions::printline();
$array1='<h3>Count elements in an array<h3><br>';
arrayFunctions::printArray($array1);
arrayFunctions::printArray(count($array));
arrayFunctions::printline();
$array1='<h3>Uniqueness of  an array<h3><br>';
arrayFunctions::printArray($array1);
arrayFunctions::printArray(array_unique($array));
arrayFunctions::printline();
$array1='<h3>Push an element into array<h3><br>';
arrayFunctions::printArray($array1);
arrayFunctions::printArray(array_push($array,99));
arrayFunctions::printArray($array);
arrayFunctions::printline();
$array1='<h3>Search an element in an array<h3><br>';
arrayFunctions::printArray($array1);
arrayFunctions::printArray(array_search(99,$array));
arrayFunctions::printline();
$array1='<h3>Slice a part of an array<h3><br>';
arrayFunctions::printArray($array1);
arrayFunctions::printArray(array_slice($array,4));
arrayFunctions::printArray($array);
arrayFunctions::printline();
$array1='<h3>Merge an array<h3><br>';
$array2=array(3,4,2,7,8,9,0);
arrayFunctions::printArray($array1);
arrayFunctions::printArray(array_merge($array,$array2));
arrayFunctions::printline();
}
}
?>
																																																																					      
																																																																					        

																																																																						

