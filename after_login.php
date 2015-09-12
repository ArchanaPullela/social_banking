<html>


<style>

body
{
	background-image:url("social.jpg");
	background-size:1280px 180px;
	background-repeat: no-repeat;
	background-color: #660000;
}


#navbar ul { 
	margin: 0; 
	padding: 5px; 
	list-style-type: none; 
	text-align: center; 
	background-color: #000; 
	} 
 
#navbar ul li {  
	display: inline; 
	} 
 
#navbar ul li a { 
	text-decoration: none; 
	padding: .2em 1em; 
	color: #fff; 
	background-color: #000; 
	} 
 
#navbar ul li a:hover { 
	color: #000; 
	background-color: #fff; 
	} 
 



</style>
<body> 
<div id="navbar"> 
  <ul> 
	<li><a href="http:///localhost/social_banking/HOME.html">Profile</a></li> 
	<li><a href="http://localhost/About.html">Communities</a></li> 
	<li><a href="http://localhost/About.html">Policies</a></li> 
	<li><a href="http://localhost/About.html">Account</a></li> 
	<li><a href="http://localhost/About.html">Signout</a></li> 
	
  </ul> 
</div>

</body>





<script>
 function borrow_form()
 {
 	id=document.getElementById("form");
 	id.style.display='block';
 }



</script>



</html>


<?php

$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "socialnetwork";
	
	
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	
	mysql_select_db($db);
$id = $_GET['id'];
//echo($id);
$sql = "SELECT name,contact,age,occupation,income,rep_index FROM person where pers_id='$id' ";
$result = mysql_query($sql);
if($result === FALSE){
	die(mysql_error());
}
while ( $row = mysql_fetch_array($result))
	{ 
    // output data of each row
    
        echo "<h3 style='color:white'><center>Name: " . $row["name"]."<br>". "Contact: " . $row["contact"]. "<br>"."Age: " . $row["age"]."<br>". "Occupation:".
        $row["occupation"]."<br>"."Income:".$row["income"]."<br>"."Reputation Index:".$row["rep_index"]."<br></h3></center>";

        echo "<button onclick='borrow_form()'>Borrow</button>";

    }

$var1 = "SELECT com_id from person where pers_id = '$id'";
$result1 = mysql_query($var1);
$row1 = mysql_fetch_array($result1);
$comid=$row1['com_id'];
$sql1="SELECT comm_index from community where com_id='$comid'";
$result2 = mysql_query($sql1);
$row2 = mysql_fetch_array($result2);
$sql2="SELECT rep_index from person where pers_id = '$id'";
$result3 = mysql_query($sql2);
$row3 = mysql_fetch_array($result3);
//echo($row2['comm_index']);





?>
<html>
<body>
<form  action="request.php" id = "form" style='display:none' method="POST">
P_index<input type="text" value="<?php  echo($row3['rep_index']);?>" readonly><br><br>
Community Index:<input type="text" value="<?php  echo($row2['comm_index']);?>" readonly><br><br>
Amount:<input type="text" name="amount"><br><br>
Insurer Id:<input type="text"><br> <br><input type="text" name="id" value="<?php echo($id);?>" hidden>
Date<input type="date"><br><br>
<input type="submit" value="submit"> 
</form>
</body>
</html>