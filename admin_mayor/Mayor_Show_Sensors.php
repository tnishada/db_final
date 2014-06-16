<?php

        $con=mysqli_connect("localhost","root","","final_scema");
        

        $result = mysqli_query($con, "SELECT * FROM sensors natural join typeofmesurings");

        echo "<table border='1'>
        <tr>
        <th>Sensor ID</th>
        <th>Type ID</th>
        <th>Sensor Name</th>
        <th>Manufacturer</th>
        <th>Manufacturing Date</th>
        <th>Measurement</th>     
        <th>Unit</th>     
        </tr>";

        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['SensorId'] . "</td>";
          echo "<td>" . $row['TypeId'] . "</td>";
          echo "<td>" . $row['SensorName'] . "</td>";
          echo "<td>" . $row['Manufactor'] . "</td>";
          echo "<td>" . $row['ManufactoringDate'] . "</td>";
          echo "<td>" . $row['Mesurement'] . "</td>";
          echo "<td>" . $row['Unit'] . "</td>";     
          echo "</tr>";
          }
        echo "</table>";
?>
