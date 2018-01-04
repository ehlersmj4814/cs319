<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Foreach Loops</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      // Example foreach loop with an index array
      $sports = array("hockey","basketball","football","soccer");
      foreach ($sports as $sport) {
        echo "<p>The current sport is " . $sport . "</p>";
      }
      
      // Example foreach loop with an associative array
      $car = array("Make" => "Toyota", "Model" => "Avalon", "Year" => "2010");
      foreach ($car as $key => $value) {
        echo "<p>" . $key . ": " . $value . "</p>";
      }
      
      // Example foreach loops with associative arrays inside of an index array
      $car1 = array("Make" => "Toyota", "Model" => "Avalon", "Year" => "2010");
      $car2 = array("Make" => "Ford", "Model" => "Falcon", "Year" => "1960");
      $car3 = array("Make" => "Volkswagen", "Model" => "Jetta", "Year" => "2016");
      $cars = array($car1, $car2, $car3);
      foreach ($cars as $car) {
        foreach ($car as $key => $value) {
          echo "<p>" . $key . ": " . $value . "</p>";
        }
        echo "<hr>";
      }
    ?>
  </body>
</html>
