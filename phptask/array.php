<?php 

// multipliers array elements
function multiplier($arr, $n)
{
 
   
    for ($i = 0; $i < $n; $i++) {
        
        
        //check if array if non-numeric
        if(is_numeric($arr[$i]) === false)
        {
            echo "enter numeric value"; 
        }
        else
        {
            //check if input is multiplier of 4 and/ or 6
            $x = $arr[$i];

        if (($x %= 4) == 0 or ($x %= 6) == 0) {
            echo $arr[$i] . ' ';
        }
        }
        
        
    }

    return false;
}

// Driver Code
//Pass different parameters to this functions to test
$arr = array(1, 2, 3, 4, 5, 8, 12, 18, 13, 21, 24, 36, 39, 46, 72);

   //  check if array passed is empty
    if (empty($arr))
    echo "empty array", "\t", "pass values to the array";
    
     //check if array is null
    if (is_null($arr))
    echo "null array!","\t", "pass values to the array";
       
$n = count($arr);
 

// Function call to
// find output 
echo "\n";
 echo multiplier($arr, $n);
echo "\n"; 
return 0;
 
?>


