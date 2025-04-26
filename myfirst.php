<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content="Remy Amor">
     <meta name="description" content="using and initialising variables in php">
     <meta name="keywords" content="php, variables, functions">
     <title>My first PHP</title>
</head>
<body>
     <?php
          $marks = array(85, 85, 95);
          $marks[1] = 90;
          $ave = (array_sum($marks))/(count($marks));
          if ($ave >= 50) 
               $status = "PASSED";
          else 
               $status = "FAILED";
          
          echo "<p>Student's average score is $ave, and they have $status</p>";
     ?>
</body>
</html>