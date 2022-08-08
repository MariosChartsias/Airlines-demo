document.querySelector('#print').addEventListener('click',function(){           /*************print button function************/
	 window.print();
});
const arr1 = new Array(13).fill(false);
var total= new Boolean(true);

document.querySelector('#clear').addEventListener('click',function(){           /*************print button function************/
	for (let i = 0; i < arr1.length; i++) {
	arr1[i]=false;
	}
});
$(document).keypress(												/*using JQuery disable the enter button */
  function(event){
    if (event.which == '13') {
      event.preventDefault();
    }
});

document.querySelector('#clear').addEventListener('click',function(){           /*************clear button function************/
	document.querySelector('#fname').style="border:1px solid black;"
	document.querySelector('#rfname').innerHTML="<br>";
	document.querySelector('#lname').style="border:1px solid black;"
	document.querySelector('#rlname').innerHTML="<br>";
	document.querySelector('#adress').style="border:1px solid black;"
	document.querySelector('#radress').innerHTML="<br>";
	document.querySelector('#postal').style="border:1px solid black;"
	document.querySelector('#rpostal').innerHTML="<br>";
	document.querySelector('#number').style="border:1px solid black;"
	document.querySelector('#rnumber').innerHTML="<br>";
	document.querySelector('#Country').style="border:1px solid black;"
	document.querySelector('#rCountry').innerHTML="<br>";
	document.querySelector('#code').style="border:1px solid black;"
	document.querySelector('#rcode').innerHTML="<br>";
	document.querySelector('#email').style="border:1px solid black;"
	document.querySelector('#remail').innerHTML="<br>";
	document.querySelector('#password').style="border:1px solid black;"
	document.querySelector('#rpassword').innerHTML="<br><br><br>";
	document.querySelector('#card').style="border:1px solid black;"
	document.querySelector('#rcard').innerHTML="<br>";
	document.querySelector('#cardtype').style="border:1px solid black;"
	document.querySelector('#rcardtype').innerHTML="<br>";
	document.querySelector('#expdate').style="border:1px solid black;"
	document.querySelector('#rexpdate').innerHTML="<br>";
	document.querySelector('#ccv').style="border:1px solid black;"
	document.querySelector('#rccv').innerHTML="<br>";
});


document.querySelector('#fname').addEventListener('keyup', function(){          /*************first name check************/
	if(document.querySelector('#fname').value==''){arr1[0]=false}else{arr1[0]=true}
	if(!(/^[a-zA-Z]+$/.test(document.querySelector('#fname').value))){
		arr1[0]=false;
		document.querySelector('#fname').style="border:1px solid red;"
		document.querySelector('#rfname').innerText="wrong first name";
	}else{
		arr1[0]=true;
		document.querySelector('#fname').style="border:1px solid black;"
		document.querySelector('#rfname').innerHTML="<br>";
	}
});
		
	
document.querySelector('#lname').addEventListener('keyup', function(){          /*************last name check************/ 
	if(document.querySelector('#lname').value==''){arr1[1]=false}else{arr1[1]=true}      
	if(!(/^[a-zA-Z]+$/.test(document.querySelector('#lname').value))){
		arr1[1]=false;
		document.querySelector('#lname').style="border:1px solid red;"
		document.querySelector('#rlname').innerHTML="wrong last name";
	}else{
		arr1[1]=true;
		document.querySelector('#lname').style="border:1px solid black;"
		document.querySelector('#rlname').innerHTML="<br>";
	}
});

document.querySelector('#adress').addEventListener('keyup', function(){          /*************adress check************/       
	if(document.querySelector('#adress').value==''){arr1[2]=false}else{arr1[2]=true}
	if(!(/[A-Za-z-]+[\s0-9A-Za-z-]+/.test(document.querySelector('#adress').value))){
		arr1[2]=false;
		document.querySelector('#adress').style="border:1px solid red;"
		document.querySelector('#radress').innerHTML="wrong adress";
	}else{
		arr1[2]=true;
		document.querySelector('#adress').style="border:1px solid black;"
		document.querySelector('#radress').innerHTML="<br>";
	}
});

