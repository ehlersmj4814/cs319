<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Do...while Loops</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      // Example while loop
      $counter = 1;
      while ($counter <= 10) {
        echo "<p> The counter is currently at " . $counter . "</p>";
        $counter = $counter + 1;
      }
      
      // Example do...while loop
      $counter = 1;
      do {
        echo "<p>The counter is currently at " . $counter . "</p>";
        $counter = $counter + 1;
      }
      while ($counter <= 10);
      
      // Example do...while loop and an index array
      $colors = array("red", "blue", "yellow", "green", "purple");
      $index = 0;
      do {
        echo "<p>The current color is " . $colors[$index] . "</p>";
        $index = $index + 1;
      }
      while ($index < count($colors));
    ?>
  </body>
</html>
