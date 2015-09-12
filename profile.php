<?php

$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "socialnetwork";
	
	
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	
	mysql_select_db($db);



$id = $_GET['id'];
echo($id);
$sql = "SELECT name,contact,age,occupation,income,rep_index FROM person where person.pers_id='$id'";
$result = mysql_query($sql);

while ( $row = mysql_fetch_array($result))
	{ 
    // output data of each row
    
        echo "Name: " . $row["name"]."<br>". "Contact: " . $row["contact"]. "<br>"."Age " . $row["age"]."<br>". "Occupation:".
        $row["occupation"]."<br>"."Income:".$row["income"]."<br>"."Reputation Index:".$row["rep_index"]."<br>";
    }





?>