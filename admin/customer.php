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
        $query = "SELECT * FROM phongdat WHERE id = $id";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
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
    <link rel="stylesheet" href="/assets/css/customer.css">
</head>

<body>
    <div class="bill__container">
        <div class="bill__inner">
            <div class="bill__title">
                THÔNG TIN KHÁCH HÀNG
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
                <span class="customer__name"><?= $row['ho'] . " " . $row['ten'] ?></span>
                <table class="sub__table">
                    <tr>
                        <td>Mã khách hàng</td>
                        <td><?= $id?></td>
                    </tr>
                    <tr>
                        <td>Ngày nhận phòng</td>
                        <td><?= date("d/m/Y", strtotime($row['ngayDen'])) ?></td>

                    </tr>
                    <tr>
                        <td>Ngày trả phòng</td>
                        <td><?= date("d/m/Y", strtotime($row['ngayDi'])) ?></td>
                    </tr>
                </table>
            </div>

            <table class="w-100">
                <tr>
                    <td>Số điện thoại: <?= $row['SDT']?></td>
                    <td>Giới tính: <?= $row['gioiTinh']?></td>
                </tr>
                <tr>
                    <td>Email: <?= $row['email']?></td>
                    <td>Quốc tịch: <?= $row['quocTich']?></td>
                </tr>
            </table>

            <table class="cus-main-table">
                <tr>
                    <th>Đặt phòng</th>
                    <th>Chi tiết</th>
                    <th>Số ngày</th>
                </tr>
                <tr>
                    <td>Loại phòng</td>
                    <td><?= $row['loaiPhong']?></td>
                    <td><?= $row['soNgay']?></td>
                </tr>
                <tr>
                    <td>Loại giường</td>
                    <td><?= $row['loaiGiuong']?></td>
                    <td><?= $row['soNgay']?></td>
                </tr>
                <tr>
                    <td>Đặt bữa</td>
                    <td><?= $row['buaAn']?></td>
                    <td><?= $row['soNgay']?></td>
                </tr>
            </table>

            <div class="hotel__contact">
                <h3 class="contact__title">LIÊN HỆ VỚI CHÚNG TÔI</h3>
                <p>
                <span class="contact__item">Email: <a href="mailto:i3oyhp@gmail.com">i3oyhp@gmail.com</a></span>
                <span class="contact__item">SĐT: <a href="tel:+84 705 768 103">+84 705 768 103</a></span>
                <span class="contact__item">Website: <a
                        href="https://smaranahanoiheritage.com">smaranahanoiheritage.com</a></span>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>