document.querySelector('#postal').addEventListener('keyup', function(){          /*************postal code check************/       
	if(document.querySelector('#postal').value==''){arr1[3]=false}else{arr1[3]=true}
	if(!(/^[0-9]{5,}$/.test(document.querySelector('#postal').value))){
		arr1[3]=false;
		document.querySelector('#postal').style="border:1px solid red;"
		document.querySelector('#rpostal').innerHTML="wrong postal code";
	}else{
		arr1[3]=true;
		document.querySelector('#postal').style="border:1px solid black;"
		document.querySelector('#rpostal').innerHTML="<br>";
	}
});

document.querySelector('#number').addEventListener('keyup', function(){          /*************phone number check************/       
	if(document.querySelector('#number').value==''){arr1[4]=false}else{arr1[4]=true}
	if(!(/[0-9]{5,}/.test(document.querySelector('#number').value))){
		arr1[4]=false;
		document.querySelector('#number').style="border:1px solid red;";
		document.querySelector('#rnumber').innerHTML="wrong phone number";
	}else{
		arr1[4]=true;
		document.querySelector('#number').style="border:1px solid black;"
		document.querySelector('#rnumber').innerHTML="<br>";
		}
});
	
document.querySelector('#email').addEventListener('keyup', function(){       			  	 /*************email check************/
	if(document.querySelector('#email').value==''){arr1[5]=false}else{arr1[5]=true}
	if(!(/[\d\w._-]+@[\d\w_-]+\.+[\w]{2,4}/.test(document.querySelector('#email').value))){
		arr1[5]=false;
		document.querySelector('#email').style="border:1px solid red;"
		document.querySelector('#remail').innerText="\n \n write a valid email";
	}else{
		arr1[5]=true;
		document.querySelector('#email').style="border:1px solid black;"
		document.querySelector('#remail').innerHTML="<br><br><br>";
		}
});

document.querySelector('#password').addEventListener('keyup', function(){  			        /*************Password check************/
	if(document.querySelector('#password').value==''){arr1[6]=false}else{arr1[6]=true}
	if(!(/(.*[A-Z]+.*[0-9]+.*)|(.*[0-9]+.*[A-Z]+.*)/.test(document.querySelector('#password').value)) || document.querySelector('#password').value.length<8){
		arr1[6]=false;
		document.querySelector('#password').style="border:1px solid red;"
		document.querySelector('#rpassword').innerText="8-15 characters\n1 digit 0 to 9\n1 CASE letter A to Z";
	}else{
		arr1[6]=true;
		document.querySelector('#password').style="border:1px solid black;"
		document.querySelector('#rpassword').innerHTML="<br><br><br>";
		}
});

