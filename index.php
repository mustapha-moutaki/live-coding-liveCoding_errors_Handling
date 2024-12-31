<?php
// Include the configuration file (config.php) to set error display
include 'config.php';
/*
echo $undefinedVar; // Will display a Notice because the variable is undefined

$num = 10 / 0; // Will display a Fatal Error because division by zero is not allowed
*/

// throw - try-catch

class Calc{
    public function divide($a, $b){
        // if($b ==0){
        //     
        // }
        throw new Exception("cannot divide by 0",404);
        return $a / $b;
       
    }
  
}

 $calc = new Calc();
   try{
$calc -> divide(2,0);    
            
        }catch(Exception $e){
            echo"error: ".$e -> getCode();
        } 
finally{
    echo "always display";
}

// set_error_handler

// function Error_handler($level, $message, $file, $line){
//     $error = "level : " .$level."\n";
//     $error .= "message : " .$message."\n";
//     $error .= "file : " .$file."\n";
//     $error .= "line : " .$line."\n";

//     echo $error;
//     file_put_contents('exceptions.log', $error, FILE_APPEND);
//     // error_log($error);
// }
// set_error_handler('Error_handler');

echo $e































/*
class calc{
    public function divide($a, $b){
        if($b ==0){
            throw new Exception ("cannot divide by 0", 556);// 556 is the custom error code
        }
        return $a/ $b;
    }
}

$calc = new calc();
try{
    $calc -> divide(2,0);
}
catch(Exception $e){
    echo "error: ".$e ->getCode();
}




// set_error_handler
function error_handler($level, $message, $file, $line){
    $error = "the level is:".$level."<br>";
    $error .= "the message is:".$message."<br>";
    $error .= "the file is:".$file."<br>";
    $error .= "the line is:".$line."<br>";

    echo $error;
    file_put_contents('exceptions.log', $error, FILE_APPEND);
}

set_error_handler('error_handler');
echo $x;

*/




?>
