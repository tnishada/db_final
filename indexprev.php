<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select data you need</title>
<link href="colors7.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>

<body>

<?php
require 'connector.php';

if(isset($_POST['username'])){
	
	echo "<h3>Hello !!!  ".$_POST['username']."<h3>";
	
	}

?>
<br><br>
<div>
<form action="show.php" method="POST" >

  <p>
 
  <select name="mainoption" onchange="select_method(this)">
    
    <option name ="mainoption" value="alocation" >readings at a location</option>
    <option name ="mainoption" value="asensor" >readings of a sensor</option>
   <!-- <option name ="mainoption" value ="alllocations" >all locations</option>
    <option name ="mainoption" value ="allsensors" >all sensors</option> -->
    
  </select>  &nbsp;&nbsp;&nbsp; <a href="admin_mayor/Insert.html"><input type="button" value="Edit Data"/></a>&nbsp;<a href="admin_mayor/Mayor_Show_Maintenance.php"><input type="button" value="view mentainance details"/></a> &nbsp;<a href="admin_mayor/Mayor_Show_Users.php"><input type="button" value="show users"/></a>
    
  </p>
  <div class="locationradio" >
    <p > ---------------- Select location --------------------------------
      </p>  <!--
    <p>
      <input type="radio" name="locradio" value="location1" checked /> 
      location 1  </p>
  <p>
    <input type="radio" name="locradio" value="location2" /> 
    location 2
  </p>
  <p>
    <input type="radio" name="locradio" value="location3" /> 
    location 3
  </p>
  <p>
    <input type="radio" name="locradio" value="location4"  /> 
    location 4
    
  </p>   -->
    <?php
  $query = "SELECT * FROM `locations`  ";
  
  $result = mysqli_query($con, $query);
  
  $row = mysqli_fetch_array($result);
  echo " <p> <input type='radio' name='locradio' value=".$row["LocationId"]." checked /> ".$row["LocationName"]."</p>";
  
  while($row = mysqli_fetch_array($result)) //  Full texts 	LocationName 	Longitude 	Latitude 	LocationId 
  {
	  echo " <p> <input type='radio' name='locradio' value=".$row["LocationId"]." /> ".$row["LocationName"]."</p>";
 // echo $row['TypeId'] . " " . $row['Mesurement'];
 // echo "<br>";
 }
  ?>
  </div>
  
  <div class="sensorradio">
  
   <p > ------------------- Select sensor data --------------------------------
      </p> <!--
    <p>
      <input type="radio" name="senradio" value="sensor1" checked /> 
      sensor 1  </p>
  <p>
    <input type="radio" name="senradio" value="sensor22" /> 
    sensor 2
  </p>
  <p>
    <input type="radio" name="senradio" value="sensor3" /> 
    sensor 3
  </p>
  <p>
    <input type="radio" name="senradio" value="sensor4"  /> 
    sensor 4
    
  </p>
  -->
  
   <?php
  $query = "SELECT * FROM `typeofmesurings` ";
  
  $result = mysqli_query($con, $query);
  
  $row = mysqli_fetch_array($result);
  echo " <p> <input type='radio' name='senradio' value=".$row["TypeId"]." checked /> ".$row["Mesurement"]."</p>";
  
  while($row = mysqli_fetch_array($result))
  {
	  echo " <p> <input type='radio' name='senradio' value=".$row["TypeId"]." /> ".$row["Mesurement"]."</p>";
 // echo $row['TypeId'] . " " . $row['Mesurement'];
 // echo "<br>";
 }
  ?>
  </div>
   <div class="sensorcheckbox" >
  ---------------- Select the data  -------------------------------- 
 <!--
  
    <p>
      <input type="checkbox" name="loccheck" value="sen1" /> 
      sensor 1
  </p>
    <p>
      <input type="checkbox" name="loccheck" value="sen2" /> 
      sensor 2
  </p>
    <p>
      <input type="checkbox" name="loccheck" value="sen3" /> 
      sensor 3
  </p>
    <p>
      <input type="checkbox" name="loccheck" value="sen4" /> 
      sensor 4
  
  
  
    </p> -->
       <?php
  $query = "SELECT * FROM `typeofmesurings`  ";
  
  $result = mysqli_query($con, $query);
 
  
  while($row = mysqli_fetch_array($result)) //  Full texts 	LocationName 	Longitude 	Latitude 	LocationId 
  {
	  echo " <p> <input type='checkbox' name='sencheck[]' value=".$row["TypeId"]." /> ".$row["Mesurement"]."</p>";
 // echo $row['TypeId'] . " " . $row['Mesurement'];
 // echo "<br>";
 }
  ?>
    </div>
    
    <div class="locationcheckbox" >
  ---------------- Select locations -------------------------------- 
 
  <!--
    <p>
      <input type="checkbox" name="loccheck" value="loc1" /> 
      location 1
  </p>
    <p>
      <input type="checkbox" name="loccheck" value="loc2" /> 
      location 2
  </p>
    <p>
      <input type="checkbox" name="loccheck" value="loc3" /> 
      location 3
  </p>
    <p>
      <input type="checkbox" name="loccheck" value="loc4" /> 
      location 4
  
  
  
    </p> --> 
     <?php
  $query = "SELECT * FROM `locations`  ";
  
  $result = mysqli_query($con, $query);
 
  
  while($row = mysqli_fetch_array($result)) //  Full texts 	LocationName 	Longitude 	Latitude 	LocationId 
  {
	  echo " <p> <input type='checkbox' name='loccheck[]' value=".$row["LocationId"]." /> ".$row["LocationName"]."</p>";
 // echo $row['TypeId'] . " " . $row['Mesurement'];
 // echo "<br>";
 }
  ?>
    </div>
    <div>
      <p>------------------- Select time --------------------------------

      </p>
    
      <p >
 
        Enter Time  &nbsp; 
         <input id="databox" required type="date"  name="requested_date"> &nbsp; time  :
        <label for="select"></label>
        <select name="select"  id='time'  >
          <option value="00" selected="selected">00.00</option>
          <option value="01">01.00</option>
          <option value="02">02.00</option>
          <option value="03">03.00</option>
          <option value="04">04.00</option>
          <option value="05">05.00</option>
          <option value="06">06.00</option>
          <option value="07">07.00</option>
          <option value="08">08.00</option>
          <option value="09">09.00</option>
          <option value="10">10.00</option>
          <option value="11">11.00</option>
          <option value="12">12.00</option>
          <option value="13">13.00</option>
          <option value="14">14.00</option>
          <option value="15">15.00</option>
          <option value="16">16.00</option>
          <option value="17">17.00</option>
          <option value="18">18.00</option>
          <option value="19">19.00</option>
          <option value="20">20.00</option>
          <option value="21">21.00</option>
          <option value="22">22.00</option>
          <option value="23">23.00</option>
        </select>
        
      </p>
<br>
     
<p>

</p>

</div>
  <input type="submit" value="search"  />
  <br><br>
  
  
</form>
</div>
<br><br>

<br><br>
For authorized users : <a href="index.php"><input type="button" value="Log Out"></a>
</body>
</html>