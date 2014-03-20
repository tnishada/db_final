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
<br><br>
<div>
<form action="show.php" method="POST" >

  <p>
 
  <select name="mainoption" onchange="select_method(this)">
    
    <option name ="mainoption" value="alocation" >readings at a location</option>
    <option name ="mainoption" value="asensor" >readings of a sensor</option>
    <option name ="mainoption" value ="alllocations" >all locations</option>
    <option name ="mainoption" value ="allsensors" >all sensors</option>
    
  </select>
    
  </p>
  <div class="locationradio" >
    <p > ---------------- Select location --------------------------------
      </p>
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
    
  </p> </div>
  
  <div class="sensorradio">
  
   <p > ------------------- Select sensor --------------------------------
      </p>
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
  
  </div>
   <div class="sensorcheckbox" >
  ---------------- Select sensors -------------------------------- 
 
  
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
  
  
  
    </p>
    </div>
    
    <div class="locationcheckbox" >
  ---------------- Select locations -------------------------------- 
 
  
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
  
  
  
    </p>
    </div>
    <div>
      <p>------------------- Select time --------------------------------

      </p>
      <p >
        <input type="radio" name="time" value="currenttime" checked /> 
      current time         </p>
      <p >
  <input type="radio"  name="time" value="giventime" />
        specific time  &nbsp;
         <input type="date" name="requested_date"> &nbsp; time in hours :
        <label for="select"></label>
        <select name="select" id="select">
          <option value="00" selected="selected">00</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
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

</body>
</html>