<?php
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $students=array('Ammu','Anju','Arun','Binoy','Nancy','Arun','Rizwan','Soni','Adarsh','Biju');
    echo "Array of students: <br>";
    print_r($students);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "sorted Array of students by using 'asort': <br>";
    asort($students);
    print_r($students);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "sorted Array of students by using 'arsort': <br>";
    arsort($students);
    print_r($students);


?>