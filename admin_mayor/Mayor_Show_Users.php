<?php


        $con=mysqli_connect("localhost","root","","final_scema");
        

        $result = mysqli_query($con, "SELECT * FROM admininfos");

        echo "<table border='1'>
        <tr>
        <th>AdminID</th>
        <th>Adminname</th>
        <th>Level</th>
        </tr>";

        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['AdminId'] . "</td>";
          echo "<td>" . $row['AdminUserName'] . "</td>";
          echo "<td>" . $row['authentication_level'] . "</td>";
          echo "</tr>";
          }
        echo "</table>";
        
        
		echo "<br><br><br><br><a href='../indexprev.php'><input type='button' value='Back'/></a><br>"

?>
