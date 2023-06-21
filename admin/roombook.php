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
    if(!isset($_GET["id"]))
    {
         header("location: home.php");
    } else {
        $id = $_GET['id'];
    }
?>

<?php
    $query = "SELECT * FROM phongdat WHERE trangThai = 'Thành công'";
    $result = mysqli_query($con, $query);

    $spring = 5;
    $summer = 5;
    $autumn = 5;
    $winter = 5;

    while($row = mysqli_fetch_array($result)){
        if($row['loaiPhong'] == "Spring Premium Suite"){
            $spring--;
        } else if ($row['loaiPhong'] == "Summer Deluxe") {
            $summer--;
        }else if ($row['loaiPhong'] == "Autumn Chamber") {
            $autumn--;
        }else if ($row['loaiPhong'] == "Winter Suite") {
            $winter--;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/home.css">
    <link rel="stylesheet" href="/assets/css/roombook.css">
</head>

<body>
    <div class="admin__home-wrapper">

        <?php include "header.php"?>

        <div class="admin__home-container d-flex">
            <div class="admin__home-sidebar">
                <a href="home.php">Status</a>
                <a href="#">News Letters</a>
                <a class="active" href="roombook.php">Room Booking</a>
                <a href="payment.php">Payment</a>
                <a href="#">Profit</a>
                <a href="logout.php">Logout</a>
            </div>

            <div class="admin__home-content">
                <div class="admin__home-content-title">
                    Room Booking <?php
                        $date = date("d/m/Y");
                        echo "<span class='date'>$date</span>"
                    ?>
                </div>
                <div class="line"></div>
                <div class="content--container">

                    <!-- Main Table -->
                    <table class="table info-table">
                        <thead>
                            <tr>
                                <th scope="col">THÔNG TIN</th>
                                <th scope="col">CHI TIẾT</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">

                            <?php
                                $query = "SELECT * FROM phongdat WHERE id = $id";
                                $result = mysqli_query($con, $query);
                                $row =  mysqli_fetch_array($result);

                                $loaiPhong = $row['loaiPhong'];
                                $loaiGiuong = $row['loaiGiuong'];


                                if(isset($_POST['confirm'])){
                                    $queryC1 = "UPDATE phong SET maKH = '".$id."' WHERE loaiPhong = '".$loaiPhong."' AND maGiuong = (SELECT maGiuong FROM giuong WHERE loaiGiuong = '".$loaiGiuong."')";
                                    $resultC1 = mysqli_query($con, $queryC1);

                                    $queryC2 = "UPDATE phongdat SET trangThai = 'Thành công' where id = $id";
                                    $resultC2 = mysqli_query($con, $queryC2);

                                    echo "<script>alert('Đã xác nhận đặt phòng thành công!')</script>";
                                    header("location: home.php");
                                }

                                if(isset($_POST['delete'])){
                                    $queryD = "DELETE FROM phongdat WHERE id = $id";
                                    $resultD = mysqli_query($con, $queryD);
                                    header("location: home.php");
                                }
                            ?>

                            <tr>
                                <td>Họ tên</td>
                                <td><?= $row['ho'] . " " . $row['ten']?></td>
                            </tr>
                            <tr>
                                <td>Giới tính</td>
                                <td><?= $row['gioiTinh']?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?= $row['email']?></td>
                            </tr>
                            <tr>
                                <td>Quốc tịch</td>
                                <td><?= $row['quocTich']?></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td><?= $row['SDT']?></td>
                            </tr>
                            <tr>
                                <td>Loại phòng</td>
                                <td><?= $row['loaiPhong']?></td>
                            </tr>
                            <tr>
                                <td>Loại giường</td>
                                <td><?= $row['loaiGiuong']?></td>
                            </tr>
                            <tr>
                                <td>Số phòng</td>
                                <td><?= $row['soPhong']?></td>
                            </tr>
                            <tr>
                                <td>Đặt bữa</td>
                                <td><?= $row['buaAn']?></td>
                            </tr>
                            <tr>
                                <td>Ngày đến</td>
                                <td><?= $row['ngayDen']?></td>
                            </tr>
                            <tr>
                                <td>Ngày đi</td>
                                <td><?= $row['ngayDi']?></td>
                            </tr>
                            <tr>
                                <td>Trạng thái</td>
                                <td><?= $row['trangThai']?></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="d-flex align-items-center justify-content-around">
                                        <form METHOD="POST"><input type="submit" value="Xác nhận" name="confirm"
                                                class="btn btn-primary"></input></form>
                                        <form METHOD="POST"><input
                                                onclick="return confirm('Bạn chắc chắn muốn xóa phòng đặt này?')"
                                                type="submit" value="Xóa" name="delete" class="btn btn-danger"></input>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Avaiable Room Table -->
                    <div class="avaiable-table">
                        <h5 class="available-title">CHI TIẾT PHÒNG TRỐNG</h5>
                        <div class="room">
                            <p>Spring Premium Suite</p>
                            <span class="value"><?= $spring ?></span>
                        </div>
                        <div class="room">
                            <p>Summer Deluxe</p>
                            <span class="value"><?= $summer ?></span>
                        </div>
                        <div class="room">
                            <p>Autumn Chamber</p>
                            <span class="value"><?= $autumn ?></span>
                        </div>
                        <div class="room">
                            <p>Winter Suite</p>
                            <span class="value"><?= $winter ?></span>
                        </div>
                        <div class="room">
                            <p>Tổng cộng</p>
                            <span class="value total"><?= $spring + $summer + $autumn + $winter ?></span>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
    const items = document.querySelectorAll(".admin__home-sidebar a")
    Array.from(items).forEach(item => {
        console.log(item)
        item.onclick = e => {
            document.querySelector(".admin__home-sidebar a.active").classList.remove("active");
            e.target.classList.add("active")
        }
    })
    </script>
</body>

</html>