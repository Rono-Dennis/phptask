<?php
 
function Palindrome($string){
    //check if the parameter is a string
    if(is_string($string) == false)
    return false; 
    
    //check if the string is palindrome
    if (strrev($string) == $string){
        echo "Palindrome";
    }
    else{
        echo "Not a Palindrome";
//      return -1;
    }
}

// Driver Code
$original = ",";
  if (empty($original))
  echo "Empty arguments! Enter string";
  if (is_null($original))
  echo "Null arguments";
  if(! is_string(($original).tostring))
  echo "Enter string only";
//   return -1; 
Palindrome($original);
 
?>
