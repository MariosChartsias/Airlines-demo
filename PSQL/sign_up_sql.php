<?php
//Create connection to database:
$dbconn = pg_connect(getenv("DATABASE_URL"));
// connection check
if (!$dbconn) {
	die("Connection failed: " . pg_connect_error());
}
$flag=-1;
if (isset($_POST['submit']) && $_POST['submit']=='Submit') {
	//create row
	$sql = "INSERT INTO info(fname, lname, adress, postal, country, country_code, number, email, password, card, typeofcard, expdate, ccv) VALUES('".$_POST['fname']."','".$_POST['lname']."','".$_POST['adress']."','".$_POST['postal']."','".$_POST['country']."','".$_POST['code']."','".$_POST['number']."','".$_POST['email']."','".$_POST['password']."','".$_POST['card']."','".$_POST['CardType']."','".$_POST['expdate']."','".$_POST['ccv']."')";
	$flag=1;
}else if(isset($_POST['login']) && $_POST['login']=='Login'){
	$sql = "SELECT * FROM info WHERE email='".$_POST['email']."' AND password='".$_POST['password']."';";
	$flag=0;
}else if(isset($_POST['delete']) && $_POST['delete']=='delete'){
	$sql = "DELETE FROM info WHERE email='".$_POST['email']."';";
	$flag=2;
}

$result = pg_query($dbconn, $sql) ;

if ($result && $flag==1) {
	echo '<h1 style="text-align:center; color:#00cc00; position:absolute; transform:translate(-50%, -50%); left:50%; top:40%;" >successful registration 
		  <img src="../images/381607_complete_icon.png" alt="image" style="max-height:25px;  position:relative; top:3px; margin-right:80px;">
		  <script>setTimeout(function () {window.location.replace("http://localhost/airlines-demo/index.php", "_blank");}, 4000);</script></h1>'; 
}elseif(!$result && $flag==1){
	echo '<h1 style="text-align:center; color:red; position:absolute; transform:translate(-50%, -50%); left:50%; top:40%;" >Incomplete connection into database, please try again 
	<img src="../images/Delete-Red-X-Button-Transparent.png" alt="image" style="max-height:25px;  position:relative; top:5px; margin-right:80px;">
	</h1>';
	echo '<script>setTimeout(function () {window.location.replace("http://localhost/airlines-demo/sign_up.php", "_blank");}, 1000);</scipt>';
}elseif($result && $flag==2){
	echo '<h1 style="text-align:center; color:#00cc00; position:absolute; transform:translate(-50%, -50%); left:50%; top:40%;" >successful delete 
		  <img src="../images/381607_complete_icon.png" alt="image" style="max-height:25px;  position:relative; top:3px; margin-right:80px;">
		  <script>setTimeout(function () {window.location.replace("http://localhost/airlines-demo/index.php", "_blank");}, 4000);</script></h1>'; 
}elseif((pg_fetch_array($result)) && $flag==0){
	echo '<h1 style="text-align:center; color:red; position:absolute; transform:translate(-50%, -50%); left:50%; top:40%;" >Wrong username or password, please try again 
	<img src="../images/Delete-Red-X-Button-Transparent.png" alt="image" style="max-height:25px;  position:relative; top:5px; margin-right:80px;">
	</h1>';
	echo '<script>setTimeout(function () {window.location.replace("http://localhost/airlines-demo/sign_up.php", "_blank");}, 1000);</scipt>';
}  


if($flag==0 && $result){
// Εμφάνιση αποτελεσμάτων στις γραμμές του πίνακα
echo "<link rel='stylesheet' href='../CSS/Style3.css'>";
echo '<h1 style="text-align:center; color:#3399ff; font-size:3cm;">Personal informations</h1>';
echo '<div>';
echo '<form method="post" action="sign_up_sql.php">';
echo '<table style="width:100px;">';
echo "<tr>
		<th>first name</th>
		<th>last name</th>
		<th>adress</th>
		<th>postal</th>
		<th>Country</th>
		<th>Country code</th>
		<th>number</th>
		<th>email</th>
		<th>password</th>
		<th>card number</th>
		<th>type of Card</th>
		<th>EXP date</th>
		<th>CCV</th>
	 </tr>";
}

while($row = pg_fetch_array($result)) {


echo "<tr id='personal'>
		 <td>".$row['fname']."</td>".
		"<td>".$row['lname']."</td>".
		"<td>".$row['adress']."</td>".
		"<td>".$row['postal']."</td>".
		"<td>".$row['country']."</td>".
		"<td>".$row['country_code']."</td>".
		"<td>".$row['number']."</td>".
		"<td>".$row['email']."</td>".
		"<td>".$row['password']."</td>".
		"<td>".$row['card']."</td>".
		"<td>".$row['typeofcard']."</td>".
		"<td>".$row['expdate']."</td>".
		"<td>".$row['ccv']."</td>
		
	  </tr>";
echo "</table>" ;
echo '<p style="text-align:left;">Delete your account: <input type="submit" style="color:red;" id="delete" name="delete" value="delete"><br><br>write your email: <input type="email" id ="email" name="email"><p>';
echo "</form>";
echo '</div>';

echo '<script> document.querySelector("#personal").addEventListener("click",function(){ window.location.href = "http://localhost/airlines-demo/index.php";});</script>';
}
pg_close($dbconn);
?>


