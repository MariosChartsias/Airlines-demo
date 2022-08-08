<?php
//Create connection to database:
$dbconn = pg_connect(getenv("DATABASE_URL"));
// connection check
if (!$dbconn) {
	die("Connection failed: " . pg_connect_error());
}
$flag=-1;
if(isset($_POST['search']) && $_POST['search']=='Search'){
	$sql = "SELECT COUNT(SPLIT_PART(flight_code_fk,'-',2)),code,name,city FROM public.flight_date  LEFT JOIN public.airport ON code=SPLIT_PART(flight_code_fk,'-',2) WHERE date BETWEEN '".$_POST['year']."-01-01' AND '".$_POST['year']."-12-31' GROUP BY code ORDER BY COUNT(*) DESC LIMIT 5;";
	$flag=1;
}
	
$result = pg_query($dbconn, $sql) ;

if(!$result && $flag==1){
	echo '<h1 style="text-align:center; color:red; position:absolute; transform:translate(-50%, -50%); left:50%; top:40%;" >Incomplete connection into database, please try again 
	<img src="../images/Delete-Red-X-Button-Transparent.png" alt="image" style="max-height:25px;  position:relative; top:5px; margin-right:80px;">
	</h1>';
	echo '<script>setTimeout(function () {window.location.replace("http://localhost/airlines-demo/sign_up.php", "_blank");}, 91000);</scipt>';
}; 
if($flag==1 && $result){
// Εμφάνιση αποτελεσμάτων στις γραμμές του πίνακα
echo "<link rel='stylesheet' href='../CSS/Style4.css'>";
echo '<h2 style="text-align:center; color:#3399ff; font-size:2cm;">Top 5 destinations</h2>';
echo "<div class='columns'>";
echo '<table class="first">';
echo "<tr>
		<th style='padding-left:40px; padding-right:40px;'>Airport</th>
		<th style='padding-left:40px; padding-right:40px;'>City</th>
		<th style='padding-left:40px; padding-right:40px;'>Visited</th>
	 </tr>";
};
while($row = pg_fetch_array($result)) {
echo "<tr>
		<td style='padding-left:40px; padding-right:40px;'>".$row['name']."</td>".
		"<td style='padding-left:40px; padding-right:40px;'>".$row['city']."</td>".
		"<td style='padding-left:40px; padding-right:40px;'>".$row['count']."</td>".
	 "</tr>";
};
echo '</table>';
echo '<hr style="border:1px solid red;">';
echo '<form method="post" action="top5_sql.php">';
echo '<table style="margin-left:auto; margin-right:auto; text-align:center; border:1px solid black; padding:20px; background-color:#d9d9d9;">
    <tr></tr>
	<tr>
		<th style="padding-left:10px; border:none;">year:</th>
		<th style="border:none; background-color:#d9d9d9;"><input type="number" id="year" name="year" min="2000" value="2022" max="2022" style="border:none; text-align:center; padding:0;"></th>
		<th style="padding-left:10px; padding-right:40px; border:none;"><input type="submit" id="search" name="search" value="Search" style="cursor:pointer; background-color: #e7e7e7; color: black; border-radius:8px; width:150%; font-size:15px;"></th>
	<tr>
	</tr>
  </table>';
echo '</form>
<hr style="border:1px solid red;">
<div style="text-align:right; font-size:15px; color:black;"><a href="../private.php"><input type="button" name="back" value="Back" style="color:red; text-align:center;"></a></div>
</div>';
pg_close($dbconn);
?>


