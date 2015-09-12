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




<?php
$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "socialnetwork";
	
	
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	
	mysql_select_db($db);

$amount = $_POST['amount'];
echo($amount);
 $pers_id = $_POST['id'];

$sql = "SELECT com_id,rep_index from person where pers_id = '$pers_id'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$comid = $row['com_id'];
$rep_index = $row['rep_index'];

$sql = "SELECT comm_index from community where com_id = '$comid'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$comm_index = $row['comm_index'];




$num =  rand(1,4);
function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
   $numbers = range($min, $max);
   shuffle($numbers);
   return array_slice($numbers, 0, $quantity);
}
echo($num);



   
$lender_array = UniqueRandomNumbersWithinRange(0,25,$num);
$lender_period = UniqueRandomNumbersWithinRange(6,18,$num);
foreach($lender_array as $i)
	echo ($i);
foreach($lender_period as $i)
	echo($i);

$lending_rate = 0;

if($rep_index>5 && $comm_index>40)
		$lending_rate += 9;
	if($rep_index>5 && $comm_index<40)
		$lending_rate += 10;
	if($rep_index<5 && $comm_index>40)
		$lending_rate += 11;
	if($rep_index<5 && $comm_index<40)
		$lending_rate += 12;

echo "<center><table border = '1'>
<tr>
<th>Name</th>
<th>Community Name</th>
<th>Period</th>
<th>Amount</th>
<th>Rate Of Interest</th>
</tr></center>";


$i=0;
	while($num>0)
	{
		$lend_id = $lender_array[$i];
		
		echo "<center>";
		echo "<tr>";
		echo "<td>" . $lender_array[$i] . "</td>";
  		echo "<td>" . 'abc' . "</td>";
  		echo "<td>" . $lender_period[$i] . "</td>";	
 		 echo "<td>" . $amount . "</td>";	
 		 $lending_rate+=rand(0,3);
 		 echo "<td>" . $lending_rate . "</td>";
 		 		
 		 echo "</tr>";

 		 $num--;
 		 $i++;
  			
	}
	echo "</table></center>";
	echo "<br /><br />";
	echo "<center><a href='http://localhost/adminhome.php'><input type='submit' value='Borrow Now!'></center>";




?>


<html>

<script type="text/javascript">
val = '<?php echo $num;  ?>'
//alert(val);


amount1= '<?php echo $amount;  ?>'
//alert(amount1);
amt = document.getElementsByTagName("amt");
amt.value = amount1;

/*function init()
{
	tab = document.getElementsByTagName("table")[0];
	count = 2;
	for(i=1;i<val;i++)
	{
		refrow = document.getElementById("row1");
	
	//Clone it
	newrow = refrow.cloneNode(true);
	
	newrow.id = "row" + count;
	
	count++;

	tab.appendChild(newrow);
	}

}*/
function init(){

}






</script>
<body onload="init()">

</body>


</html>