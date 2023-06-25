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
        $queryPD = "SELECT * FROM phongdat WHERE id = $id";
        $resultPD = mysqli_query($con, $queryPD);
        $PD = mysqli_fetch_array($resultPD);

        $loaiPhong = $PD['loaiPhong'];
        $loaiGiuong = $PD['loaiGiuong'];
        $buaAn = $PD['buaAn'];
        $soNgay = $PD['soNgay'];
        $soPhong = $PD['soPhong'];

        $giaGiuongQ = "SELECT * FROM giuong WHERE loaiGiuong = '".$loaiGiuong."'";
        $giaGiuongR = mysqli_query($con, $giaGiuongQ);
        $row1 = mysqli_fetch_array($giaGiuongR);
        $giaGiuong = $row1['giaGiuong'];

        $maGiuongQ = "SELECT maGiuong FROM giuong WHERE loaiGiuong = '".$loaiGiuong."'";
        $maGiuongR = mysqli_query($con, $maGiuongQ);
        $row2 = mysqli_fetch_array($maGiuongR);
        $maGiuong = $row2['maGiuong'];
        


        $giaPhongQ = "SELECT giaPhong FROM phong WHERE loaiPhong = '".$loaiPhong."' AND maGiuong = '".$maGiuong."'";
        $giaPhongR= mysqli_query($con, $giaPhongQ);
        $row3 = mysqli_fetch_array($giaPhongR);
        $giaPhong = $row3['giaPhong'];



        $giaBuaAnQ = "SELECT giaBuaAn FROM buaan WHERE loaiBuaAn = '".$buaAn."'";
        $giaBuaAnR = mysqli_query($con, $giaBuaAnQ);
        $row4 = mysqli_fetch_array($giaBuaAnR);
        $giaBuaAn = $row4['giaBuaAn'];
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/bill.css">
</head>

<body>
    <div class="bill__container">
        <div class="bill__inner">
            <div class="bill__title">
                HÓA ĐƠN
            </div>

            <div class="hotel__info d-flex align-items-center justify-content-between">
                <div class="hotel__info-desc">
                    <p>SMARANA HANOI HERITAGE</p>
                    <p>Số 5, Ngõ 82/1, Đường Dịch Vọng, Cầu Giấy</p>
                    <p>+84 705 768 103</p>
                    <p>reservation@smarana.vn</p>
                </div>
                <div class="hotel__logo">
                    <img src="/assets/imgs/logo.png" alt="Smarana Hanoi Heritage">
                </div>
            </div>

            <div class="customer__info d-flex align-items-center justify-content-between">
                <span class="customer__name"><?= $PD['ho'] . " " . $PD['ten'] ?></span>
                <table class="sub__table">
                    <tr>
                        <td>Mã khách hàng</td>
                        <td><?= $id?></td>
                    </tr>
                    <tr>
                        <td>Ngày thanh toán</td>
                        <td><?= date("d/m/Y") ?></td>
                    </tr>
                </table>
            </div>

            <table class="bill__detail">
                <tr>
                    <th>Mục thanh toán</th>
                    <th>Thông tin</th>
                    <th>Số ngày</th>
                    <th>Đơn giá</th>
                    <th>Số phòng</th>
                    <th>Thành tiền</th>
                </tr>

                <tr>
                    <td>Phòng</td>
                    <td><?= $PD['loaiPhong'] ?></td>
                    <td><?= $soNgay?></td>
                    <td><?= number_format($giaPhong, 0, ',') ?></td>
                    <td><?= $soPhong?></td>
                    <td><?= number_format($giaPhong * $soNgay * $soPhong  , 0, ',') ?></td>
                </tr>
                <tr>
                    <td>Giường</td>
                    <td><?= $PD['loaiGiuong'] ?></td>
                    <td><?= $soNgay?></td>
                    <td><?= number_format($giaGiuong, 0, ',') ?></td>
                    <td><?= $soPhong?></td>
                    <td><?= number_format($giaGiuong * $soNgay * $soPhong  , 0, ',') ?></td>
                </tr>
                <tr>
                    <td>Đặt bữa</td>
                    <td><?= $PD['buaAn'] ?></td>
                    <td><?= $soNgay?></td>
                    <td><?= number_format($giaBuaAn, 0, ',',) ?></td>
                    <td><?= $soPhong?></td>
                    <td><?= number_format($giaBuaAn * $soNgay * $soPhong  , 0, ',') ?></td>
                </tr>
            </table>

            <table class="bill__payment">
                <tr>
                    <td>Tổng tiền phòng</td>
                    <td><?= number_format(($giaPhong + $giaGiuong + $giaBuaAn) * $soNgay * $soPhong  , 0, ',') ?></td>
                </tr>
                <tr>
                    <td>Tiền thuế GTGT (VAT)</td>
                    <td><?= number_format(($giaPhong + $giaGiuong + $giaBuaAn) * $soNgay * $soPhong * 0.1, 0, ',') ?></td>
                </tr>
                <tr>
                    <td>Đã thanh toán</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Cần thanh toán</td>
                    <td><?= number_format(($giaPhong + $giaGiuong + $giaBuaAn) * $soNgay * $soPhong * 1.1, 0, ',') ?></td>
                </tr>
            </table>

            <div class="hotel__contact">
                <h3 class="contact__title">LIÊN HỆ VỚI CHÚNG TÔI</h3>
                <p>
                <p class="contact__item">Email: <a href="mailto:i3oyhp@gmail.com">i3oyhp@gmail.com</a></p>
                <p class="contact__item">SĐT: <a href="tel:+84 705 768 103">+84 705 768 103</a></p>
                <p class="contact__item">Website: <a
                        href="https://smaranahanoiheritage.com">smaranahanoiheritage.com</a></p>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>