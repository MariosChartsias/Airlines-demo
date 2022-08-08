<?php

//Create connection to database:

$connecionstr="host='localhost' port='5432' dbname='Personal' user='postgres' password='123456' options='--client_encoding=UTF8'";
$dbconn = pg_connect($connecionstr);
// connection check
if (!$dbconn) {
	die("Connection failed: " . pg_connect_error());
}
$flag=-1;
if (isset($_POST['submit']) && $_POST['submit']=='Submit') {
	//create row
	$sql = "INSERT INTO Aircraft(aircraft_code, capacity, range) VALUES ('".$_POST['aircraft']."','".$_POST['capacity']."','".$_POST['range']."')";
	$flag=1;
}else if(isset($_POST['search']) && $_POST['search']=='Search'){
	$sql = "SELECT * FROM aircraft;";
	$flag=0;
}else if(isset($_POST['delete']) && $_POST['delete']=='Delete'){
	$sql = "DELETE FROM aircraft WHERE aircraft_code='".$_POST['aircraft2']."';";
	$flag=2;	
}else if(isset($_POST['change']) && $_POST['change']=='Change'){	
	$sql = "UPDATE aircraft SET capacity=".$_POST['capacity'].", range=".$_POST['range']." WHERE aircraft_code='".$_POST['aircraft1']."';";
	$flag=3;	
}
	
$result = pg_query($dbconn, $sql) ;

if ($result && $flag==1) {
	echo '<h1 style="text-align:center; color:#00cc00; position:absolute; transform:translate(-50%, -50%); left:50%; top:40%;" >successful entry 
		  <img src="../images/381607_complete_icon.png" alt="image" style="max-height:25px;  position:relative; top:3px; margin-right:80px;">
		  <script>setTimeout(function () {window.location.replace("http://localhost/airlines-demo/private.php", "_blank");}, 1000);</script></h1>'; 
}elseif(!$result && $flag==1){
	echo '<h1 style="text-align:center; color:red; position:absolute; transform:translate(-50%, -50%); left:50%; top:40%;" >Incomplete connection into database, please try again 
	<img src="../images/Delete-Red-X-Button-Transparent.png" alt="image" style="max-height:25px;  position:relative; top:5px; margin-right:80px;">
	</h1>';
	echo '<script>setTimeout(function () {window.location.replace("http://localhost/airlines-demo/sign_up.php", "_blank");}, 1000);</scipt>';
}elseif($result && $flag==2){
	echo '<h1 style="text-align:center; color:#00cc00; position:absolute; transform:translate(-50%, -50%); left:50%; top:40%;" >successful delete 
		  <img src="../images/381607_complete_icon.png" alt="image" style="max-height:25px;  position:relative; top:3px; margin-right:80px;">
		  <script>setTimeout(function () {window.location.replace("http://localhost/airlines-demo/private.php", "_blank");}, 1000);</script></h1>'; 
}elseif($result && $flag==3){
	echo '<h1 style="text-align:center; color:#00cc00; position:absolute; transform:translate(-50%, -50%); left:50%; top:40%;" >successful update 
		  <img src="../images/381607_complete_icon.png" alt="image" style="max-height:25px;  position:relative; top:3px; margin-right:80px;">
		  <script>setTimeout(function () {window.location.replace("http://localhost/airlines-demo/private.php", "_blank");}, 1000);</script></h1>'; 
}    


if($flag==0 && $result){
// Εμφάνιση αποτελεσμάτων στις γραμμές του πίνακα
echo "<link rel='stylesheet' href='../CSS/Style4.css'>";
echo '<h2 style="text-align:center; color:#3399ff; font-size:2cm;">Aircraft list</h2>';
echo "<div class='columns'>";
echo '<form method="post" action="private_sql.php">';
echo '<table class="first">';
echo "<tr>
		<th style='padding-left:40px; padding-right:40px;'>Aircraft code</th>
		<th style='padding-left:40px; padding-right:40px;'>Capacity</th>
		<th style='padding-left:40px; padding-right:40px;'>Range(km)</th>
	 </tr>";

while($row = pg_fetch_array($result)) {
echo "<tr>
		<td style='padding-left:40px; padding-right:40px;'>".$row['aircraft_code']."</td>".
		"<td style='padding-left:40px; padding-right:40px;'>".$row['capacity']."</td>".
		"<td style='padding-left:40px; padding-right:40px;'>".$row['range']."</td>	
	  </tr>";
echo '<script> document.querySelector("#delete").addEventListener("click",function(){console.log(document.querySelector("#aircraft").value) ;});</script>';
}
echo'	
	</table >
	<hr style="border:1px solid red;">
	<table class="first">
		<tr>
			<td style="padding-left:30px; padding-right:30px;">write air_code</td>
			<td style="padding-left:30px; padding-right:30px;">write capacity</td>
			<td style="padding-left:30px; padding-right:30px;">write range</td>
		<tr>
		<tr>
			<td style="padding-left:30px; padding-right:30px;"><input type=text name="aircraft1" maxlength=20 size=3 style="text-align:center; font-size:15px; color:black;"></td>
			<td style="padding-left:30px; padding-right:30px;"><input type=text name="capacity" maxlength=3 size=3 style="text-align:center; font-size:15px; color:black;"></td>
			<td style="padding-left:30px; padding-right:30px;"><input type=text name="range" maxlength=6 size=6 style="text-align:center; font-size:15px; color:black;"></td>
		</tr>
	</table>
	<div style="text-align:left; margin-top:10px;"><input type="submit" name="change" value="Change" style="margin-left:55px;color:red;"></div>
	<br>
	<hr style="border:1px solid red;">
	<br>
	<div style="text-align:right; font-size:15px; color:black;">copy/paste aircraft_code that you want to delete&nbsp;<input type=text name="aircraft2" maxlength=20 size=1 style="text-align:center; font-size:15px; color:black;">&nbsp;<input type="submit" name="delete" value="Delete" style="color:red;"></div>
	<br>	
	<hr style="border:1px solid red;">
	<br>
	<div style="text-align:right; font-size:15px; color:black;">New aircraft<a href="../private.php"><input type="button" name="back" value="Add" style="color:red; text-align:center;"></a></div>
	</form>
</div>';
}
pg_close($dbconn);
?>


