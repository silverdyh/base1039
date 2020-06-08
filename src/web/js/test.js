var vn="Microsoft Internet Explorer";
var some;
if (navigator.appName!=vn)
    some=1900;
else
    some=0;
function montharr(m0, m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11) {
    this[0] = m0;
    this[1] = m1;
    this[2] = m2;
    this[3] = m3;
    this[4] = m4;
    this[5] = m5;
    this[6] = m6;
    this[7] = m7;
    this[8] = m8;
    this[9] = m9;
    this[10] = m10;
    this[11] = m11;
}
function calendar(){
    var monthNames = "JanFebMarAprMayJunJulAugSepOctNovDec";
    var today = new Date();
    var thisDay;
    var monthDays = new montharr(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    year = today.getYear();
    thisDay = today.getDate();
    if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0)) 
        monthDays[1] = 29;
    nDays = monthDays[today.getMonth()];
    firstDay = today;
    firstDay.setDate(1);
    testMe = firstDay.getDate();
    if (testMe == 2) 
        firstDay.setDate(0);
    startDay = firstDay.getDay();
    document.write('<table border="0" cellspacing="0" cellpadding="1" align="center" bgcolor="#999999"><tr><td><table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="dddddd">');
    document.write('<tr><th colspan="7" bgcolor="#ffffff">');
    var dayNames = new Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
    var monthNames = new Array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");
    var now = new Date();
    document.write("<font style=font-size:10pt;Color:#666666>" , "" , " " , now.getYear() + some , "年" , "" , monthNames[now.getMonth()] , "</font>");
    document.writeln('</th></tr><tr><td bgcolor="#666699"align="center"><font style="font-size:8pt;Color:#ffcc99">日</font></td>');
    document.writeln('<td bgcolor="#666699"align="center"><font style="font-size:8pt;Color:#ffcc99">一</font></td>');
    document.writeln('<td bgcolor="#666699"align="center"><font style="font-size:8pt;Color:#ffcc99">二</font></td>');
    document.writeln('<td bgcolor="#666699"align="center"><font style="font-size:8pt;Color:#ffcc99">三</font></td>');
    document.writeln('<td bgcolor="#666699"align="center"><font style="font-size:8pt;Color:#ffcc99">四</font></td>');
    document.writeln('<td bgcolor="#666699"align="center"><font style="font-size:8pt;Color:#ffcc99">五</font></td>');
    document.writeln('<td bgcolor="#666699"align="center"><font style="font-size:8pt;Color:#ffcc99">六</font></td>');
    document.writeln("</tr><tr>");
    column = 0;
    for (i=0; i<startDay; i++) {
        document.writeln("\n<td><font style=font-size:8pt> </font></td>");
        column++;
    }
    for (i=1; i<=nDays; i++) {
        if (i == thisDay) {
        document.writeln('</td><td align="center" bgcolor="#a0c0c0"><font style=font-size:8pt;font-family:Arial;font-weight:;Color:#990000>')
        }
        else {
        document.writeln('</td><td bgcolor="#ffffff" align="center"><font style=font-size:8pt;font-family:Arial;font-weight:;Color:#330066>');
        }
        document.writeln(i);
        if (i == thisDay) document.writeln("</font></td>")
            column++;
        if (column == 7) {
        document.writeln("<tr>"); 
        column = 0;
        }
    }
        document.writeln('<tr><td colspan="7" align="center" valign="middle" bgcolor="#ffffff"><form name="clock" onSubmit="0"><input type="Text" name="face" class="input"></form></td></tr></table></td></tr></table>');
        }
    var timerID = null;
    var timerRunning = false;
    function stopclock () {
        if(timerRunning)
            clearTimeout(timerID);
        timerRunning = false;
        }
        function showtime() {
        var now = new Date()
        var hours = now.getHours()
        var minutes = now.getMinutes()
        var seconds = now.getSeconds()
        var timeValue = ""
        if(hours>=1 && hours <12)
        {timeValue += ("AM ")}
        if(hours>=12 && hours <24)
        {timeValue += ("PM ")}
        if(hours<1)
        {timeValue += ("AM ")}
        timeValue += ((hours > 12) ? hours - 12 : hours)
        timeValue += ((minutes < 10) ? ":0" : ":") + minutes
        timeValue += ((seconds < 10) ? ":0" : ":") + seconds
        document.clock.face.value = timeValue
        timerID = setTimeout("showtime()",1000)
        timerRunning = true
        }
        function startclock ()
        {
        stopclock();
        showtime();
        }

        