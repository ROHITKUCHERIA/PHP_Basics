<?php


// These are called indexed arrays:
// $arr = array('this', 'that', 'what');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2]; 

// Associative arrays
$favCol = array('Rohit' => 'white','Manish'=> 'blue',
                    'Ashok'=> 'orange', 8=>'this' );

                    // echo $favCol['Ashok'];
                    // echo "<br>";
                    // echo $favCol['Manish'];
                    // echo "<br>";
                    // echo $favCol[8]; 
foreach ($favCol as $key => $value) {
    echo "<br>Favorite color of $key is $value";
}

?>

