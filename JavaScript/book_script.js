document.querySelector('#plus1').addEventListener('click',function(){
	 document.querySelector('#count1').innerText++;
});
document.querySelector('#plus2').addEventListener('click',function(){
	 document.querySelector('#count2').innerText++;
});
document.querySelector('#minus1').addEventListener('click',function(){
	if(document.querySelector('#count1').innerText>1){
		document.querySelector('#count1').innerText--;
	}
});
document.querySelector('#minus2').addEventListener('click',function(){
	if(document.querySelector('#count2').innerText>0){
		document.querySelector('#count2').innerText--;
	}
});

document.querySelector('#search').addEventListener('click', function(){
	if(document.querySelector('#dep_airport').options[document.querySelector('#dep_airport').selectedIndex].value==document.querySelector('#arr_airport').options[document.querySelector('#arr_airport').selectedIndex].value)
	{document.querySelector('h4').innerText="departure and arrival airport cannot be the same"}
	else{document.querySelector('h4').innerText=""};
	
});

date.min = new Date().toISOString().split("T")[0];
date.value = new Date().toISOString().split("T")[0];
var x=(new Date().getYear()+1900).toString();
var y=new Date().getMonth()+2;
if(y<12){
	y.toString();
	y='0'+y;
}else{
	y=y-12;
	if(y<10){
		y.toString();
		y='0'+y;
	}else{
		y.toString();
	}
}
var z=(new Date().getDate());
if(z<10){
	z.toString();
	z='0'+z;
}else{
	z.toString();
}
let i=x+'-'+y+'-'+z;
date.max = i;

	