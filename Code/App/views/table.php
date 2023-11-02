<?php
include('Header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <div>
    <?php
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>name</th>";
        echo "<th>dick lenght in cm</th>";
        echo "</tr>";
        $i=0;
        while(isset($data[$i])){
            echo "<tr>";
            echo "<td>" . $data[$i]['id'] . "<td>";
            echo "<td>" . $data[$i]['name'] . "<td>";
            echo "<td>" . $data[$i]['dick_size_in_cm'] . "<td>";
            echo "</tr>";
            
          
            $i++;
        }


    ?>
    </div>
</body>
</html>