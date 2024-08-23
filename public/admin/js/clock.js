function clock()
{
	//var monthArray = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
	var monthArray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	//var dayArray	= new Array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
	var dayArray	= new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
	
	var thetime=new Date();
	var nhours=thetime.getHours();
	var nmins=thetime.getMinutes();
	var nsecn=thetime.getSeconds();
	var nday=thetime.getDay();
	var nmonth=thetime.getMonth();
	var ntoday=thetime.getDate();
	var nyear=thetime.getYear();
	var AorP=" ";
	
	if (nhours>=12)
		AorP="P.M";
	else
		AorP="A.M";
	
	if (nhours>=13)
		nhours-=12;
	
	if (nhours==0)
	   nhours=12;
	
	if (nsecn<10)
	 nsecn="0"+nsecn;
	
	if (nmins<10)
	 nmins="0"+nmins;
	
	nday	= dayArray[nday];
	nmonth	= monthArray[nmonth];
	
	if (nyear<=99)
	  nyear= "19"+nyear;
	
	if ((nyear>99) && (nyear<2000))
	 nyear+=1900;
	
	//document.getElementById('clock').innerHTML=nhours+":"+nmins+":"+nsecn+" "+AorP+" "+nday+", "+ntoday+"-"+nmonth+"-"+nyear;
	document.getElementById('clock').innerHTML= nday + ", " + nmonth + " " + ntoday + ", " + nyear + " " + nhours+":"+nmins+":"+nsecn+" "+AorP;
	
	setTimeout('clock()',1000);
}
