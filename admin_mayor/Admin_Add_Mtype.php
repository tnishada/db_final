<?php

        $mysql_host = 'localhost';  
        $mysql_password = '';   // put password if you have any password set for the root
        $mysql_user = 'root';

        if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password)||!@mysql_select_db('final_scema')){
            die('error connecting');
        }

        $query = "INSERT INTO maintenance_type VALUES ($_POST[ID],'$_POST[o_type]','$_POST[s_provider]',$_POST[cost])";  // query goes here , put a suitable query for your existing database


        if($query_run = mysql_query($query)){
/*	
            while($query_row = mysql_fetch_assoc($query_run)){ // table is read row by row from the while loop
	
		$username = $query_row['username']; // query_row[] is an associative array(it is accessed by the column names of the database)
		$firstname = $query_row['firstname'];
		
		echo "username is $username firstname is $firstname <br>";  // print data on webpage
            }
*/
            echo 'success';
        } 
        else 
        {
            echo mysql_error();
        }
?>
