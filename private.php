<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="images/NicePng_cloud-silhouette-png_1087607.png">
		<meta charset="utf-8" name="viewport" content="width=device-width, user-scalable=no"/>
		<title>Private</title>
	</head>
<body style="background:linear-gradient(to bottom,#AFEEEE,#3399ff) fixed;">
<div id="main">
    <h1 style="text-align:center; color:#2F4F4F;"> Find by Date</h1> 
	<form method="post" action="PSQL/find_by_date_sql.php">
	<table style="margin-left:auto; margin-right:auto; text-align:center; border:1px solid black; border-radius:8px; padding:20px; background:linear-gradient(to right,#87CEEB,white,#87CEEB);">
	<tr>
		<th style="padding-left:40px; padding-right:40px;">date</th>
		<th style="padding-left:40px; padding-right:40px;"></th>
	</tr>
    <tr>
      <td style="padding-left:40px; padding-right:40px;"><input type="date" id="date" name="date"></td>
      <td><input type="submit" id="search2" name="search2" value="Search" style="background-color: #e7e7e7; cursor:pointer; color:black; border-radius:8px; width:80%; font-size:15px;"></td>
    </tr>
  </table>
  </form>
  <br><br>
  <hr style="border:1px solid red;">
  
  <form method="post" action="PSQL/top5_sql.php">
  <h1 style="text-align:center; color:#2F4F4F;"> 5 most popular destinations of year</h1>
  <table style="margin-left:auto; margin-right:auto; text-align:center; border:1px solid black; border-radius:8px; padding:20px; background:linear-gradient(to right,#87CEEB,white,#87CEEB);">
    <tr>
		<th style="padding-left:10px;">year:</th>
		<th><input type="number" id="year" name="year" value="2022" min="2000" max="2022"></th>
		<th style="padding-left:10px; padding-right:40px;"><input type="submit" id="search" name="search" value="Search" style="background-color: #e7e7e7; cursor:pointer; color: black; border-radius:8px; width:150%; font-size:15px;"></th>
	<tr>
	</tr>
  </table>
  <br><br>
  </form>
  <hr style="border:1px solid red;">
  
	<h1 style="text-align:center; color:#2F4F4F;"> Aircraft entry (new)</h1>
	<form method="post" action="PSQL/private_sql.php">
		<div id="refresh" style="border:1px solid black; border-radius:8px; min-width:20cm; max-width:20cm; margin-left:auto; margin-right:auto; background:linear-gradient(to right,#87CEEB,white,#87CEEB);">
			<table id="aircrafts" style="margin-left:auto; margin-right:auto; text-align:center; padding:0;">
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<th style="padding-left:40px; padding-right:40px;">Aircraft code</th>
					<th style="padding-left:40px; padding-right:40px;">Capacity</th>
					<th style="padding-left:40px; padding-right:40px;">Range(km)</th>
				</tr>
				<tr>
					<td><input type="text" name="aircraft" maxlength=20></td>
					<td><input type="text" name="capacity" maxlength=3></td>
					<td><input type="text" name="range" maxlength=6></td>
					<td><input type="submit" name="submit" value="Submit" style="cursor:pointer;"></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><br></td>
				</tr>
			</table>	
		</div>
		<br>
	<div style="text-align:center; font-size:30px; color:white;">click the <input type="submit" name="search" value="Search" style="color:red; cursor:pointer; position:relative; bottom:4px;"> to see the whole list of aircrafts</div>
	</form>


</div>
<script src="JavaScript/private_script.js"></script>
</body>
</html>
