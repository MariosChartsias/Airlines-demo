<?php

//Create connection to database:
$connecionstr="host='localhost' port='5432' dbname='Personal' user='postgres' password='123456' options='--client_encoding=UTF8'";
$dbconn = pg_connect($connecionstr);
// connection check
if (!$dbconn) {
	die("Connection failed: " . pg_connect_error());
}
$flag=-1;
if(isset($_POST['search2']) && $_POST['search2']=='Search'){
	$sql = "SELECT flight_code_fk, ticket_no_fk,passenger_id FROM flight_date LEFT JOIN ticket ON ticket.ticket_no=flight_date.ticket_no_fk WHERE date='".$_POST['date']."';";
	$flag=1;
	$myfile = fopen("date.txt", "w");
	$txt = $_POST['date'];
	fwrite($myfile, $txt);
	fclose($myfile);
}elseif(isset($_POST['search3']) && $_POST['search3']=='Search'){
	$sql = "SELECT passenger_id, first_name, last_name, book_date FROM flight_date LEFT JOIN ticket ON flight_date.ticket_no_fk=ticket.ticket_no LEFT JOIN reservation ON reservation.book_ref=ticket.book_ref_fk WHERE flight_code_fk='".$_POST['flight_code_fk']."';";
	$flag=2;
}
	
$result = pg_query($dbconn, $sql) ;
 
if($flag==1 && $result){
// Εμφάνιση αποτελεσμάτων στις γραμμές του πίνακα
echo "<link rel='stylesheet' href='../CSS/Style4.css'>";
echo "<h2 style='text-align:center; color:#3399ff; font-size:2cm;'>Find by date at ".$_POST['date']."</h2>";
echo "<div class='columns'>";
echo '<table class="first">';
echo "<tr>
		<th style='padding-left:40px; padding-right:40px;'>Flight code</th>
	 </tr>";

while($row = pg_fetch_array($result)) {
echo "<tr>
		<td style='padding-left:40px; padding-right:40px;'>".$row['flight_code_fk']."</td>". 
	 "</tr>";
};
echo '</table>';
echo '<hr style="border:1px solid red;">';
echo '<form method="post" action="find_by_date_sql.php">';
echo '<table style="margin-left:auto; margin-right:auto; text-align:center; border:1px solid black; padding:20px; background-color:#d9d9d9;">
	<tr>
		<th style="padding-left:10px; border:none; border:none; background-color:#d9d9d9; color:black;">flight code:</th>
		<th style="border:none; background-color:#d9d9d9;"><input type="text" id="flight_code_fk" name="flight_code_fk" maxlength=7 placeholder:"flight code" style="border:none; text-align:center; padding:0;"></th>
		<th style="padding-left:10px; padding-right:40px; border:none; background-color:#d9d9d9;"><input type="submit" id="search" name="search3" value="Search" style="cursor:pointer; background-color: #e7e7e7; color: black; border-radius:8px; width:150%; font-size:15px;"></th>
	<tr>
  </table>';
echo '<hr style="border:1px solid red;">';
echo '<form method="post" action="find_by_date_sql.php">';
echo '<table style="margin-left:auto; margin-right:auto; text-align:center; border:1px solid black; padding:20px; background-color:#d9d9d9;">
	<tr>
      <td style="padding-left:40px; padding-right:40px; border:none; background-color:#d9d9d9;"><input type="date" id="date" name="date"></td>
      <td style="border:none; background-color:#d9d9d9;"><input type="submit" id="search2" name="search2" value="Search" style="background-color: #e7e7e7; cursor:pointer; color:black; border-radius:8px; width:100%; font-size:15px;"></td>
    </tr>
  </table>';
echo '</form>
<hr style="border:1px solid red;">
<div style="text-align:right; font-size:15px; color:black;"><a href="../private.php"><input type="button" name="back" value="Back" style="color:red; text-align:center;"></a></div>
</div>';
};
if($flag==2 && $result){
$myfile = fopen("date.txt", "r") or die("Unable to open file!");

// Εμφάνιση αποτελεσμάτων στις γραμμές του πίνακα
echo "<link rel='stylesheet' href='../CSS/Style4.css'>";
echo "<h2 style='text-align:center; color:#3399ff; font-size:2cm;'>Passengers and Bookings in ".$_POST['flight_code_fk']." at ";echo fread($myfile,filesize("date.txt")); echo "</h2>";
echo "<div class='columns'>";
echo '<table class="first">';
echo "<tr>
		<th style='padding-left:40px; padding-right:40px;'>Passenger id</th>
		<th style='padding-left:40px; padding-right:40px;'>First name</th>
		<th style='padding-left:40px; padding-right:40px;'>Last name</th>
		<th style='padding-left:40px; padding-right:40px;'>Book date</th>
	 </tr>";
fclose($myfile);
while($row = pg_fetch_array($result)) {
echo "<tr>
		<td style='padding-left:40px; padding-right:40px;'>".$row['passenger_id']."</td>".
		"<td style='padding-left:40px; padding-right:40px;'>".$row['first_name']."</td>".
		"<td style='padding-left:40px; padding-right:40px;'>".$row['last_name']."</td>".
		"<td style='padding-left:40px; padding-right:40px;'>".$row['book_date']."</td>".
	 "</tr>";
};
echo '</table>';
echo '<hr style="border:1px solid red;">';
echo '<form method="post" action="find_by_date_sql.php">';
echo '<table style="margin-left:auto; margin-right:auto; text-align:center; border:1px solid black; padding:20px; background-color:#d9d9d9;">
	<tr>
      <td style="padding-left:40px; padding-right:40px; border:none; background-color:#d9d9d9;"><input type="date" id="date" name="date"></td>
      <td style="border:none; background-color:#d9d9d9;"><input type="submit" id="search2" name="search2" value="Search" style="background-color: #e7e7e7; cursor:pointer; color:black; border-radius:8px; width:100%; font-size:15px;"></td>
    </tr>
  </table>';
echo '</form>
<hr style="border:1px solid red;">
<div style="text-align:right; font-size:15px; color:black;"><a href="../private.php"><input type="button" name="back" value="Back" style="color:red; text-align:center;"></a></div>
</div>';
};
echo '<script src="../JavaScript/private_script.js"></script>';
pg_close($dbconn);

?>

