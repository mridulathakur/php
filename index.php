<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $foo = True;//assign the value of true $foo
    echo"hello world";
    ?>
    <br>
    <?php
    /* define <boolean */
    $c_bool = true;
    $d_bool = false;
    echo "Boolean value for true :" .$c_bool. "<br>";
    echo "Boolean value for false :" .$d_bool.  "<br>";
    ?>


<br>
<?php 
	/* decimal number */
	$dec = 1234; 

	/* octal number (equivalent to 83 decimal) */
	$oct = 0123; 

	/* hexadecimal number (equivalent to 26 decimal) */
	$hex = 0x1A; 

	/* binary number (equivalent to 255 decimal) */
	$bin = 0b11111111; 

	/*Now Print these values*/
    echo "Hexa Deciaml Value : ".$hex ." And Type :".gettype($hex)."<br>"; 
    echo "Decimal  value :" .$dec . "And type :" .var_dump($dec) . "<br>";
    echo "Decimal  value :" .$dec . "And type :" .gettype($dec) . "<br>";
    
  
    $x = 10.355;
   var_dump($x);
    
    ?>
    <br>
 <?php
 $name = array('rahul','rohit','robin');
 echo "<pre>";
 print_r($name);
 ?>
 <?php
$fruits = array('mango', 'orange', 'banana');
 print_r($fruits);
 
 ?>
<?php       
  $arr[0] = 'Hugo';
  $arr[1] = 'Diego';
echo"<pre>";
print_r($arr);
  

?>
<?php       
  $arr[0] = 'Hugo';
  $arr[1] = 'Diego';

  foreach ($arr as $key=> $value) 
  {
  	echo $key." = ".$value."<br>";
  }
?>
<?php
    $students = [
                  'student1' => ['name' => 'Raja', 'age'=>21, 'class'=> 9],
                  'student2' => ['name' => 'Mohan', 'age'=>25, 'class'=> 10],
                  'student3' => ['name' => 'Ram', 'age'=>19, 'class'=> 12],
              ];

    /* now it's time to access them */
      echo "student 1 : ".$students['student1']['name']." and class : ".$students['student1']['class']."<br>";
      echo "student 3 : ".$students['student3']['name']." and class : ".$students['student3']['class'];
echo"<br>";
?>
<br>
<?php
    $students = [
                  'student1' => ['name' => 'Raja', 'age'=>21, 'class'=> 9],
                  'student2' => ['name' => 'Mohan', 'age'=>25, 'class'=> 10],
                  'student3' => ['name' => 'Ram', 'age'=>19, 'class'=> 12],
              ];

    foreach($students as $key => $student)
    {
    	echo 'data of '.$key.'<br>';
        
        /*here $student is an array */
        
        foreach($student as $key2 => $value)
        {
          echo $key2.' : '.$value.'<br>';
        }
    }
?>
<?php
$x = 55554;
echo gettype($x);
?>
<br>
<?php
$y = 66.77;
var_dump($y);
?>

<?php
echo 'this is a simple string' ;


echo 'You can also have embedded newlines in
strings this way as it is
okay to do'; 

?>

<?php

  echo 'anroid once said: "I\'ll be back"';
  echo 'You deleted C:\\*.*?';
  echo '<br>';
  echo 'This will not expand: \n a newline';
    ?>


    <?php
// no indentation
echo <<<END
      a
     b
    c
\n
END;
?>

<?php
// 4 spaces of indentation
echo <<<END
      a
     b
    c
    END;
    ?>
    <?php
// 4 spaces of indentation
echo <<<END
      a
     b
    c
    \r
    END;
    ?>

<?php
$cars = array("volvo","bmw","toyoto");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<?php
$fruits = array('apple','banana','orange');
echo"<br>";
var_dump($fruits);
?>
"<br>";
<?php
$fruits = array('apple','banana','orange');
echo"<br>";
print_r($fruits);
?>
<?php
$x = array('apple','banana','orange');

echo gettype($x) . "<br>";
?>
<?php
echo 'You deleted C:\\*.*?';
echo "<br>";

echo 'You deleted C:\*.*?';
?>
</body>
</html> 