<!-- Nichole Blachford 2026 -->
<?php
    // default inputs + variable setup
    $dateReturned = 0;
    $dueDate = 0;
    $returnUni = 0;
    $dueUni = 0;
      
    $bookMessage = '';
    $bookMessage2 = '';
    $bookMessage3 = '';

    // Gets data from the from the array
    if ($_GET){
        $dateReturned = $_GET['rdate'] ?? 0;
        $dueDate = $_GET['duedate'] ?? 0;

        // Turns inputed date into unix for easy comparrassion later on
        $returnUni= strtotime($dateReturned);
        $dueUni = strtotime($dueDate);

        // Converts unix dates again into data usable by the date_diff conversion
        $convertRetunred = date_create($dateReturned);
        $convertDue = date_create($dueDate);

    // The code below takes the converted unix dates above and subtracts both peices of data from one another. This figures out the amount of time that has passed between the two dates and stores it into a variable to use later. 

        // Returned before due date - calculation
        $beforeDiff= date_diff($convertRetunred, $convertDue);

        // Returned after due date - calculation
        $afterDiff = date_diff($convertDue, $convertRetunred);

        // Sets up this display order and format for print statments used in the if/else block.
        $format= '%m Months, %d Days, and %y Years';
    }

    /*----------------------------------------------------------
    Each 'if' block below take the unix codes of each date and compares the numbers to decide what statments and which of the two varibales above need to be printed.

    For example:
    If the returned date here is 120 and the due date is 240, the first block of code runs, checking if x (120) is less than y (240). 

    Since it is in this case, it would display the days you have remaining, the $beforeDiff variable, and the strings explaining the outcome and data to the user. 

    If the dates were flipped, the return date being 240 and the due date being 120, the third block, "is y (240) greater than x (120") would run. From there, the third block's statments, along with the opposite calulation above (afterDiff), would be printed instead.

    The date interval format turns that number sequence ("beforeDif" and "afterDiff") back into a readable/understandable string/date for the user to see.
    -----------------------------------------------------------*/

    // Block for if books are returned before due date
    if ($returnUni < $dueUni){
        $bookMessage = "You have " . (date_interval_format($beforeDiff, $format)) . " days until this is due.";
    }

    // Blocks for if the dates are the same
    elseif ($returnUni == $dueUni){
        $bookMessage= "Your book is due today!";
    }

    // Block for if books are overdue
    elseif ( $returnUni > $dueUni){
        $bookMessage = "Your book is over due by " . (date_interval_format($beforeDiff, $format)) . ".";
    }

    // Catches anything else, simply printing the inputed dates, but should not run if everything is working properly as the if/else statements above should apply to all outcomes.
    else{
        $bookMessage = "Please enter a valid date";
        
    }

    $bookMessage2= "Return Date: " .  date('F j, Y', $returnUni) ;
    $bookMessage3= "Due date: " . date('F j, Y', $dueUni);

?>