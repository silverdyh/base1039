<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style_login.css">
    <link rel="stylesheet" href="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css"> 

    <script src="https://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script> 
    <script src="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script>
      function error() {
        let t = document.getElementById("pwd").value;
        let s = document.getElementById("account").value;
          if(s == "") {
            document.getElementById('error_alert_1').innerHTML = "請輸入帳號";
          }
          else if(s != ""){
            document.getElementById('error_alert_1').innerHTML = "";
          }
          if (t == "") {
            document.getElementById('error_alert_2').innerHTML = "請輸入密碼";
         }
         else if (t != "") {
            document.getElementById('error_alert_2').innerHTML = "";
         }
         if (s != "" && t != "") {
            window.location.href='loginto.php';
          }
      }
    </script>
</head>

<body>
    <ul id="top">
      <li><a class="title_active" href="index.php">Home</a></li>
      <li><a  href="news.html">News</a></li>
      <li><a  href="search.php">Search</a></li>
      <li style="float: right"><a href="Login.php">Login</a></li>
    </ul>
    
    <form name="login" action="loginto.php" method="post" class="login">
      <h2>登入</h2>
      <div class="form-group">
        使用者名稱 : <br>
        <input class="form-control" id="account" placeholder="輸入帳號" type=text name="name">
        <br><br><br><br>
      </div>
      
      <div class="form-group">
        密碼 : <br>
        <input type=password name="password" class="form-control" id="pwd" placeholder="輸入密碼">
        <br><br>
      </div>
      
      <div style="text-align: center">
      <input type="submit" name="submit" value="登入" id="button">
      <br><br><br><br>
    </div>
    </form>

</body>

</html>