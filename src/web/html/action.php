<!DOCTYPE html>
<html>

<head>
    <title>近期活動</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style_index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css"> 
    
    <script src="https://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script> 
    <script src="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>

<body>
  <div class="title">
    <div>
      <img src="../img/logo.jpg" height="100px" style="margin-top: -20px; margin-left: calc(50% - 25px);">
    </div>
  </div>
  <ul>
    <li><a  href="index.html">Home</a></li>
    <li><a  href="news.html">News</a></li>
    <li><a class="title_active" href="search.php">Search</a></li>
    <li style="float: right"><a href="Login.php">Login</a></li>
  </ul>
    <br><br><br>

    <div id="img_text1">
		<div class="container"><br><br><br>
		<h2>館藏查詢</h2>
    <br><br>
    <div>
      <h4>查詢結果 :</h4>
    </div>
      <?php
				if(isset($_POST['MyHead'])) {
					$MyHead=$_POST["MyHead"];
					include('config.php');
					$sql = "SELECT b_id,b_name,b_author FROM books WHERE b_name LIKE '%$MyHead%' OR b_id LIKE '%$MyHead%' OR b_author LIKE'%$MyHead%';";
					$result = mysqli_query($conn, $sql) or die('MySQL query error');
					if($MyHead=="" || $result ==""){
              echo '<br>查無此資料';
              echo '<br><br><br>';
          }
          else {
            while($row = mysqli_fetch_array($result)){
              echo "編號 : ";
              echo $row['b_id']."<p>";
              echo "書名 : ";
              echo $row['b_name']."<p>";
              echo "作者 : ";
              echo $row['b_author']."<p>";
					  }
          }
				}
			?>
                <a href = "search.php"> ← 回上一頁</a> <p>
              </div>
              <br><br>
              <br><br><br><br>
              <br><br>
          </form>
      </div>
    </div>
</body>

</html>
<a href = "index.php"> Go Query Interface</a> <p>
