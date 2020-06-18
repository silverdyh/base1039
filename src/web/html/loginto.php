<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style_login.css">
    <link rel="stylesheet" href="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css"> 
</head>

<body>
<?PHP
  header("Content-Type: text/html; charset=utf8");
  if(!isset($_POST["submit"])){
  exit("錯誤執行");
  }//檢測是否有submit操作 
  include('config.php');//連結資料庫
  $name = $_POST['name'];//post獲得使用者名稱錶單值
  $passowrd = $_POST['password'];//post獲得使用者密碼單值
  if ($name && $passowrd){//如果使用者名稱和密碼都不為空
    $sql = "SELECT E_name,E_id from employee WHERE E_name = '$name' and E_id='$passowrd'";//檢測資料庫是否有對應的username和password的sql
    $result = mysqli_query($conn, $sql) or die('MySQL query error');//執行sql
    $rows=mysqli_num_rows($result);

    $sql2 = "SELECT name,id from member WHERE name = '$name' and id='$passowrd'";//檢測資料庫是否有對應的username和password的sql
    $result2 = mysqli_query($conn, $sql2) or die('MySQL query error');//執行sql
    $rows2=mysqli_num_rows($result2);

    if($rows){//0 false 1 true
      setcookie("login",$name, time()+360);
      setcookie("pass",$passowrd, time()+360);
      header("refresh:0;url=change.html");//如果成功跳轉至turn.html頁面
      exit;
    }
    else if($rows2){
      setcookie("login",$name, time()+360);
      setcookie("pass",$passowrd, time()+360);
      header("refresh:0;url=member.php");//如果成功跳轉至member.html頁面
      exit;
    }else{
      echo "<script type='text/javascript'>
      setTimeout('countdown()', 1000);
      
      function countdown() {
      var s = document.getElementById('timer');
      s.innerHTML = s.innerHTML - 1;
      if (s.innerHTML == 0)
      window.location = 'Login.php';
      else
      setTimeout('countdown()', 1000);
      }
      </script>
      <div style='text-align: center'>
      <h1>
        登入失敗<br>系統將於 <span id='timer'>5</span> 秒後，為您自動轉跳。
      </h1>
    </div>"."<a href = 'Login.php'> ← 回上一頁</a> <p>";
    //如果錯誤使用js，5秒後跳轉到登入頁面重試;
    }
  }else{//如果使用者名稱或密碼有空
    echo "<script type='text/javascript'>
    setTimeout('countdown()', 1000);
    
    function countdown() {
    var s = document.getElementById('timer');
    s.innerHTML = s.innerHTML - 1;
    if (s.innerHTML == 0)
    window.location = 'Login.php';
    else
    setTimeout('countdown()', 1000);
    }
    </script>
    
    <div style='text-align: center'>
      <h1 style='margin-top: 8em'>
        登入失敗<br>系統將於 <span id='timer'>5</span> 秒後，為您自動轉跳。
      </h1>
      <a href = 'Login.php'> 點擊回上一頁</a>
    </div>";

  //如果錯誤使用js5，秒後跳轉到登入頁面重試;
  }
  mysqli_close($conn);//關閉資料庫
?>
</body>
</html>