function myFunction() {  														/***********************showing the password to user********************************/
  var x = document.getElementById("password");
  if (x.type == "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

document.querySelector('#card').addEventListener('keyup', function(){         		 /*************credit card check************/                                                                                                                                                  
	if(document.querySelector('#card').value==''){arr1[7]=false}else{arr1[7]=true}
	if(!(/[0-9]+/.test(document.querySelector('#card').value))){
		arr1[7]=false;
		document.querySelector('#card').style="border:1px solid red;";
		document.querySelector('#rcard').innerHTML="Invalid card Number";
		document.querySelector('#card').value=document.querySelector('#card').value.substring(0, document.querySelector('#card').value.length - 1);
	}else{
		arr1[7]=true;
		document.querySelector('#card').style="border:1px solid black;"
		document.querySelector('#rcard').innerHTML="<br>";
		}
});
function padTo2Digits(num) {return num.toString().padStart(2, '0')};
let month=padTo2Digits(new Date().getMonth() + 1);
let year = new Date().getFullYear().toString().slice(-2);
Number(year);

document.querySelector('#expdate').addEventListener('keyup', function(){        		  /*************expiration date check************/
	if(document.querySelector('#expdate').value==''){arr1[8]=false}else{arr1[8]=true}
	if(document.querySelector('#expdate').value.slice(-2)>year && document.querySelector('#expdate').value.slice(0,2)<13){
		arr1[8]=true;
		document.querySelector('#expdate').style="border:1px solid black;"
		document.querySelector('#rexpdate').innerHTML="<br>";
	}else if(document.querySelector('#expdate').value.slice(-2)==year && document.querySelector('#expdate').value.slice(0,2)>month && document.querySelector('#expdate').value.slice(0,2)<13){
		arr1[8]=true;
		document.querySelector('#expdate').style="border:1px solid black;"
		document.querySelector('#rexpdate').innerHTML="<br>";
	}else{
		arr1[8]=false;
		document.querySelector('#expdate').style="border:1px solid red;"
		document.querySelector('#rexpdate').innerText="please write a valid date";		
	}
	if(!(/^[0-9]+$/.test(document.querySelector('#expdate').value))){
		if(document.querySelector('#expdate').value.charAt(2)!='/'){ 
			if(document.querySelector('#expdate').value.charAt(2)!=''){
				arr1[8]=false;
				document.querySelector('#expdate').style="border:1px solid red;"
				document.querySelector('#rexpdate').innerText="please write a valid date";		
			}
		}
	}else{
		arr1[8]=true;
		document.querySelector('#expdate').style="border:1px solid black;"
		document.querySelector('#rexpdate').innerHTML="<br>";
		if(document.querySelector('#expdate').value.length==2 && event.key!='Backspace'){
			document.querySelector('#expdate').value+='/';
		}
	}
});

document.querySelector('#ccv').addEventListener('keyup', function(){        						  /*************ccv check************/      
	if(document.querySelector('#ccv').value==''){arr1[9]=false}else{arr1[9]=true}
	if(!(/^[0-9]{3}/.test(document.querySelector('#ccv').value))){
		arr1[9]=false;
		document.querySelector('#ccv').style="border:1px solid red;"
		document.querySelector('#rccv').innerHTML="please write a valid CCV";
	}else{
		arr1[9]=true;
		document.querySelector('#ccv').style="border:1px solid black;"
		document.querySelector('#rccv').innerHTML="<br>";
	}
});

document.querySelector('#Country').addEventListener('click', function(){					/*************Country check after clear button****************/
	if(document.querySelector('#Country').value!='Country'){
		arr1[10]=true;
		document.querySelector('#Country').style="border:1px solid black;"
		document.querySelector('#rCountry').innerHTML="<br>";
			}else{
			arr1[10]=false;
			document.querySelector('#Country').style="border:1px solid red;";
			document.querySelector('#rCountry').innerHTML="choose a Country";
			}
});
document.querySelector('#code').addEventListener('click', function(){						/****************Country code check after clear button**************/	
	if(document.querySelector('#code').value!='Country code'){
		arr1[11]=true;
		document.querySelector('#code').style="border:1px solid black;"
		document.querySelector('#rcode').innerHTML="<br>";
		}else{
			arr1[11]=false;
			document.querySelector('#code').style="border:1px solid red;";
			document.querySelector('#rcode').innerHTML="choose a Country code";
			}
});
document.querySelector('#cardtype').addEventListener('click', function(){							/*************Type of card check after clear button****************/
	if(document.querySelector('#cardtype').value!='Type of Card'){
		arr1[12]=true;
		document.querySelector('#cardtype').style="border:1px solid black;"
		document.querySelector('#rcardtype').innerHTML="<br>";
	}else{
		arr1[12]=false;
		document.querySelector('#cardtype').style="border:1px solid red;";
		document.querySelector('#rcardtype').innerHTML="select the type of card";
	}
});

document.querySelector('#presubmit').addEventListener('click',function(){           /*************check the form before submit************/
	total=true;
	for (let i = 0; i < arr1.length; i++) {
	total =  total && arr1[i];
	}
	if(total==true){
		document.querySelector('#submit').click();
		}else{
			alert('one or more fields are wrong/empty');
			if(document.querySelector('#fname').value==''){document.querySelector('#fname').style="border:1px solid red;";document.querySelector('#rfname').innerText="empty first name field";}
			if(document.querySelector('#lname').value==''){document.querySelector('#lname').style="border:1px solid red;";document.querySelector('#rlname').innerText="empty last name field";}
			if(document.querySelector('#adress').value==''){document.querySelector('#adress').style="border:1px solid red;";document.querySelector('#radress').innerText="empty adress field";}
			if(document.querySelector('#postal').value==''){document.querySelector('#postal').style="border:1px solid red;";document.querySelector('#rpostal').innerText="empty postal code field";}
			if(document.querySelector('#number').value==''){document.querySelector('#number').style="border:1px solid red;";document.querySelector('#rnumber').innerText="empty number field";}
			if(document.querySelector('#email').value==''){document.querySelector('#email').style="border:1px solid red;";document.querySelector('#remail').innerText="\n \nempty email field";}
			if(document.querySelector('#password').value==''){document.querySelector('#password').style="border:1px solid red;";document.querySelector('#rpassword').innerHTML="<br><br>"+"empty password field";}
			if(document.querySelector('#card').value==''){document.querySelector('#card').style="border:1px solid red;";document.querySelector('#rcard').innerText="empty card field";}
			if(document.querySelector('#expdate').value==''){document.querySelector('#expdate').style="border:1px solid red;";document.querySelector('#rexpdate').innerText="empty expiration date field";}
			if(document.querySelector('#ccv').value==''){document.querySelector('#ccv').style="border:1px solid red;";document.querySelector('#rccv').innerText="empty ccv field";}
			if(document.querySelector('#Country').value=='Country'){								/*************Country check after submit****************/   
				arr1[10]=false;
				document.querySelector('#Country').style="border:1px solid red;";
				document.querySelector('#rCountry').innerHTML="choose a Country";
				document.querySelector('#Country').addEventListener('click', function(){
				if(document.querySelector('#Country').value!='Country'){
					arr1[10]=true;
					document.querySelector('#Country').style="border:1px solid black;"
					document.querySelector('#rCountry').innerHTML="<br>";
					}else{
						arr1[10]=false;
						document.querySelector('#Country').style="border:1px solid red;";
						document.querySelector('#rCountry').innerHTML="choose a Country";
						}
				});
			}
			if(document.querySelector('#code').value=='Country code'){							/****************Country code check**************/ 
				arr1[11]=false;
				document.querySelector('#code').style="border:1px solid red;";
				document.querySelector('#rcode').innerHTML="choose a Country code";
				document.querySelector('#code').addEventListener('click', function(){
				if(document.querySelector('#code').value!='Country code'){
					arr1[11]=true;
					document.querySelector('#code').style="border:1px solid black;"
					document.querySelector('#rcode').innerHTML="<br>";
				}else{
					arr1[11]=false;
					document.querySelector('#code').style="border:1px solid red;";
					document.querySelector('#rcode').innerHTML="choose a Country code";
					}
				});		
			}
			
			if(document.querySelector('#cardtype').value=='Type of Card'){					/*************Type of card check****************/   
				arr1[12]=false;
				document.querySelector('#cardtype').style="border:1px solid red;";
				document.querySelector('#rcardtype').innerHTML="select the type of card";
				document.querySelector('#cardtype').addEventListener('click', function(){
				if(document.querySelector('#cardtype').value!='Type of Card'){
					arr1[12]=true;
					document.querySelector('#cardtype').style="border:1px solid black;"
					document.querySelector('#rcardtype').innerHTML="<br>";
					}else{
						arr1[12]=false;
						document.querySelector('#cardtype').style="border:1px solid red;";
						document.querySelector('#rcardtype').innerHTML="select the type of card";
						}
				});
			}
		}
});

		  
