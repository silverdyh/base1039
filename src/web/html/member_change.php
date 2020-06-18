<?PHP
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
    exit("錯誤執行");
    }
    include('config.php');
    
    $select = $_POST['select'];
    $check = $_COOKIE["login"];

    if($_POST['address']){
        $address = $_POST['address'];
        $sql1 = "UPDATE member SET address = '$address' WHERE name = '$check'";
        mysqli_query($conn, $sql1);
    }

    if($select=="1"){
        $sql = "UPDATE member SET Sex = 'M' WHERE name = '$check'";
        mysqli_query($conn, $sql);
    }
    else if($select=="2"){
        $sql = "UPDATE member SET Sex = 'F' WHERE name = '$check'";
        mysqli_query($conn, $sql);
    }
    if($_POST['mail']){
        $mail = $_POST['mail'];
        $sql5 = "UPDATE member SET e_mail = '$mail' WHERE name = '$check'";
        mysqli_query($conn, $sql5);
    }
    if($_POST['phone']){
        $phone = $_POST['phone'];
        $sql4 = "UPDATE member SET phone = '$phone' WHERE name = '$check'";
        mysqli_query($conn, $sql4);
    }
    
    header("Location:member.php");
  mysqli_close($conn);
?>