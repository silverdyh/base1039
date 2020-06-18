<!DOCTYPE html>
<html>
<head>
    <title>會員中心</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style_index.css">
    <link rel="stylesheet" type="text/css" href="../css/style_image.css">
    <link rel="stylesheet" href="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css"> 

    <script type="text/javascript" src="https://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script> 
    <script type="text/javascript" src="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="../js/test.js"></script>
</head>
<body>
    <div class="title">
        <div>
            <img src="../img/logo.jpg" height="100px" style="margin-top: -20px; margin-left: calc(50% - 75px);">
        </div>
    </div>
    <ul>
        <li><a  href="index_login.html">Home</a></li>
        <li><a class="title_active" href="search_login.php">Search</a></li>
        <li style="float: right"><a href="Login.php">Sing out</a></li>
    </ul>
        <br><br><br>
        <div id="img_text1">
        <?php 
        if(!isset($_COOKIE["login"])){
            header("Location:login.php"); //將網址改為要導入的登入頁面
        }
        else{
            $name = $_COOKIE["login"];
            $passowrd = $_COOKIE["pass"];
            include('config.php');
            $sql2 = "SELECT * from member WHERE name = '$name' and id='$passowrd'";//檢測資料庫是否有對應的username和password的sql
            $result2 = mysqli_query($conn, $sql2) or die('MySQL query error');//執行sql
            $rows2=mysqli_fetch_array($result2);
        }
        ?>
        <div class="container"><br><br><br>
            <h2>個人資料</h2>
            <br><br>
            <?php
                echo "<h4>姓名: ";
				echo $rows2['name']."<br><br></h4>";
				echo "<h4>性別 : ";
                if($rows2['Sex']=='M'){
                    echo "男"."<br><br></h4>";
                }
                else if($rows2['Sex']=='F'){
                    echo "女"."<br><br></h4>";
                }
                else {
                    echo "<br><br></h4>";
                }
				echo "<h4>E-mail : ";
                echo $rows2['e_mail']."<br><br></h4>";
                echo "<h4>電話 : ";
                echo $rows2['phone']."<br><br></h4>";
                echo "<h4>地址 : ";
                echo $rows2['address']."<br><br></h4>";
            ?>
            <br><br><br><br>
            <input type="button" value="修改" onclick="self.location.href='mem_change.html'"/>
            <br><br>
           
      </div>
        </div>
</body>
</html>