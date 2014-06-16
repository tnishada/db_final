<?php

        $con=mysqli_connect("localhost","root","","final_scema");
        

        $result = mysqli_query($con, "SELECT * FROM maintenance natural join maintenance_type natural join sensorlocations natural join locations");

        echo "<table border='1'>
        <tr>
        <th>Reference NO</th>
        <th>Sensor NO</th>
        <th>Maintenance Type Id</th>
        <th>Serviced date</th>
        <th>Type of operation</th>
        <th>Service Provider</th>
        <th>Cost</th>
        <th>Sensor ID</th>
        <th>Location ID</th>
        <th>Location Name</th>        
        </tr>";

        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['reference_no'] . "</td>";
          echo "<td>" . $row['SensorNo'] . "</td>";
          echo "<td>" . $row['main_type_id'] . "</td>";
          echo "<td>" . $row['serviced_date'] . "</td>";
          echo "<td>" . $row['type_of_operation'] . "</td>";
          echo "<td>" . $row['service_provider'] . "</td>";        
          echo "<td>" . $row['cost'] . "</td>";    
          echo "<td>" . $row['SensorId'] . "</td>";
          echo "<td>" . $row['LocationId'] . "</td>";        
          echo "<td>" . $row['LocationName'] . "</td>";    
          echo "</tr>";
          }
        echo "</table>";
		
		
		echo "<br><br><br><br><a href='../indexprev.php'><input type='button' value='Back'/></a><br>"
?>
