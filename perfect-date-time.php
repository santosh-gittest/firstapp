<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="fabinn/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
var c_us_time="1",Aa=new Date,Na=Aa.getDate();
function formatTimestamp(b){var c="am",d=b.getHours(),i=b.getMinutes(),e=b.getDate();b=b.getMonth();var g=d;if(d>11)c="pm";if(d>12)d-=12;if(d==0)d=12;if(d<10)d=d;if(i<10)i="0"+i;var l=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],f="th";if(e==1||e==21||e==31)f="st";else if(e==2||e==22)f="nd";else if(e==3||e==23)f="rd";if(c_us_time!=1){return e!=Na?'<span class="arrowchat_ts">'+g+":"+i+" "+e+f+" "+l[b]+"</span>":'<span class="arrowchat_ts">'+g+":"+i+"</span>"}else{return e!=Na?'<span class="arrowchat_ts">'+d+":"+i+c+" "+e+f+" "+l[b]+"</span>":'<span class="arrowchat_ts">'+d+":"+i+c+"</span>"}}

$(document).ready(function(e) {
alert(formatTimestamp(new Date('1431976245'*1E3)));
});

</script></head>

<body>
</body>
</html>