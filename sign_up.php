<!Doctype html>
<html> 
	<head>
		<link rel="icon" href="images/login.png">
		<meta charset="utf-8" name="viewport" content="width=device-width, user-scalable=no"/>
		<title>Sign up</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</head>
<body style="background:linear-gradient(to bottom,#AFEEEE,#3399ff) fixed;">
<div id="printable" style="position:fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); border: none; padding: 20px; background-color:white; max-width:88%; max-height:75%; min-width:25%; min-height:60%; overflow: auto; box-shadow: 0 0 1px 1px #8A2BE2;">
	<h3 style="position:fixed; left:40%; margin-top:-0.2cm;">Sign up</h3>
	<br>
	<form method="post" action="PSQL/sign_up_sql.php" style="padding:0; text-align:justify; min-width:10cm; max-width:10cm;">
		<table>
			<tr>
				<td><span id="rfname" style="color:red; font-size:13.5px;"><br></span></td>
				<td><span id="rlname" style="color:red; font-size:13.5px;"><br></span></td>
			</tr>
			<tr>
				<td><input type="text" name="fname" id="fname" placeholder="first name"></td>
				<td><input type="text" name="lname" id="lname" placeholder="last name"></td>
			</tr>
			<tr>
				<td><span id="radress" style="color:red; font-size:13.5px;"><br></span></td>
				<td><span id="rpostal" style="color:red; font-size:13.5px;"><br></span></td>
			</tr>
			<tr>
				<td><input id="adress" type="text" name="adress" placeholder="adress"></td>
				<td><input id="postal" type="text" name="postal" placeholder="postal code" maxlength="5"></td>
			</tr>
			<tr>
				<td><span id="rCountry" style="color:red; font-size:13.5px;"><br></span></td>
				<td></td>
			</tr>	
			<tr>
				<td>
					<select id="Country" name="country">
						<option> Country </option>
						<option>	Afghanistan	</option>
						<option>	Albania	</option>
						<option>	Algeria	</option>
						<option>	Andorra	</option>
						<option>	Angola	</option>
						<option>	Antigua & Deps	</option>
						<option>	Argentina	</option>
						<option>	Armenia	</option>
						<option>	Australia	</option>
						<option>	Austria	</option>
						<option>	Azerbaijan	</option>
						<option>	Bahamas	</option>
						<option>	Bahrain	</option>
						<option>	Bangladesh	</option>
						<option>	Barbados	</option>
						<option>	Belarus	</option>
						<option>	Belgium	</option>
						<option>	Belize	</option>
						<option>	Benin	</option>
						<option>	Bhutan	</option>
						<option>	Bolivia	</option>
						<option>	Bosnia Herzegovina	</option>
						<option>	Botswana	</option>
						<option>	Brazil	</option>
						<option>	Brunei	</option>
						<option>	Bulgaria	</option>
						<option>	Burkina	</option>
						<option>	Burundi	</option>
						<option>	Cambodia	</option>
						<option>	Cameroon	</option>
						<option>	Canada	</option>
						<option>	Cape Verde	</option>
						<option>	Central African Rep	</option>
						<option>	Chad	</option>
						<option>	Chile	</option>
						<option>	China	</option>
						<option>	Colombia	</option>
						<option>	Comoros	</option>
						<option>	Congo	</option>
						<option>	Congo {Democratic Rep}	</option>
						<option>	Costa Rica	</option>
						<option>	Croatia	</option>
						<option>	Cuba	</option>
						<option>	Cyprus	</option>
						<option>	Czech Republic	</option>
						<option>	Denmark	</option>
						<option>	Djibouti	</option>
						<option>	Dominica	</option>
						<option>	Dominican Republic	</option>
						<option>	East Timor	</option>
						<option>	Ecuador	</option>
						<option>	Egypt	</option>
						<option>	El Salvador	</option>
						<option>	Equatorial Guinea	</option>
						<option>	Eritrea	</option>
						<option>	Estonia	</option>
						<option>	Ethiopia	</option>
						<option>	Fiji	</option>
						<option>	Finland	</option>
						<option>	France	</option>
						<option>	Gabon	</option>
						<option>	Gambia	</option>
						<option>	Georgia	</option>
						<option>	Germany	</option>
						<option>	Ghana	</option>
						<option>	Greece	</option>
						<option>	Grenada	</option>
						<option>	Guatemala	</option>
						<option>	Guinea	</option>
						<option>	Guinea-Bissau	</option>
						<option>	Guyana	</option>
						<option>	Haiti	</option>
						<option>	Honduras	</option>
						<option>	Hungary	</option>
						<option>	Iceland	</option>
						<option>	India	</option>
						<option>	Indonesia	</option>
						<option>	Iran	</option>
						<option>	Iraq	</option>
						<option>	Ireland {Republic}	</option>
						<option>	Israel	</option>
						<option>	Italy	</option>
						<option>	Ivory Coast	</option>
						<option>	Jamaica	</option>
						<option>	Japan	</option>
						<option>	Jordan	</option>
						<option>	Kazakhstan	</option>
						<option>	Kenya	</option>
						<option>	Kiribati	</option>
						<option>	Korea North	</option>
						<option>	Korea South	</option>
						<option>	Kosovo	</option>
						<option>	Kuwait	</option>
						<option>	Kyrgyzstan	</option>
						<option>	Laos	</option>
						<option>	Latvia	</option>
						<option>	Lebanon	</option>
						<option>	Lesotho	</option>
						<option>	Liberia	</option>
						<option>	Libya	</option>
						<option>	Liechtenstein	</option>
						<option>	Lithuania	</option>
						<option>	Luxembourg	</option>
						<option>	Macedonia	</option>
						<option>	Madagascar	</option>
						<option>	Malawi	</option>
						<option>	Malaysia	</option>
						<option>	Maldives	</option>
						<option>	Mali	</option>
						<option>	Malta	</option>
						<option>	Marshall Islands	</option>
						<option>	Mauritania	</option>
						<option>	Mauritius	</option>
						<option>	Mexico	</option>
						<option>	Micronesia	</option>
						<option>	Moldova	</option>
						<option>	Monaco	</option>
						<option>	Mongolia	</option>
						<option>	Montenegro	</option>
						<option>	Morocco	</option>
						<option>	Mozambique	</option>
						<option>	Myanmar, {Burma}	</option>
						<option>	Namibia	</option>
						<option>	Nauru	</option>
						<option>	Nepal	</option>
						<option>	Netherlands	</option>
						<option>	New Zealand	</option>
						<option>	Nicaragua	</option>
						<option>	Niger	</option>
						<option>	Nigeria	</option>
						<option>	Norway	</option>
						<option>	Oman	</option>
						<option>	Pakistan	</option>
						<option>	Palau	</option>
						<option>	Panama	</option>
						<option>	Papua New Guinea	</option>
						<option>	Paraguay	</option>
						<option>	Peru	</option>
						<option>	Philippines	</option>
						<option>	Poland	</option>
						<option>	Portugal	</option>
						<option>	Qatar	</option>
						<option>	Romania	</option>
						<option>	Russian Federation	</option>
						<option>	Rwanda	</option>
						<option>	St Kitts & Nevis	</option>
						<option>	St Lucia	</option>
						<option>	Samoa	</option>
						<option>	San Marino	</option>
						<option>	Sao Tome & Principe	</option>
						<option>	Saudi Arabia	</option>
						<option>	Senegal	</option>
						<option>	Serbia	</option>
						<option>	Seychelles	</option>
						<option>	Sierra Leone	</option>
						<option>	Singapore	</option>
						<option>	Slovakia	</option>
						<option>	Slovenia	</option>
						<option>	Solomon Islands	</option>
						<option>	Somalia	</option>
						<option>	South Africa	</option>
						<option>	South Sudan	</option>
						<option>	Spain	</option>
						<option>	Sri Lanka	</option>
						<option>	Sudan	</option>
						<option>	Suriname	</option>
						<option>	Swaziland	</option>
						<option>	Sweden	</option>
						<option>	Switzerland	</option>
						<option>	Syria	</option>
						<option>	Taiwan	</option>
						<option>	Tajikistan	</option>
						<option>	Tanzania	</option>
						<option>	Thailand	</option>
						<option>	Togo	</option>
						<option>	Tonga	</option>
						<option>	Trinidad & Tobago	</option>
						<option>	Tunisia	</option>
						<option>	Turkey	</option>
						<option>	Turkmenistan	</option>
						<option>	Tuvalu	</option>
						<option>	Uganda	</option>
						<option>	Ukraine	</option>
						<option>	United Arab Emirates	</option>
						<option>	United Kingdom	</option>
						<option>	United States	</option>
						<option>	Uruguay	</option>
						<option>	Uzbekistan	</option>
						<option>	Vanuatu	</option>
						<option>	Vatican City	</option>
						<option>	Venezuela	</option>
						<option>	Vietnam	</option>
						<option>	Yemen	</option>
						<option>	Zambia	</option>
						<option>	Zimbabwe	</option>
					</select>
				</td>
				<td><hr style="border:2px solid gray; border-bottom:none; border-right:none; border-left:none;"></td>
			</tr>
			<tr>
				<td><span id="rcode" style="color:red; font-size:13.5px;"><br></span></td>
				<td><span id="rnumber" style="color:red; font-size:13.5px;"><br></span></td>
			</tr>
				<td>
				<select style="float:center; width: 4.5cm; size:1cm;" id="code" name="code">
						<option>	Country code	</option>
						<option>	+93	</option>
						<option>	+355	</option>
						<option>	+213	</option>
						<option>	+1-684	</option>
						<option>	+376	</option>
						<option>	+244	</option>
						<option>	+1-264	</option>
						<option>	+672	</option>
						<option>	+1-268	</option>
						<option>	+54	</option>
						<option>	+374	</option>
						<option>	+297	</option>
						<option>	+61	</option>
						<option>	+43	</option>
						<option>	+994	</option>
						<option>	+1-242	</option>
						<option>	+973	</option>
						<option>	+880	</option>
						<option>	+1-246	</option>
						<option>	+375	</option>
						<option>	+32	</option>
						<option>	+501	</option>
						<option>	+229	</option>
						<option>	+1-441	</option>
						<option>	+975	</option>
						<option>	+591	</option>
						<option>	+387	</option>
						<option>	+267	</option>
						<option>	+55	</option>
						<option>	+673	</option>
						<option>	+359	</option>
						<option>	+226	</option>
						<option>	+257	</option>
						<option>	+855	</option>
						<option>	+237	</option>
						<option>	+1	</option>
						<option>	+238	</option>
						<option>	+1-345	</option>
						<option>	+236	</option>
						<option>	+235	</option>
						<option>	+56	</option>
						<option>	+86	</option>
						<option>	+53	</option>
						<option>	+57	</option>
						<option>	+269	</option>
						<option>	+243	</option>
						<option>	+242	</option>
						<option>	+682	</option>
						<option>	+506	</option>
						<option>	+225	</option>
						<option>	+385	</option>
						<option>	+357	</option>
						<option>	+420	</option>
						<option>	+45	</option>
						<option>	+253	</option>
						<option>	+1-767	</option>
						<option>	+1-809</option>
						<option>	+670	</option>
						<option>	+593 	</option>
						<option>	+20	</option>
						<option>	+503	</option>
						<option>	+240	</option>
						<option>	+291	</option>
						<option>	+372	</option>
						<option>	+251	</option>
						<option>	+500	</option>
						<option>	+298	</option>
						<option>	+679	</option>
						<option>	+358	</option>
						<option>	+33	</option>
						<option>	+594	</option>
						<option>	+689	</option>
						<option>	+241	</option>
						<option>	+220	</option>
						<option>	+995	</option>
						<option>	+49	</option>
						<option>	+233	</option>
						<option>	+350	</option>
						<option>	+30	</option>
						<option>	+299	</option>
						<option>	+1-473	</option>
						<option>	+590	</option>
						<option>	+1-671	</option>
						<option>	+502	</option>
						<option>	+224	</option>
						<option>	+245	</option>
						<option>	+592	</option>
						<option>	+509	</option>
						<option>	+504	</option>
						<option>	+852	</option>
						<option>	+36	</option>
						<option>	+354	</option>
						<option>	+91	</option>
						<option>	+62	</option>
						<option>	+98	</option>
						<option>	+964	</option>
						<option>	+353	</option>
						<option>	+972	</option>
						<option>	+39	</option>
						<option>	+1-876	</option>
						<option>	+81	</option>
						<option>	+962	</option>
						<option>	+7	</option>
						<option>	+254	</option>
						<option>	+686	</option>
						<option>	+850	</option>
						<option>	+82	</option>
						<option>	+965	</option>
						<option>	+996	</option>
						<option>	+856	</option>
						<option>	+371	</option>
						<option>	+961	</option>
						<option>	+266	</option>
						<option>	+231	</option>
						<option>	+218	</option>
						<option>	+423	</option>
						<option>	+370	</option>
						<option>	+352	</option>
						<option>	+853	</option>
						<option>	+389	</option>
						<option>	+261	</option>
						<option>	+265	</option>
						<option>	+60	</option>
						<option>	+960	</option>
						<option>	+223	</option>
						<option>	+356	</option>
						<option>	+692	</option>
						<option>	+596	</option>
						<option>	+222	</option>
						<option>	+230	</option>
						<option>	+52	</option>
						<option>	+691	</option>
						<option>	+373	</option>
						<option>	+377	</option>
						<option>	+976	</option>
						<option>	+1-664	</option>
						<option>	+212	</option>
						<option>	+258	</option>
						<option>	+95	</option>
						<option>	+264	</option>
						<option>	+674	</option>
						<option>	+977	</option>
						<option>	+31	</option>
						<option>	+599	</option>
						<option>	+687	</option>
						<option>	+64	</option>
						<option>	+505	</option>
						<option>	+227	</option>
						<option>	+234	</option>
						<option>	+683	</option>
						<option>	+1-670	</option>
						<option>	+47	</option>
						<option>	+968	</option>
						<option>	+92	</option>
						<option>	+680	</option>
						<option>	+970	</option>
						<option>	+507	</option>
						<option>	+675	</option>
						<option>	+595	</option>
						<option>	+51	</option>
						<option>	+63	</option>
						<option>	+48	</option>
						<option>	+351	</option>
						<option>	+1-939	</option>
						<option>	+1-787</option>
						<option>	+974 	</option>
						<option>	+262	</option>
						<option>	+40	</option>
						<option>	+250	</option>
						<option>	+290	</option>
						<option>	+1-869	</option>
						<option>	+1-758	</option>
						<option>	+508	</option>
						<option>	+1-784	</option>
						<option>	+685	</option>
						<option>	+378	</option>
						<option>	+239	</option>
						<option>	+966	</option>
						<option>	+221	</option>
						<option>	+248	</option>
						<option>	+232	</option>
						<option>	+65	</option>
						<option>	+421	</option>
						<option>	+386	</option>
						<option>	+677	</option>
						<option>	+252	</option>
						<option>	+27	</option>
						<option>	+34	</option>
						<option>	+94	</option>
						<option>	+249	</option>
						<option>	+597	</option>
						<option>	+268	</option>
						<option>	+46	</option>
						<option>	+41	</option>
						<option>	+963	</option>
						<option>	+886	</option>
						<option>	+992	</option>
						<option>	+255	</option>
						<option>	+66	</option>
						<option>	+690	</option>
						<option>	+676	</option>
						<option>	+1-868	</option>
						<option>	+216	</option>
						<option>	+90	</option>
						<option>	+993	</option>
						<option>	+1-649	</option>
						<option>	+688	</option>
						<option>	+256	</option>
						<option>	+380	</option>
						<option>	+971	</option>
						<option>	+44	</option>
						<option>	+598	</option>
						<option>	+998	</option>
						<option>	+678	</option>
						<option>	+418	</option>
						<option>	+58	</option>
						<option>	+84	</option>
						<option>	+1-284	</option>
						<option>	+1-340	</option>
						<option>	+681	</option>
						<option>	+967	</option>
						<option>	+260	</option>
						<option>	+263	</option>
					</select>
				</td>
				<td><input id="number" type="text" name="number" placeholder="number" maxlength="14"></td>
			</tr>
			<tr>
				<td><span id="remail" style="color:red; font-size:13.5px;"><br><br><br></span></td>
				<td><span id="rpassword" style="color:red; font-size:13.5px;"><br><br><br></span></td>
			</tr>
			<tr>
				<td><input id ="email" type="text" name="email" placeholder="email"></td>
				<td><input id="password" type="password" name="password" placeholder="password" maxlength="15"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" onclick="myFunction()">Show password</td>
			</tr>
			<tr>
				<td><span id="rcard" style="color:red; font-size:13.5px;"><br></span></td>
				<td><span id="rcardtype" style="color:red; font-size:13.5px;"><br></span></td>
			</tr>
			<tr>
				<td><input type="text" name="card" id="card" placeholder="XXXX-XXXX-XXXX-XXXX" maxlength="16"></td>
				<td>
					<select id="cardtype" name="CardType">
						<option>Type of Card</option>
						<option>Visa</option>
						<option>MasterCard</option>
						<option>Other</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><span id="rexpdate" style="color:red; font-size:13.5px;"><br></span></td>
				<td><span id="rccv" style="color:red; font-size:13.5px;"><br></span></td>
			</tr>
			<tr>
				<td><input id="expdate" type="text" name="expdate" placeholder="MM/YY" maxlength="5"></th>
				<td><input id="ccv" type="text" name="ccv" placeholder="CCV" size="2" maxlength="3"></th>
			</tr>
			<tr>
				<td><br></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td><input type="button" name="presubmit" id="presubmit" value="Submit"></td>
				<td><input type="reset" name="clear" id="clear" value="Clear"></td>
				<td><input type="button" name="print" id="print" value="Print"></td>
				<td><input type="submit" name="submit" id="submit" value="Submit" style="visibility:hidden;"></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td><a href="login.php"><input type="button" name="login" id="login" value="Login"></a></td>
				
			</tr>
		</table>
	</form>
<script src="JavaScript/sign_up.js"></script>
</div>


</body>
