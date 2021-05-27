<html>
<head>
<title>(Type a title for your page here)</title>
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var strcount
var x 
var x1
var currentTime = new Date()
var month = currentTime.getMonth() + 1
var day = currentTime.getDate()
var year = currentTime.getFullYear()
var hours = currentTime.getHours()
var minutes = currentTime.getMinutes()
var seconds= currentTime.getSeconds()
 x=month + "/" + day + "/" + year
if (minutes < 10){
minutes = "0" + minutes
}
x=x+"  "+hours + ":" + minutes +":"+seconds+ " "
x1=hours + ":" + minutes + ":"+seconds+" "
if(hours > 11){
x=x+"PM"
x1=x1+"PM"
if(x1=="8:21:0 PM"){alert(x1);}
} else {
x=x+"AM"
x1=x1+"AM"
if(x1=="8:16:0 AM"){alert(x1);}
}

<script language="JavaScript">
    var tick;

    function stop() {
        clearTimeout(tick);
    }

    function usnotime() {
        var datetoday = document.getElementById("datenow")
        var currentDate = new Date()
        var day = currentDate.getDate()
        var month = currentDate.getMonth() + 1
        var year = currentDate.getFullYear()
        datetoday.value="" + month + "/" + day + "/" + year + "";

        var txt = document.getElementById("timeticker")

        var ut = new Date();
        var h, m, s;
        var time = "      ";
        h = ut.getHours();
        m = ut.getMinutes();
        s = ut.getSeconds();
        if (s <= 9) s = "0" + s;
        if (m <= 9) m = "0" + m;
        if (h <= 9) h = "0" + h;
        time += h + ":" + m + ":" + s;
        txt.innerHTML = time;
        tick = setTimeout("usnotime()", 1000);
    }
    //--> document.rclock.rtime.value=time;   tick=setTimeout("usnotime()",1000);    }  //-->
	window.onload=function(){
    usnotime();
}
</script>

<tr>
    <td class="tdlabel">Current Time:</td>
    <td>
        <div id="timeticker" name="rtime" size="22"></div>
    </td>
</tr>