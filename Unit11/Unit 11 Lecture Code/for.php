<!DOCTYPE html>
<html lang="en">
  <head>
    <title>For Loops</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      // Example for loop
      for ($counter = 1; $counter <= 10; $counter = $counter + 1) {
        echo "<p>The counter is currently at " . $counter . "</p>";
      }
      
      // Example for loop with an index array
      $animals = array("cat","dog","iguana","bird");
      for ($index = 0; $index < count($animals); $index = $index + 1) {
        echo "<p>The current animal is " . $animals[$index] . "</p>";
      }
    ?>
  </body>
</html>
