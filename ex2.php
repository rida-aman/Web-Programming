<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
<head>
  <meta charset="UTF-8">
  <title>My Projet PHP</title>
</head>
<body>
  <main>
    <nav>
        <ul>
          <li><a href="ex1.php">Ex1</a></li>
          <!-- Add links to other in-class tasks here -->
        </ul>
      </nav>
    <?php
      $name = "Rida Aman";
      $groupuuid = "abc123";

      echo "name : " . $name . "<br>";
      echo "Groupuuid : " . $groupuuid .  "<br>";

      $name = "David";
      echo "Hello world! My name is \"" . $name . "\".".  "<br>";

      echo "Today's date is: " . date("F j, Y") .  "<br>";

      $title = "PHP is interesting";
      echo "<h1>" . $title . "</h1>";

    ?>

      <table>
      <tr>
        <th>S.N.</th>
        <th>Name</th>
        <th>Grade</th>
      </tr>
      <?php
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;

        $students = array(
          array("John", $g1),
          array("Jane", $g2),
          array("Jim", $g3)
        );

        for ($i = 0; $i < count($students); $i++) {
          echo "<tr>";
          echo "<td>" . ($i + 1) . "</td>";
          echo "<td>" . $students[$i][0] . "</td>";
          echo "<td>" . $students[$i][1] . "</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </main>
</body>
</html>
<?php include 'footer.php'; ?>
