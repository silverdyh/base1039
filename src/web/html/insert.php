<?php
    include('config.php');
    $select=$_GET['select'];
    $bookname=$_REQUEST["bookname"];
    $bookid=$_REQUEST["bookid"];
    $bookauthor=$_REQUEST["bookauthor"];
    $sql_status = "SELECT * FROM books WHERE b_id = $bookid;";
    $result_status = mysqli_query($conn, $sql_status);
    $row = mysqli_fetch_array($result_status);

    if($select=="1"){
        $sql = "INSERT INTO books (b_id, b_name, b_author, b_status) VALUES ($bookname, $bookid, $bookauthor, '1');";
    }
    elseif($select=="2"){
        $sql = "DELETE FROM books WHERE b_id = $bookid";
    }
    elseif($select=="3"){
        
        if($row[3] == "1"){
            $sql = "UPDATE books SET  b_status = 2 WHERE b_id = $bookid;";
        }
        elseif($row[3] == "2"){
            $sql = "UPDATE books SET  b_status = 1 WHERE b_id = $bookid;";
        }
    }
    $result = mysqli_query($conn, $sql) or die('MySQL query error');
    header("location:change.html");
?>