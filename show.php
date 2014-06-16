<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Result</title>
</head>

<body>






<?php

require 'connector.php';


function alocation()
	{

echo "readings at the selected location - ".$_POST["requested_date"]." ".$_POST['select']."h <br><br>";

		global $con;
		$location;
		if(isset($_POST['locradio']))
			{
				$location = $_POST['locradio'];
			}
					
		if(!empty($_POST['sencheck'])) 
			{
				//table begin
			 	echo "<table width='200' border='1'>";
			 	
 	
 				foreach($_POST['sencheck'] as $check) 
					{
						 echo " <tr>";
						 echo "<td>";
           				// echo $check; 
						 $query = "SELECT * FROM `typeofmesurings` WHERE TypeId = '".$check."'";
  						 $result = mysqli_query($con, $query);
						 $row = mysqli_fetch_array($result);
 
 						 echo $row['Mesurement'];
						 echo "</td>";
						 echo "<td>";
				         $query = "select * from sensorlocations where sensorno = '".$check."' and locationid = '".$_POST['locradio']."'";
						 $result = mysqli_query($con, $query);
						 $row = mysqli_fetch_array($result);
 						                          $query = "SELECT * FROM measurements WHERE measurements.id = '".$row['SensorId']."' AND measurements.sensorNo='".$check."' AND measuredTime =  '".$_POST["requested_date"]." ".$_POST['select'].":00:00'";
						 
						   $result = mysqli_query($con, $query);
						 $row = mysqli_fetch_array($result);
						 
						 echo $row['Value']; 
						 
						  $query = "SELECT * FROM `typeofmesurings` WHERE TypeId = '".$check."'"; // place unit
  						 $result = mysqli_query($con, $query);
						 $row = mysqli_fetch_array($result);
 
 						 echo $row['Unit'];
						 echo "</td>";
						 echo "</tr>";
    				}
				
				//add tables from queries here
				
				
 				echo "</table>";

				// table end
				
    			
			}
			
		else
			 {
				echo "<h4>No data column is selected. go back and select needed columns<h4> <br><br>";
				
			}
					
	}
	
function asensor(){
		echo "Data of the selected sensor - ".$_POST["requested_date"]." ".$_POST['select']."h <br><br>";
		
		global $con;
		$sensor;
		if(isset($_POST['senradio']))
			{
				$sensor = $_POST['senradio'];
			}
					
		if(!empty($_POST['loccheck'])) 
			{
				//table begin
			 	echo "<table width='200' border='1'>";
			 	
 	
 				foreach($_POST['loccheck'] as $check) 
					{
						 echo " <tr>";
						 echo "<td>";
           				// echo $check; 
						 $query = "SELECT * FROM `locations` WHERE LocationId = '".$check."'";
  						 $result = mysqli_query($con, $query);
						 $row = mysqli_fetch_array($result);
 
 						 echo $row['LocationName'];
						 echo "</td>";
						 echo "<td>";
				         $query = "select * from sensorlocations where sensorno = '".$_POST['senradio']."' and locationid = '".$check."'";
						 $result = mysqli_query($con, $query);
						 $row = mysqli_fetch_array($result);
 						                          $query = "SELECT * FROM measurements WHERE measurements.id = '".$row['SensorId']."' AND measurements.sensorNo='".$_POST['senradio']."' AND measuredTime =  '".$_POST["requested_date"]." ".$_POST['select'].":00:00'";
						 
						   $result = mysqli_query($con, $query);
						 $row = mysqli_fetch_array($result);
						 
						 echo $row['Value']; 
						 
						  $query = "SELECT * FROM `typeofmesurings` WHERE TypeId = '".$_POST['senradio']."'"; // place unit
  						 $result = mysqli_query($con, $query);
						 $row = mysqli_fetch_array($result);
 
 						 echo $row['Unit'];
						 echo "</td>"; 
						 echo "</tr>";
    				}
				
				//add tables from queries here
				
				
 				echo "</table>";

				// table end
				
    			
			}
			
		else
			 {
				echo "<h4>No data location is selected. go back and select needed columns<h4> <br><br>";
				
			}
			
	}
	
function alllocations(){
	echo "3 selected";
	}
	
function allsensors(){
	echo "4 selected";
	}

if(isset($_POST['mainoption'])){
	
	if($_POST['mainoption']=='alocation'){
		alocation();
		}
		
	else if($_POST['mainoption']=='asensor'){
			asensor();
		}
		
/*	else if($_POST['mainoption']=='alllocations'){
			alllocations();
		}
		
	else if($_POST['mainoption']=='allsensors'){
			allsensors();
		}  */


	

/*
$date = $_POST["requested_date"];

print_r (explode("-",$date));
*/

}

?>
</body>

<a href="index.php"><input type="button" value="go back" /> </a>
</html>