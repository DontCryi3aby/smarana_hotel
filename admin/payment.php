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
    $queryMain = "SELECT * FROM phongdat INNER JOIN phong ON phongdat.id = phong.maKH INNER JOIN giuong ON phongdat.loaiGiuong = giuong.loaiGiuong INNER JOIN buaan ON phongdat.buaAn = buaan.loaiBuaAn WHERE trangThai = 'Thành công'";
    $resultMain = mysqli_query($con, $queryMain);
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
</head>

<body>
    <div class="admin__home-wrapper">

        <?php include "header.php"?>

        <div class="admin__home-container d-flex">
            <div class="admin__home-sidebar">
                <a href="home.php">Status</a>
                <a href="#">News Letters</a>
                <a href="roombook.php">Room Booking</a>
                <a class="active" href="payment.php">Payment</a>
                <a href="#">Profit</a>
                <a href="logout.php">Logout</a>
            </div>

            <div class="admin__home-content">
                <div class="admin__home-content-title">
                    Payment Details
                </div>
                <div class="line"></div>
                <div class="content--container">
                    <table class="table">
                        <tr>
                            <th>Họ tên</th>
                            <th>Loại phòng</th>
                            <th>Loại giường</th>
                            <th>Ngày nhận phòng</th>
                            <th>Ngày trả phòng</th>
                            <th>Số phòng</th>
                            <th>Đặt bữa ăn</th>
                            <th>Tiền thuê phòng</th>
                            <th>Tiền thuê giường</th>
                            <th>Tiền bữa ăn</th>
                            <th>Thuế GTGT (VAT)</th>
                            <th>Tổng tiền</th>
                            <th>In hóa đơn</th>
                        </tr>

                        <?php 
                            while($row = mysqli_fetch_array($resultMain)){
                        ?>

                        <tr>
                            <td><?= $row['ho'] ." ". $row['ten'] ?></td>
                            <td><?= $row['loaiPhong'] ?></td>
                            <td><?= $row['loaiGiuong'] ?></td>
                            <td><?= $row['ngayDen'] ?></td>
                            <td><?= $row['ngayDi'] ?></td>
                            <td><?= $row['soPhong'] ?></td>
                            <td><?= $row['buaAn'] ?></td>
                            <td><?= number_format($row['giaPhong'] * $row['soNgay'] * $row['soPhong'], 0, ",") ?></td>
                            <td><?= number_format($row['giaGiuong'] * $row['soNgay'] * $row['soPhong'], 0, ",") ?></td>
                            <td><?= number_format($row['giaBuaAn'] * $row['soNgay'] * $row['soPhong'], 0, ",") ?></td>
                            <td><?= number_format(($row['giaPhong'] + $row['giaGiuong'] + $row['giaBuaAn']) * $row['soNgay'] * $row['soPhong'] * 0.1, 0, ",") ?></td>
                            <td><?= number_format(($row['giaPhong'] + $row['giaGiuong'] + $row['giaBuaAn']) * $row['soNgay'] * $row['soPhong'] * 1.1, 0, ",") ?></td>
                            
                            <td>
                                <a class="print-btn" href="bill.php?id=<?= $row['id'] ?>">Print</a>
                            </td>
                        </tr>

                        <?php } ?>
                    </table>
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