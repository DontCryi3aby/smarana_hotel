<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location: index.php");
    }
?>

<?php
    include "connect.php";
?>

<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM phong WHERE maPhong = '$id'";
        $result = mysqli_query($con, $query);

        header("location: roomdel.php");
    }
?>