<?php
$dateReturned = 0;
$dueDate = 0;

if ($_GET){
    $dateReturned = $_GET['rdate'] ?? 0;
    $dueDate = $_GET['duedate'] ?? 0;
}

echo($dateReturned);
echo("_______");


echo($dueDate);

echo("_______");

// Turns date into uni
$returnUni= strtotime($dateReturned);
$dueUni = strtotime($dueDate);

echo($returnUni);
echo("_______");


// Compares dates and lists the message based on the data
$bookMessage = '';
if ($returnUni < $dueUni){
    $bookMessage = "You have x days until this is due.";
}

elseif ($returnUni == $dueUni){
    $bookMessage= "Your book is due today!";

}
elseif ( $returnUni > $dueUni){
    $bookMessage = "Your book is over due by xxxx";
}

else{
    $bookMessage= "Return Date: " . $dateReturned ;
    $bookMessage2= "Due date: " . $dueDate;
}

echo($dueUni);


// $interval= $difference->date_diff($dateReturned, $dueDate);
// echo(date_interval_format($difference, 'M-d-Y'));

// WORKING CONVERT TESTSSSS - 
if ($_GET){
    $convertTest1 = date_create($dateReturned);
    $convertTest2 = date_create($dueDate);

    $tuna= date_diff($convertTest1, $convertTest2);
    $format= '%m Months, %d Days, and %y Years';

    echo(date_interval_format($tuna, $format));
}





?>